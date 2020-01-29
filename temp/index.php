<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>hey asshole</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel='stylesheet' href='style.css' type='text/css'>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

</head>

<body>

    <div class="sidenav">
        <a id="profile" href="#home">
            <!-- returns user to home page -->
            <img border="2" src="http://puu.sh/EQIhE/13681f27bb.png">
        </a>
        <a href="#about">About</a>
        <a href="#artwork">Artwork</a>
        <a href="#projects">Projects</a>
        <a href="#college">College</a>
        <a href="#contact">Contact</a>
    </div>

    <div id="container">
        <div id="container2">
            <div class="box one" id="about">
                <div class="floating">
                    <h1>About</h1>
                </div>
            </div>
            <div class="box two" id="artwork">
                <div class="floating">
                    <h1>Artwork</h1>
                </div>
            </div>
            <div class="box one" id="projects">
                <div class="floating">
                    <h1>Projects</h1>
                </div>
            </div>
            <div class="box two" id="college">
                <div class="floating">
                    <h1>College</h1></br>
                    <p>
                        <h1>Sound Design</h1>

                        <h2>Week 1</h2>
                        testing</br></br>
                        <h2>Week 2</h2>
                        testing</br></br>
                        <h2>Week 3</h2>
                        testing</br></br>
                        <h2>Week 4</h2>
                        testing</br></br>

                        <h1>Programming</h1>

                        <h2>Week 1</h2>
                        testing</br></br>
                        <h2>Week 2</h2>

                        <div id="prog 2" class="content">
<?php echo file_get_contents("programming-week2.txt");?>
                        </div>

                        </br></br>
                        <h2>Week 3</h2>
                        testing
                        </br></br>
                        <h2>Week 4</h2>
                        
                        <div id="prog 4" class="content">
<?php echo file_get_contents("programming-week4.txt");?>
                        </div>

                        </br></br>
                        <h1>3D Level Design</h1>

                        <h2>Week 1</h2>
                        testing</br></br>
                        <h2>Week 2</h2>
                        testing</br></br>
                        <h2>Week 3</h2>
                        testing</br></br>
                        <h2>Week 4</h2>
                        testing
                        </br></br>
                    </p>

                </div>
            </div>
            <div class="box one" id="contact">
                <div>
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>