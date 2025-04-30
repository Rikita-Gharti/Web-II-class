<?php
include ("connect.php");

$id_deletion=3;

$sql = "DELETE from users
WHERE id= '$id_deletion'";

try{
    mysqli_query($conn, $sql);
    echo "user deleted updated";

}
catch (mysqli_sql_exception $e) {
    echo "Could not delete: " . $e->getMessage();
}


mysqli_close($conn);
?>