<?php
include 'cabecalho.php';
?>

<div class="topper">.</div>
<div class="fundo1 limite2 espacologin">
  <div class="ui column middle aligned very relaxed stackable grid center aligned page grid">
    <div class="column">
 <div class="ui container">
  <div class="header">
  Recuperação de senha
  </div>
  <div class="content">
        <div class="ui form" >
          <div class="field">
            <label>E-mail</label>
            <div class="ui left icon input">
              <input type="email" placeholder="E-mail" name="emailsenhanova">
              <i class="user outline circle icon"></i>
            </div>
          </div>
          <button class="ui button espacobotao cinza" type="button">Enviar</button>
        </div>
  </div>
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
  Recuperação de senha
  </div>
  <div class="content">
        <div class="ui form" >
          <div class="field">
            <label>Número de Recuperação</label>
            <div class="ui left icon input">
              <input type="number" placeholder="Número de Recuperação" name="emialsenhanova">
              <i class="barcode circle icon"></i>
            </div>
          </div>
          <a href="novasenha.php">
          <button class="ui button espacobotao green" type="submit">Enviar</button>
        	</a>
        </div>
  </div>
  </div>
  </div>
  <script>
  $(".ui.modal").modal("attach events", ".cinza.ui.button", "show");
  </script>
  ';