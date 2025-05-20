<!DOCTYPE html>
<html>
<head>
    <title>Job Application Upload</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input[type="file"] {
            margin-top: 5px;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background: #4CAF50;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <h2>Upload Resume and Photograph</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label>Resume (PDF/DOC, max 500KB):</label>
        <input type="file" name="resume" required><br><br>

        <label>Photograph (JPG/JPEG, max 1MB):</label>
        <input type="file" name="photo" required><br><br>

        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
