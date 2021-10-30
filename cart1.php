<html>
<head>
    <link rel="stylesheet" href="CSS\cart.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
  <script src="cart1.js"></script>
</head>
<body>
    <a class="back" href="store.php">Previous page</a>


    <button type="button"  name="button">PLZZZZZ</button>
    <h2 class="section-header">CART</h2>
           <section class="container content-section">
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">Item</span>
                    <span class="cart-item cart-header cart-column">Price</span>
                    <span class="cart-item cart-header cart-column">Quantity</span>
                </div>
            </section>

            <div class="cart-total">
                        <strong class="cart-total-title">Total</strong>
                        <span class="cart-total-price">&#8377 </span>
                    </div>
                    <?php
session_start();
include('dbconnect.php');
print_r($_POST);

?>



</body>