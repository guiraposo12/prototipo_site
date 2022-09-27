<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/materialize.min.css">
	
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Administrativo</title>
</head>
<body background="csgo.png">
<?php

session_start();

if($_SESSION["autenticado"]=="") header("Location: login.php");
?>
<div class="menu">
<h3 style="color: white;">O que deseja realizar?</h3>
<a href="adicionar_aluno.php" class="btn">Cadastrar</a>
<a href="consulta_aluno.php" class="waves-effect waves-light
btn">Consultar</a>
<a href="consulta_aluno_editar.php" class="waves-effect waves-light btn">Alterar
dados</a>
<a href="consulta_aluno_excluir.php" class="waves-effect waves-light btn">Excluir
dados</a>
<a href="login.php" class="waves-effect waves-light btn">Logout</a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>