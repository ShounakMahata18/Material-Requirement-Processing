<?php
include "../include/connection.php";
if (isset($_COOKIE['factory_login_cookie'])) {
    $userid = $_COOKIE['factory_login_cookie'];
    $qr = mysqli_query($conn, "select * from tbl_factory where id = $userid");
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
    <title>Check New Orders</title>
    <?php include "../include/head.php"; ?>
    <link rel="stylesheet" href="factory.css">

</head>

<body>
    <a href="dashboard.php" style="text-decoration: none; color:black;">
        <h4 class="d-flex justify-content-start align-items-center m-3"><span class="material-symbols-outlined">
                arrow_back
            </span></h4>
    </a>
    <h2>Welcome <?= $db['email']; ?></h2>

    <div class="orders">
    <?php 
    $qr = mysqli_query($conn, "SELECT * FROM tbl_user_orders WHERE delivery_status = 0");
    while ($order = mysqli_fetch_array($qr)) {
        $qrr = mysqli_query($conn, "SELECT username FROM tbl_user WHERE id = ".$order['ordered_by']."");
        $name = mysqli_fetch_array($qrr);
        $ordered_on = date("F j, Y, g:i a", strtotime($order['ordered_on']));
        ?>
        <div class='wrapper'>
            <span>Ordered by: <?= $name['username'] ?></span>
            <p class='text-danger'>Chair: <?= $order['chair_count'] ?>
            Table: <?= $order['table_count'] ?></p>
            <span><?= $ordered_on ?></span>
            <span>Payment Received: <?= $order['payment_status']=="0" ? "NO":"YES" ?></span><br>
            <?php 
            $button_disabled = ($order['payment_status']== "0" || $order['workflow_added'] == "1") ? "disabled" : ""; 
            ?>
            <a href="update-workflow.php?id=<?= $order['id']?>" class="<?= $button_disabled?>"><button class="btn btn-warning" <?= $button_disabled ?>>
                Add to Workflow
            </button></a>
        </div>
        <?php
    }
    ?>
</div>


    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
</body>

</html>