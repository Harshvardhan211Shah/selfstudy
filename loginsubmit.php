<?php
session_start();
?>
<!doctype>
<html>
    <head>
        <title>Multi Knowledge</title>
        <link rel="shortcut icon" href="img/book.png" type="image/x-icon"><!--added a icon to the application-->
        <link rel="stylesheet" href="loginsubmit.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "2345";
        $database = "selfstudy";
        ?>

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
                        // setcookie("name",$row['name']);
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
            <a href="dashboard.php">dashboard</a>
            <div class="dropdown"><!--dropdown menu-->
                <button class="dropbtn">Subjects 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">C</a>
                    <a href="#">C++</a>
                    <a href="#">O S</a>
                    <a href="#">GRAPHICS</a>
                    <a href="#">MYSQL</a>
                    <a href="#">CORE JAVA</a>
                    <a href="#">PHP</a>
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">PYTHON</a>
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

