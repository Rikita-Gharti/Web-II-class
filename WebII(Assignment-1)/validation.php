<?php
session_start();

$errors = [];
$old = [];

function clean($data) {
    return trim(htmlspecialchars($data));
}

$userid = clean($_POST['userid'] ?? '');
$password = clean($_POST['password'] ?? '');
$firstname = clean($_POST['firstname'] ?? '');
$address = clean($_POST['address'] ?? '');
$country = clean($_POST['country'] ?? '');
$zip = clean($_POST['zip'] ?? '');
$email = clean($_POST['email'] ?? '');
$sex = clean($_POST['sex'] ?? '');
$language = $_POST['language'] ?? [];
$about = clean($_POST['about'] ?? '');

// Save old inputs
$old = compact('userid', 'firstname', 'address', 'country', 'zip', 'email', 'sex', 'language', 'about');

// Validate required fields
if ($userid === '') $errors['userid'] = "User ID is required.";
if ($password === '') $errors['password'] = "Password is required.";
if ($firstname === '') $errors['firstname'] = "First name is required.";
if ($address === '') $errors['address'] = "Address is required.";
if ($country === '') $errors['country'] = "Country is required.";
if ($zip === '') $errors['zip'] = "Zip Code is required.";
elseif (!preg_match('/^[0-9]{4,6}$/', $zip)) $errors['zip'] = "Invalid Zip Code.";

if ($email === '') $errors['email'] = "Email is required.";
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Invalid email format.";

if ($sex === '') $errors['sex'] = "Sex is required.";

// If there are errors, go back to form
if ($errors) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $old;
    header("Location: form.php");
    exit;
}

// Success message
echo "<h2>Form Submitted Successfully</h2>";
echo "<p><strong>User ID:</strong> $userid</p>";
echo "<p><strong>Name:</strong> $firstname</p>";
echo "<p><strong>Address:</strong> $address</p>";
echo "<p><strong>Country:</strong> $country</p>";
echo "<p><strong>Zip Code:</strong> $zip</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Sex:</strong> $sex</p>";
echo "<p><strong>Language(s):</strong> " . implode(', ', $language) . "</p>";
echo "<p><strong>About:</strong> $about</p>";
?>