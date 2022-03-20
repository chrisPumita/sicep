<?php

//include "../../config/APP.php";
//echo SERVER;

//Load Composer's autoloader
require '../../vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function enviarCorreoPrueba(){
    $to = 'christian.floppy@gmail.com';
    $asunto = "PRUEBA DE CORREO";
    $htmlBody = getMailiTemplateSuscribe();
    $mail = objeMail($to,$asunto,$htmlBody);
    return sendMail($mail);
}


function objeMail($to,$asunto,$htmlBody){
    include_once "../../config/SERVER.php";
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = HOST;                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = USERNAME_MAIL;                     //SMTP username
    $mail->Password = PW_MAIL;                              //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = PORT_MAIL;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom( USERNAME_MAIL,NAME_MAIL);
    $mail->addAddress($to);               //Name is optional

    //Attachments
    //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body = $htmlBody;
    return $mail;
}

function sendMail($mail){
    try {
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Error al enviar el correo<br>: {$mail->ErrorInfo}";
        return false;
    }
}

function getMailiTemplateAlerta(){
    return '
<table cellpadding="0" cellspacing="0" border="0" style="padding:0;margin:0 auto;width:100%;max-width:620px">
  <tbody>
    <tr>
      <td colspan="3" style="padding:0;margin:0;font-size:1px;height:1px" height="1">&nbsp;</td>
    </tr>
    <tr>
      <td style="padding:0;margin:0;font-size:1px">&nbsp;</td>
      <td style="padding:0;margin:0" width="590">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody>
            <tr style="background-color:#fff">
              <td style="padding:11px 15px 8px 15px">
                <a href="http://xaman-ha.cuautitlan.unam.mx/proyectoenlinea/" title="Mercado Pago" target="_blank" data-saferedirecturl="">
                  <img alt="SICEP" border="0" width="125" src="https://reckreastudios.com/proyectos/sicep/assets/images/mail/logo.png" class="CToWUd">
                </a>
              </td>
              <td style="padding:11px 23px 8px 15px;float:right;font-size:12px;font-weight:300;line-height:1;color:#666;font-family:Helvetica,Arial,sans-serif">
                <p style="float:right">USERNAME</p>
              </td>
            </tr>
          </tbody>
        </table>
        <table bgcolor="#1e3f73" width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td align="center" style="display:none">
                <img width="90" style="width:90px;text-align:center">
              </td>
            </tr>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td  style="padding:63px 33px;text-align:center" align="center">
                <span style="font-family:Helvetica,Arial,sans-serif;font-size:26px;font-weight:400;color:#CDAC12;overflow:hidden;text-decoration:none;line-height:1.2">
                Christian Rene, Bienvenido a SICEP</span>
              </td>
            </tr>
            <tr>
              <td style="text-align:center;padding:0">
                <div width="78.2% !important" style="width:77.8%!important;margin:0 auto;background-color:#CDAC12;display:none">
                  <div style="height:50px;margin:0 auto">&nbsp;</div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div style="text-align:center;margin:0 auto">
          <table  bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="border:none;padding:48px 33px 0;text-align:center">
            <tbody>
              <tr>
                <td align="center">
                  <div>
                    <p style="margin:0;color:#666;font-size:18px">Fecha</p>
                    <p style="margin:0;color:#333;font-size:18px;font-weight:600">Hoy a las&nbsp;14:45&nbsp;hs.</p>
                    <p style="margin:10px 0 0 0;color:#666;font-size:18px">Dispositivo y navegador </p>
                    <p style="margin:0;color:#333;font-size:18px;font-weight:600">Windows 10,&nbsp;Chrome </p>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <table  align="center" width="200" border="0" cellpadding="0" cellspacing="0" style="border-radius:4px;height:48px;width:240px;table-layout:fixed;margin:32px auto">
                    <tbody>
                      <tr>
                        <td style="border-radius:4px;height:30px;font-family:Helvetica,Arial,sans-serif" bgcolor="#1e3f73">
                          <a href="http://xaman-ha.cuautitlan.unam.mx/proyectoenlinea/login.php" style="padding:10px 3px;display:block;font-family:Arial,Helvetica,
                          sans-serif;font-size:16px;color:#fff;text-decoration:none;text-align:center" target="_blank" >Iniciar Sesión</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <p style="text-decoration:none;font-family:Arial,Helvetica,sans-serif;text-align:center;line-height:16px;max-width:390px;width:100%;margin:0 auto 0;font-size:14px;color:#999">Si fuiste tú, ignora este e-mail.</p>
                  <p style="text-decoration:none;font-family:Arial,Helvetica,sans-serif;text-align:center;line-height:16px;max-width:390px;width:100%;margin:0 auto 44px;font-size:14px;color:#999">¿No estás seguro? Te recomendamos 
                  <a href="#" style="color:#1e3f73;text-decoration:none" target="_blank">cambiar&nbsp;la&nbsp;clave</a>. </p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" style="text-align:center;background-color:#fff!important">
          <tbody>
            <tr style="background-color:#fff!important">
              <td colspan="3" align="center" height="48"></td>
            </tr>
            <tr style="background-color:#fff">
              <td colspan="3" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;font-weight:300;line-height:1.08;text-align:center;color:#999">
              ¿Necesitas ayuda? <a href="#" style="text-decoration:none;font-weight:400;color:#1e3f73" target="_blank">Contáctanos</a>
              </td>
            </tr>
            <tr style="background-color:#fff">
              <td colspan="3" align="center" height="48"></td>
            </tr>
          </tbody>
        </table>
      </td>
      <td style="padding:0;margin:0;font-size:1px">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" style="padding:0;margin:0;font-size:1px;height:1px" height="1">&nbsp;</td>
    </tr>
  </tbody>
</table>';
}

