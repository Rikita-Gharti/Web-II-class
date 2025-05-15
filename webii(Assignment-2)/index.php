<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Address Book</title></head>
<body>
<h2>Address Book</h2>

<form method="GET">
    Search by Email: <input type="text" name="emailid">
    <button type="submit">Search</button>
</form>

<a href="add.php">Add New Contact</a><br><br>

<?php
if (isset($_GET['emailid'])) {
    $email = $conn->real_escape_string($_GET['emailid']);
    $result = $conn->query("SELECT * FROM contacts WHERE emailid = '$email'");
} else {
    $result = $conn->query("SELECT * FROM contacts");
}

if ($result->num_rows > 0) {
    echo "<table border='1'><tr>
            <th>Name</th><th>Designation</th><th>Email</th><th>City</th><th>State</th><th>Actions</th>
          </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['firstname']}</td>
                <td>{$row['designation']}</td>
                <td>{$row['emailid']}</td>
                <td>{$row['city']}</td>
                <td>{$row['state']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No contacts found.";
}
$conn->close();
?>
</body>
</html>
