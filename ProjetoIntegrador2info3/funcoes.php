<?php

  //$curtidas = array(); é realmente necessário ?
      /*  $curtida = [
            "resenha" => $cod_resenha,
            "usuario" => $cod_usu,
            "curtiu"  => true
        ];
        //$curtidas[] = $curtida; é realmente necessário ?
        print_r($curtida); //quando curtir na página da resenha vai aparecer um print_r no lado com os dados

        $curtidas_json = json_encode($curtida, JSON_PRETTY_PRINT);
        print_r($curtidas_json); // está mostrando a curtida no formato json corretamente  

        file_put_contents('dados/curtidas.json', $curtidas_json);*/

error_reporting(0);
session_start();
function listaResenhas(){
	$resenha= array();

	$dados= file("dados.csv");

	foreach ($dados as $posicao => $linha) {
		if ($posicao !=0) {
			$colunas= explode(";",$linha);
			$resenha['cod'] =$colunas[0];
			$resenha['nome'] =$colunas[1];
			$resenha['imagem1'] =$colunas[2];
			$resenha['imagem2'] =$colunas[3];
			$resenha['info'] =$colunas[4];
			$resenha['categoria'] =$colunas[5];
			$resenha['icone'] =$colunas[6];
			$resenha['resenha'] =$colunas[7];
			$resenhas[]=$resenha;
		}
	}
	return $resenhas;
}

function buscaResenha($codigo){
	$resenha= array();
	$dados= file("dados.csv");
	foreach ($dados as $linha) {
		$colunas= explode(";",$linha);
		if($colunas[0]==$codigo){
			$resenha['cod'] =$colunas[0];
			$resenha['nome'] =$colunas[1];
			$resenha['imagem1'] =$colunas[2];
			$resenha['imagem2'] =$colunas[3];
			$resenha['info'] =$colunas[4];
			$resenha['categoria'] =$colunas[5];
			$resenha['icone'] =$colunas[6];
			$resenha['resenha'] =$colunas[7];
			$resenha['autor']=$colunas[8];
		}
	}
	
	return $resenha;
}

function listaCategoria(){
	$categoria= array();
	$dados= file("categorias.csv");
	foreach ($dados as $posicao => $linha) {
		if ($posicao !=0) {
			$colunas= explode(";",$linha);
			$categoria['cod'] =$colunas[0];
			$categoria['categoria'] =$colunas[1];
			$categorias[]=$categoria;
		}
	}
	return $categorias;
}

function buscaCategoria($codigo){
	$categoria=array();
	$dados= file("dados.csv");
	foreach ($dados as $linha) {
		$dados=explode(";",$linha);
		if($dados[5]==$codigo){
			$categoria['cod'] =$dados[0];
			$categoria['nome'] =$dados[1];
			$categoria['imagem1'] =$dados[2];
			$categoria['imagem2'] =$dados[3];
			$categoria['info'] =$dados[4];
			$categoria['categoria'] =$dados[5];
			$categoria['icone'] =$dados[6];
			$categoria['resenha'] =$dados[7];
			$categorias[]=$categoria;
		}
	}
	return $categorias;
}

function testaUsuario($user,$senha){
	$dados= file("usuarios.csv");
	$todosDados=[];
	foreach ($dados as $linha) {
		$dados=explode(";",$linha);
		$todosDados[]=$dados;
	}
	$cont=0;
	foreach ($todosDados as $key) {
		if ($key[5]==$user) {
			$cont++;
			$guarda=$key[6];
			$_SESSION['nome']=$key[5];
		}
	}
	if($cont==0){
		$retorna=0;
		return $retorna;
	}elseif($guarda==$senha) {
		$_SESSION['logado']=1;
		$retorna=1;
		return $retorna;
	}else{
		$retorna=0;
		return $retorna;
	}	
} 

