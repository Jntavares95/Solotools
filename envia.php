<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$tel = addslashes($_POST['telefone']);
$msg = addslashes($_POST['mensagem']);

$para = "jntavares95@gmail.com";
$assunto = "NOVO LEAD - SOLOTOOLS";

$corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

$cabeca = "From: jnsjoga10@gmail.com"."\n"."Reply-to: ".$email."\n"."X=mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("Forumulario enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o formulario!");
}
?>  