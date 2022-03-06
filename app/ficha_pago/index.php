<?php
//include "ficha_inscripcion.php";
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../');
} else {
    if (isset($_POST['id'])) {
        $idAsig = $_POST['id'];
        $idAlumno = $_SESSION['id_alumno'];
        include_once "../control/controlInscripciones.php";
        $ficha = confirmaMatchSolicitudAlumno($idAlumno,$idAsig,99);
        if (count($ficha)>0)
        {
            require_once '../../vendor/autoload.php';
            include_once '../control/control_fichas_pdf.php';
            $mpdfConfig = array(
                'mode' => 'utf-8',
                'format' => 'LETTER',    // format - A4, for example, default ''
                'default_font_size' => 0,     // font size - default 0
                'default_font' => '',    // default font family
                'margin_left' => 0,        // 15 margin_left
                'margin_right' => 0,        // 15 margin right
                'margin_top' => 0,
                // 'mgt' => $headerTopMargin,     // 16 margin top
                // 'mgb' => $footerTopMargin,    	// margin bottom
                'margin_header' => 0,     // 9 margin header
                'margin_footer' => 0,     // 9 margin footer
                'orientation' => 'P'    // L - landscape, P - portrait
            );
            $mpdf = new \Mpdf\Mpdf($mpdfConfig);
            $plantilla = getBodyFichaPago($ficha[0]);
            $css = file_get_contents('../../assets/css/ficha_style.css');
            $mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
            $mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
            $mpdf->SetTitle("Ficha de PAGO de inscripcion");
            $mpdf->SetAuthor('CHRIS RCSG');
            $mpdf->SetProtection(array('copy', 'print'), '', 'MyPassword');
            $mpdf->Output('ficha_PAGO_inscripcion.pdf', 'I');
        }
        else
        {
            echo 'EL ARCHIVO NO COINCIDE CON EL DEL ALUMNO, PORFAVOR INICIA SESION Y VUELVE A INTENTARLO.<BR>ERROR 300';
        }
    } else {
        header('Location: ../');
    }
}
