<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Name</title>

  </head>
  <body>

    <?php

      $name = $_GET["name"];
      $surname = $_GET["surname"];

     ?>


    <h1>Hello hello hello <?php echo $name.' '.$surname; ?> !!</h1>


    <!-- http://localhost/name/?name=Smart&surname=Tillo -->

  </body>
</html>
