<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meterial Requirement Prcessing</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <header>
        <h1>Meterial Requirement Prcessing</h1>
        <div id="right-nav">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="user.php">ABOUT</a></li>
                <li><a href="admin.php">CONTACT US</a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </div>
    </header>
    <div id="body">
        <div id="form">
            <form action="">
                <h2>login</h2>
                <table>
                    <tr>
                        <td><input type="text" placeholder="Name"></td>
                    </tr>
                    <tr>
                        <td><input type="number" placeholder="Contact No."></td>
                    </tr>
                    <tr>
                        <td><input type="date" name="" id="" placeholder="Date Of Birth"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" id="user" name="logintype" checked>
                            <label for="user">User</label>
                            <input type="radio" id="admin" name="logintype">
                            <label for="admin">Admin</label>
                                
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="LOGIN">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
