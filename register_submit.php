<!doctype html>
<html>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="register_submit.css">
    <link rel="shortcut icon" href="img/book.png" type="image/x-icon">
    <head>
        <title>REGISTRATION SUCCESSFULL </title>
    <head/>
    <body background = "img/wood.jpg">
        <div>
            <?php
            $hostname = "localhost";
            $username = "root";
            $password = "2345";
            $database = "selfstudy";

            $conn = mysqli_connect($hostname, $username, $password, $database);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $name = $_POST['name'];
            $institution = $_POST['institution'];
            $course = $_POST['course'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone_number = $_POST['phone_number'];
            $sql = "INSERT INTO users (name, institution, course, address, email, password, phone_number) VALUES ('$name','$institution','$course','$address', '$email', '$password', '$phone_number')";

            if (mysqli_query($conn, $sql)) {
                echo "Registration successful";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
            ?>
        </div>
        <div>
            <p>Thank you for registering.<p/>
            <p>
                <?php
                echo "Name: " . $name . "\n";
                echo "Course: " . $name . "\n";
                echo "Institution: " . $institution . "\n";
                echo "Address: " . $address . "\n";
                echo "Email: " . $email . "\n";
                ?>
            <p/>
          <div/>
          <div>
                <a href="homepage.html"><button>CLICK HERE TO GO BACK TO HOME PAGE</button></a>
                <br/>
                <br/>
                <a href="login.html"><button>CLICK HERE TO LOG IN</button></a>
          </div>
    </body>
</html>
