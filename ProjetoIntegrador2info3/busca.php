
	<?php
	 include 'cabecalho.php';		
		$resenhas_json  = file_get_contents('dados/resenhas.json');

		$resenhas_array = json_decode($resenhas_json, true); 

		$resenhas_encontrados = []; //array();

		//Busca

		//verificar se o campo_busca nao esta vazio
		if (isset($_GET['campo_busca'])) {
			
			foreach ($resenhas_array as $resenha) {

				$nome  = strtolower($resenha['Nome']);
				$busca = trim(strtolower($_GET['campo_busca']));

				if(  strpos($nome, $busca) !== false  ){
					$resenhas_encontrados[] = $resenha;
				}
			}
		}

	?>	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo_personalizado.css">
</head>
<body>

<?php require_once 'cabecalho.php'; ?>

<div id="conteudo" class="container">

	<h3>Resultado(s) da busca por: "<?= @$_GET['campo_busca'] ?>"</h3>

    <div id="jogos" class="row">


        <div class="col-md-12">


             <ul class="list-group list-group-flush">


                <?php
               foreach($resenhas_encontrados as $resenha) : ?>


                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-1">
                            <img src="<?= $resenha['imagem1'] ?>" width="100" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-md-8">
                            <a href="detalhaResenha.php?cod=<?=$resenha['Id_resenha']?>"><?=$resenha['Nome'] ?></a>


                        </br>
                            <p><?= $resenha['info'];?></p>
                        </div>
                    </div>

                </li>

                <?php endforeach; ?>
            
            </ul>

        </div>

    </div>
</div>


</body>
</html>