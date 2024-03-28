<?php 
if (isset($_COOKIE['user_login_cookie'])) {
    setcookie('user_login_cookie', '', time() - 3600, "/");
    header("location:login.php");
}
else{
    header("location:login.php");
}

?>