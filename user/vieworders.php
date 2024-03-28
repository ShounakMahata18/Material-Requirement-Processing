<?php
include "../include/connection.php";
if (isset($_COOKIE['user_login_cookie'])) {
    $userid = $_COOKIE['user_login_cookie'];
    $qr = mysqli_query($conn, "select * from tbl_user where id = $userid");
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
    <title>User Dashboard</title>
    <?php include "../include/head.php"; ?>
    <link rel="stylesheet" href="user.css">
    <style>
        button[type = "button"]{
            height: 30px;
            width: 30px;
            border: none;
        }
    </style>
</head>

<body>
<a href="dashboard.php" style="text-decoration: none; color:black;width:100%;">
        <h4 class="d-flex justify-content-start align-items-center m-3"><span class="material-symbols-outlined">
                arrow_back
            </span></h4>
    </a>
    <h2>Welcome <?= $db['username'] ?></h2>
    <h4>Here are your orders:</h4>
    <div class="orders">
        <?php $qr2 = mysqli_query($conn, "select * from tbl_user_orders where ordered_by = $userid");
    while ($row = mysqli_fetch_array($qr2)) {
        $ordered_on = date("F j, Y, g:i a", strtotime($row['ordered_on']));
        ?>
            <div class='wrapper'>
            <p class='text-danger'>Chair: <?= $row['chair_count'] ?><br>
            Table: <?= $row['table_count'] ?></p>
            <span><?= $ordered_on ?></span><br>
            <?php 
            $paid = ($row['payment_status']== "0") ? false : true; 
            ?>
            <span class="text-danger mb-3"><?= $row['delivery_status']=="0" ? "Not Yet Delivered":""?></span><br>
            
            <a href="pay.php?id=<?= $row['id']?>" class="mt-3 d-flex w-100 <?= $paid ? "disabled":""?>"><button class="btn  d-flex w-100 text-center justify-content-center <?= $paid ? "btn-success":"btn-info"?>" <?= $paid ? "disabled":""?>>
            <?= $paid ? "Paid":"Pay now"?>
            </button></a>
        </div>
        <?php
    }
    
    ?>
    </div>
    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
</body>

</html>
