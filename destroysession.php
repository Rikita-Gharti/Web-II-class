<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        //remove all session variables
        session_unset();

        //destroy the session
        session_destroy();
        echo "Session variables are cleared and session is destroyed.";
        ?>  
    </body>
</html>