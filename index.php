

<!DOCTYPE html>
<html>
<head>
  <title>Simple PHP Contact Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
  <div class="jumbotron">
    <div class="container">
      <h1>Teste Formulário de Contato com PHP</h1>
      <p>PHP, HTML5, <strike>jQuery</strike>JavaScript para browsers que não suportam HTML5 na validação.</p>
    </div>
  </div>

<div class="col-md-6 col-md-offset-3">
  <form action="form_contato.php" id="contact-form" class="form-horizontal" method="post">
    <div class="form-group">
      <label for="form-name" class="col-lg-2 control-label">Nome:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nome..." required>
      </div>
    </div>
    <div class="form-group">
      <label for="form-email" class="col-lg-2 control-label">Email:</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="E-mail..." required>
      </div>
    </div>
    <div class="form-group">
      <label for="form-phone" class="col-lg-2 control-label">Fone:</label>
      <div class="col-lg-10">
        <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="(__)_____-____">
      </div>
    </div>
    <div class="form-group">
      <label for="form-subject" class="col-lg-2 control-label">Assunto:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="Assunto..." required>
      </div>
    </div>
    <div class="form-group">
      <label for="form-message" class="col-lg-2 control-label">Mensagem:</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="Mensagem..." required></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript" src="public/js/contact-form.js"></script>
<script type="text/javascript">
new ContactForm('#contact-form');
</script>
</body>
</html>
