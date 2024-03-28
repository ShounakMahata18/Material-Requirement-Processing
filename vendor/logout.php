<?php 
if (isset($_COOKIE['vendor_login_cookie'])) {
    setcookie('vendor_login_cookie', '', time() - 3600, "/");
    header("location:login.php");
}
else{
    header("location:login.php");
}

?>