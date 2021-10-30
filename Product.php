<?php
session_start();
include('dbconnect.php');
 if(isset($_SESSION['uid'])){$id = $_SESSION['uid'] ? $_SESSION['uid'] : null;}
 if (!empty($id)){
     $qry = "SELECT `Role` FROM `register` WHERE ID=" . $id;
     $run = mysqli_query($connect , $qry);
     $data = mysqli_fetch_assoc($run);
     if($data['Role'] == 1){
?>
<html lang="en">
    <head>
        <title>Accessories</title>
        <link rel="stylesheet" href="CSS\Product.css">
    </head>
<body>  
    <form action="uploadp.php" method="post" enctpye="multipart/form-data">
        <table  class ="add" align ="center" style="margin-top: 200px; " >
            <th colspan="2">Add Product</th>
            <tr>
                <td>Category:</td><td><select name="category" id="cars">
                    <option value="1">1-Filters</option>
                    <option value="2">2-Food</option>
                    <option value="3">3-Bowl</option>
                    <option value="4">4-Plastic Plants</option>
                    <option value="5">5-Oxygen Machines</option>
                    <option value="6">6-Aquarium Pipe</option>
                    <option value="7">7-Siphon Pipes</option>
                    <option value="8">8-Aqurium Tube lights</option>
                </select></td>
            </tr>
            <tr>
                <td>Item Code:</td><td><input type="text" name="code" required="required" placeholder='Code'></td>
            </tr>
            <tr>
                <td>Item Name:</td><td><input type="text" name="name" required="required" placeholder='Name'></td>
            </tr>
            <tr>
                <td>Available Quantity:</td><td><input type="text" name="quantity" required="required" placeholder='Enter Quantity'></td>
            </tr>
            <tr>
                <td>Price/piece:</td><td><input type="text" name="price" required="required" placeholder='Price'></td>
            </tr>
            <tr>
                <td>Image:</td><td><input type="file" name="pimage" required="required"></td>
            </tr>
            <tr>
                <td colspan="2"><button><b>Add</b></button></td>
            </tr>
        </table>

<?php
     }
else
{
    echo 'You are not authorized to this page';
}
 }
?>
</body>
</html>