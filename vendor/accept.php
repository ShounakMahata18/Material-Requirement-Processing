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
    <title>Accept Tenders</title>
    <?php include "../include/head.php"; ?>
    <link rel="stylesheet" href="factory.css">

</head>

<body>
<a href="dashboard.php" style="text-decoration: none; color:black;">
        <h4 class="d-flex justify-content-start align-items-center m-3"><span class="material-symbols-outlined">
                arrow_back
            </span></h4>
    </a>
    <h2>Welcome <?= $db['username'] ?></h2>
    <h4>Free Tenders:</h4>
    <div class="tenders">
        <?php $qr2 = mysqli_query($conn, "select * from tbl_factory_tender where type = '".$db['sells']."' and accepted_status = '0'");
    while ($row = mysqli_fetch_array($qr2)) {
        $ordered_on = date("F j, Y, g:i a", strtotime($row['release_date']));
        ?>
            <div class='wrapper'>
            <h4 class='text-danger'><?= $row['type'] ?></h4>
            <span class="text-info">Count: <?= $row['count'] ?></span>
            <span><?= $ordered_on ?></span><br>
            <a href="acceptnow.php?id=<?= $row['id']?>&by=<?= $userid?>"><button class="btn btn-info">
            Accept Tender
            </button></a>
        </div>
        <?php
    }
    
    ?>
    </div>
    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
</body>

</html>
