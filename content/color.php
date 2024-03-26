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
                        <div id='content'>
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
                        <input type='button' value='Print' onClick='printContent($colors, $dimensions)'>
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
                        function printContent(colors, dimensions) {

                            let alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
                            newWin = window.open(\"\");
                            newWin.document.write('<table id=printTable style=\"border: 1px solid;width: 100%;height: 250px;\">');

                            for(let idx = 0; idx < colors; idx++) {

                                var sel = document.getElementById(\"options\" + idx.toString());
                                var text= sel.options[sel.selectedIndex].text;

                                newWin.document.write('<tr style=\"border: 1px solid;\">');
                                newWin.document.write('<td style=\"border: 1px solid; width: 20%;\">');
                                newWin.document.write(text);
                                newWin.document.write('</td><td style=\"border: 1px solid; width: 80%;\"></td></tr>');


                            }

                            newWin.document.write('</table>');
                            newWin.document.write('<br>');
                            newWin.document.write('<table style=\"border: 1px solid;width: 100%;height: 350px\">');
                            newWin.document.write('<tr style=\"border: 1px solid;\">');
                            newWin.document.write('<th style=\"border: 1px solid;\"></th>');


                            for(let idx = 0; idx < dimensions + 1; idx++) {

                                newWin.document.write('<th style=\"border: 1px solid;\">');
                                newWin.document.write(alphabet[idx]);
                                newWin.document.write('</th>');

                            }

                            newWin.document.write('</tr>');

                            for(let idx = 0; idx < dimensions + 1; idx++) {

                                let rowNumber = idx + 1;
                                newWin.document.write('<tr style=\"border: 1px solid;\">');
                                newWin.document.write('<td style=\"border: 1px solid;\">');
                                newWin.document.write(rowNumber.toString());
                                newWin.document.write('</td>');
    
                                for(let index = 0; index < dimensions + 1; index++) {
    
                                    newWin.document.write('<td style=\"border: 1px solid;\"></td>');
    
                                }
    
                                newWin.document.write('</tr>');
    
                            }
                           
                            newWin.document.write('</table>');
                            newWin.document.write('<br>');
                            newWin.document.write('<footer>Copyright &#169 Team 11</footer>');

                            newWin.print();
                            newWin.close();

                        }

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