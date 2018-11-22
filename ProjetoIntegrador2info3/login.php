<?php
include 'cabecalho.php';
?>
<div class="topper">.</div>
<div class="fundo1 limite espacologin">
  <div class="ui column middle aligned very relaxed stackable grid center aligned page grid">
    <div class="column">
      <form method="post" action="testaUsuario.php" class="espacocima">    
        <div class="ui form" >
          <div class="field">
            <label>Nome de Usuario</label>
            <div class="ui left icon input">
              <input type="text" placeholder="Usuario" name="user">
              <i class="user outline icon"></i>
            </div>
          </div>
          <div class="field cor_letra">
            <label>Senha</label>
            <div class="ui left icon input">
              <input type="password" placeholder="Senha" name="senha">
              <i class="lock icon"></i>
            </div>
          </div>
          <button class="ui button espacobotao" type="submit">Logar</button>
        </div>
      </form>
      <a href="recuperarsenha.php">
      <button class="cinza ui button">Esqueceu sua senha?</button>
      </a>
    </div>  
  </div>
</div>
</div>
<div class="linkCadastro fundo1">
 <div class="center aligned column">
  <a href="cadastro.php">
    <div class="ui blue labeled button espacobotao black">
      <label class="black">Não possui uma conta? <a href="cadastro.php">Cadastre-se</a></label>
    </div>
  </div>
</a> 
</div>
<div class="rodape1"></div>
<?php
include 'rodape.php';