<html>
<head>
  <style>
    /* section four */
.section-four{
    margin: 40px 0;
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
    background: var(--lightGreen);
    width: 140px;
    border-radius: 5px;
    padding: 5px 0;
    color: #fff;
    text-align: center;
    margin-bottom: 8px;
}
.misc-info{
    font-size: 14px;
    color: var(--dark);
    margin-top: 16px;
}
.blog-title{
    font-size: 20px;
    font-weight: 900;
}
.blog-text{
    font-weight: 300;
}

/*************** end of blog.html ***********/

/****************** blog1.html ****************/

/* section six */
.section-six{
    margin: 10px 0;
}
.blog1{
    margin: 50px 0;
}
.blog1-content{
    padding: 25px;
    background: #f7f7f7;
}
.blog span1{
    display: block;
}
.badge1{
    background: var(--lightGreen);
    width: 140px;
    border-radius: 5px;
    padding: 5px 0;
    color: #fff;
    text-align: center;
    margin-bottom: 8px;
}
.misc-info1{
    font-size: 14px;
    color: var(--dark);
    margin-top: 16px;
}
.blog1-title{
    font-size: 30px;
    font-weight: 900;
}
.blog1-text{
    width: 1000px;
    font-weight: 500;  
}
.badge{
    background: var(--lightGreen);
    width: 140px;
    border-radius: 5px;
    padding: 5px 0;
    color: #fff;
    text-align: center;
    margin-bottom: 8px;
}
.container{
    width: 90vw;
    margin: 0 auto;
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
.blog-wrapper-lg{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }
  </style>
</head>
<body>
<section class = "section-four">
            <div class = "container">
                <div class = "blogs">
                    <div class = "blog-wrapper-lg">
                        <!-- single blog post -->
                        <div class = "blog">
                            <img src = "images/blog1.jpg">
                            <div class = "blog-content">
                                <span class = "badge">Photography</span>
                                <span class = "misc-info">
                                    Published: 1 Week Ago | 30 Comments
                                </span>
                                <h3 class = "blog-title">
                                    Best Photography Tips For Beginners
                                </h3>
                                <p class = "blog-text">
                                    There are a lot of camera settings, and it takes some practice to get them right, especially as a beginner.
                                </p>
                                <a href="Blog1.html" class="btn">Read More</a>
                            </div>
                        </div>
                        <!-- end of single post -->

                        <!-- single blog post -->
                        <div class = "blog">
                            <img src = "images/blog2.jpg">
                            <div class = "blog-content">
                                <span class = "badge">Photography</span>
                                <span class = "misc-info">
                                    Published: 8 Days Ago | 25 Comments
                                </span>
                                <h3 class = "blog-title">
                                    How to Photograph Monochrome!!
                                </h3>
                                <p class = "blog-text">
                                    As many photographers struggle to visualise a scene in black and white, these monochrome modes are an invaluable tool that will help with composition and scene assessment.
                                </p>
                                <a href="Blog2.html" class="btn">Read More</a>
                            </div>
                        </div>
                        <!-- end of single post -->
                    </div>

                    <div class = "blog-wrapper-sm">
                        <!-- single blog post -->
                        <div class = "blog">
                            <img src = "images/blog3.jpeg">
                            <div class = "blog-content">
                                <span class = "badge">Photography</span>
                                <span class = "misc-info">
                                    Published: 2 Days Ago | 10 Comments
                                </span>
                                <h3 class = "blog-title">
                                    Make your photograph cool using Silhouette
                                </h3>
                                <p class = "blog-text">
                                    As long as the source of light is located behind your photography subject, the subject stays in shadow and automatically turns into a silhouette when you take a photo.
                                </p>
                                <a href="Blog3.html" class="btn">Read More</a>
                            </div>
                        </div>
                        <!-- end of single post -->

                        <!-- single blog post -->
                        <div class = "blog">
                            <img src = "images/blog4.jpeg">
                            <div class = "blog-content">
                                <span class = "badge">Photography</span>
                                <span class = "misc-info">
                                    Published: 2 Days Ago | 5 Comments
                                </span>
                                <h3 class = "blog-title">
                                    Lensball Photography
                                </h3>
                                <p class = "blog-text">
                                    The most obvious application for lensballs is landscape photography. The fisheye-like scene captured inside the ball lends itself very well to this genre. Although there is certainly skill required to find the correct location to place the ball.
                                </p>
                                <a href = "https://www.digitalphotomentor.com/lensball-photography/" class = "btn">Read More</a>
                            </div>
                        </div>
                        <!-- end of single post -->

                        
                    </div>
                </div>
            </div>
</section>
</body>
</html>