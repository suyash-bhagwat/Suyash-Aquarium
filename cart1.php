<html>
<head>
    <link rel="stylesheet" href="CSS\cart.css">
</head>


<?php

function Remove($name,$id){
    ?>
    <script>
    alert(<?php echo $id; ?>)
    </script>
<?php
}

?>
<?php
session_start();
include('dbconnect.php');
if(isset($_SESSION['uid'])){
    $id = $_SESSION['uid'];
    $num = 0;
    $total = 0;
    $qry="SELECT * FROM `cart` WHERE `uid`=$id";
    $run = mysqli_query($connect , $qry);
        if ($run ==  TRUE)
        { 
             ?>
           <h2 class="section-header">CART</h2>
           <section class="container content-section">
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">Item</span>
                    <span class="cart-item cart-header cart-column">Price</span>
                    <span class="cart-item cart-header cart-column">Quantity</span>
                </div>
           <?php
            while($data = mysqli_fetch_assoc($run))
            {   $uid = $data['uid'];
                $image = $data['Image'] ;
                $name =  $data['Name'];
                $price = $data['Price'];
                $total = $total + $data['Price'];
                $num = $num + 1;
                ?>
                    <div class="cart-items">
                        <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="Product Images/<?php echo $image ?>" width="100" height="100">
                                <span class="cart-item-title"> <?php echo $name ?></span>
                            </div>
                            <span class="cart-price cart-column">&#8377 <?php echo $price ?></span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="1">
                                <a href="cart1.php?remove=true&name=<?php echo $_SERVER['PHP_SELF'];?>">Remove</a>
                        </div>
                    </div>
                <?php 
            }
            ?>
                <div class="cart-total">
                        <strong class="cart-total-title">Total</strong>
                        <span class="cart-total-price">&#8377 <?php echo $total ?></span>
                    </div>
                <?php if($num >= 1) { ?>
                    <a href="Purchase.php?total=<?php echo $total ?>&id=<?php echo $id ?>"><button class="btn btn-primary btn-purchase" type="button">Purchase</button></a>
                </section>
        

}

<?php
                }
            }

        }
?>

</html>