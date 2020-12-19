<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gallery</title>
        <link rel="stylesheet" href="CSS\gallery.css">
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php
        include("header.php");
        ?>
        <h1>
        Here are some of the photos and videos from our Aquarium
        </h1>
        <h2>
        Please click on category you want to go through
        </h2>
        <div class="gallery-container">
            <div class= 'images'>
            <span class="gallery-headings">Images</span>
                <ul>
                <li><a href="Images\Freshwater.php">Fresh water</a></li>
                <li><a href="Images\Marinewater.php">Marine Water</a></li>
                <li><a href="Images\Birds.php">Birds</a></li>
                <li><a href="Images\Plantation.php">Plantation</a></li>
                </ul>
            </div>
            <iframe width="350" height="300" src="https://www.youtube-nocookie.com/embed/iICR0Tl4Q9s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class = 'video'>
            <span class="gallery-headings">Videos</span>
            <ul>
            <li><a href="Videos\Freshwater.php">Fresh water</a></li>
            <li><a href="Videos\Marinewater.php">Marine Water</a></li>
            <li><a href="Videos\Birds.php">Birds</a></li>
            <li><a href="Videos\Plantation.php">Plantation</a></li>
            </ul>
            </div>
        </div>
        <footer>
        <div class="logos">
                   <a href="https://www.facebook.com/Suyash-Aquarium-331498447019364/"><img src="Images\facebook.jpg"></a>
                   <a href="https://www.instagram.com/suyash_aquarium/"><img src="Images\insta.jpg"></a>
                   <a href="https://www.youtube.com/channel/UCFtLuGOXo9me_kopNtqMvBA"><img src="Images\Youtube.jpg"></a>
                </div> 
        </footer>


        
    </body>