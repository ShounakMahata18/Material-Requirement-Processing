<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meterial Requirement Prcessing</title>
    <link rel="stylesheet" href="CSS/user.css">
</head>
<body>
    <header>
        <h1>Meterial Requirement Prcessing</h1>
        <div id="right-nav">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#contact-us">CONTACT US</a></li>
                <li><a href="login.html">LOGIN</a></li>
            </ul>
        </div>
    </header>

    <div id="content">
        <div id="user-details">
            <svg width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"/>
                <path d="M12.0002 14.5C6.99016 14.5 2.91016 17.86 2.91016 22C2.91016 22.28 3.13016 22.5 3.41016 22.5H20.5902C20.8702 22.5 21.0902 22.28 21.0902 22C21.0902 17.86 17.0102 14.5 12.0002 14.5Z"/>
                </svg>
            <span>User Name</span>      
        </div>
        <div id="order">
            <h3>ORDER PRODUCTS</h3>
            <form method="post" action="">
                <table>
                    <tr><td>Requirement Date</td></tr>
                    <tr><td><input type="date" name="input_date"></td></tr>
                    <tr><td>Product Name</td></tr>
                    <tr><td>
                        <select name="input_product">
                            <option value="">Select a Product</option>
                            <option value="table">Tables</option>
                            <option value="chair">Chairs</option>
                        </select>
                    </td></tr>
                    <tr><td>Required Quantity</td></tr>
                    <tr><td><input type="number" placeholder="Qty."></td></tr>
                    <tr><td><input type="submit" name="submit" value="ORDER"></td></tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>