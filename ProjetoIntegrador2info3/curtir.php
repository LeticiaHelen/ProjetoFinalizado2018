
<!--QUESTAO 6 COMEÇA DAQUI-->

<?php 

include 'cabecalho.php';
    $curtidas_json = file_get_contents('dados/curtidas.json');
    $lista_curtidas = json_decode($json, true);

    $resenhas_json  = file_get_contents('dados/resenhas.json');
    $resenhas_array = json_decode($resenhas_json, true);

    $id_resenha = $_GET['cod'];

    foreach ($resenhas_array as $resenha){

        if($resenha['Id_resenha'] == $id_resenha){
            $resenha_encontrado = $resenha;
        }
    }




    //Algoritmo para curtir
    if (isset($_POST['acao']) AND $_POST['acao'] == 'curtir'){

        $curtida = [ "resenha" =>  $id_resenha, "usuario" => 1];

        $lista_curtidas[] = $curtida;
        $json = json_encode($lista_curtidas, JSON_PRETTY_PRINT);
        file_put_contents("dados/curtidas.json", $json);
    }

    //Algoritmo para remover curtir
    if (isset($_POST['acao']) AND $_POST['acao'] == 'remover_curtir'){

        foreach ($lista_curtidas as $pos => $like){

            if ($like['usuario'] == 1 AND $like['resenha'] ==  $id_resenha ){
                unset($lista_curtidas[$pos]);
            }
        }

        $curtidas_json = json_encode($lista_curtidas, JSON_PRETTY_PRINT);
        file_put_contents("dados/curtidas.json", $curtidas_json);
    }


    //Algoritmo que percorre a lista de curtidas pra ver se esta postagem esta ou não curtida
    $esta_curtida = false;

    foreach ($lista_curtidas as $curtida){
        if ($curtida['resenha'] ==  $id_resenha AND $curtida['usuario'] == 1 ){
            $esta_curtida = true;
        }
    }

?>



                

                <!-- A PARTIR DAQUI É NECESSÁRIO COPIAR-->
                <!--Aqui podemos ver se já está curtido para poder discurtir-->
                <li class="list-group-item">
                <?php if($esta_curtida == true){ ?>
                    
                    <form method="post" action="?Id_resenha=<?=$_GET['cod']?>">

                        <input type="hidden" name="acao" value="remover_curtir">
                        Você já curtiu essa resenha! 

                        <div class="ui labeled button" tabindex="0">
                          <div class="ui red button">
                            <i class="heart icon"></i> Like
                          </div>
                          <a class="ui basic red left pointing label">1,048</a>
       </div>
                    </form>

                <?php } else { ?>
                    <form method="post" action="?Id_resenha=<?= $_GET['cod']?>">
                        <input type="hidden" name="acao" value="curtir">
                        <input type="submit" value="curtir">
                    </form>
                <?php }?>
                </li>
            </ul>
        </div>

    </div>
</div>
