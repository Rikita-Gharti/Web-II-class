<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        .error { color: red; font-size: 14px; }
        .container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
        }
        .left-box, .right-box {
            flex: 1;
        }
        .field { margin-bottom: 12px; }
    </style>
</head>
<body>

<h2>User Registration Form</h2>
<form action="validation.php" method="POST">
    <div class="container">
        <!-- Left: About -->
        <div class="left-box">
            <div class="field">
                <label>About:</label><br>
                <textarea name="about" rows="18" cols="35"><?= $old['about'] ?? '' ?></textarea>
            </div>
        </div>

        <!-- Right: All Other Fields -->
        <div class="right-box">
            <div class="field">
                User id: *<br>
                <input type="text" name="userid" value="<?= $old['userid'] ?? '' ?>">
                <div class="error"><?= $errors['userid'] ?? '' ?></div>
            </div>

            <div class="field">
                Password: *<br>
                <input type="password" name="password">
                <div class="error"><?= $errors['password'] ?? '' ?></div>
            </div>

            <div class="field">
                First Name: *<br>
                <input type="text" name="firstname" value="<?= $old['firstname'] ?? '' ?>">
                <div class="error"><?= $errors['firstname'] ?? '' ?></div>
            </div>

            <div class="field">
                Address: *<br>
                <input type="text" name="address" value="<?= $old['address'] ?? '' ?>">
                <div class="error"><?= $errors['address'] ?? '' ?></div>
            </div>

            <div class="field">
                Country: *<br>
                <select name="country">
                    <option value="">--Select--</option>
                    <option value="Nepal" <?= ($old['country'] ?? '') === 'Nepal' ? 'selected' : '' ?>>Nepal</option>
                    <option value="India" <?= ($old['country'] ?? '') === 'India' ? 'selected' : '' ?>>India</option>
                    <option value="USA" <?= ($old['country'] ?? '') === 'USA' ? 'selected' : '' ?>>USA</option>
                </select>
                <div class="error"><?= $errors['country'] ?? '' ?></div>
            </div>

            <div class="field">
                Zip Code: *<br>
                <input type="text" name="zip" value="<?= $old['zip'] ?? '' ?>">
                <div class="error"><?= $errors['zip'] ?? '' ?></div>
            </div>

            <div class="field">
                Email: *<br>
                <input type="text" name="email" value="<?= $old['email'] ?? '' ?>">
                <div class="error"><?= $errors['email'] ?? '' ?></div>
            </div>

            <div class="field">
                Sex: *<br>
                <input type="radio" name="sex" value="Male" <?= ($old['sex'] ?? '') === 'Male' ? 'checked' : '' ?>> Male
                <input type="radio" name="sex" value="Female" <?= ($old['sex'] ?? '') === 'Female' ? 'checked' : '' ?>> Female
                <div class="error"><?= $errors['sex'] ?? '' ?></div>
            </div>

            <div class="field">
                Language: *<br>
                <input type="checkbox" name="language[]" value="English" <?= in_array('English', $old['language'] ?? []) ? 'checked' : '' ?>> English
                <input type="checkbox" name="language[]" value="Nepali" <?= in_array('Nepali', $old['language'] ?? []) ? 'checked' : '' ?>> Nepali
            </div>

            <input type="submit" value="Submit">
        </div>
    </div>
</form>

</body>
</html>

<?php
session_start();

$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];

unset($_SESSION['errors'], $_SESSION['old']);
?>


