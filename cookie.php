<?php
//shift+ctrl+i
//imp question: cookie and session
//read
//-local storage
//-session storage
setcookie("lagrandee", "webiii" ,time() + 86400);


if(isset($_COOKIE["lagradee"])){
    echo "cookie is ".$_COOKIE["lagrandee"];
}
else{
    echo "cookie not set";
}
print_r($_COOKIE);
?>