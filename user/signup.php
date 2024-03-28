<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up User</title>
    <?php include "../include/head.php";
    include "../include/connection.php";
    ?>
    <link rel="stylesheet" href="user.css">

</head>

<body>
    <h2>Sign Up</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="d-flex flex-column p-4 w-50 form" method="post">
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
        <button class="btn btn-primary" name="submit">
            Submit Now
        </button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $qr1 = mysqli_query($conn, "select * from tbl_user where email = '$email'");
        $num = mysqli_num_rows($qr1);
        if (!$num) {
            $query = "INSERT INTO `tbl_user`(`email`, `password`, `username`) VALUES ('$email','$password','$username')";
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