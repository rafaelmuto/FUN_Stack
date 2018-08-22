<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
    <style media="screen">
      *{
        font-family: monospace;
      }
    </style>
  </head>
  <body>
    <h1>Php: Arrays</h1>
    <hr>
    <?php
    //simple array:
    echo "<strong> Simple Array:</strong><br>";
    $array_simple = [1,2,3,4,5,6,7,8];
    print_r($array_simple);
    echo "<br><hr>";
    //multy dimensional array:
    echo "<strong> Multy Dimensional Array:</strong><br>";
    $array_multy = [[1,2,3,4,5,6,7,8],[1,2,3,4,5,6,7,8],["a","b","c"]];
    echo "<pre>";
    print_r($array_multy);
    // print_r($array_multy[2][2]);
    echo "<br><hr>";
    //associative array:
    echo "<strong> Associative Array:</strong><br>";
    $array_ass = ["Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=>"Bruxelas", "Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris", "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha"=>"Berlim", "Grécia"=>"Atenas", "Irlanda"=>"Dublin", "Holanda" => "Amsterdã", "Portugal" => "Lisboa", "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn", "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena", "Polônia"=>"Varsóvia"];
    print_r($array_ass);
    // echo $array_ass["Italia"];
    // echo $array_ass["Dinamarca"];
    foreach ($array_ass as $key => $value) {
      echo $key . " => " . $value . "<br>";
    }
    echo "<br><hr>";
    $array_ass = [ "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"], "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], "França" => ["Paris", "Nantes", "Lyon"], "Itália" => ["Roma", "Milão", "Veneza"], "Alemanha" => ["Munique", "Berlim", "Frankfurt"] ];
    // print_r($array_ass["Argentina"]);
    print_r($array_ass);
    echo "<hr>";
    foreach ($array_ass as $key => $value) {
      echo "KEY: ";
      print_r($key);
      echo "<br> VALUE: ";
      print_r($value);
      echo "<br>";
    }
    echo "<hr>";
    foreach ($array_ass as $v) {
      print_r($v);
      echo "<br>";
      // code...
    }
    echo "<hr><hr><hr>";
    echo "<h2>TESTS...</h2>";
    foreach (range(1,100) as $i){ 
      print_r($i);
      echo " - ";
    }
    echo "<br>";
    print_r(range(0,100,2));  //range() creates an array!
    print_r(range("A","z"));  //this gives an insight on how php sorts things....
     ?>

  </body>
</html>
