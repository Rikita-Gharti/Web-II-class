<html>
 
   <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="file" />
    <input type="submit" value="submit"/>

    </form>
    <body>
    <?php
$filename = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];

$target_dir = "webs/";

if(move_uploaded_file($tempname, $target_dir.$filesname)){
    echo "file uploaded successfully:";
}
else{
    echo "file upload failed";
    echo "<br>";
}

//check if file size is 2 mb or not
//2mn=2*1024kb=2*1024*1024bytes
?>
 </body>
</html>
