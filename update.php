<?php
include_once('conexao.php');

if(isset($_POST['btn-editar'])) {
	 $rm = $_POST['rm'];
	 $nome = $_POST['nome'];
	 $email = $_POST['email'];
	 $responsavel = $_POST['responsavel'];
	 $telefone = $_POST['telefone']; 
	 $id = $_POST['id'];  

	 $sql = "UPDATE tb_alunos SET rm = '$rm', nome = '$nome', email = '$email', responsavel = '$responsavel', telefone = '$telefone' WHERE id = '$id'";

	 if(mysqli_query($conexao, $sql)){
	 	echo "atualizado com sucesso";
	 	header ('location: consulta_aluno_editar.php');
	 }
	 else{
	 	echo "erro ao atualizar";
	 	#header ('location: consulta02.php');
	 }
}
?>