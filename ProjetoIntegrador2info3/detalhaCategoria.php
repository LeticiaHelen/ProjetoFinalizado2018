<?php 
include 'cabecalho.php';
$codigo=$_GET['cod2'];
$categorias=array(1=>'Ação', 2=>'FPS',3=>'Survival',4=> 'Creative');
$lista=buscaCategoria($categorias[$codigo]);
echo '
<h1 class="centra black">'.$lista[1]["categoria"].'</h1>
<div class="marginTop "></div>
<div class="ui grid center aligned page grid">'
;
foreach ($lista as $dados) {
  echo('
      <div class="four wide column ">
      <a href="detalhaResenha.php?cod='.$dados['cod'].'">
      <div class="ui card">
      <div class="ui slide masked reveal image">
      <img src="imagens/'.$dados['imagem1'].'" class="visible content">
      <img src="imagens/'.$dados['imagem2'].'" class="hidden content">
      </div>
      <div class="content">
      <a class="header">'.$dados['nome'].'</a>
      <div class="meta">
      <span class="date">'.$dados['info'].'</span>
      </div>
      </div>
      <div class="extra content">
      <a>
      <i class="'.$dados['icone'].' icon"></i>
      '.$dados['categoria'].'
      </a>
      </div>
      </div>
      </a>
      </div>
      '); 
}
?>
</div>
</div>
<?php
include "rodape.php";
