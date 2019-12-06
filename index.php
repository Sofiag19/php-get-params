<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-get-params</title>
    <?php
    // GOAL: Stampare una stringa verde se la
    // variabile password passata in GET è
    // uguale a "Boolean", altrimenti stampare
    // una stringa rossa.
    $psw= $_GET['psw'];

    ?>
  </head>
  <body>
    <?php
      if ($psw == "Boolean") {
        ?>
        <h1 style="color:green;">
          <?php
          echo "PASSWORD CORRETTA: ".$psw;
          ?>
        </h1>
        <?php
      } else {
        ?>
        <h1 style="color:red;">
          <?php
          echo "PASSWORD INCORRETTA: ".$psw;
          ?>
        </h1>
        <?php
      }


    ?>
  </body>
</html>
