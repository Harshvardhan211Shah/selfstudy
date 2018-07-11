<!doctype html>
<html>
    <link rel="stylesheet" href="subject.css">
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

            $name = $_POST['subject'];
            $sql = "SELECT 
            study_materials.website_link,study_materials.vedio_link
            FROM study_materials 
            INNER JOIN subjects 
            ON study_materials.subject_id= subjects.id
            WHERE 
            subjects.name='$name'";
            $result = mysqli_query($conn, $sql);
            
            if (!$result) {
                    die(mysqli_error($conn));
            } 
            $row = mysqli_fetch_array($result);          
            ?><div class="website"><a href="<?php echo $row['website_link'];?>">Visit Website</a></br><div><?php
            ?><div class="video"><a href="<?php echo $row['vedio_link']; ?>">Visit Video</a></br><div><?php
            mysqli_close($conn);
            ?>       
        </div>
    </body>
</html>
