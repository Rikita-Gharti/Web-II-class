<?php
include ("connect.php");

$new_name = "hello";
$new_password = "1234";

$sql = "UPDATE users
SET password = '$new_password', name = 'new_name'";

try{
    mysqli_query($conn, $sql);
    echo"user password successfully updated";

}
catch (mysqli_sql_exception $e) {
    echo "Could not update: " . $e->getMessage();
}


mysqli_close($conn);
?>