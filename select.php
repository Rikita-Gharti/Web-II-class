<?php
include ("connect.php");
// $sql= "SELECT * FROM users WHERE id>5";
// $sql= "SELECT id, name FROM users WHERE id>5";
//$sql= "SELECT * FROM users ORDERBY id DESC";
//$sql= "SELECT * FROM users WHERE Limit 5";
$sql= "SELECT * FROM users WHERE name='rikita'";

$result= mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row= mysqli_fetch_assoc($result)){
        echo "id:" .$row["id"].".Name:".$row["name"]. "<br>";
    }
}
else{
    echo "0 results";
}

mysqli_close($conn);

?>