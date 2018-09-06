<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>json read</title>
    <style media="screen">
      *{
        font-family: monospace;
      }
    </style>
  </head>
  <body>
    <h1>json read</h1>
    <hr><pre>
    <?php
      $file_name = "file.json";
      $file = file_get_contents($file_name);
      echo "var_dump: <br>";
      var_dump($file);
      echo "<hr> var_dump json_decode FALSE: <br>";
      var_dump(json_decode($file));
      echo "<hr> var_dump json_decode TRUE: <br>";
      var_dump(json_decode($file,true));
      ?>
      <hr>
      <?php
      $json_array = json_decode($file,true);
      var_dump($json_array);
      echo $json_array["firstName"];
      echo "<br>";
      echo $json_array["address"]["state"];
      echo "<hr>";
      $json_array["firstName"] = "Rafael";
      $json_array["lastName"] = "Muto";
      $json_array["age"] = 32;
      var_dump($json_array);
      $new_file = "new_file.json";
      $new_json = json_encode($json_array);
      file_put_contents($new_file,$new_json);
        ?>
  </body>
</html>
