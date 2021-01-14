<html>
<head>
    <title>More Info</title>
    <link rel="stylesheet" href="CSS\template.css">
</head>
<body>
<?php
        include("header.php");
        ?>
<?php
    include('dbconnect.php');
    $id = $_GET['id'];
    $qry="SELECT * FROM `sale items` WHERE `Sr_No`=$id";
    $run = mysqli_query($connect , $qry);
    if ($run ==  TRUE)
    { 
        while($data = mysqli_fetch_assoc($run)){ 
?>

    <table align= "center">
        <tr>
            <th colspan="2">Product: <?php echo $data['Name'] ?></th>
        </tr>
        <tr>
            <td rowspan="5" class = "cart-img"><img src="Product Images/<?php echo $data['image'] ?>"></td>
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
               <td class = "temp-button"colspan="2"><a href='AddtoCart.php?id=<?php echo $data['Sr_No'] ?>'><button>ADD to Cart</button></a></td>
        </tr>
    </table>

<?php
        }
    }


?>
</body>
</html>