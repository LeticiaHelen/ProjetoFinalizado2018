<?php
include 'cabecalho.php';
?>
<div class="um espacosuperior">
  <form method="post" action="gravaUsuario.php">
    <div class="ui segment">
      <div class="ui form">
        <div class="field">
          <label>Primeiro Nome</label>
          <input type="text" name="primeiroNome" placeholder="Primeiro Nome" required="This is important">
        </div>
        <div class="field">
          <label>Sobrenome</label>
          <input type="text" name="ultimoNome" placeholder="Sobrenome" required="This is important">
        </div>
        <div class="field">
          <label>Idade</label>
          <input type="Number" name="idade" placeholder="Idade" required="This is important" min="10">
        </div>
        <div class="field">
          <label>E-mail</label>
          <input type="email" name="email" placeholder="E-mail" required="This is important">
        </div>
        <div class="field">
          <label>Nome de Usuario</label>
          <input type="text" name="nomeusuario" placeholder="Nome de Usuario" required="This is important">
        </div>
        <div class="field">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Senha" required="This is important">
        </div>
        <div class="ui segment">
          <div class="field">
            <div class="ui toggle checkbox">
              <input type="checkbox" name="gift" tabindex="0" class="hidden">
              <label>Gostaria de receber e-mails com novidades ?</label>
            </div>
          </div>
        </div>
        <button class="ui button" type="submit">Cadastrar</button>
      </div>
    </div>
  </form>
</div>
<div class="espaco"></div>
<br>	
<?php
include 'rodape.php';
?>