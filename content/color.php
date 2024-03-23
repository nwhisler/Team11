<!DOCTYPE html>
<html>
    <?php
        if((isset($_GET["dimensions"])) && isset($_GET["colors"])) {

            $dimensions = $_GET["dimensions"];
            $colors = $_GET["colors"];

            if(($dimensions < 1 || $dimensions > 26) && ($colors < 1 || $colors > 10)) {

                echo "<script>
                        window.alert('Incorrect dimensions and colors. Choose between 1 and 26 and 1 and 10.');
                      </script>";                

            }

            elseif($dimensions < 1 || $dimensions > 26) {

                echo "<script>
                        window.alert('Incorrect dimensions. Choose between 1 and 26.');
                      </script>";
            
            }

            elseif($colors < 1 || $colors > 10) {

                echo "<script>
                        window.alert('Incorrect colors. Choose between 1 and 10.');
                      </script>";
                
            }

            else {

                echo "<head>
                        <meta charset='UTF-8'>
                        <title>Color Coordinate Generation</title>
                        <div class='content'>
                            <nav>
                                <li id='navbar'><a href='../index.php'>Home</a></li>
                                <li id='navbar'><a href='about.php'>About</a></li>
                                <li id='navbar'><a href='color.php'>Color Coordinate Generation</a></li>
                            </nav>
                    </head>
                    <body>
                        <div id='table-container'></div>
                    </body>
                    <footer>
                        Copyright &#169 Team 11
                    </footer>
                    </div>
                    <script> 
                        let dimensions = $dimensions;
                        let colors = $colors;
                        let table = '<table>';
                        for(let idx = 0; idx < $colors; idx++) {
                            table += '<tr><td>Column</td><td>Column</td></tr>';    
                        }
                        table+= '</table>';
                        document.getElementById('table-container').innerHTML = table;
                    </script>";

            }

        }
    ?>
    <style type="text/css">
        <?php
            $css = file_get_contents("../css/style.css");
            echo $css;
        ?>
    </style>
</html> 