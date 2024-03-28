<?php
include "../include/connection.php";
if (isset($_COOKIE['user_login_cookie'])) {
    $userid = $_COOKIE['user_login_cookie'];
    $qr = mysqli_query($conn, "select * from tbl_user where id = $userid");
    $db = mysqli_fetch_array($qr);
} else {
    header("location:login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ccount = $_POST['quantity_1'];
        $tcount = $_POST['quantity_2'];
        $insertQuery = "INSERT INTO `tbl_user_orders`(`ordered_by`, `table_count`, `chair_count`) VALUES ('$userid','$tcount','$ccount')";
        mysqli_query($conn, $insertQuery);

        if ($insertQuery) {
            echo "<script>alert('order submitted')</script>";
            echo "<script>window.location.href = 'dashboard.php'</script>";

        }
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
    <a href="dashboard.php" style="text-decoration: none; color:black; width:100%;">
        <h4 class="d-flex justify-content-start align-items-center m-3"><span class="material-symbols-outlined">
                arrow_back
            </span></h4>
    </a>
    <h2>Welcome <?= $db['username'] ?></h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="items mb-4">
            <?php
            $qrd = mysqli_query($conn, "select * from tbl_product");
            while ($row = mysqli_fetch_array($qrd)) {
                ?>
                <div class="card" style="width: 18rem;">
                    <img src="../<?= $row['image']?>" class="card-img-top" alt="Product image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['name'] ?></h5>
                        <p class="card-text"><?= $row['short_desc'] ?></p>
                        <input type="number" name="quantity_<?= $row['id'] ?>" value="1" readonly>
                        <!-- Increment and decrement buttons -->
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit Order</button>
    </form>
    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
</body>

</html>
