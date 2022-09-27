<?php
include_once 'conexao.php';
if(isset($_GET['id'])) {
   $id = $_GET['id'];
}

$sql = "DELETE FROM tb_alunos WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
	if($resultado){
	echo "Registro excluido com sucesso!";
	header ('Location: consulta_aluno.php');
	}

	else
	{
		die('Não foi possível excluir: ' . mysqli_error($conexao));
		#header('Location: consulta_aluno.php')
	}

?>