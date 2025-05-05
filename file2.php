<?php
$file= fopen("abc.txt", "r");
//echo var_dump($file);
//fopen= resource return
//fread= resource read garera content dinxa

//$content = fread($file, filesize("abc.txt"));
//$content = fread($file, 3);
//echo $content;
//fclose($file); 

//php fread() function
//echo fgets($file); //first single line ma j xa tehi print garxa

echo fgetc($file); //first one letter matra print hunxa
?>