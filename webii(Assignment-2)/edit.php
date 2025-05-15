<?php
include "db.php";
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM contacts WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">    
<title>Edit Contact</title></head>
<body>
<h2>Edit Contact</h2>
<form method="POST">
    First Name: <input type="text" name="firstname" value="<?= $row['firstname'] ?>"><br>
    Designation: <input type="text" name="designation" value="<?= $row['designation'] ?>"><br>
    Address1: <input type="text" name="address1" value="<?= $row['address1'] ?>"><br>
    Address2: <input type="text" name="address2" value="<?= $row['address2'] ?>"><br>
    City: <input type="text" name="city" value="<?= $row['city'] ?>"><br>
    State: <input type="text" name="state" value="<?= $row['state'] ?>"><br>
    Email ID: <input type="email" name="emailid" value="<?= $row['emailid'] ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $sql = "UPDATE contacts SET 
                firstname='{$_POST['firstname']}',
                designation='{$_POST['designation']}',
                address1='{$_POST['address1']}',
                address2='{$_POST['address2']}',
                city='{$_POST['city']}',
                state='{$_POST['state']}',
                emailid='{$_POST['emailid']}'
            WHERE id=$id";
    if ($conn->query($sql)) {
        echo "Updated. <a href='index.php'>Back</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
</body>
</html>
