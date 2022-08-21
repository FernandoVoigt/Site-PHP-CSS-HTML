<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

$nome = $_POST['nome'];
$assunto = $_POST['assunto'];
$email= $_POST['email'];
$texto= $_POST['texto'];
$mensagem= 'Nome:' . $nome . '</br>' .
			'E-mail' . $email . '</br>' . 
			'Assunto' . $assunto . '</br>' .
			$texto;

$para= "fe.voigt17@hotmail.com";

$headers = "Content-Type:text/html; charset=UTF-8\n"; 
$headers .= "From: dominio.com.br<sistema@dominio.com.br>\n"; 
$headers .= "X-Sender: <sistema@dominio.com.br>\n"; 
$headers .= "X-Mailer: PHP v".phpversion()."\n"; 
$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n"; 
$headers .= "Return-Path: <sistema@dominio.com.br>\n"; 
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);


?>

</body>
</html>