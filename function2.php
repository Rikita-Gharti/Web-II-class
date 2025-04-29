<?php
$name = "BCA STUDENTS";
function sayhello(){
    GLOBAL $name;
    echo "Hello". $name;
}
sayhello();
?>