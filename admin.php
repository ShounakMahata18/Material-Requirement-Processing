<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Requirement Processing</title>
    <link rel="stylesheet" href="CSS/admin.css">
</head>

<body>
    <header>
        <h1>Meterial Requirement Prcessing</h1>
        <div id="right-nav">
            <ul>
                <li><a href="home.html">HOME</a></li>
                <li><a href="home.html">ABOUT</a></li>
                <li><a href="home.html">CONTACT US</a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </div>
    </header>

    <div id="body">
        <div id="MRP">
            <h3>Meterial Requirement Prcessing</h3>
            <table>
                <tr>
                    <th>PRODUCT NAME</th>
                    <th>WOOD</th>
                    <th>GLUE</th>
                    <th>WOOD POLISH</th>
                    <th>GLASS</th>
                    <th>CUSHION</th>
                    <th>PRICE</th>
                </tr>
                <tr>
                    <td>Table</td>
                    <td>10</td>
                    <td>0.15</td>
                    <td>0.25</td>
                    <td>12</td>
                    <td>0</td>
                    <td>₹ 2700</td>
                </tr>
                <tr>
                    <td>Chair</td>
                    <td>7</td>
                    <td>0.1</td>
                    <td>0.45</td>
                    <td>0</td>
                    <td>10</td>
                    <td>₹ 650</td>
                </tr>
            </table>
        </div>
        <div id="PD">
            <h3>PRODUCT DEMAND</h3>
            <table>
                <tr>
                    <th>ORDER NO</th>
                    <th>DEMAND DATE</th>
                    <th>PRODUCT NAME</th>
                    <th>ORDER QUANTITY</th>
                    <th>SHOW BILL</th>
                </tr>
            </table>
            <div id="scroll">
                <table>
                    <tr>
                        <td>1</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>15 </td>
                        <td>09-03-2024</td>
                        <td>Table</td>
                        <td>20</td>
                        <td><a href="">Click Here</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="bill">
            <h4>BILL</h4>
            <p id="serial">SL. NO.:</p>
            <p id="date">Date: </p>
            <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 8L8 16M8.00001 8L16 16" stroke="#32a1f6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            <table>
                <tr>
                    <td>Wood: </td>
                    <td>QTY</td>
                    <td>Price</td>
                </tr>
                <tr>
                    <td>GLUE: </td>
                    <td>QTY</td>
                    <td>Price</td>
                </tr>
                <tr>
                    <td>WOOD POLISH: </td>
                    <td>QTY</td>
                    <td>Price</td>
                </tr>
                <tr>
                    <td>GLASS: </td>
                    <td>QTY</td>
                    <td>Price</td>
                </tr>
                <tr>
                    <td>CUSHION: </td>
                    <td>QTY</td>
                    <td>Price</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total Bill: </td>
                    <td>₹</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Order By:  </td>
                    <td>Date</td>
                </tr>
            </table>
            <input type="button" value="DOWNLOAD">
        </div>
    </div>
    </div>
</body>

</html>