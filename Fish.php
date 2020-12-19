<html lang="en">
    <head>
        <title>Accessories</title>
        <link rel="stylesheet" href="CSS\basic.css">
    </head>
<body>
    <form action="uploadf.php" method="post">
        <table  class ="add" align ="center" style="margin-top: 200px; " >
            <th colspan="2"><b>Add Fish records</b></th>
            <tr>
                <td>Fish Name:</td><td><input type="text" name="name" required="required" placeholder='Name'></td>
            </tr>
            <tr>
                <td>Available Quantity:</td><td><input type="text" name="quantity" required="required" placeholder='Enter Quantity'></td>
            </tr>
            <tr>
                <td>Price/piece:</td><td><input type="text" name="price" required="required" placeholder='Price'></td>
            </tr>
            <tr>
                <td colspan="2"><button><b>Add</b></button></td>
            </tr>
        </table>
</body>
</html>