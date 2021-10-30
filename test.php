var illegalChars = /[\W_]/; // allow only letters and numbers
 
 if (fld.value == "") {
     fld.style.background = 'Yellow';
     error = "You didn't enter a password.\n";
     alert(error);
     return false;

 } else if ((fld.value.length < 7) || (fld.value.length > 15)) {
     error = "The password is the wrong length. \n";
     fld.style.background = 'Yellow';
     alert(error);
     return false;

 } else if (illegalChars.test(fld.value)) {
     error = "The password contains illegal characters.\n";
     fld.style.background = 'Yellow';
     alert(error);
     return false;

 } else if ( (fld.value.search(/[a-zA-Z]+/)==-1) || (fld.value.search(/[0-9]+/)==-1) ) {
     error = "The password must contain at least one numeral.\n";
     fld.style.background = 'Yellow';
     alert(error);
     return false;

 } 


function test() {
        var a = [];
        var b ;
        a = JSON.parse(localStorage.getItem("cart"));
        var result = a.map(b => b.productid);
        console.log(result);
        var test1;
        $.ajax({
            type:"POST",
            url: "cart1.php",
            data: { test1 : result} ,
            success: function(result){
                alert(result);
            }

        });
}

<html>
<head>
    <link rel="stylesheet" href="CSS\cart.css">
</head>
<body>
    <a class="back" href="store.php">Previous page</a>
</body>
<?php

session_start();
if(isset($_GET['remove'])){
if(filter_var($_GET['remove'], FILTER_VALIDATE_BOOLEAN) == TRUE)
{
    $name = $_GET['name'];
    $id = $_SESSION['uid'];
    include('dbconnect.php');
        $q = "DELETE FROM `cart` WHERE `uid` = $id AND `Name`= '$name'";
        $r = mysqli_query($connect, $q);
        if($r == TRUE){
}
}
}


include('dbconnect.php');
if(isset($_SESSION['uid'])){

    $total = 0;
    $id = $_SESSION['uid'];
    Updatedcart($id,$total);
        }
    else{ ?>
        <script>
            alert('Please login first');
            window.open('login.php','_self');
        </script>
        <?php 
    }
    function Remove(){
        ?>
        <script>
        alert(<?php echo $name; ?>)
        </script>
<?php
        include('dbconnect.php');
        $q = "DELETE FROM `cart` WHERE `uid` = $id AND `Name`= '$name'";
        $r = mysqli_query($connect, $q);
        if($r == TRUE){
        Updatedcart($id,$total);
        }
        else{
            mysqli_error($connect);
        }
    }
    function Updatedcart($id, $total)
    {   
        $num = 0;
        include('dbconnect.php');
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
            {   $name = $data['Name'];
                $total = $total + $data['Price'];
                $num = $num + 1;
                $price = $data['Price'] * quantity;
                ?>
                    <div class="cart-items">
                        <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="Product Images/<?php echo $data['Image']; ?>" width="100" height="100">
                                <span class="cart-item-title" id="item_name"> <?php echo $data['Name']; ?></span>
                            </div>
                            <span class="cart-price cart-column">&#8377 <?php echo $data['Price']; ?></span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="1">
                                <a class="remove" href="cart.php?remove=true&name=<?php echo $name ;?>">Remove</a>
                            </div>
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
            <?php
                }
    }
}
?>
</html>














if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}
else{
    ready()
}

function ready(){
    var removeCartItemButton = document.getElementsByClassName('btn-danger')
    console.log(removeCartItemButton)
    for (var i = 0; i < removeCartItemButton.length; i++) {
        var button = removeCartItemButton[i]
        button.addEventListener('click', function(event){
            var buttonclicked = event.target
            buttonclicked.parentElement.parentElement.remove()
            updatCartTotal()
    })
}
}

function updatCartTotal(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    console.log(cartItemContainer)
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    console.log(cartRows)
    for (var i = 0; i < cartRows.length; i++)
    {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName("cart-price")[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        console.log(priceElement, quantityElement)

    
}
}