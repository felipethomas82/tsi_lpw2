<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require_once __DIR__ . '/vendor/autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $mail->IsSMTP();

        //configuração do gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "587";
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "seuemail@dominio.com";
        $mail->Password = "suasenha";
        $mail->setFrom("seuemail@dominio.com", "SEU NOME");
        // $mail->SingleTo = true; 

        $mail->addAddress("outroemail@gmail.com"); // email do destinatario.

        $mail->Subject = "Aqui vai o assunto do email, pode vim atraves de variavel."; 
        $mail->Body = "Aqui vai a mensagem, que tambem pode vim por variavel.";

        if(!$mail->Send())
            echo "Erro ao enviar Email:" . $mail->ErrorInfo;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>