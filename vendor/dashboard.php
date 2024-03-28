<?php 
include "../include/connection.php";
if (isset($_COOKIE['vendor_login_cookie'])) {
    $vendorid = $_COOKIE['vendor_login_cookie'];
    $qr = mysqli_query($conn, "select * from tbl_vendors where id = $vendorid");
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
    <title>vendor Dashboard</title>
    <?php include "../include/head.php";?>
    <link rel="stylesheet" href="factory.css">

</head>
<body>
    <h2>Welcome <?= $db['username'] ?></h2>
    <div class="btngroup">
    <a href="accept.php">
        <button class="btn btn-primary">View Available Tenders</button>
    </a>
    <a href="viewtenders.php">
        <button class="btn btn-primary">View Accepted Tenders</button>
    </a> 
    </div>
    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
    <a href="../index.php">Back to Home</a>
</body>
</html>