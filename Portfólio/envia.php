<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $destino = "nicolasdelimapinheiro@gmail.com";
    $assunto = "Dúvidas";


    $mensagem = addslashes($_POST['mensagem']);
    $informacoes = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;



    $cabeca = "From: teste@gmail.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();


    if(mail($destino,$assunto,$informacoes,$cabeca)){
        echo("Email enviado com sucesso!");

    }else{
        echo("Houve um erro ao enviar o email");
    }

?>