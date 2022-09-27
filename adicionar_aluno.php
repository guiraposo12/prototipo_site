
<html>
<head>

	<title>SISTEMA DE CADASTRO DE ALUNOS</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<style>
td {color:white;}

</style>
</head>

<body background="84Jknv.png">
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
			<h3 class="light">NOVO ALUNO</h3>
			<form action="cadastro_aluno.php" method="POST">
			 

				<div class="input-field col s12">
					<input type="text" name="txtrm" id="rm" style="color:white;">
					<label for="rm">RM</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="txtnome" id="nome" style="color:white;">
					<label for="nome">NOME</label>	
				</div>

				<div class="input-field col s12">
					<input type="text" name="txtemail" id="email" style="color:white;">
					<label for="email">EMAIL</label>	
				</div>


				<div class="input-field col s12">
					<input type="text" name="txtcurso" id="curso" style="color:white;">
					<label for="curso">CURSO</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="txtresponsavel" id="responsavel" style="color:white;">
					<label for="responsavel">RESPONSAVEL</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="txttelefone" id="telefone" style="color:white;">
					<label for="telefone">TELEFONE</label>
				</div>

				<button type="submit" name="btncadastrar" class="btn">CADASTRAR</button>

		
				
			</form>
		</div>
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


</body>
</html>