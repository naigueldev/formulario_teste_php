<?php

$to       = 'suportecriativitta1@gmail.com';
$subject  = $_POST['form-subject'];
$from  = $_POST['form-email'];
$message  = nl2br("
===============================\r\n
WWW.DOMINIO.COM.BR \r\n
===============================\r\n
De: ".$from."\r\n
Para: ".$to."\r\n
Assunto: ".$subject."\r\n
Mensagem: ".$_POST['form-message']);


$headers  = 'From: '."$from". "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();


if(mail($to, $subject, $message, $headers))
    $resposta = "Email Enviado";
else
    $resposta = "Email NÃO enviado";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Simple PHP Contact Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
  <?php if($resposta == "Email Enviado"): ?>
    <div class="jumbotron">
      <div class="container">
        <h1><?php print "Sua mensagem foi enviada para $to"; ?></h1>
      </div>
    </div>
  <?php else: ?>
    <div class="jumbotron">
      <div class="container">
        <h1><?php print "Sua mensagem NÃO PODE ser enviada"; ?></h1>
      </div>
    </div>
  <?php endif; ?>

</body>
</html>
