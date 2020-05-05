<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mail</title>
  </head>

  <body>

    <?php

    $mail = $_GET["mail"];

    $mailDot = strpos($mail, ".");
    $mailAt = strpos($mail, "@");

      if($mailAt && $mailDot){

        echo "<div>OK</div>";
      }else{
        echo "<div>KO</div>";
      };


     ?>
  </body>
</html>
