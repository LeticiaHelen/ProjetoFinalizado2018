    <?php
  include 'cabecalho.php';
  ?>


  <div class="clear">.</div>
  <div class="ui five column centered grid">
  	<div class="column">
      <img class="ui avatar image medium" src="imagens/usua.png">
  	</div>
  </div>
  <section class="lateralUsuario">.</section>
  <section class="conteudo">
   
   <!-- SERVE PAA MESCLAR O MENU ATUAL COM O ANTIGO -->
  <div class="ui secondary pointing menu">
    
  <!--
    <a class="item menu_usus" href="favoritos.php">
      Favoritos
    </a>
    <a class="item" href="usuarioInformacoes.php">
      Informações
    </a>
    <a class="item" href="resenhausuario.php">
    	Minhas Resenhas
    </a>
  -->
    <div class="ui three item menu">
      <a class="item" href="favoritos.php" >Favoritados</a>
      <a class="item" href="usuarioInformacoes.php">Informações</a>
      <a class="item" href="resenhausuario.php">Minhas resenhas</a>
    </div>
  </div>
  </section>

  <div class="ui grid center aligned page grid ">
  <section class="lateralUsuario"></section>
  <section class="lateralMR">.</section>
  <section class="enviadas">
    <div class="ui card">
    <div class="image">
      <img src="imagens/lol.jpg">
    </div>
    <div class="content">
      <a class="header">LOL</a>
      <div class="meta">
        <span class="date">Cadastrada em 05 de setembro de 2018 </span>
      </div>
      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. 
      </div>
    </div>
    <div class="extra content">
      <div class="espaco_icons">
        <a>
         <i class="low vision icon"></i>
        </a>
      </div>

      <div class="espaco_icons">
        <a>
         <i class="edit icon"></i>
        </a>
       </div>

      <div class="espaco_icons">
        <a>
         <i class="trash alternate icon"></i>
        </a>
      </div>

    </div>
  </div>
  </section>
  <section class="lateralMR">.</section>

  </div>

  <?php
  echo '
  <div class="ui container">
    <div class="ui modal">
     <i class="close icon"></i>
    <div class="header">
     Nome Jogo
    </div>
   <div class="pqe">
     <div class="esquerda ui medium image">
       <img src="imagens/pub.jpg">
     </div>
  </div>

  <div class="content">
     <textarea cols="110" rows="10">Informação;Sua Categoria;Icone Categoria;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus lobortis libero eu aliquet. Nullam in enim vulputate, congue nisi commodo, ultricies nunc. Nullam maximus, magna non dignissim congue, urna ligula aliquam libero, vitae ullamcorper velit purus ut tellus. Donec molestie lorem tempus ipsum fringilla, nec venenatis nisl bibendum. Praesent ornare turpis metus, sit amet consectetur lacus imperdiet vitae. Donec eu diam at ex commodo efficitur vitae eu nisl. Etiam ultrices suscipit justo. Ut finibus porta orci, eget semper lacus rhoncus non. Sed sem ante, accumsan nec orci in, sagittis ultrices elit. Nullam erat ex, porttitor nec erat vitae, tempus dapibus massa. Nam non est urna. Cras luctus luctus ex in tristique. Praesent turpis orci, accumsan quis tellus quis, posuere feugiat ipsum. Proin eget hendrerit ante, id iaculis augue.</textarea>
  </div>

  <div class="actions">
    <div class="ui button green">Salvar</div>
    <div class="ui button orange">Cancelar</div>
  </div>

  </div>
  </div>

  <script>
    $(".ui.modal").modal("attach events", ".icon.ui.edit", "show");
  </script>

  <div class="ui container">
    <div class="ui modal">
      <i class="close icon"></i>
     <div class="header">
    Confirmação de Exlusão
  </div>

  <div class="content">
    <h2>Você tem certeza que deseja exluir essa publicação?</h2>
  </div>


  <div class="actions">
    <div class="ui button gray">Cancelar</div>
    <div class="ui button red">Exluir</div>
  </div>
  </div>
  </div>

  <script>
   $(".ui.modal").modal("attach events", ".trash.ui.icon", "show");
  </script>
  <div class="column">

  ';
  ?>