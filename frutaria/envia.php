<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$para = "exemplofrontend@gmail.com";
$assunto = "Clientes - Mundo das Frutas";

$corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Mensagem: ".$mensagem;

$cabeca = "From: exemplofrontend@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer: PHP/".phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
    header("Location: obrigado.html");
    exit();
} else {
    echo("Houve um erro ao enviar o e-mail!");
}

?>