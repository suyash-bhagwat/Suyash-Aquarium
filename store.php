<?php
session_start();

include('dbconnect.php');

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
    <?php
        include("header.php");
        ?>
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