<?php
    session_start();
?>
<!doctype html>
<html>
    <link rel="shortcut icon" href="img/book.png" type="image/x-icon">
    <body>
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "saddamdas";
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
            
            $s=0; // $s is flag
            while ($row=mysqli_fetch_array($result)) {
                if($_POST["email"]==$row['email'] && $_POST["password"]==$row['password']) {
                    $s=1; //$s is flag 
                    echo "hi!!"." ".$row['name'];
                   // setcookie("name",$row['name']);
                   $_SESSION['name']=$row["name"];
                    break;
                }
            }
	
            if($s==0){
                echo  "Not a valid user";
            }

            mysqli_close($conn);
                
          ?>
     </body>
     <div>
        <a href="dashboard.php"><button>click</button></a>
     </div>
</html>
