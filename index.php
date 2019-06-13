<!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a “Boolean”, altrimenti stampare
una stringa rossa. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $stringa = 'Boolean';
      if($stringa == $_GET['password']){
        echo '<p style="color:green;"> password valida </p>';
      }else{
        echo '<p style="color:red;"> password non valida </p>';
      }

     ?>
  </body>
</html>
