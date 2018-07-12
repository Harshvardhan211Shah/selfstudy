<?php
    session_start();
    if (!isset($_SESSION['name']) || $_SESSION['name']==null){
        exit("ACCESS RESTRICTED");  
    }
?>
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

            $flag = 0;
            $row = mysqli_fetch_array($result);
            if ($row != null && $flag == 0) {
                ?>
                <div class="website"><a href="<?php echo $row['website_link']; ?>" target="_blank">Visit Website</a></br></div>
                <div class="video"><a href="<?php echo $row['vedio_link']; ?>" target="_blank">Visit Video</a></br></div>
                <?php $flag = 1; 
            }
                ?>
             
                <?php
                if ($flag == 0) {
                    echo "PLEASE ENTER CORRECT CODE";
                }
                mysqli_close($conn);
                ?>       
        </div>
    </body>
</html>
