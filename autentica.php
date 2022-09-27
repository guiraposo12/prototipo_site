<meta charset="utf-8">
<?php

session_start();

include_once "conectar.php";

if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
header("Location: login.php"); exit;
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "select * from usuarios where usuario ='$usuario' and senha ='$senha'";

$resultado = @mysqli_query($conexao, $sql);

$linhas = mysqli_num_rows($resultado);

if($linhas==0)
header("Location: login.php");
else{
$_SESSION["autenticado"]="rfc822_allowed";
$_SESSION["login"]=$usuario;
header("Location: menu.php");}
?>