function InfoUsuario($codigo){
	$usuarios=array();
	$dados= file("usuarios.csv");
	foreach ($dados as $linha) {
		$dados=explode(";",$linha);
		if($dados[1]==$codigo){
			$usuario['cod']=$dados[0];
			$usuario['nome'] =$dados[1];
			$usuario['email'] =$dados[4];
			$usuario['usuario'] =$dados[5];
			$usuario['senha'] =$dados[6];
			$usuarios[]=$usuario;
		}
	}
	return $usuarios;
}












function curtir($cod_usu,$cod_resenha){

    $lista_curtidas = file_get_contents('dados/curtidas.json');
    $array_curtidas = json_decode($lista_curtidas,true);
    $qtd_curtida= 0;

    if (isset ($_GET['acao']) AND $_GET['acao'] == "curtir"){

        foreach ($array_curtidas as $posicao => $info) {
            if($info['usuario'] == $cod_usu AND $info['resenha'] == $cod_resenha AND $info['curtiu'] == false){
               $curtida = [
                    "resenha" => $cod_resenha,
                    "usuario" => $cod_usu,
                    "curtiu"  => true
                ];

                $array_curtidas[$posicao]= $curtida;
    
            }else{
                $qtd_curtida = $qtd_curtida + 1;

                if($qtd_curtida == sizeof($array_curtidas)){
                    $curtida = [
                    "resenha" => $cod_resenha,
                    "usuario" => $cod_usu,
                    "curtiu"  => true
                    ];

                    $array_curtidas[]= $curtida;

                }
            }
        }

    }

    $curtidas_json = json_encode($array_curtidas, JSON_PRETTY_PRINT);
    file_put_contents('dados/curtidas.json', $curtidas_json);

}



function verifica_curtir($cod_usu,$cod_resenha){
    $verifica_curtidas = file_get_contents('dados/curtidas.json');
    $lista_curtidas = json_decode($verifica_curtidas,true);

    $esta_curtida = false;

    foreach ($lista_curtidas as $like){

        if ($like['usuario'] == $cod_usu AND $like['resenha'] == $cod_resenha AND $like['curtiu'] == true){

            $esta_curtida = true;

        }

    }

     return($esta_curtida);
}

function remover($cod_usu,$cod_resenha){

    $lista_curtidas = file_get_contents('dados/curtidas.json');
    $array_curtidas = json_decode($lista_curtidas,true);

    if (isset ($_GET['acao']) AND $_GET['acao'] == "remover"){

        foreach ($array_curtidas as $posicao => $info) {
            if($info['usuario'] == $cod_usu AND $info['resenha'] == $cod_resenha AND $info['curtiu'] == true){
               $curtida = [
                    "resenha" => $cod_resenha,
                    "usuario" => $cod_usu,
                    "curtiu"  => false
                ];

                $array_curtidas[$posicao]= $curtida;
    
            }
        }

    }

    $curtidas_json = json_encode($array_curtidas, JSON_PRETTY_PRINT);
    file_put_contents('dados/curtidas.json', $curtidas_json);

}









function ranking(){
	$json = file_get_contents('dados/curtidas.json');
    $lista_curtidas = json_decode($json, true);
    $resenhas_json  = file_get_contents('dados/resenhas.json');
    $resenhas_array = json_decode($resenhas_json, true); 

 //Algoritmo que conta quantas curtidas cada resenha teve
    foreach ($resenhas_array as $pos => $resenha){
        $ranking[$pos]['curtidas'] = 0;
        $ranking[$pos]['nome'] = $resenha['Nome'];
        $ranking[$pos]['resenha'] = $resenha['Id_resenha'];
        $ranking[$pos]['imagem'] = $resenha['imagem1'];
        
        foreach ($lista_curtidas as $curtida){
            if ($resenha['Id_resenha'] == $curtida['resenha']) {
               $ranking[$pos]['curtidas'] = $ranking[$pos]['curtidas'] + 1;
                
            }
        }
    }

 	return $ranking[$pos]['curtidas'];



}