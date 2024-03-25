<!DOCTYPE html>
<html>
    <?php
    
        echo   "<head>
                    <meta charset='UTF-8'>
                <title>About</title>
                <div class='content'>
                    <nav>
                        <li id='navbar'><a href='../index.php'>Home</a></li>
                        <li id='navbar'><a href='about.php'>About</a></li>
                        <li id='navbar'><a href='color.php'>Color Coordinate Generation</a></li>
                    </nav>
                </head>
                <body>
                    <div>
                        <img src='https://github.com/NWhisler/Images/blob/main/Image.jpg?raw=true' alt='img' />
                        <p>
                            Hello I am Nicholas Whisler a second degree seeking student. 
                            My first degree was in Physics and the second being attempted is in Computer Science. 
                            I am a fifth year student and expect to graduate latest in Spring of 2025.
                        </p>
                    </div>
                    <div>
                        <img src='https://github.com/EthanSmithCS.png' alt='img' />
                        <p>
                            My name is Ethan Smith and I am a senior undergraduate student persuing Computer Science. 
                            In computer science, I am extremely interested in distributed systems and how they work, this class
                            is my first introduction to web dev and I have really enjoyed it! Outside of school I love to cook, sew,
                            and spend time outdoors. I am looking forward to finishing out Spring 2024 strong with my graduation just around the corner
                            next Fall!
                        </p>
                    </div>
                    <div>
                    <!--<img src='' alt='img' />-->
                    <!--<p>-->
                            
                    <!--</p>-->
                    </div>
                    <div>
                    <!--<img src='' alt='img' />-->
                    <!--<p>-->
                            
                    <!--</p>-->
                    </div>
                </body>
                <footer>
                    Copyright &#169 Team 11
                </footer>
                </div>";
    ?>
    <style type="text/css">
        <?php
            $css = file_get_contents("../css/style.css");
            echo $css;
        ?>
    </style>
</html> 