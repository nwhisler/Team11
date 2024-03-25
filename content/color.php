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
                        <br>
                        <div id='table-container1'></div>
                    </body>
                    <footer>
                        Copyright &#169 Team 11
                    </footer>
                    </div>
                    <script> 
                        let dimensions = $dimensions;
                        let colors = $colors;
                        const colorOptions = ['red', 'orange', 'yellow', 'green', 'blue', 'purple', 'grey', 'brown', 'black', 'teal'];
                        const options = ['Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Purple', 'Grey', 'Brown', 'Black', 'Teal'];
                        let table = '<table id=table>';
                        let counter = 0;
                        for(let idx = 0; idx < $colors; idx++) {
                            table += '<tr><td id=leftColumn>';
                            table += '<select id=options';
                            table += counter.toString();
                            table += '>Select Color';
                            for(let index = 0; index < options.length; index++) {
                                if(index == counter) {                                
                                    table += '<option value=';
                                    table += colorOptions[index];
                                    table += ' selected>';
                                    table += options[index];
                                    table += '</option>';
                                }
                                else {
                                    table += '<option value=';
                                    table += colorOptions[index];
                                    table += '>';
                                    table += options[index];
                                    table += '</option>';
                                }
                            }
                            counter++;
                            table +=  '</td><td id=rightColumn></td></tr>';
                        }
                        table+= '</table>';
                        document.getElementById('table-container').innerHTML = table;

                        let alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
                        let table1 = '<table id=table1><tr><th></th>';


                        for(let idx = 0; idx < dimensions + 1; idx++) {

                                table1 += '<th>';
                                table1 += alphabet[idx];
                                table1 += '</th>';

                        }

                        table += '</tr>';

                        for(let idx = 0; idx < dimensions + 1; idx++) {

                            let rowNumber = idx + 1;
                            table1 += '<tr><td>';
                            table1 += rowNumber.toString();
                            table1 += '<td>';

                            for(let index = 0; index < dimensions; index++) {

                                table1 += '<td></td>';

                            }

                            table1 += '</tr>';

                        }
                            
                        table1+= '</table>';
                        document.getElementById('table-container1').innerHTML = table1;

                    </script>";

            }

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
                    </div>
                  </head>
                  <body>
                    <p> Use parameters dimensions with a value between 1-26 and colors with a value between 1-10. </p>
                  </body>
                  <footer>
                    Copyright &#169 Team 11
                  </footer>";

        }
    ?>
    <style type="text/css">
        <?php
            $css = file_get_contents("../css/style.css");
            echo $css;
        ?>
    </style>
</html> 