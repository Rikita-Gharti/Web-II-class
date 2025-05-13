<?php
session_start();

?>

<html>
    <body>
      <?php
      //session only exist as long as browser is on
      $_SESSION["name"]= "lagrandee";
      $_SESSION["class"]= "webii";

      echo "session variable are set";

       ?>
        </body>
    </html>