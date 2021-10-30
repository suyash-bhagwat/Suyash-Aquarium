<?php
session_start();

include('dbconnect.php');

?>
<html>
    <head>
    <link rel="stylesheet" href="CSS\header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js">
    </script> 

    </head>
    <header>

        <div class="nav">
        <div class="logo">
            <div><img src="Images\logo3.jpg"></div>
        </div>
            <ul class="main-menu">
                <li class="menu-item"><a href="index.php">Home</a></li>
                <li class="menu-item"><a href="gallery.php">Gallery</a></li>
                <li class="menu-item"><a href="store.php">Store</a></li>
                <li class="menu-item"><a href="Aboutus.php">About</a></li>
                </ul>
                <ul class="main-login">
                <?php if(isset($_SESSION['uid'])){  $id = $_SESSION['uid']; 
                ?>
                <li class="menu-item login"><a href="logout.php">Logout</a></li>
                <li class="menu-item cart"><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                <?php }
                else{
                ?>
                <li class="menu-item login"><a href="login.php?id=<?php echo $_SERVER['PHP_SELF'];?>">Login</a></li>
                <li class="menu-item cart"><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                <?php }
                ?>
                <?php

                if(isset($_SESSION['uid'])){$id = $_SESSION['uid'] ? $_SESSION['uid'] : null;}
                if (!empty($id)){
                    $qry = "SELECT `Role` FROM `register` WHERE ID=" . $id;
                    $run = mysqli_query($connect , $qry);
                    $data = mysqli_fetch_assoc($run);
                    if($data['Role'] == 1){
                        ?>
                <li class="menu-item login"><a href="product.php">Add Product</a></li>
                 <?php
            }
        }
                ?>
            </ul>
        </div>

        <hr class="header-hr">
</header>     
</html>   
