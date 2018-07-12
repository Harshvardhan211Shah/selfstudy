<?php
    session_start();
    /*if (!isset($_SESSION['name']) || $_SESSION['name']==null){
        exit("ACCESS RESTRICTED");  
    }*/
?>
<!doctype>
<html>
    <head>
        <title>Multi Knowledge</title>
        <link rel="shortcut icon" href="img/book.png" type="image/x-icon"><!--added a icon to the application-->
        <link rel="stylesheet" href="loginsubmit.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <a href="logout.php"><button type="button">LOGOUT</button><a/>
    <body>
        

        <div class="header">
            <h1>
                <?php
                $hostname = "localhost";
                $username = "root";
                $password = "2345";
                $database = "selfstudy";

                $conn = mysqli_connect($hostname, $username, $password, $database);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die(mysqli_error($conn));
                }

                $s = 0; // $s is flag
                while ($row = mysqli_fetch_array($result)) {
                    if ($_POST["email"] == $row['email'] && $_POST["password"] == $row['password']) {
                        $s = 1; //$s is flag 
                        echo "hi!!" . " " . $row['name'];
                        $_SESSION['name'] = $row["name"];
                        break;
                    }
                }

                if ($s == 0) {
                    echo "Not a valid user";
                }

                mysqli_close($conn);
                ?>
            </h1>
            <p>Welcome Back again</p>
        </div>

        <!--navigation bar-->
        <div class="navbar">
            <a href="http://127.0.0.1/selfstudy/homepage.html">Home</a>
            <a href="dashboard.php" target="_blank">dashboard</a>
            <div class="dropdown"><!--dropdown menu-->
                <button class="dropbtn">Subjects 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="https://www.tutorialspoint.com/cprogramming/" target="_blank">C</a>
                    <a href="https://www.tutorialspoint.com/cplusplus/index.htm" target="_blank">C++</a>
                    <a href="https://www.tutorialspoint.com//operating_system/index.asp" target="_blank">O S</a>
                    <a href="https://www.tutorialspoint.com/computer_graphics/" target="_blank">GRAPHICS</a>
                    <a href="https://www.tutorialspoint.com/sql/" target="_blank">MYSQL</a>
                    <a href="https://www.tutorialspoint.com/java_essential_training/index.asp" target="_blank">CORE JAVA</a>
                    <a href="https://www.tutorialspoint.com/php/" target="_blank">PHP</a>
                    <a href="https://www.tutorialspoint.com/html/" target="_blank">HTML</a>
                    <a href="https://www.tutorialspoint.com/css/" target="_blank">CSS</a>
                    <a href="https://www.tutorialspoint.com/python/" target="_blank">PYTHON</a>
                </div>
            </div> 
        </div>
        <div>

            <div class="row">
                <div class="side">
                    <h2>About Me</h2>
                    <h5>Photo of me:</h5>
                    <div class="fakeimg" style="height:200px;">Image</div>
                    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                    <h3>More Text</h3>
                    <p>Lorem ipsum dolor sit ame.</p>
                    <div class="fakeimg" style="height:60px;">Image</div><br>
                    <div class="fakeimg" style="height:60px;">Image</div><br>
                    <div class="fakeimg" style="height:60px;">Image</div>
                </div>
                <div class="main">
                    <h2>TITLE HEADING</h2>
                    <h5>Title description, Dec 7, 2017</h5>
                    <div class="fakeimg" style="height:200px;">Image</div>
                    <p>Some text..</p>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    <br>
                    <h2>TITLE HEADING</h2>
                    <h5>Title description, Sep 2, 2017</h5>
                    <div class="fakeimg" style="height:200px;">Image</div>
                    <p>Some text..</p>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
            </div>

            <div class="footer">
                <h2>Footer</h2>
            </div>

    </body>
</html>

