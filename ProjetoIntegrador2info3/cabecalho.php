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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Read.</title>
	<meta charset="UTF-8">
	<style type="text/css">
	.item{
		width: 9.5%;
	}
	.espaco_menu{
		width: 15%;
		color: white;
	}
	.pesquisa{
		width: 15% !important;
	}
</style>
</head>
<body class="cor_menu2">
	<?php
	include "funcoes.php";
	?>
	<div class="ui menu cor_menu ">
		<a class="item tit" href="index.php">
			<div>
				<h3 class="cor_letra">Read.</h3>
			</div>
		</a>
		<a class="item tit" href="index.php">
			<h5 class="cor_letra tit">Home</h5>
		</a>
		<div class="ui pointing dropdown link item white dorp tit3">
			<div class="aqui">
				<span class="text cor_letra">Ranking<i class="dropdown icon inverted"></i></span>
				
			</div>
			
		
			<div class="menu">
				<br>
				<a href="logica_ranking.php" class="item">Geral</a>
				<a href="acao.php" class="item">Ação</a>
				<a href="fps.php" class="item">FPS</a>		
				<a href="terror.php" class="item">Terror</a>
				<a href="sobrevivencia.php" class="item">Sobrevivencia</a>

			</div>
		</div>


		<div class="ui pointing dropdown link item white dorp tit3">
			<div class="aqui">
				<span class="text cor_letra">Categorias <i class="dropdown icon inverted"></i></span>
				
			</div>
			<div class="menu">
				<?php
				$outraLista=listaCategoria();
				foreach ($outraLista as $categoria) {
					echo '<a class="item" href="detalhaCategoria.php?cod2='.$categoria["cod"].'">'.$categoria["categoria"].'</a>';
				}
				?>
			</div>
		</div>
		<?php
		if(isset($_SESSION['logado'])){
			if($_SESSION['logado']==1){
				?>
				<a class="item tit2 cor_letra" href="cadastrarResenha.php">
					<h5 class="cor_letra">Cadastra Resenha</h5>
				</a>
				<!--A partir daqui começa a barra de pesquisa-->

				<form method="get" action="busca.php" class="pesquisa tit">
					<div class="ui search irCanto">
					  <input class="prompt" type="text" name="campo_busca" placeholder="Pesquisar">
					  <div class="results"></div>
					</div>
				</form>

				<a class='item tit' href="usuario.php">
					<?php
					if ($_SESSION['nome']=='Adminn') {
						echo'<img src="imagens/admin.jpeg" class="ui mini circular image tit fotoMenu ">';
					}/*else{
						echo'
						<img src="imagens/usua.png" class="ui mini circular image tit fotoMenu">

						';
						
					}*/
					?>
					<a class="item tit cor_letra" href="usuario.php">
						<?php
						echo $_SESSION['nome'];
						?>
					</a> 

				</a>
				<a class='item tit cor_letra' href="desloga.php">
					Deslogar
				</a>
				<?php
			}else{
				?>
				<a class="item cor_letra tit" href="cadastrarResenha.php">
					<h5 class="cor_letra tit">Cadastra Resenha</h5>
				</a>

				

			</ul>
			<!--A partir daqui começa a barra de pesquisa
			<form method="get" action="busca.php" class="form-inline my-2 my-lg-0">

				<input class="form-control mr-sm-2" type="text" name="campo_busca">
				<input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="buscar" value="Pesquisar">

			</form>-->

			<a class="item right tit " href="login.php">
				<h5 class="cor_letra">Logar</h5>
			</a>
			<?php
		}
	}else{
		?>
		<a class="item right " href="login.php">
			<h5 class="cor_letra">Logar</h5>
		</a>
		<?php
	}
	?>
</div>
</div>
</div>

