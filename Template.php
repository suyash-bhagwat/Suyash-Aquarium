<html>
<head>
    <title>More Info</title>
    <link rel="stylesheet" href="CSS\template.css">
</head>
<body>
<?php
    include('dbconnect.php');
    $id = $_GET['id'];
    $qry="SELECT * FROM `sale items` WHERE `Sr_No`=$id";
    $run = mysqli_query($connect , $qry);
    if ($run ==  TRUE)
    { 
        while($data = mysqli_fetch_assoc($run)){ 
?>
    <table class="product-detail" >
    <tr>
        <th colspan="2">Product: <?php echo $data['Name'] ?></th>
    </tr>
    <tr>
        <td rowspan="5"><img src="Product Images/<?php echo $data['image'] ?>"></img></td>
    </tr>
    <tr>
        <td>Item Code: <?php echo $data['Item_code'] ?></td>
    </tr>
    <tr>
        <td>Price per piece: &#8377  <?php echo $data['Price'] ?></td>
    </tr>
        >
    <tr>
        <td>Available Quantity: <?php echo $data['AvailQuantity'] ?></td>
    </tr>
    <tr>
        <td colspan="2"><button>Add to cart</button></td>
    </tr>
</table>

<?php
        }
    }


?>
</body>
</html>