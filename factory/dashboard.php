<?php 
include "../include/connection.php";
if (isset($_COOKIE['factory_login_cookie'])) {
    $userid = $_COOKIE['factory_login_cookie'];
    $qr = mysqli_query($conn, "select * from tbl_factory where id = $userid");
    $db = mysqli_fetch_array($qr);
}
else{
    header("location:login.php");
}
// hello
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php include "../include/head.php";?>
    <link rel="stylesheet" href="factory.css">
    
</head>
<body>
    <h2>Welcome <?= $db['email'];?></h2>
    <div class="btngroup">
       <a href="checkorders.php">
        <button class="btn btn-primary">Check Orders</button>
    </a>
    <a href="workflow.php">
        <button class="btn btn-primary">Release Tenders</button>
    </a> 
    </div>
    
    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
    <a href="../index.php">Back to Home</a>
</body>
</html>