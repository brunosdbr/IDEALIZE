<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$fone = addslashes($_POST['fone']);
$mensagem = addslashes($_POST['message']);


$to = "brunosdbr@hotmail.com";
$subject = "Contato - Formulario teste";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Fone: ".$telefone."\r\n".
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