<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$phone = addslashes($_POST['phone']);
$mensagem = addslashes($_POST['message']);

$to = "brunosdbr@hotmail.com";
$subject = "Contato - Formulario teste";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Phone: ".$phone."\r\n".
        "Mensagem: ".$mensagem;
$header = "From:brunosdbr@gmail.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso");
}else{
    echo("O Email não pode ser enviado");
}

}


?>