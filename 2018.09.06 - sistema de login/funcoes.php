<?php
  $json_path = "jsondb.json";
  session_start();


  function cadastro($user){
    //retorna array: ["error" => bool,"id" => (false ou posicao na lista), "msg" => "msg de erro"]
    // - verificar se as senhas sao iguais
    // - abrir um json se nao existe criar com o seguinte formato:
    // {"usuario":[]}
    // - verificar se ja existe um usuario com o mesmo email
    // - caso nao exista, inseriri no json

    global $json_path;

    if($user["pw1"]!=$user["pw2"]){
      return ["error" => TRUE,"id" => FALSE, "msg" => "senhas nao conferem"];
    }


    if(file_exists($json_path)){
      $dados = json_decode(file_get_contents($json_path), true);
    }
    else {
      $dados = ["usuarios"=>[]];
    }

    foreach ($dados["usuarios"] as $id => $usuario) {
      if($user["login"] == $usuario["login"]){
        return ["error" => TRUE,"id" => $id, "msg" => "usuario ja cadastrado"];
      }
    }

    $id = count($dados["usuarios"]);
    unset($user["pw2"]);
    unset($user["acao"]);
    $user["pw1"] = password_hash($user["pw1"], PASSWORD_DEFAULT);
    $dados["usuarios"][] = $user;
    file_put_contents($json_path, json_encode($dados));
    return ["error" => FALSE,"id" => $id, "msg" => "usuario cadastrado com sucesso!"];
  }


  // chamada manual para teste...
  // var_dump(cadastro(["login"=>"user3","email"=>"teste3@email.com","pw1"=>"teste1","pw2"=>"teste1"]));


  function login($login, $senha){
    global $json_path;
    if(file_exists($json_path)){
      $dados = json_decode(file_get_contents($json_path), true);
    }
    else {
      $dados = ["usuarios"=>[]];
    }
    foreach ($dados["usuarios"] as $id => $usuario) {
      if($login == $usuario["login"] && password_verify($senha,$usuario["pw1"])){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["usuario"]["id"] = $id;
        return true;
      }
    }
    return false;
  }

  // var_dump(login("user3","teste1"));

  function is_logged(){
    return isset($_SESSION["usuario"]);
  }

  function get_user(){
    return isset($_SESSION["usuario"])?$_SESSION["usuario"]:false;
  }

  function logout(){
    session_destroy();
  }
?>
