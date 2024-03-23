<!DOCTYPE html>
<html>
  <body>
    <?php
        include("content/home.php");
    ?>
    <style type="text/css">
    <?php
        $css = file_get_contents("css/style.css");
        echo $css;
    ?>
    </style>

    </body>
</html>