<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP+JSON</title>
    <style media="screen">
      *{
        font-family: monospace;
      }
      fieldset{
        width: 300px;
      }
      input{
        width: 100%;
      }
    </style>
  </head>
  <body>
    <h1>PHP+JSON</h1>
    <fieldset>
      <legend>$_POST form</legend>
      <form action="" method="post">
        FIELD_A: <input type="text" name="field_a" value=""><br>
        FIELD_B: <input type="text" name="field_b" value=""><br>
        <button type="submit">submit</button>
      </form>
    </fieldset>
    <pre>
    <?php
      var_dump($_POST);
      $time = time();
      $file = "test.json";
      $encode = json_encode($_POST);
      var_dump($encode);
      $json = fopen($file, "a+");
      fwrite($json, $encode);
      fclose($json);
      ?>
      <hr>
      <!-- <?php
      $array_ass = [ "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"], "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], "França" => ["Paris", "Nantes", "Lyon"], "Itália" => ["Roma", "Milão", "Veneza"], "Alemanha" => ["Munique", "Berlim", "Frankfurt"] ];
      $file = "paises.json";
      $json = fopen($file,"a+");
      fwrite($json,json_encode($array_ass));
      fclose($json);
        ?> -->
        <hr>
        <?php
          $file = "paises.json";
          $file = fopen($file, "a+");
          $file = json_decode($file,true);

          ?>
  </body>
</html>
