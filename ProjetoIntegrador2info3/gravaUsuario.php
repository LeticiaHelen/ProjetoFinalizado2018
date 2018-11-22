<?php
$infos=[];
$infos=$_POST;
$abrir=fopen('usuarios.csv', 'a+');
$arquivo=file('usuarios.csv');
$virgula=";";
$prim="\n".$infos['primeiroNome'];
$prim.=$virgula.$infos['ultimoNome'];
$prim.=$virgula.$infos['idade'];
$prim.=$virgula.$infos['email'];
$prim.=$virgula.$infos['nomeusuario'];
$prim.=$virgula.$infos['password'].$virgula;
fwrite($abrir, $prim);
fclose($abrir);
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
		<div class="label formatacaoletra">Cadastrando</div>
		<div class="ui indicating progress" data-value="4" data-total="5" id="example4">
			<div class="bar">
				<div class="progress"></div>
			</div>
		</div>
	</div>
	<meta http-equiv="refresh" content="1;URL='login.php" />
</body>