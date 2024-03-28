<?php
include "../include/connection.php";
if (isset($_COOKIE['factory_login_cookie'])) {
    $userid = $_COOKIE['factory_login_cookie'];
    $qr = mysqli_query($conn, "select * from tbl_factory_tender where accepted_status = '0'");
} else {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Tenders</title>
    <?php include "../include/head.php"; ?>
    <link rel="stylesheet" href="factory.css">

</head>
<body>
<a href="workflow.php" style="text-decoration: none; color:black;">
        <h4 class="d-flex justify-content-start align-items-center m-3"><span class="material-symbols-outlined">
                arrow_back
            </span></h4>
    </a>
    <h2>Currently Open tenders are:</h2>
    <div class="tenders">

    
    <?php 
    while ($row = mysqli_fetch_array($qr)) {
        ?>
        <div class="tender">
            <span>type of tender: <b><?= $row['type'] ?></b></span>
            <span>Count needed: <b><?= $row['count'] ?></b></span>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>