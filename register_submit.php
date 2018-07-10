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

            $name=$_POST['name'];
            $institution=$_POST['institution'];
            $course=$_POST['course'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $phone_number=$_POST['phone_number'];
            $sql = "INSERT INTO users (name, institution, course, address, email, password, phone_number) VALUES ('$name','$institution','$course','$address', '$email', '$password', '$phone_number')";

            if (mysqli_query($conn, $sql)) {
                echo "Registration successful";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
    </body>
</html>
