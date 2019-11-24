<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>PHP Test...</title>
    <style media="screen">
      *{
        font-family: monospace;
      }
    </style>
  </head>

  <body>
    <h1>Php Hello World!</h1>
    <hr>
    <?PHP
      echo "<strong>Now is </strong>". date("Y-m-d-H:i:s")."<br>";
      echo "<strong>The Current Unix Timestamp is </strong>". time()."<strong> seconds since Jan 01 1970. (UTC)</strong><br>";
      echo "<strong> We are </strong>". (2147483647-time()) . "<strong> seconds from the Unixpocalipce.</strong><br>";
      echo "which will happen in 19 January 2038 at 3:14:07AM GMT."
      ?>
  </body>

</html>
