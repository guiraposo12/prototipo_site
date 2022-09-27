<!DOCTYPE html>
<html>
<head>
<title>Administrativo</title>
<link rel="stylesheet" href="css/bootstrap.css" media="screen">
<link rel="stylesheet" href="css/materialize.min.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<script src="http://code.jquery.com/jquery-later.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body background="immortals.jpg">
<div class="container">
<br>
<h1 align="center" style="color: white">Acesso Restrito </h1>
<br><br>
</div>
<form class="form-horizontal" method="post" action="autentica.php" >
<fieldset>
<div class="form-group">

<label style="color: white" class="col-md-4 control-label" for="textinput">Usuário:</label>
<div class="col-md-4">
<input style="color: white" id="textinput" name="usuario" type="text" placeholder="Usuario" class="formcontrol
input-md">
</div>
</div>
<div class="form-group">
<label style="color: white" class="col-md-4 control-label" for="senha">Senha:</label>
<div class="col-md-4">
<input style="color: white" id="senha" name="senha" type="password" placeholder="******" class="formcontrol
input-md">

</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="reset"></label>
<div class="col-md-8">
<button id="login" name="login" class="btn btn-success">Autentica </button>

</div>
</div>
<fieldset>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>
