<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Store</title>
        <link rel="stylesheet" href="CSS\store.css">
        <style>
            
        </style>
    </head>
    <body>
    <header>
            <nav class="nav">
                <ul class="nav-ul">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="store.php">Store</a></li>
                    <div class= 'reg'>
                    <?php if(isset($_SESSION['uid'])){  
                    ?>
                    <li><button onclick="window.location='logout.php'"><b>Logout</b></li>
                    <?php }
                    else{
                    ?>
                    <li><button onclick="window.location='login.php'"><b>Login</b></li>
                    <?php }
                    ?>
                    <li><button onclick="window.location='intermediate.php'"><b>Add Product</b></li>
                    </div>
                </ul>
            </nav>
            
    </header>
        <hr>
        <h1 style="text-align: center;">
            Products
        </h1>   
        <hr>
        <div class="product-list">       
        <h2>Catagories</h2> 
        <ul style="list-style-type:none;" class="list">
            <li><a href="filters.php">Filters</a></li>
            <li><a href="fishfood.php">Fish Foods</a></li>
            <li><a href="bowls.php">Bowls</a></li>
            <li><a href="plasticplants.php">Plastic Plants</a></li>
            <li><a href="oxygenmachine.php">Oxygen Machines</a></li>
            <li><a href="AquariumPipe.php">Aquarium Pipes</a></li>
            <li><a href="SiphonPipes.php">Siphon Pipes</a></li>
            <li><a href="Lights.php">Tube lights</a></li>  
        </ul>   
        <div>
    
        <footer>
        <div class="logos">
                   <a href="https://www.facebook.com/Suyash-Aquarium-331498447019364/"><img src="Images\facebook.jpg"></a>
                   <a href="https://www.instagram.com/suyash_aquarium/"><img src="Images\insta.jpg"></a>
                   <a href="https://www.youtube.com/channel/UCFtLuGOXo9me_kopNtqMvBA"><img src="Images\Youtube.jpg"></a>
                </div> 
        </footer>


        
    </body>