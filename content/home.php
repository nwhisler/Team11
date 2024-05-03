<!DOCTYPE html>
<html class="main">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <head>
        <meta charset="UTF-8">
        <title>Homepage</title>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <li class='navbar'><a href='index.php' class='navbar'>Home</a></li>
                <li class='navbar'><a href='content/about.php' class='navbar'>About</a></li>
                <li class='navbar'><a href='content/color.php' class='navbar'>Color Coordinate Generation</a></li>
            </nav>
        </header>
        <div class='content'>
            <div id="teamImgContainer">
                <img src="https://images.unsplash.com/photo-1595740041673-6a525c7be994?q=80&w=2835&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image" id="teamImage"/>
            </div>
            <div id="companyImage">
                <h1 id="title">Welcome to Team 11</h1> 
            </div>
            <div id="colorParaContainer">
                <img src="https://images.unsplash.com/photo-1500043204644-768d20653f32?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="contrastColors" id="colorContr"/>
                <div id="compDesc">
                    <p id="homeParagraph">
                        Welcome to Team 11, your go-to destination for all things color-related! We're thrilled to have you here. 
                        If you're curious about the brilliant minds behind our work, head over to our About page where you'll find information about our talented contributors (team members). 
                        And when it comes to fulfilling your color needs, look no further than our Color Coordinate Generation page. 
                        Whether you're seeking inspiration or specific color schemes, we've got you covered. Explore, create, and unleash your creativity with Team 11!
                    </p>
                    <div id="bodybtncontainer">
                        <a href="content/about.php">
                            <button id="aboutBtn">Learn More About Us!</button>
                        </a>
                        <a href="content/color.php">
                            <button id="colorGenBtn">Color Generation Page</button>
                        </a>
                    </div>
                </div>  
            </div>
        </div>
        <footer id="homeFooter">
            Copyright &#169 Team 11
        </footer>
    </body>
</html> 