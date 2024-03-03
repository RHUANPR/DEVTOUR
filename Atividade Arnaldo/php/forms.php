<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $destinatario = "sofhia.dias@etec.sp.gov.br";
    $assunto = "site devtour";
    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Message: ".$message;

    $cabecalho = "From: rhuan.figueira@etec.sp.gov.br"."\n"."Replay-to: ".$email."\n"."X=mailer:PHP/".phpversion();

    if(mail($destinatario, $assunto, $corpo, $cabecalho)){
        echo ("E-mail enviado com sucesso!");
    } else{
        echo ("E-mail não foi enviado");
    }

?>