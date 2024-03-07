<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $tel = $_POST['phone'];
    $assunto = $_POST['assunto'];

    $destinatario = "sofhia.dias@etec.sp.gov.br";
    $assunto = "site devtour";
    $corpo = "Nome: ".$name."\n"."Email: ".$email."\n"."Telefone: ".$tel."/n"."Assunto: ".$assunto."/n"."Message: ".$message;

    $cabecalho = "From: rhuan.figueira@etec.sp.gov.br"."\n"."Replay-to: ".$email."\n"."X=mailer:PHP/".phpversion();

    echo("Email enviado com sucesso!")
?>