<?php
    session_start();
?>
<!doctype html>
<html>
    <body>
        <?php
            if (isset($_SESSION['name'])) {
                echo $_SESSION['name'];
            }
          ?>
     </body>
</html>
