<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Vendor</title>
    <link rel="stylesheet" href="factory.css">

    <?php include "../include/head.php";
    include "../include/connection.php";
    ?>

</head>

<body>
    <h2>Sign Up</h2>
    <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="d-flex flex-column p-4 w-50" method="post">
        <div class="field">
            <label for="email">Enter Email: </label>
            <input type="email" name="email" id="email">
        </div>
        <div class="field">
            <label for="password">Enter Password: </label>
            <input type="password" name="password" id="password">
        </div>
        <div class="field">
            <label for="username">Enter username: </label>
            <input type="text" name="username" id="username">
        </div>
        <div class="field">
            <label for="sells">Enter What you sell: </label>
            <input type="text" name="sells" id="sells">
        </div>
        <button class="btn btn-primary" name="submit">
            Submit Now
        </button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $sells = $_POST['sells'];
        $qr1 = mysqli_query($conn, "select * from tbl_vendors where email = '$email'");
        $rows = mysqli_num_rows($qr1);
        if ($rows==0) {
            $query = "INSERT INTO `tbl_vendors`(`username`, `email`, `password`, `sells`) VALUES ('$username','$email','$password','$sells')";
            $qr = mysqli_query($conn, $query);
            if ($qr) {
                echo "<script>alert('Signed up Successfully')</script>";
                echo "<script>window.location.href = 'login.php'</script>";
            } else {
                echo "<script>alert('Some error occured:" . mysqli_error($conn) . "')</script>";
            }
        }
        else{
            echo "<script>alert('Email already exists')</script>";

        }
    }
    ?>
     <p> Already have an account? <a href="login.php">Login</a></p>
</body>

</html>