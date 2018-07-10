<!doctype html>
<html>
    <link rel="stylesheet" href="subject.php">
    <body>
        <div>
            <?php
            $hostname = "localhost";
            $username = "root";
            $password = "2345";
            $database = "ungineering";

            $conn = mysqli_connect($hostname, $username, $password, $database);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $name = $_POST['subject'];
            $sql = "SELECT 
            study_mayerials.website_link,study_mayerials.vedio_link
            FROM study_materials 
            INNER JOIN subjects 
            ON study_materials.subject_id= subjects.id
            WHERE 
            subjects.name=$name";

            if (mysqli_query($conn, $sql)) {
                ?>
                <a>$sql</a>
                <?php
            } 
            else {
                echo "Error: PLEASE WRITE THE CORRECT SUBJECT CODE!! ";
            }
            mysqli_close($conn);
            ?>       
        </div>
    </body>
</html>
