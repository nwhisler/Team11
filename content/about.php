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
                    <div class='about'>
                        <div class='bio'>
                            <img src='https://github.com/NWhisler/Images/blob/main/Image.jpg?raw=true' alt='img' />
                            <p>
                                Hello I am Nicholas Whisler a second degree seeking student. 
                                My first degree was in Physics and the second being attempted is in Computer Science. 
                                I am a fifth year student and expect to graduate latest in Spring of 2025.
                            </p>
                        </div>
                        <div class='bio'>
                            <img src='https://github.com/EthanSmithCS.png' alt='img' />
                            <p>
                                My name is Ethan Smith and I am a senior undergraduate student persuing Computer Science. 
                                In computer science, I am extremely interested in distributed systems and how they work, this class
                                is my first introduction to web dev and I have really enjoyed it! Outside of school I love to cook, sew,
                                and spend time outdoors. I am looking forward to finishing out Spring 2024 strong with my graduation just around the corner
                                next Fall!
                            </p>
                        </div>
                        <div class='bio'>
                        <img src='https://github.com/nwhisler/Team11/assets/111817710/f2318185-25a7-44d5-ac28-f25bdb9c662f' alt='img' />
                            <p>
                                My name is Stephen Klugherz. I am a senior undergraduate student studying Computer Science.
                                I am in my last semester and hope to graduate May 2024. I am interested in software development and videogame development.
                                In my free time I enjoy extremsport such as surfing big waves and snowboarding chutes.   
                            </p>
                        </div>
                        <div class='bio'>
                        <img src='https://github.com/mendvoza/images/blob/main/Headshot.jpg?raw=true' alt='img' />
                        <p>
                           My name is Victor Mendoza and I am a junior undergraduate student enrolled in the Computer Science fully online program. I worked in oil and gas for 8 years before
                           I started persuing this degree. I currently work for a startup SaaS company working with drone imagery and writing some code when I have time. This class has really
                           understand more when I am working on the code at work. I like fishing and hanging out with my wife and son on my free time.    
                        </p>
                        </div>
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