<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Add Contact</title></head>
<body>
<h2>Add New Contact</h2>
<form method="POST">
    First Name: <input type="text" name="firstname" required><br>
    Designation: <input type="text" name="designation"><br>
    Address1: <input type="text" name="address1"><br>
    Address2: <input type="text" name="address2"><br>
    City: <input type="text" name="city"><br>
    State: <input type="text" name="state"><br>
    Email ID: <input type="email" name="emailid" required><br>
    <input type="submit" name="save" value="Save">
</form>

<?php
if (isset($_POST['save'])) {
    $sql = "INSERT INTO contacts (firstname, designation, address1, address2, city, state, emailid)
            VALUES ('{$_POST['firstname']}', '{$_POST['designation']}', '{$_POST['address1']}', 
                    '{$_POST['address2']}', '{$_POST['city']}', '{$_POST['state']}', '{$_POST['emailid']}')";
    if ($conn->query($sql)) {
        echo "Contact added. <a href='index.php'>View All</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
</body>
</html>
