<!DOCTYPE html>
<?php
  include_once("funcoes.php");
  $page = isset($_GET["page"])?$_GET["page"]:"home";
  if(!file_exists($page.".php")) $page = "home";
 ?>


<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>aula 21 - sistema de login</title>
    <link rel="stylesheet" href="main.css">
  </head>

  <body>
    <header>
      <nav class="header_conteiner">
        <p>Website:</p>
          <a href="?page=home">home </a>
        <?php if(is_logged()): ?>
          <a href="acao.php?acao=logout">logout</a>
        <?php else: ?>
          <a href="?page=login">login </a>
          <a href="?page=cadastro">cadastro </a>
        <?php endif; ?>

      </nav>
    </header>
    <div class="mensagem">
      <?php echo isset($_GET["msg"])?$_GET["msg"]:" "; ?>
    </div>
    <br>
    <div class="main">
      <?php include($page.".php") ?>
    </div>

  </body>

</html>
