<?php
include "../include/connection.php";
if (isset($_COOKIE['factory_login_cookie'])) {
    $userid = $_COOKIE['factory_login_cookie'];
    $qr = mysqli_query($conn, "select * from tbl_workflow where id = 1");
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
    <title>Current Material Needs</title>
    <?php include "../include/head.php"; ?>
    <link rel="stylesheet" href="factory.css">

</head>
<body>
<a href="dashboard.php" style="text-decoration: none; color:black;">
        <h4 class="d-flex justify-content-start align-items-center m-3"><span class="material-symbols-outlined">
                arrow_back
            </span></h4>
    </a>
    <h2>Currently the Needed Products are:</h2>
    <h5>Chairs: <span><?= $db['chair_count'] ?></span></h5>
    <h5>Tables: <span><?= $db['table_count'] ?></span></h5>
    <?php 
            $button_disabled = ($db['chair_count']== "0" && $db['table_count'] == "0") ? "disabled" : ""; 
            ?>
    <a href="release.php" class="<?= $button_disabled?>"><button class="btn btn-info" <?= $button_disabled ?>>
                Release Tenders
            </button></a>
    <a href="viewtenders.php"><button class="btn btn-info">
                View Tenders
            </button></a>

</body>
</html>