function getMailiTemplateSuscribe(){
    return '
<table cellpadding="0" cellspacing="0" border="0" style="padding:0;margin:0 auto;width:100%;max-width:620px">
  <tbody>
    <tr>
      <td colspan="3" style="padding:0;margin:0;font-size:1px;height:1px" height="1">&nbsp;</td>
    </tr>
    <tr>
      <td style="padding:0;margin:0;font-size:1px">&nbsp;</td>
      <td style="padding:0;margin:0" width="590">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody>
            <tr style="background-color:#fff">
              <td style="padding:11px 15px 8px 15px">
                <a href="http://xaman-ha.cuautitlan.unam.mx/proyectoenlinea/" title="Mercado Pago" target="_blank" data-saferedirecturl="">
                  <img alt="SICEP" border="0" width="125" src="https://reckreastudios.com/proyectos/sicep/assets/images/mail/logo.png" class="CToWUd">
                </a>
              </td>
              <td style="padding:11px 23px 8px 15px;float:right;font-size:12px;font-weight:300;line-height:1;color:#666;font-family:Helvetica,Arial,sans-serif">
                <p style="float:right">USERNAME</p>
              </td>
            </tr>
          </tbody>
        </table>
        <table bgcolor="#1e3f73" width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td align="center" style="display:none">
                <img width="90" style="width:90px;text-align:center">
              </td>
            </tr>
            <tr>
              <td height="0"></td>
            </tr>
            <tr>
              <td  style="padding:63px 33px;text-align:center" align="center">
                <span style="font-family:Helvetica,Arial,sans-serif;font-size:26px;font-weight:400;color:#CDAC12;overflow:hidden;text-decoration:none;line-height:1.2">
                Christian René, Bienvenido a SICEP</span>
              </td>
            </tr>
            <tr>
              <td style="text-align:center;padding:0">
                <div width="78.2% !important" style="width:77.8%!important;margin:0 auto;background-color:#CDAC12;display:none">
                  <div style="height:50px;margin:0 auto">&nbsp;</div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <table  width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td align="center" valign="middle" style="padding:0px 25px 25px 25px">
                      <table cellpadding="0" cellspacing="0" border="0" align="left" style="max-width:250px" role="presentation">
                        <tbody>
                          <tr>
                            <td align="center" valign="middle">
                              <table cellpadding="0" cellspacing="0" border="0" align="center" role="presentation">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="middle" style="padding:0px 0px 0px 0px" class="m_5511229444300126306padbot20">
                                      <img src="https://plataformavirtual.upea.bo/pluginfile.php/25169/course/overviewfiles/IMAGEN%20FINAL.png" width="250" height="auto" border="0" style="display:block;text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:12px;color:#0c0c0d;height:auto;max-height:250px">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table cellpadding="0" cellspacing="0" border="0" align="right" style="max-width:250px" role="presentation">
                        <tbody>
                          <tr>
                            <td align="center" valign="middle" height="auto"style="padding:0px 20px 25px 20px;height:auto;vertical-align:middle">
                              <table cellpadding="0" cellspacing="0" border="0" align="center" width="250" style="min-width:250px" role="presentation">
                                <tbody>
                                  <tr>
                                    <td align="left" valign="middle" width="250" style="padding-bottom:20px">
                                      <h4 style="margin:0px;font-family:Helvetica,Arial,sans-serif;font-weight:normal;font-size:24px;line-height:1.3;color:#0c0c0d">
                                          NOMBRE DEL CURSO
                                      </h4>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="middle" style="padding-bottom:20px">
                                      <p style="margin:0px;font-family:Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;color:#0c0c0d">
                                            lorem moremomocs c lorem ipsum dolor sit amet, consectet
                                      </p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="middle" style="font-family:Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;font-weight:bold;color:#0070ba;padding:0px 0px 20px 0px" class="m_5511229444300126306padbot20">
                                      <a href="#" style="color:#1072eb;text-decoration:none" title="Pide ya" target="_blank">Inciar Ahora</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
            </tr>
        </table>
        <div style="text-align:center;margin:0 auto">
          <table  bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="border:none;padding:10px 10px 0;text-align:center">
            <tbody>
              <tr>
                <td align="center">
                  <div>
                    <p style="margin:0;color:#666;font-size:18px">Fecha</p>
                    <p style="margin:0;color:#333;font-size:18px;font-weight:600">Hoy a las&nbsp;14:45&nbsp;hs.</p>
                    <p style="margin:10px 0 0 0;color:#666;font-size:18px">Dispositivo y navegador </p>
                    <p style="margin:0;color:#333;font-size:18px;font-weight:600">Windows 10,&nbsp;Chrome </p>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <table  align="center" width="200" border="0" cellpadding="0" cellspacing="0" style="border-radius:4px;height:48px;width:240px;table-layout:fixed;margin:32px auto">
                    <tbody>
                      <tr>
                        <td style="border-radius:4px;height:30px;font-family:Helvetica,Arial,sans-serif" bgcolor="#1e3f73">
                          <a href="http://xaman-ha.cuautitlan.unam.mx/proyectoenlinea/login.php" style="padding:10px 3px;display:block;font-family:Arial,Helvetica,
                          sans-serif;font-size:16px;color:#fff;text-decoration:none;text-align:center" target="_blank" >Iniciar Sesión</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td align="center">
                  <p style="text-decoration:none;font-family:Arial,Helvetica,sans-serif;text-align:center;line-height:16px;max-width:390px;width:100%;margin:0 auto 0;font-size:14px;color:#999">Si fuiste tú, ignora este e-mail.</p>
                  <p style="text-decoration:none;font-family:Arial,Helvetica,sans-serif;text-align:center;line-height:16px;max-width:390px;width:100%;margin:0 auto 44px;font-size:14px;color:#999">¿No estás seguro? Te recomendamos 
                  <a href="#" style="color:#1e3f73;text-decoration:none" target="_blank">cambiar&nbsp;la&nbsp;clave</a>. </p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" style="text-align:center;background-color:#fff!important">
          <tbody>
            <tr style="background-color:#fff!important">
              <td colspan="3" align="center" height="48"></td>
            </tr>
            <tr style="background-color:#fff">
              <td colspan="3" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;font-weight:300;line-height:1.08;text-align:center;color:#999">
              ¿Necesitas ayuda? <a href="#" style="text-decoration:none;font-weight:400;color:#1e3f73" target="_blank">Contáctanos</a>
              </td>
            </tr>
            <tr style="background-color:#fff">
              <td colspan="3" align="center" height="48"></td>
            </tr>
          </tbody>
        </table>
        
      </td>
      <td style="padding:0;margin:0;font-size:1px">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" style="padding:0;margin:0;font-size:1px;height:1px" height="1">&nbsp;</td>
    </tr>
  </tbody>
</table>
';
}
