<?php
include ("connect.php");
$name = "";
$password = "";

$sql = "INSERT INTO users(name , password)
VALUES('$name' , '$password')";

try {
    if (mysqli_query($conn, $sql)) {
        echo "data insertion done";
    }
} catch (mysqli_sql_exception $e) {
    echo "exception caught";
}

mysqli_close($conn);
?>
