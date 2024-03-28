<?php
include "../include/connection.php";
if (isset($_COOKIE['vendor_login_cookie'])) {
    $userid = $_COOKIE['vendor_login_cookie'];
    $qr = mysqli_query($conn, "select * from tbl_vendors where id = $userid");
    $db = mysqli_fetch_array($qr);
} else {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accepted Tenders</title>
    <?php include "../include/head.php"; ?>
    <style>
        button[type = "button"]{
            height: 30px;
            width: 30px;
            border: none;
        }
    </style>
        <link rel="stylesheet" href="factory.css">

</head>

<body>
<a href="dashboard.php" style="text-decoration: none; color:black;">
        <h4 class="d-flex justify-content-start align-items-center m-3"><span class="material-symbols-outlined">
                arrow_back
            </span></h4>
    </a>
    <h2>Welcome <?= $db['username'] ?></h2>
    <h4>Here are your Accepted Tenders:</h4>
    <div class="orders">
        <?php $qr2 = mysqli_query($conn, "select * from tbl_factory_tender where accepted_by = '$userid'");
    while ($row = mysqli_fetch_array($qr2)) {
        $ordered_on = date("F j, Y, g:i a", strtotime($row['release_date']));
        $ordered_on2 = date("F j, Y, g:i a", strtotime($row['acceptance_date']));
        ?>
            <div class='wrapper'>
            <h4 class='text-danger'><?= $row['type'] ?></h4>
            <span class="text-info">Count: <?= $row['count'] ?></span>
            <span>Released on: <?= $ordered_on ?></span><br>
            <span>Accepted on: <?= $ordered_on2 ?></span><br>
            <?php 
            $paid = ($row['delivered']== "0") ? false : true; 
            ?>
            
            <a href="mark.php?id=<?= $row['id']?>" class="<?= $paid ? "disabled":""?>"><button class="btn <?= $paid ? "btn-primary":"btn-info"?>" <?= $paid ? "disabled":""?>>
            <?= $paid ? "Delivered":"Mark As Delivered"?>
            </button></a>
        </div>
        <?php
    }
    
    ?>
    </div>
    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
</body>

</html>
