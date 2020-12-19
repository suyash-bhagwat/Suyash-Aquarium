
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Suyash Aquarium</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="CSS\index.css">
        <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
        <style>
        </style>
    </head>
    <body><?php
        include("header.php");
        ?>
        <div class="slideshow-container">

        <div class="mySlides fade" >
        <div class="numbertext">1 / 3</div>
        <img src="Images\F1.jpg" class="slider--image">
        <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="Images\F2.jpg" class="slider--image">
        <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="Images\F3.jpg" class="slider--image">
        <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center; position: relative;">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        <footer class="footer">
                <div class="logos">
                   <a href="https://www.facebook.com/Suyash-Aquarium-331498447019364/"><img src="Images\facebook.jpg"></a>
                   <a href="https://www.instagram.com/suyash_aquarium/"><img src="Images\insta.jpg"></a>
                   <a href="https://www.youtube.com/channel/UCFtLuGOXo9me_kopNtqMvBA"><img src="Images\Youtube.jpg"></a>
                </div> 
                
                <Address>
                    867,Indira chhaya, Keshav nagar, J.K.Files, near L.G.Showroom, Ratnagiri., Maharastra, India<br>
                
                    Contact: 8390931259 / 8087311654
                </Address>         
        </footer>
    </body>
</html>
