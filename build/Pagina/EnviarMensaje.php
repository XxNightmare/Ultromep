<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $Asunto = $_POST['Asunto'];
    $Correo = $_POST['Correo_electronico'];
    $Mensaje = $_POST['Mensaje'];
    $body = "Correo: {$Correo} <br> Mensaje: {$Mensaje}";

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();
    
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->Host       = 'mail.valere.mx';                     //Set the SMTP server to send through
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'baalsf@valere.mx';                     //SMTP username
        $mail->Password   = 'vaogyd6pqh';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        

        //Recipients
        $mail->setFrom('baalsf@valere.mx');
        $mail->addAddress('rotero@valere.mx');     //Add a recipient

        //Content
        $mail->isHTML();                                  //Set email format to HTML
        $mail->Subject = $Asunto;
        $mail->Body    = $body;
        
        $mail->send();
    } catch (Exception $e) {
        echo $mail->ErrorInfo;
    }
?>

<script type="text/javascript">
    window.location.href = "../../";
</script>