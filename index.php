<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to Zoe's Sketchbook</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel='stylesheet' href='style.css' type='text/css'>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

</head>

<body>

    <div class="sidenav">
        <a id="profile" href="#home">
            <!-- returns user to home page -->
            <img border="2" src="https://media-exp1.licdn.com/dms/image/C4E03AQEl99DX_hQM0w/profile-displayphoto-shrink_800_800/0/1574918824547?e=1620259200&v=beta&t=3WMyi7OT9c5SNne_lMS7us5PnhOxG9jaVZH09ViIE8w">
        </a>
        <a href="#about">About</a>
        <a href="#artwork">Artwork</a>
        <a href="#projects">Projects</a>
        <a href="#college">College</a>
        <a href="#contact">Contact</a>
    </div>

    <div id="train">
        <div id="cart">
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
                    <!--<p>
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
                    </p>-->
                </div>
            </div>
            <div class="box one" id="contact">
                <div class="floating">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>