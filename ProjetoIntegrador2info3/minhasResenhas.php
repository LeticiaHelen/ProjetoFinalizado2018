<?php 
include 'cabecalho.php';
?>

<div class="clear">.</div>
<div class="ui five column centered grid">
	<div class="column">
		<img class="ui avatar image medium" src="imagens/usua.png">s
	</div>
</div>
<section class="lateralUsuario">.</section>
<section class="conteudo">
 
 <!-- SERVE PAA MESCLAR O MENU ATUAL COM O ANTIGO -->
<div class="ui secondary pointing menu">

<!--
  <a class="item menu_usus" href="favoritos.php">
    Favoritos
  </a>
  <a class="item" href="usuarioInformacoes.php">
    Informações
  </a>
  <a class="item" href="resenhausuario.php">
  	Minhas Resenhas
  </a>
-->
  <div class="ui three item menu">
    <a class="item" href="favoritos.php" >Favoritados</a>
    <a class="item" href="usuarioInformacoes.php">Informações</a>
    <a class="item" href="minhasResenhas.php">Minhas resenhas</a>
  </div>
</div>
</section>
<div class="umpoucodeespaco espacosuperior">
	<div class="ui three column grid">
		<div class="two column row">
			<div class="column">
				<div class="ui segment">
					Nome Informação
				</div>
			</div>
			<div class="column">
				<button class="green ui button">Visualizar</button>
				<button class="cinza ui button">Alterar</button>
				<button class="red ui button">Excluir</button>
			</div>
			<div class="column">
			</div>
		</div>
	</div>	
</div>
</div>
<div class="umpoucodeespaco">
	<div class="ui two column grid">
		<div class="two column row">
			<div class="column">
				<div class="ui segment">
					Nome                Informação
				</div>
			</div>
			<div class="column">
				<a class="header" href="detalhaResenha.php?cod='.$dados['cod'].'">
				<button class="green ui button">Visualizar</button>
				</a>
				<button class="cinza  ui button">Alterar</button>
				<button class="red ui button">Excluir</button>
			</div>
		</div>	
	</div>
</div>
<div class="umpoucodeespaco">
	<div class="ui two column grid">
		<div class="two column row">
			<div class="column">
				<div class="ui segment">
					Nome                Informação
				</div>
			</div>
			<div class="column">
				<button class="green ui button">Visualizar</button>
				<button class="cinza  ui button">Alterar</button>
				<button class="red ui button">Excluir</button>
			</div>
		</div>	
	</div>
</div>
<div class="umpoucodeespaco">
	<div class="ui two column grid">
		<div class="two column row">
			<div class="column">
				<div class="ui segment">
					Nome                Informação                     
				</div>
			</div>
			<div class="column">
				<button class="green ui button">Visualizar</button>
				<button class="cinza  ui button">Alterar</button>
				<button class="red ui button">Excluir</button>
			</div>
		</div>	
	</div>
</div>
<div class="umpoucodeespaco">
	<div class="ui two column grid">
		<div class="two column row">
			<div class="column">
				<div class="ui segment">
					Nome                Informação
				</div>
			</div>
			<div class="column">
				<button class="green ui button">Visualizar</button>
				<button class="cinza ui button">Alterar</button>
				<button class="red ui button">Excluir</button>
			</div>
		</div>	
	</div>
</div>

<?php
echo '
<div class="ui container">
<div class="ui modal">
<i class="close icon"></i>
<div class="header">
Nome Jogo
</div>
<div class="pqe">
<div class="esquerda ui medium image">
<img src="imagens/pub.jpg">
</div>
</div>
<div class="content">
<textarea cols="110" rows="10">Informação;Sua Categoria;Icone Categoria;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus lobortis libero eu aliquet. Nullam in enim vulputate, congue nisi commodo, ultricies nunc. Nullam maximus, magna non dignissim congue, urna ligula aliquam libero, vitae ullamcorper velit purus ut tellus. Donec molestie lorem tempus ipsum fringilla, nec venenatis nisl bibendum. Praesent ornare turpis metus, sit amet consectetur lacus imperdiet vitae. Donec eu diam at ex commodo efficitur vitae eu nisl. Etiam ultrices suscipit justo. Ut finibus porta orci, eget semper lacus rhoncus non. Sed sem ante, accumsan nec orci in, sagittis ultrices elit. Nullam erat ex, porttitor nec erat vitae, tempus dapibus massa. Nam non est urna. Cras luctus luctus ex in tristique. Praesent turpis orci, accumsan quis tellus quis, posuere feugiat ipsum. Proin eget hendrerit ante, id iaculis augue.</textarea>
</div>
<div class="actions">
<div class="ui button green">Salvar</div>
<div class="ui button orange">Cancelar</div>
</div>
</div>
</div>
<script>
$(".ui.modal").modal("attach events", ".cinza.ui.button", "show");
</script>

<div class="ui container">
<div class="ui modal">
<i class="close icon"></i>
<div class="header">
Confirmação de Exlusão
</div>
<div class="content">
<h2>Você tem certeza que deseja exluir essa publicação?</h2>
</div>
<div class="actions">
<div class="ui button gray">Cancelar</div>
<div class="ui button red">Exluir</div>
</div>
</div>
</div>
<script>
$(".ui.modal").modal("attach events", ".red.ui.button", "show");
</script>
<div class="column">

';
?>
</div>
<div class="espacao">zzzzzzzzz</div>
<?php
include 'rodape.php';
?>