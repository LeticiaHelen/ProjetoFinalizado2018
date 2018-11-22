<?php 
include("cabecalho.php");
include 'slider2.php';
?>
<section  class="centra black"><h1>JOGOS</h1></section>
<div class="ui center page aligned columns grid">
  <?php
  $lista=listaResenhas();
  $ver=rand(16,16);
  foreach ($lista as $dados) {//passar a $dados para a $raning, j´a que possuem os mesmos dados e ainda o numero de curtidas 
    if ($dados['cod']<=$ver) {
      echo('  
      <div class="ui link cards max">         
        <div class="ui card">
        <div class="image">
        <img src="imagens/'.$dados['imagem1'].'" class="visible content">
        </div>
        <div class="content">
        <div class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a class="header" href="detalhaResenha.php?cod='.$dados['cod'].'">'.$dados['nome'].'</a></font></font></div>
        <div class="meta">
        <a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><span class="date">'.$dados['info'].'</span></font></font></a>
        </div>
        </div>
        <div class="extra content">
        <span class="right floated"><i class="caret up icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        2°
        </font></font></span>
        <span>
        <i class="thumbs up outline icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        75 likes
        </font></font></span>
        </div>
        </div>
      </div>
        '); 
    }
  }

  if(!isset($_SESSION['login'])){

  }else{

    $cod_usu = $_SESSION['cod_usu'];

    $esta_curtida = verifica_curtir($cod_usu,1);

    if($esta_curtida != true) { ?>

      <a href="?acao=curtir"><div class="ui heart rating" data-rating="0" data-max-rating="1"></div></a>

      <?php

      curtir($cod_usu,1);


    }else { ?>

     <a href="?acao=remover"><div class="ui heart rating" data-rating="1" data-max-rating="1"></div></a>


     <?php 


     remover($cod_usu,1);

   } 
 }?>

</div> 
</div>
<?php
include "rodape.php";
?>


