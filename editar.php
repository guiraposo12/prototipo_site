<?php
include_once('conexao.php');
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title> Sistema de Cadastro de Alunos </title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="css/materialize.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>
<?php

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = "SELECT * FROM tb_alunos WHERE id = '$id'";
		$resultado = mysqli_query ($conexao, $sql);
		$dados = mysqli_fetch_array ($resultado);
	}
?>

	<body background="d9vb238-6c568143-aac1-4324-8619-4ca8fc420cf8.jpg">
		<nav style="background-color:#00CCFF;border-radius: 100px 0px 100px 0px">
    <div class="nav-wrapper" style="background-color:#00CCCC; border-radius: 100px 0px 100px 0px">
      <img src="600px-Immortals_org.png" style="width: 60px; height: 60px;">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="menu.php">MENU</a></li>
      </ul>
    </div>
  </nav6>
	<div class="row">
	<div class="col s12 m6 push-m3">
	<h3 style="color: black;" class="light"> Editar dados </h3>

	<form action="update.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

	<div class="input-field col s12">
	<input style="color: white;" type= "text" name="rm" id="rm" value="<?php echo $dados ['rm']; ?>">
	<label for="rm"> RM </label>
	</div>

	<div class="input-field col s12">
	<input style="color: white;" type= "text" name="nome" id="nome" value="<?php echo $dados ['nome']; ?>">
	<label for="nome"> Nome </label>
	</div>

	<div class="input-field col s12">
	<input style="color: white;" type= "text" name="email" id="email" value="<?php echo $dados ['email']; ?>">
	<label for="email"> E-mail </label>
	</div>

	<div class="input-field col s12">
	<input style="color: white;" type= "text" name="curso" id="curso" value="<?php echo $dados ['curso']; ?>">
	<label for="curso"> Curso </label>
	</div>

	<div class="input-field col s12">
	<input style="color: white;" type= "text" name="responsavel" id="responsavel" value="<?php echo $dados ['responsavel']; ?>">
	<label for="responsavel"> Responsável </label>
	</div>

	<div class="input-field col s12">
	<input style="color: white;" type= "text" name="telefone" id="telefone" value="<?php echo $dados ['telefone']; ?>">
	<label for="telefone"> Telefone </label>
	</div>


	<button type="submit" name="btn-editar" class="btn"> Atualizar </button>



	</form>
	</div>
	</div>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	</body>
</html>


