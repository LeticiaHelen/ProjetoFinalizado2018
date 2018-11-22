<?php 
include("cabecalho.php");

  $json = file_get_contents('dados/curtidas.json');
    $lista_curtidas = json_decode($json, true);
    $resenhas_json  = file_get_contents('dados/resenhas.json');
    $resenhas_array = json_decode($resenhas_json, true); 

    //Algoritmo que conta quantas curtidas cada resenha teve
    foreach ($resenhas_array as $pos => $resenha){
        $ranking[$pos]['curtidas'] = 0;
        $ranking[$pos]['nome'] = $resenha['nome'];
        $ranking[$pos]['resenha'] = $resenha['id_resenha'];
        $ranking[$pos]['imagem'] = $resenha['imagem'];
        
        foreach ($lista_curtidas as $curtida){
            if ($resenha['id_resenha'] == $curtida['resenha']) {
               $ranking[$pos]['curtidas'] = $ranking[$pos]['curtidas'] + 1;
                
            }
        }
    }
    function cmp($a, $b) {
        return $a['curtidas'] < $b['curtidas'];
    }
    usort($ranking, 'cmp');

?>
<div class="marginTop "></div>
<h3 class="nomeResenha aaa">Ranking de resenhas mais curtidos</h3>
<div class="ui grid center aligned page grid">
  <?php

 /* $lista=listaResenhas();
  foreach ($lista as $pos => $dados) {
    if ($dados['cod']<=10) {
  $pos=rand(1,5);
  if ($pos=5) {*/

 foreach ($ranking as $resenha) :?>
        <?php 
          if($ranking[$pos]['curtidas'] == 0) {                                  
        ?>
      echo('
        <div class="five wide column ">
        <a href="detalhaResenha.php?cod='.$dados['cod'].'">
        <div class="ui card">

        <div class="ui slide masked image">
        <img src="imagens/'.$dados['imagem1'].'" class="visible content">        
        </div>
        <div class="content">
          <a href="resenha.php?id_resenha=<?=$resenha['resenha'] ?>"> <?= $resenha['nome'] ?>  </a></br>
           <p>a página do resenha foi curtida <?=$resenha['curtidas']?> vezes</p>       
       <div class="meta">
        <span class="date">'.$dados['info'].'</span>
        </div>
        </div>
        <div class="extra content">
        <a href="detalhaCategoria.php?cod2=#">
        <i class="'.$dados['icone'].' icon"></i>
        '.$dados['categoria'].'
        </a>
        </div>
        </div>
        </a>
        <div class="ui star rating large not-allowed" data-max-rating="5"  data-rating="'.$pos.'"  interactive="false"></div>
        </div>
        '
        );
      <?php }?>
        } 
    }
  }
  ?>
</div>
</div>
