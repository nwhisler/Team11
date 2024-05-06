<!DOCTYPE html>
<html>
    <?php
          include_once("colors.php");
        if((isset($_GET["dimensions"])) && isset($_GET["colors"])) {

            $dimensions = $_GET["dimensions"];
            $colors = $_GET["colors"];

            if(($dimensions < 1 || $dimensions > 26) && ($colors < 1 || $colors > 10)) {

                echo "<head>
                        <meta charset='UTF-8'>
                        <title>Color Coordinate Generation</title>
                        <div class='content'>
                            <nav>
                                <li id='navbar'><a href='../index.php'>Home</a></li>
                                <li id='navbar'><a href='about.php'>About</a></li>
                                <li id='navbar'><a href='color.php'>Color Coordinate Generation</a></li>
                                <li id='navbar'><a href='database.php'>Color Selector</a></li>
                            </nav>
                        </div>
                    </head>
                    <body>
                        <p> Use parameters dimensions with a value between 1-26 and colors with a value between 1-10. </p>
                        <form method='GET'> Dimensions: <input type='text' name='dimensions'> Colors: <input type='text' name='colors'> <input type='submit' value='Build Table'></form>
                        <div id='dimensionsColors'></div>
                    </body>
                    <footer id=\"colorFooter\">
                        Copyright &#169 Team 11
                    </footer>
                    <script>
                        document.getElementById('dimensionsColors').innerHTML = '<p> Incorrect dimensions and colors. Choose between 1 and 26 and 1 and 10. </p>';
                        setTimeout(function(){document.getElementById('dimensionsColors').innerHTML = '<p></p>';}, 4000);                        
                    </script>";             

            }

            elseif($dimensions < 1 || $dimensions > 26) {

                
                echo "<head>
                        <meta charset='UTF-8'>
                        <title>Color Coordinate Generation</title>
                        <div class='content'>
                            <nav>
                                <li id='navbar'><a href='../index.php'>Home</a></li>
                                <li id='navbar'><a href='about.php'>About</a></li>
                                <li id='navbar'><a href='color.php'>Color Coordinate Generation</a></li>
                                <li id='navbar'><a href='database.php'>Color Selector</a></li>
                            </nav>
                        </div>
                    </head>
                    <body>
                        <p> Use parameters dimensions with a value between 1-26 and colors with a value between 1-10. </p>
                        <form method='GET'> Dimensions: <input type='text' name='dimensions'> Colors: <input type='text' name='colors'> <input type='submit' value='Build Table'></form>
                        <div id='dimensions'></div>
                    </body>
                    <footer id=\"colorFooter\">
                        Copyright &#169 Team 11
                    </footer>
                    <script>
                        document.getElementById('dimensions').innerHTML = '<p> Incorrect dimensions. Choose between 1 and 26. </p>';
                        setTimeout(function(){document.getElementById('dimensions').innerHTML = '<p></p>';}, 4000);                        
                    </script>";                
            
            }

            elseif($colors < 1 || $colors > 10) {

                
                echo "<head>
                        <meta charset='UTF-8'>
                        <title>Color Coordinate Generation</title>
                        <div class='content'>
                            <nav>
                                <li id='navbar'><a href='../index.php'>Home</a></li>
                                <li id='navbar'><a href='about.php'>About</a></li>
                                <li id='navbar'><a href='color.php'>Color Coordinate Generation</a></li>
                                <li id='navbar'><a href='database.php'>Color Selector</a></li>
                            </nav>
                        </div>
                    </head>
                    <body>
                        <p> Use parameters dimensions with a value between 1-26 and colors with a value between 1-10. </p>
                        <form method='GET'> Dimensions: <input type='text' name='dimensions'> Colors: <input type='text' name='colors'> <input type='submit' value='Build Table'></form>
                        <div id='colors'></div>
                    </body>
                    <footer id=\"colorFooter\">
                        Copyright &#169 Team 11
                    </footer>
                    <script>
                        document.getElementById('colors').innerHTML = '<p> Incorrect colors. Choose between 1 and 10. </p>';
                        setTimeout(function(){document.getElementById('colors').innerHTML = '<p></p>';}, 4000);                        
                    </script>";               
                
            }

            else {
                $colorOptions = array();
                $options = array(); 
                foreach ($colorsArray as $color) {
                    $colorOptions[] = $color['Name'];
                    $options[] = $color['hex_value']; 
                }

                echo "<head>
                        <meta charset='UTF-8'>
                        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
                        <title>Color Coordinate Generation</title>
                        <div id='content'>
                            <nav>
                                <li id='navbar'><a href='../index.php'>Home</a></li>
                                <li id='navbar'><a href='about.php'>About</a></li>
                                <li id='navbar'><a href='color.php'>Color Coordinate Generation</a></li>
                                <li id='navbar'><a href='database.php'>Color Selector</a></li>
                                </nav>
                    </head>
                    <body >
                        <div id='table-container'></div>
                        <br>
                        <div id='duplicates'></div>
                        <div id='table-container1'></div>
                        <input type='button' style= \" background-color: #E6FFFF;border-radius: 4px;box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);\" value='Print' onClick='printContent($colors, $dimensions)'>
                    </body>
                    <footer>
                        Copyright &#169 Team 11
                    </footer>
                    </div>
                    <script> 
                        let dimensions = $dimensions;
                        let colors = $colors;
                        const colorOptions = " . json_encode($colorOptions) . ";
                        const options = colorOptions;
                        const hex = " . json_encode($options) . ";
                        let table = '<table id=table>';
                        let counter = 0;
                        const previousVals = [];
                        let selectedColors = colorOptions;
                        for(let idx = 0; idx < $colors; idx++) {
                            table += '<tr><td id=leftColumn class=leftColumn'
                            table += idx.toString();
                            table += '>';
                            table += '<select style= \" background-color: #E6FFFF;border-radius: 4px;box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);\"id=options';
                            table += counter.toString();
                            table += ' data-counter=' + idx;
                            table += ' onChange=handleOnChange($colors)>Select Color';
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
                            previousVals[idx] = colorOptions[idx];
                            table += '<input style= \" background-color: #E6FFFF;margin-right: 5px; width: 16px; height: 16px; border: 1px solid #ccc;\"name=radio type=radio id=radio' +idx.toString();                         
                            table += ' value=';
                            table += colorOptions[idx];
                            table += '>';
                            table += '<label id=';
                            table += counter.toString();
                            table += '>';
                            table += '</label>';
                            table +=  '</td><td id=rightColumn><div id=' + colorOptions[idx];
                            table += '></div></td></tr>';
                            counter++;
                        }console.log(previousVals);
                        table+= '</table>';
                        document.getElementById('table-container').innerHTML = table;

                        let alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
                        let table1 = '<table id=table1><tr><th></th>';


                        for(let idx = 0; idx < dimensions; idx++) {

                                table1 += '<th>';
                                table1 += alphabet[idx];
                                table1 += '</th>';

                        }

                        table += '</tr>';

                        for(let idx = 0; idx < dimensions; idx++) {

                            let rowNumber = idx + 1;
                            table1 += '<tr><td>';
                            table1 += rowNumber.toString();
                            table1 += '</td>';

                            for(let index = 0; index < dimensions; index++) {

                                table1 += '<td id=';
                                table1 += idx.toString();
                                table1 += index.toString();
                                table1 += '>';
                                table1 += '<div class=\'cell_content\'></div>';
                                table1 += '</td>';

                            }

                            table1 += '</tr>';

                        }
                            
                        table1+= '</table>';
                        document.getElementById('table-container1').innerHTML = table1;
                        function printContent(colors, dimensions) {

                            let alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
                            newWin = window.open(\"\");
                            newWin.document.write('<div align=\"center\">');
                            newWin.document.write('<header>');
                            newWin.document.write('<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXWeT--Now_Mkvk4cfi1tcl9A4Hgzm-JEdZg&usqp=CAU\" alt=image />');
                            newWin.document.write('<p> Team 11 </p>');
                            newWin.document.write('</header>');
                            newWin.document.write('</div>');
                            newWin.document.write('<table id=printTable style=\"border: 1px solid;width: 100%;height: 200px;\">');

                            for(let idx = 0; idx < colors; idx++) {

                                var sel = document.getElementById(\"options\" + idx.toString());
                                var text= sel.options[sel.selectedIndex].text;

                                newWin.document.write('<tr style=\"border: 1px solid;\">');
                                newWin.document.write('<td style=\"border: 1px solid; width: 20%;\">');
                                newWin.document.write(text);
                                newWin.document.write('</td><td style=\"border: 1px solid; width: 80%;\">');
                                newWin.document.write(document.getElementById(text).innerHTML);
                                newWin.document.write('</td></tr>');


                            }

                            newWin.document.write('</table>');
                            newWin.document.write('<br>');
                            newWin.document.write('<table style=\"margin: 0 auto;border: 1px solid;width: 30%;height: 30%; table-layout: fixed;\">');
                            newWin.document.write('<tr style=\"border: 1px solid;\">');
                            newWin.document.write('<th style=\"border: 1px solid;\"></th>');


                            for(let idx = 0; idx < dimensions; idx++) {

                                newWin.document.write('<th style=\"border: 1px solid;\">');
                                newWin.document.write(alphabet[idx]);
                                newWin.document.write('</th>');

                            }

                            newWin.document.write('</tr>');

                            for(let idx = 0; idx < dimensions; idx++) {

                                let rowNumber = idx + 1;
                                newWin.document.write('<tr style=\"border: 1px solid;\">');
                                newWin.document.write('<td style=\"border: 1px solid;\">');
                                newWin.document.write(rowNumber.toString());
                                newWin.document.write('</td>');
    
                                for(let index = 0; index < dimensions; index++) {
    
                                    newWin.document.write('<td style=\"border: 1px solid;\"><div style=\"aspect-ratio: 1/1;\"></div></td>');
    
                                }
    
                                newWin.document.write('</tr>');
    
                            }
                           
                            newWin.document.write('</table>');
                            newWin.document.write('<br>');
                            newWin.document.write('<footer>Copyright &#169 Team 11</footer>');

                        }

                        let previousColors = selectedColors;

                        function handleOnChange(colors) {

                            let counter = 0;
                            let duplicates = false;
                            let indexValue = 0;
                            eventCounter = parseInt(event.target.getAttribute('data-counter'), 10);
                           
                            for(let idx = 1; idx < colors; idx++) {

                                var sel = document.getElementById(\"options\" + counter.toString());
                                var text= sel.options[sel.selectedIndex].text;

                                for(let index = 0; index < colors; index++) {

                                    if(index != counter) {

                                        var sel1 = document.getElementById(\"options\" + index.toString());
                                        var text1= sel1.options[sel1.selectedIndex].text;

                                        if(text == text1) {

                                            duplicates = true;
                                            break;
            
                                        }

                                    }
        
                                }

                                if(duplicates) {

                                    document.getElementById('duplicates').innerHTML = '<p> All values must be different </p>';
                                    setTimeout(function(){document.getElementById('duplicates').innerHTML = '<p></p>';}, 4000);
                                    event.target.value = previousVals[eventCounter];
                                    break;

                                }

                                counter++;
                                
                            }
                                
                            if(!duplicates) {
    
                                previousVals[eventCounter] = event.target.value;

            
                            }

                            for(let idx = 0; idx < previousVals.length; idx++) {

                                $('#radio' + idx.toString()).val(previousVals[idx]);
                                $('#' + previousColors[idx]).attr('id', previousVals[idx]);
                                selectedColors = previousVals;

                                
                            }

                            previousColors = [];

                            for(let idx = 0; idx < selectedColors.length; idx++) {

                                previousColors.push(selectedColors[idx]);

                            }
                            

                            for(let selected = 0; selected < selectedRowColumn.length; selected++) {

                                var radioColor = $('input[name=\"radio\"]:checked').val();
                                $(selectedRowColumn[selected]).css(\"background-color\", radioColor);
    
                            }

                            

                        } 

                        for(let idx = 0; idx < counter; idx++) {

                            var sel = document.getElementById(\"options\" + idx.toString());
                            var text = sel.options[sel.selectedIndex].text;

                            $(\"#\" + idx.toString()).text(text);

                        }

                        function radioUpdate() {

                            for(let idx = 0; idx < counter; idx++) {

                            var sel = document.getElementById(\"options\" + idx.toString());
                            var text = sel.options[sel.selectedIndex].text;

                            $(\"#\" + idx.toString()).text(text);  
                            console.log('radio string' + text);  
                            
                            }

                        }

                        for(let idx = 0; idx < counter; idx++) {
                        $(\"#options\" + idx.toString()).click(radioUpdate);
                        }

                        var idx = 0;
                        var index = 0;
                        var selectedRowColumn = [];
                        var selectedRowColumnId = [];
                        var previousColor;

                        for(let idx = 0; idx < dimensions; idx++) {

                            for(let index = 0; index < dimensions; index++) {

                                $(\"#\" + idx.toString() + index.toString()).click(function() {
                            
                                    var radioColor = $('input[name=\"radio\"]:checked').val();
                                    var colorIndex = colorOptions.indexOf(radioColor);
                                    var hexCode = hex[colorIndex];
                                    $(\"#\" + idx.toString() + index.toString()).css(\"background-color\", hexCode);
                                
                                    selectedRowColumn.push(\"#\" + idx.toString() + index.toString());
                                    selectedRowColumnId.push(alphabet[index] + (idx +1).toString());
                                    for(let colorIdx = 0; colorIdx < colorOptions.length; colorIdx++) {

                                        if(colorOptions[colorIdx] == radioColor) {
                                            const uniqueCoordinates = Array.from(new Set(selectedRowColumnId));
                                            document.getElementById(radioColor).innerHTML = uniqueCoordinates.sort().join(', ');
                                            previousColor = radioColor;
                                            

                                        }
                                    
                                    }
                                    

                                
                                });                             

                            }

                        }


                        $('input[name=\"radio\"]').change(function() {
                            var currentColor = $(this).val();
                            
                            if (previousColor) {
                                document.getElementById(previousColor).innerHTML = '';
                            }
                            
                            const currentColorId = currentColor.replace('#', '');
                            
                            const uniqueCoordinates = Array.from(new Set(selectedRowColumnId));
                            document.getElementById(currentColorId).innerHTML = uniqueCoordinates.sort().join(', ');
                            
                            for (let selected = 0; selected < selectedRowColumn.length; selected++) {
                                var colorIndex = colorOptions.indexOf(currentColor);
                                var hexCode = hex[colorIndex];
                                $(selectedRowColumn[selected]).css(\"background-color\", hexCode);
                            }
                            
                            previousColor = currentColor;
                        });
                        

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
                            <li id='navbar'><a href='database.php'>Color Selector</a></li>
                        </nav>
                    </div>
                  </head>
                  <body>
                    <p> Use parameters dimensions with a value between 1-26 and colors with a value between 1-10. </p>
                    <form method='GET'> Dimensions: <input type='text' name='dimensions'> Colors: <input type='text' name='colors'> <input type='submit' value='Build Table'></form>
                  </body>
                  <footer id=\"colorFooter\">
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