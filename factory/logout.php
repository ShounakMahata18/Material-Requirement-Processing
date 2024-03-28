<?php 
if (isset($_COOKIE['factory_login_cookie'])) {
    setcookie('factory_login_cookie', '', time() - 3600, "/");
    header("location:login.php");
}
else{
    header("location:login.php");
}

?>