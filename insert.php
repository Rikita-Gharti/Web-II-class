<?php
include ("connect.php");

$name = "hi";
$password = "0123";

$sql = "INSERT INTO users (name,password)
                VALUES ('$name', '$password')";

try{
    mysqli_query($conn, $sql);
    echo"user is now registered";

}
catch (mysqli_sql_exception $e) {
    echo "Could not register: " . $e->getMessage();
}


mysqli_close($conn);
?>