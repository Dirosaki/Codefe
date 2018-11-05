<?php

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $visit_email = $_POST['mail'];
    $assunto = $_POST['assunto'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $email_from = "diegodirosaki@gmail.com";

    $email_body = 
    "Nome: $nome.\n".
    "Sobrenome: $sobrenome.\n".
    "Email: $visit_email.\n".
    "Telefone: $telefone.\n".
    "Assunto: $assunto.\n".
    "Mensagem: $mensagem.\n";

    $to = "contato@codefe.com.br";

    $headers = "From: $email_from \r\n";

    // $headers2 = "Reply-To: $visit_email \r\n";

    mail($to, $assunto, $email_body, $headers);

    header("Location: contato.html");

?>