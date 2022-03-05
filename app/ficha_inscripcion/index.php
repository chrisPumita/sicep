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
        $ficha = confirmaMatchSolicitudAlumno($idAsig,$idAlumno);
        if (count($ficha)>0)
        {
            var_dump($ficha);
            /*
            
            
            */
            require_once '../../vendor/autoload.php';
            include_once '../control/control_fichas_pdf.php';
            $mpdfConfig = array(
                'mode' => 'utf-8',
                'format' => 'letter',    // format - A4, for example, default ''
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
            $plantilla = getBodyFicha($idAsig);
            $css = file_get_contents('../../assets/css/ficha_style.css');
            $mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
            $mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
            $mpdf->SetTitle("Ficha de Inscripcion");
            $mpdf->SetAuthor('CHRIS');
            $mpdf->SetProtection(array('copy', 'print'), '', 'MyPassword');
        //    $mpdf->Output('ficha_inscripcion.pdf', 'I');
        }
        else
        {
           echo "El archivo no es tuyo";
        }
    } else {
        header('Location: ../');
    }
}
