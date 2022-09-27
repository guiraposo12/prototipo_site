<?php
include_once ('conexao.php');
?>

<html>
<head>

	<meta charset="utf-8">
	<title>Sistema de Cadastro de alunos</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet"  href="css/materialize.min.css">

	<meta name="viewport" content="width=device-width, initial-scaled=1.0"/>

</head>

<body background="Immortals-Fan-Art-By-Rabow.png">
<nav style="background-color:#00CCFF;border-radius: 100px 0px 100px 0px">
    <div class="nav-wrapper" style="background-color:#00CCCC; border-radius: 100px 0px 100px 0px">
      <img src="600px-Immortals_org.png" style="width: 60px; height: 60px;">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="menu.php">MENU</a></li>
      </ul>
    </div>
  </nav6>



<div class="row">
	<div class="col s12 m8 push-m2">
	<h3 class="light" style="color: black;"> Alunos Cadastrados </h3>
	<table class="striped"> 
		<tr>   
			<th> ID    </th>
			<th> RM </th>
			<th> NOME </th>
			<th> EMAIL   </th>
			<th> CURSO  </th>
			<th> RESPONSAVEL   </th>
			<th> TELEFONE   </th>
<tbody>
<?php
	include_once ('conexao.php');

	$sql 		= "SELECT * FROM tb_alunos";
	$resultado	= mysqli_query($conexao, $sql);

	if (mysqli_num_rows($resultado)>0){
	
 while ($dados = mysqli_fetch_array($resultado))

{
	?>
	<tr>
		<td><?php echo $dados['id']; ?></td>
		<td><?php echo $dados['rm']; ?></td>
		<td><?php echo $dados['nome']; ?></td>
		<td><?php echo $dados['email']; ?></td>
		<td><?php echo $dados['curso']; ?></td>
		<td><?php echo $dados['responsavel']; ?></td>
		<td><?php echo $dados['telefone']; ?></td>
	</tr>
	<?php	
}
}
	?>


</tbody>
</table>
<br>


</div>
</div>
</body>
</html>