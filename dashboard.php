<?php
    session_start();
?>
<!doctype html>
<html>
    <body>
        <?php
            if (isset($_SESSION['name'])) {
                echo "Hello " . $_SESSION['name'];
            }
          ?>
     </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title> HOME PAGE</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="dashboard.css">
    </head>
    <body background = "img/wood.jpg">
        <div class="container">
                <h1 class="heading" align="center"> SELF-STUDY</h1>
        </div>
        <div class="wholepage">
	        <div class="search">
		        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		            <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="..." alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="..." alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="..." alt="Third slide">
                        </div>
                    </div>
            </div>	
	        </div>
            <br/>
            <h3>CONTENTS</h3>
            <br/>
            <p>Operating System [CODE: OS]</p>
            <br/>
            <p>Data Structure [CODE: DS]</p>
            <br/>
            <p>Core Java [CODE: JAVA]</p>
            <br/>
            <p>C [CODE: C]</p>
            <br/>
            <p>C++ [CODE: C++]</p>
            <br/>
        </div>
        <div class="select">
            <form method="post" action="subject.php">
                 <input type="text" placeholder="Enter your subject code" name="subject" required/>
                 <button type="submit" class="submit">Submit</button>
                 <button type="reset" class="reset">Reset</button>
            </form>
        </div>
    </body>
</html>
