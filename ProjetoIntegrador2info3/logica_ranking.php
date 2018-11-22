<!--QUESTAO 6-->

<?php 
include 'cabecalho.php';

    $json = file_get_contents('dados/curtidas.json');
    $lista_curtidas = json_decode($json, true);

    $resenhas_json  = file_get_contents('dados/resenhas.json');
    $resenhas_array = json_decode($resenhas_json, true); 

    //Algoritmo que conta quantas curtidas cada resenha teve
    foreach ($resenhas_array as $pos => $resenha){
        $ranking[$pos]['curtidas'] = 0;
        $ranking[$pos]['nome'] = $resenha['Nome'];
        $ranking[$pos]['resenha'] = $resenha['Id_resenha'];
        $ranking[$pos]['imagem1'] = $resenha['imagem1'] ;
        
        foreach ($lista_curtidas as $curtida){
            if ($resenha['Id_resenha'] == $curtida['resenha']) {
               $ranking[$pos]['curtidas'] = $ranking[$pos]['curtidas'] + 1;

                
            }
        }
    }
    function cmp($a, $b) {
        return $a['curtidas'] < $b['curtidas'];
    }
    usort($ranking, 'cmp');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nome do Site</title>

    <!--REPITA A QUESTAO 2-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div id="conteudo" class="container">

    <section class="ranking">
        <h1><center>Ranking geral</center></h1>
        <h4 class="p"><center>Resenhas mais curtidas</center></h4>
    </section>
  
    <div id="jogos" class="row">
        <div class="col-md-12">
             <div class="ul"><ul class="list-group list-group-flush">
                <?php foreach ($ranking as $resenha) : ?>    
                            
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-1">
                        <img src="<?= $resenha['imagem1'] ?>" width="100" class="img-fluid" alt="Responsive image">                            </div>
                            <div class="col-md-8">
                                <a href="detalhaResenha.php?cod=<?=$resenha['resenha'] ?>"> <?= $resenha['nome']?></a></br>
                                <p>Essa resenha foi curtida <?= $resenha['curtidas']?> vezes</p>
                            </div>
                        </div>

                   
                    </li    >
                
                <?php endforeach;?>

            </ul></div>

        </div>
   
    </div>

</div>

<?php
include 'rodape.php';

?>