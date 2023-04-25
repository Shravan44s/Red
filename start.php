<?php 
    @include('./config.php');
    if(isset($_POST['submit'])) {
        $cname = mysqli_real_escape_string($conn, $_POST['cname']);
        $cemail = mysqli_real_escape_string($conn, $_POST['cemail']);
        $cmsg = mysqli_real_escape_string($conn, $_POST['cmsg']);
        $sel = "INSERT INTO contact(cname,cemail,cmsg) VALUES('$cname','$cemail','$cmsg');";
        $res = mysqli_query($conn, $sel);
        echo "<meta http-equiv='refresh' content='0'>";
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>RED</title>
        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
        <style>
            .slider img {
  width: 100%;
  height: 500px
  position: absolute;
  top: 0;
  left: 0;
}

.slider img:first-child {
  z-index: 1;
}

.slider img:nth-child(2) {
  z-index: 0;
}
.navigation-button {
  text-align: center;
  position: relative;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

.active,
.dot:hover {
  background-color: #717171;
}



        </style>
        

    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
                        <span class="navbar-brand-text">
                            RED
                            <small>Empowering you.</small>
                        </span>
                    </a>

                  <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Logout</a>
                    </div> 
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click" href="game.php">Game</a>
                                                                                             
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click" href="period-tracker-gh-pages/index.html">Period Tracking</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact Us</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link click" href="forum.php">Forum</a>
                            </li>
                           
                        </ul>

                         <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" role="button" aria-controls="offcanvasExample" href="logout.php">Logout</a>
                        </div> 
                   </div>
                    </div>
                </div>
            </nav>

           
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#70191a" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

                <div class="container">
                    <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <h2 style="color:white"> Welcome to </h2>
                            <span class="cd-words-wrapper">
                            <h2><b class="is-visible" style="color:darkred">RED</h2></b>
                            </span>
                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span style="color:white">Red is</span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible" style="color:darkred">Modern</b>
                                    <b style="color:darkred">Educational</b>
                                    <b style="color:darkred">Lifestyle</b>
                                </span>
                            </h1>

                            <div class="custom-btn-group">
                                <a href="#section_2" class="btn btn-danger btn-rounded">Explore</a>

                                
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                           
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </section>


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-lg-5 mb-4">About Menstruation</h2>
                        </div>

                        <div class=" ">
                            <h3 class="mb-3"><strong>Periods? Shhh .....</strong> </h3>
                            <p> Don’t say it loudly . What if any male member of family hear this ? It’s definitely not sounding weird .Coz it’s normalized in a desi household.This stigma make us understand that menstrual cycle is something to be hidden or to be ashamed of. When actually it isn’t.
                                Mensturation or Periods is still a taboo in today’s society. The menstruation taboo extends to many parts of a woman’s physiology and sexuality, but it primarily involves the stigma around discussing and caring for menstrual needs. This taboo often leads to the exclusion of women from social, domestic, and educational activities. The taboo also makes people feel like the topic of periods is uncomfortable, embarrassing, and even dangerous to discuss in some societies. This often leads women to use code words or slang to refer to periods.
                            
                        </div>

                      
                            </div>
                        </div>

                    </div>
                </div>
            </section>


           


            
                    </div>
                </div>
            </section>


            <section class="events-section section-bg section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h1 class="mb-lg-3">Upcoming Episodes</h1>
                        </div>

                        <div class="row custom-block mb-3">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0 text-white">Ep.</h6>
                                    
                                    <h2 class="text-white">4</h2>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="register.php">
                                        <img src="ep4.jpg" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                    <h1>COMING SOON</h1>

                                    <p class="text-white">Register now to get latest updates.</p>

                            

                                        <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="register.php" class="btn custom-btn">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                    <div class="row custom-block mb-3">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0 text-white">Ep.</h6>
                                    
                                    <h2 class="text-white">5</h2>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="register.php">
                                        <img src="emp5.jpg" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                    <h1>COMING SOON</h1>

                                    <p class="text-white">Register now to get latest updates.</p>

                            

                                        <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="register.php" class="btn custom-btn">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="events-section section-bg section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-lg-3">Sponsers</h2>
                        </div>

                        <div class="row custom-block custom-block-bg">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0 text-white">1</h6>
                                    
                                    
                                </div>
                            </div>
                        

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="https://stayfree.in/">
                                        <img src="img1.jpg" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                           <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                    <a href="https://www.stayfree.in/" class="events-title mb-3">Stayfree</a>

                                    <p class="mb-0">Protection with Cottony Comfort
Don’t ever let your period get in the way of how you want to spend your day, with Stayfree’s superior comfortable protection.</p>
<strong>Quality & Safety</strong><p>We have always believed in providing highest levels of quality and safety to our consumers</p>
<strong>Superior Protection</strong><p>Enabling women to feel comfortable during periods – both physical and emotional so that they can focus on what matters to them</p>
<strong>Social Responsibility</strong><p>We are always pushing our selves to improve – our products, our communities and our impact on the planet</p>
                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                        

                                        <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="https://www.amazon.in/stores/page/9C5F1C6F-34E6-4595-9076-C4D6DC494D2D?channel=website" class="btn custom-btn">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row custom-block custom-block-bg">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0 text-white">2</h6>
                                    
                                    
                                </div>
                            </div>
                        

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="https://whisper.co.in/en-in">
                                        <img src="pad2.avif" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                           <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                    <a href="https://whisper.co.in/en-in" class="events-title mb-3">Whisper</a>

                                    <p class="mb-0">Whisper encourages women to embrace their bodies and celebrate life. Widely preferred by women across the country, Whisper sanitary pads are created to offer complete protection and comfort during your period days. Our pads are thoughtfully designed for ultimate ease, comfort, and protection so that you can live your life to the fullest.  Whisper pads are designed to meet your specific needs and are available across various sizes and different forms. Explore our wide range of Whisper sanitary pads and select the one that fits your needs.</p>

                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                        

                                        <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="https://pgshop.in/whisper/ultra-nights/" class="btn custom-btn">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12">
                            <form method="post" class="custom-form contact-form">
                                <h2 class="mb-4 pb-2">Contact RED</h2>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="cname" id="full-name" class="form-control" placeholder="Full Name" required>
                                            
                                            <label for="floatingInput">Full Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="cemail" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                            
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="cmsg" placeholder="Describe message here"></textarea>
                                            
                                            <label for="floatingTextarea">Message</label>
                                        </div>

                                        <button  type="submit" name="submit" class="form-control" >Submit Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="">
                            <span class="navbar-brand-text">
                                RED
                                <small></small>
                            </span>
                        </a>
                    </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#8a2828" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>