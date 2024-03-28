<?php 
include "../include/connection.php";
if (isset($_COOKIE['user_login_cookie'])) {
    $userid = $_COOKIE['user_login_cookie'];
    $qr = mysqli_query($conn, "select * from tbl_user where id = $userid");
    $db = mysqli_fetch_array($qr);
}
else{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <?php include "../include/head.php";?>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <h2>Welcome <?= $db['username'] ?></h2>
    <div class="btngroup">
    <a href="buy.php">
        <button class="btn btn-primary">Give Orders</button>
    </a> 
    <a href="vieworders.php">
        <button class="btn btn-primary">View Orders</button>
    </a> 
    </div>
    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
    <a href="../index.php">Back to Home</a>
</body>
</html>