<?php
    $hostname = "localhost"; 
    $username = "root";
    $password = "12345";
    $database = "selfstudy";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());  
    }

    $name=$_POST['name'];
    $institution=$_POST['institution'];
    $course=$_POST['course'];
    $address=$_POST['address'];
    $phn=$_POST['phone_number'];      
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql = "INSERT INTO users (name, institution, course, address, email, password, phone_number) VALUES ('$name', '$institution', '$course', '$address', '$email', '$pass', '$phn')";  

    if (mysqli_query($conn, $sql)) {
        	echo "Registration successful";    
    } else {
        	echo "Error: " . $sql . "<br>" . mysqli_error($conn);  
    }
    mysqli_close($conn);  
?>
