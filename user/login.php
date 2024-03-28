<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In User</title>
    <?php include "../include/head.php";
    include "../include/connection.php";
    if (!isset($_COOKIE['user_login_cookie'])) {
        
    }
    else{
        header("location:dashboard.php");
    }
    ?>
    <link rel="stylesheet" href="user.css">

</head>

<body>
    <h2>Sign In</h2>
    <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="d-flex flex-column p-4 w-50 form" method="post">
        <div class="field">
            <label for="email">Enter Email: </label>
            <input type="email" name="email" id="email">
        </div>
        <div class="field">
            <label for="password">Enter Password: </label>
            <input type="password" name="password" id="password">
        </div>
        <button class="btn btn-primary" name="submit">
            Submit Now
        </button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $qr1 = mysqli_query($conn, "select * from tbl_user where email = '$email'");
        if ($qr1) {
            $db = mysqli_fetch_array($qr1);
            if ($password == $db['password']) {
            echo "<script>alert('Sucessfully logged in')</script>";
            setcookie("user_login_cookie", $db['id'], time() + (30 * 24 * 60 * 60), '/');
            echo "<script>window.location.href = 'dashboard.php'</script>";
            }
            else{
                echo "<script>alert('Passwords don't match')</script>";
    
                }
        }
        else{
            echo "<script>alert('Email does not exists')</script>";

        }
    }
    ?>
    <p> Don't have an account? <a href="signup.php">Sign up</a></p>

</body>

</html>