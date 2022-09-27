<?php
include_once ('conexao.php');

	
	$rm = $_POST['txtrm'];
	$nome = $_POST['txtnome'];
	$email = $_POST['txtemail'];
	$curso = $_POST['txtcurso'];
	$responsavel = $_POST['txtresponsavel'];
	$telefone = $_POST['txttelefone'];

	$sql = "insert into tb_alunos (rm, nome,email, curso, responsavel, telefone) values ('$rm', '$nome','$email', '$curso', '$responsavel', '$telefone')";

	$resultado = @mysqli_query($conexao, $sql);
	if ($resultado) {
		echo "Dados inseridos no banco com sucesso!";
		header('Locantion adicionar_aluno.php');
	}
	else {
		die('Não inseriu: ' . @mysqli_error($conexao));
		header('Locantion consulta05.php');
	}
mysqli_close($conexao);


?>