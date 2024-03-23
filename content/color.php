<!DOCTYPE html>
<html>
    <?php
        if((isset($_GET["dimensions"])) && isset($_GET["color"])) {

            $dimensions = $_GET["dimensions"];
            $color = $_GET["color"];

            echo "<script> 
                    let dimensions = $dimensions;
                    let color = $color;
                    if(dimensions < 1 || dimensions > 26) {
                        window.alert('Incorrect dimensions. Choose between 1 and 26.');
                    }
                    if(color < 1 || color > 10) {
                        window.alert('Incorrect colors. Choose between 1 and 10.');
                    }
                  </script>";

        }
    ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <head>
        <meta charset="UTF-8">
    <title>Contact</title>
    <div class="content">
         <nav>
            <li id='navbar'><a href='../index.php'>Home</a></li>
            <li id='navbar'><a href='about.php'>About</a></li>
            <li id='navbar'><a href='color.php'>Color Coordinate Generation</a></li>
        </nav>
        </head>
    <body>
        <!-- Tables -->
    </body>
    <footer>
        Copyright &#169 Team 11
    </footer>
    </div>
</html> 