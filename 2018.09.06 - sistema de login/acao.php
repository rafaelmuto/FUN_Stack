<?php
  include_once("funcoes.php");
  switch ($_REQUEST["acao"]) {
    case 'login':
      if(login($_POST["login"],$_POST["pw1"])){
        header("Location:index.php");
      }
      else{
        header("Location:index.php?page=login&msg=Usuario+nao+encontrado+ou+senha+invalida");
      }
      break;

    case 'cadastro':
        unset($_REQUEST["acao"]);
        $cad = cadastro($_POST);
        if($cad["error"]){
          header("Location:index.php?page=cadastro&msg=".$cad["msg"]);
        }
        else{
          header("Location:index.php?page=login&msg=".$cad["msg"]);
        }
      break;

    case 'logout':
        logout();
        header("Location:index.php");
        break;

    default:
      echo "rota invalida";
      break;
  }

 ?>
