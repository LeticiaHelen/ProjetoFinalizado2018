<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"></script>
	<link rel="shortcut icon" href="imagens/logopreto.png" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="semantic/semantic.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<link rel="stylesheet" type="text/css" href="css/principal.css">
	<title>Read.</title>
	<meta charset="UTF-8">
</head>
<body class="cor_menu3">
	<div class="fundo3 limite espacocadastro">
		<div class="label formatacaoletra black">Deslogando</div>
		<div class="ui indicating progress" data-value="4" data-total="5" id="example4">
			<div class="bar">
				<div class="progress"></div>
			</div>
		</div>
	</div>
	<meta http-equiv="refresh" content="1;URL=index.php">
<br>
<center><h2>Tchau  
	<?php 
	echo $_SESSION['nome']."</h2></center> ";
	$_SESSION['logado']=0;
	?>
