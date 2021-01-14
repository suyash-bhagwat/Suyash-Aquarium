
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Suyash Aquarium</title>
        <link rel="stylesheet" href="CSS\index.css">
        <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

          <!-- Optional theme -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
          <!-- Latest compiled and minified JavaScript -->
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<style>
.col-sm-6 {
    float: right;
    height: 400px;
    width: 500px;
}
.col-sm-6 img{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.section-blogs{
  margin: 40px 0;
  width:50%;
  
}
.blog{
  margin: 40px 0;
}
.blog-content{
  padding: 25px;
  background: #f7f7f7;
}
.blog span{
  display: block;
}
.badge{
  background:#86c232;
  width: 140px;
  border-radius: 5px;
  padding: 5px 0;
  color: #fff;
  text-align: center;
  margin-bottom: 8px;
}
.misc-info{
  font-size: 14px;
  color:  #111;
  margin-top: 16px;
}
.blog-title{
  font-size: 20px;
  font-weight: 900;
}
.blog-text{
  font-weight: 300;
}

.blog-wrapper-lg{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 20px;
  
}

.container{
  width: 90vw;
  margin: 0 auto;

}

.btn{
    background: #61892f;
    border: none;
    display: block;
    width: 150px;
    text-align: center;
    color: #61892f ;
    text-transform: uppercase;
    background: transparent;
    font-size: 15px;
    padding: 12px;
    border: 2px solid #61892f ;
    border-radius: 25px;
    margin: 15px 0;
    transition: all 0.5s ease;
}
.btn:hover{
    background:#61892f;
    color: #fff;
}
.active{
    color: #86c232 !important;
}
</style>
</head>

<body>
<?php
        include("header.php");
        ?>
<div class="col-sm-6">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img style="height: 400px; width: 500px;" src="Images\F2.jpg" alt="..." >
    </div>
    <div class="item">
      <img style="height: 400px; width: 500px;" src="Images\featured1.png" alt="...">
    </div>
    <div class="item">
      <img style="height: 400px; width: 500px;" src="Images\F4.jpg" alt="...">
    </div>
    <div class="item">
      <img style="height: 400px; width: 500px;" src="Images\featured2.png" alt="...">
    </div>
    <div class="item">
      <img style="height: 400px; width: 500px;" src="Images\fighter_.jpg" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<section class="section-blogs">
    <div class = "container">
                <div class = "blogs">
                    <div class = "blog-wrapper-lg">

                    <div class = "blog">
                            <img style="height: 180px; width: 492px;" src = "Images/maintainblog.jpg">
                            <div class = "blog-content">
                                <span class = "badge">Maintainance</span>
                                <h3 class = "blog-title">
                                Aquarium Maintenance 
                                </h3>
                                <p class = "blog-text">
                                Everything needs maintenance. Maintaining an aquarium becomes very easy once you are well acquainted with the guidelines to follow and if you do them regularly.
                                </p>
                                <a href="Blog.php" class="btn">Read More</a>
                            </div>
                    </div>


                    <div class = "blog">
                    <img style="height: 180px; width: 492px;" src = "Images/waterblog.jpg">
                            <div class = "blog-content">
                                <span class = "badge">Maintainance</span>
                                <h3 class = "blog-title">
                                    Changing Aquarium water
                                </h3>
                                <p class = "blog-text">
                                Conducting frequent and routine water change is the most effective way to prevent and treat a plethora of problems that any aquarist may encounter.                                </p>
                                <a href="waterblog.php" class="btn">Read More</a>
                            </div>
                    </div>


                    <div class = "blog">
                    <img style="height: 180px; width: 492px;" src = "Images/fishblog.jpg">
                            <div class = "blog-content">
                                <span class = "badge">Fish</span>
                                <h3 class = "blog-title">
                                Best Aquarium Fishes for Beginners
                                </h3>
                                <p class = "blog-text">
                                There are a few lists you need to check before you start your new aquarium hobby. You should start off with a few beginner fishes for which you need to check compatibility of the fishes, hardiness, maintenance.
                                </p>
                                <a href="fishblog.php" class="btn">Read More</a>
                            </div>
                    </div>

                    <div class = "blog">
                    <img style="height: 180px; width: 492px;" src = "Images/goldblog.jpg">
                            <div class = "blog-content">
                                <span class = "badge">Fish</span>
                                <h3 class = "blog-title">
                                Why Goldfishes are not good starter fish
                                </h3>
                                <p class = "blog-text">
                                Goldfishes are popular among aquarists and they are beautiful and great to keep in an aquarium but they’re not the best starter fish for beginners as they’re often made out to be. Just go through the entire article to find out our views..
                              </p>
                                <a href="goldblog.php" class="btn">Read More</a>
                            </div>
                    </div>
              </div>
        </div>
  </div>
</section>
<?php
        include("Footer.php");
        ?>

</body>
</html>
