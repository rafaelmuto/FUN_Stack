<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>vai tomar no sudokuuu!</title>
    <style media="screen">
      *{
        font-family: monospace;
      }
    </style>
  </head>
  <body>
    <h1>SUDOKUUU</h1>
    <hr>
    <pre>
    <form class="sudo_input" action="sudoku.php" method="post">
      <select name="sudoku[1][3]">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        <option value=6>6</option>
        <option value=7>7</option>
        <option value=8>8</option>
        <option value=9>9</option>
        <option value="null" selected> - </option>
      </select>
      <input style=" background-color:black; color:white;" type="submit">
    </form>
    <?php
    $sudoku = [];
    function sudo_int($sudo_arr){
      foreach (range(1,9) as $i) {
        foreach (range(1,9) as $j) {
          if(isset($_POST["sudoku"][$i][$j])){
            $sudo_arr[$i][$j] = $_POST["sudoku"][$i][$j];
          }
          else{
            $sudo_arr[$i][$j] = NULL;
          }
        }
      }
      return $sudo_arr;
    }
    $sudoku = sudo_int($sudoku);
      var_dump($sudoku);
     ?>
  </body>
</html>
