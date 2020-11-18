<?php
    $to      = 'felipethomas82@gmail.com';
    $subject = 'Teste de envio de e-mail';
    $message = 'Olá, este é um teste de envio de e-mail pelo PHP';
    $headers = 'From: contato@mail.com' . "\r\n" .
        'Reply-To: contato@mail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $enviou = mail($to, $subject, $message, $headers);
    if ($enviou) {
        echo "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    }
?>
