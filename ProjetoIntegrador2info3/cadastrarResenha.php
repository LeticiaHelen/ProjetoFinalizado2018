<?php

include 'cabecalho.php';
if (isset($_SESSION['logado'])) {
  if($_SESSION['logado']==1){
    ?>
    <div class="um espacosuperior">
      <form method="post" action="sugestaoResenha.php" enctype="multipart/form-data">
        <div class="ui segment">
          <div class="ui form">
            <div class="field">
              <label>Review Name</label>
              <input type="text" name="NomeResenha" placeholder="Nome da Resenha" required="This is important">
            </div>
            <div class="field">
              <div class="field aqui">
                <label>Categoria</label>
                <div class="ui fluid search selection dropdown ">
                  <input type="hidden" name="categoriaa">
                  <i class="dropdown icon"></i>
                  <div class="default text">Selecione a categoria</div>
                  <div class="menu">
                    <div class="item" data-value="RPG"><i class=""></i>RPG</div>
                    <div class="item" data-value="FPS"><i class=""></i>FPS</div>
                    <div class="item" data-value="Survival"><i class=""></i>Survival</div>
                    <div class="item" data-value="Creative"><i class=""></i>Creative</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="field">
              <label>Ano de criação</label>
              <input type="number" name="data" placeholder="Ano de Criação" required="This is important" max="2020" min="1000">
            </div>
            <div class="field">
              <label>Review</label>
              <textarea placeholder="Review" name="resenha" required="This is important"></textarea>
            </div>
            <div class="field">
              <label>Mensagem para o Admin</label>
              <input type="text" name="mensagem" placeholder="Mensagem para o Admin" >
            </div>
            <div class="field">
              <label>Nome do Autor</label>
              <input type="text" name="autor" placeholder="Nome do autor" >
            </div>
            <div class="field">
              <label>Foto</label>
            </div>
            <div>
              <label for="file" class="ui icon button ">
                <i class="image icon"></i>
              Abrir arquivo
              </label>
              <input type="file" id="file" style="display:none">
            </div>
            <div class="ui segment">
              <div class="field">
                <div class="ui toggle checkbox">
                  <input type="checkbox" name="gift" tabindex="0" class="hidden">
                  <label>Você gostaria de receber novidades sobre sua resenha por e-mail</label>
                </div>
              </div>
            </div>
            <button class="ui button" type="submit">Enviar</button>
          </div>
        </div>
      </form>
    </div>
    <br>	
    <?php
  }else{
    ?>
    <center>
      <br>
      <h2>Você tem que estar logado para cadastrar uma resenha</h2>
      <br>
      <a href="login.php">
        <h1>Logar</h1>
      </a>
    </center>
    <div class="rodape"></div>
    <?php
  } 
}else{
	echo'
	<center>
  <br>
  <h2>Você tem que estar logado para cadastrar uma resenha</h2>
  <br>
  <a href="login.php">
  <h1>Logar</h1>
  </a>
  </center>
  <div class="rodape"></div>'
  ;
}
include 'rodape.php';
