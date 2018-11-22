  <?php
  include "cabecalho.php";
  $cod=$_SESSION['nome'];
  $dados_usu=InfoUsuario($cod);
  $codigo=$_GET['cod'];
  $jogo=buscaResenha($codigo);
    $cod_usu = $dados_usu[0]['cod'];
    
    $id_resenha = $_GET['cod'];
    $resenhas_json  = file_get_contents('dados/resenhas.json');
    $resenhas_array = json_decode($resenhas_json, true);

    //abrir arquivo de avaliacoes
    $avaliacoes_json  = file_get_contents('dados/avaliacoes.json');
    $avaliacoes_array = json_decode($avaliacoes_json, true);
    foreach ($resenhas_array as $informacao){
        if($informacao['Id_resenha'] == $id_resenha){
            $jogador_encontrado = $informacao;
        }
    }
    //
    if(isset($_GET['acao']) and $_GET['acao'] == "avaliar" and isset($_GET['nota'])){
        $nova_avaliacao = [
            "id_usuario" => $cod_usu,
            "id_resenha" => $id_resenha,
            "nota" => $_GET['nota']
        ];
        $avaliacoes_array[] = $nova_avaliacao;
        $json = json_encode($avaliacoes_array, JSON_PRETTY_PRINT);
        file_put_contents("dados/avaliacoes.json", $json);    
    }
    $numero_de_avaliacoes = 0;
    $soma_das_notas = 0;
    //como percorrer essa lista?
    foreach ($avaliacoes_array as $avaliacao) {
        if ($avaliacao['id_resenha'] == $id_resenha) {
            $numero_de_avaliacoes++;
            $soma_das_notas += $avaliacao['nota'];
        }
    }

    $media = $soma_das_notas/$numero_de_avaliacoes;


   
 

  ?>
  <div class="gridDupla">
    <div class="imagem">

      <?php

      echo'
      <div class="ui four column grid">
      <div class="column">
      <div class="ui fluid image">
      <div class="ui black ribbon label">
      <a class="header"><i class="'.$jogo["icone"].' outline icon black large"></i> '.$jogo["categoria"].'</a>
      </div>
      <div class="fotoResenha">
      <img src="imagens/'.$jogo["imagem1"].'">
      ';
      if (isset($_SESSION['logado'])) {
        if ($_SESSION['logado']==1) {
          echo '

          <h4>Classificação</h4>
          ';?>
          
          <a class="estrela" href="detalhaResenha.php?cod=<?=$id_resenha?>&acao=avaliar&nota=2"> * </a>
          <a class="estrela" href="detalhaResenha.php?cod=<?=$id_resenha?>&acao=avaliar&nota=4"> * </a>
          <a class="estrela" href="detalhaResenha.php?cod=<?=$id_resenha?>&acao=avaliar&nota=6"> * </a>
          <a class="estrela" href="detalhaResenha.php?cod=<?=$id_resenha?>&acao=avaliar&nota=8"> * </a>
          <a class="estrela" href="detalhaResenha.php?cod=<?=$id_resenha?>&acao=avaliar&nota=10"> * </a>
          <p style="font-weight: bold; font-size: 160%;">
          <?php echo "Nota: ".number_format($media, 2, '.', ',')."\n"; ?>
          </p>
          

        
          
    <?php
   
        }
      }
      echo'
      </div>
      </div>
      </div>
      <div class="resenha">
      ';
      if (isset($_SESSION['logado'])) {
        if ($_SESSION['nome']=='Admin' and $_SESSION['logado']==1) {
          echo'
          <div class="ui left icon top left pointing dropdown desce">
          <i class="sun outline icon"></i>
          <div class="menu">
          <div class="header">Opções</div>
          <div class="item red" >Excluir</div>
          <div class="item"  >Editar</div>
          </div>
          </div>';
        }
      }
      echo'
      <h2 class="nomeResenha">'.$jogo['nome'].'</h2>
      <p class="texto">
      '.$jogo["resenha"].'
      </p>
      ';
      if (isset($_SESSION['logado'])) {
        if ($_SESSION['nome']=='Admin' and $_SESSION['logado']==1) {

          echo '<h4 class="red denuncia">Denunciar</h4>
          ';
        }
      }
      echo'
      <br>
      <div class="autoria">
      <h4>Autor: '.$jogo["autor"].'</h4>   

      </div>
      </div>
      </div>
      </div>
      </div>
      ';?>



      <?php

        if(!isset($_SESSION['logado'])){

        }else{

          $cod_resenha =  $_GET['cod'];
          $cod_usu = $dados_usu[0]['cod'];

          $esta_curtida = verifica_curtir($cod_usu,$cod_resenha);

          if($esta_curtida != true) { ?>
            <a title="Para curtir clique duas vezes" href="?cod=<?=$codigo?>&acao=curtir"><div class="ui heart huge rating espaco_like" data-rating="0" data-max-rating="1"></div></a>
            <?php
            curtir($cod_usu,$cod_resenha);
          }else { ?>
           <a title="Para descurtir clique duas vezes" href="?cod=<?=$codigo?>&acao=remover"><div class="ui heart huge rating espaco_like" data-rating="1" data-max-rating="1"></div></a>
           <?php 
           remover($cod_usu,$cod_resenha);
          } 
        }


       
  ?>

  <section class="lateral">....</section>

  <section class="coments">
    <div class="ui comments">
      <h3 class="ui dividing header">Comentários</h3>
      <div class="comment">
        <a class="avatar">
          <img src="imagens/usu.jpeg">
        </a>
        <div class="content">
          <a class="author">Laryssa</a>
          <div class="metadata">
            <span class="date">Today at 5:42PM</span>
          </div>

          <div class="text">
            Foda!
          </div>

          <div class="actions">
            <?php if (isset($_SESSION['logado'])) {
              if ($_SESSION['nome']=='Admin' and $_SESSION['logado']==1) {
                echo'
                <a class="reply">Editar</a>
                <a class="reply">Excluir</a>
                ';
              }
            }
            ?>
            <a class="reply">Denunciar</a>
            <a class="reply">Responder</a>
          </div>
        </div>
      </div>
      <div class="comment">
        <a class="avatar">
          <img  src="imagens/usu.jpeg">
        </a>
        <div class="content">
          <a class="author">Felipe</a>
          <div class="metadata">
            <span class="date">Yesterday at 12:30AM</span>
          </div>

          <div class="text">
            <p>Achei muito bom! Recomendo!</p>
            <div class="actions">
              <?php if (isset($_SESSION['logado'])) {
                if ($_SESSION['nome']=='Admin' and $_SESSION['logado']==1) {
                  echo'
                  <a class="reply">Responder</a>
                  <a class="reply">Editar</a>
                  <a class="reply">Excluir</a>
                  <a class="reply">Denunciar</a>
                  ';
                }
              }

              if (isset($_SESSION['logado'])) {
                if ($_SESSION['nome']=='Felipe' and $_SESSION['logado']==1) {
                  echo'
                  <a class="reply">Editar</a>
                  <a class="reply">Excluir</a>
                  ';
                }
              }
              ?>
              <a class="reply">Denunciar</a>
            </div>
          </div>
        </div>
        <div class="comments">
          <div class="comment">
            <a class="avatar">
              <img src="imagens/usu.jpeg">
            </a>
            <div class="content">
              <a class="author">Clara</a>
              <div class="metadata">
                <span class="date">Just now</span>
              </div>
              <div class="text">
                Concordo plenamente com o colega acima :)
              </div>

              <div class="actions">
                <?php if (isset($_SESSION['logado'])) {
                  if ($_SESSION['nome']=='Admin' and $_SESSION['logado']==1) {
                    echo'
                    <a class="reply">Editar</a>
                    <a class="reply">Excluir</a>
                    ';
                  }
                }
                ?>
                <a class="reply">Denunciar</a>
                <a class="reply">Responder</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="comment">
        <a class="avatar">
          <img src="imagens/usu.jpeg">
        </a>
        <div class="content">
          <a class="author">Leticia</a>
          <div class="metadata">
            <span class="date">5 days ago</span>
          </div>
          <div class="text">
            Cara, isso está ótimo. Obrigada por compartilhar isto conosco.
          </div>

          <div class="actions">
            <?php if (isset($_SESSION['logado'])) {
              if ($_SESSION['nome']=='Admin' and $_SESSION['logado']==1) {
                echo'
                <a class="reply">Editar</a>
                <a class="reply">Excluir</a>
                ';
              }
            }
            ?>
            <a class="reply">Denunciar</a>
            <a class="reply">Responder</a>
          </div>
        </div>
      </div>
      <form class="ui reply form">
        <div class="field">
          <textarea class="textarea" placeholder="Comente aqui"></textarea>
        </div>
        <div class="ui blue labeled submit icon button">
          <i class="icon edit"></i> Add Reply
        </div>
      </form>
    </div>
  </section>
  <section class="lateral2">....</section>
</div>
</div>



</body>
</html>