<?php

    require '_nf-admin/_dbconnect.php';
    $sql = "SELECT * FROM `resume-details` LIMIT 1";
    $result = mysqli_query($connect , $sql);
    $num = mysqli_num_rows($result);


    
    $user_img = array();
    $user_name = array(); 
    $user_about = array(); 
    $user_cv = array();
    $facebook = array(); 
    $instagram = array(); 
    $twitter = array(); 
    $linkedin = array(); 
    $user_email = array();
    $user_tel = array();
    $user_fax = array();
    $user_addr1 = array();
    $user_addr2 = array();
    $user_city = array();
    $user_pincode = array();


    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $user_img[] = $row['user-img'];
            $user_name[] = $row['user-name'];
            $user_about[] = $row['user-about'];
            $user_cv[] = $row['cvlink'];
            $facebook[] = $row['facebook'];
            $instagram[] = $row['instagram'];
            $twitter[] = $row['twitter'];
            $linkedin[] = $row['linkedin'];
            $user_email[] = $row['user-email'];
            $user_tel[] = $row['user-mobile'];
            $user_fax[] = $row['user-fax'];
            $user_addr1[] = $row['user-addr1'];
            $user_addr2[] = $row['user-addr2'];
            $user_city[] = $row['user-city'];
            $user_pincode[] = $row['user-pincode'];
        }            
    }else {
        header("Location: _nf-admin/welcome.php");
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>NFG Resume</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="style.css">


</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">



    <nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>




    <section class="site-hero" style="background-image: url(<?php echo $user_img[0];?>
);" id="section-home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row intro-text align-items-center justify-content-center">
                <div class="col-md-10 text-center pt-5">

                    <h1 style="font-size:3rem;font-weight:400" class="site-heading site-animate">Hello, I'm <span style="font-size:7rem;font-weight:500" class="d-block"><?php echo $user_name[0];?>
</span></h1>
                    <span id="fw-nfg" class="d-block text-white text-uppercase letter-spacing">and this is My Resume</span id="fw-nfg">

                </div>
            </div>
        </div>
    </section>
    <!-- section -->

    <section class="site-section" id="section-portfolio">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center col-md-12">
                    <h2>Featured <span id="fw-nfg">Portfolio</span></h2>
                </div>
            </div>
            <div class="filters">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".packaging">Packaging</li>
                    <li data-filter=".mockup">Mockup</li>
                    <li data-filter=".typography">Typography</li>
                    <li data-filter=".photography">Photography</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row grid">
                    <div class="single-portfolio col-sm-4 all mockup">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="images/p1.jpg" alt="">
                            </div>
                            <a href="images/p1.jpg" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>Square Box Mockup</h4>
                            <div class="cat">Mockup</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all mockup">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="images/p2.jpg" alt="">
                            </div>
                            <a href="images/p2.jpg" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>Product Box Package Mockup</h4>
                            <div class="cat">Mockup</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all packaging">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="images/p3.jpg" alt="">
                            </div>
                            <a href="images/p3.jpg" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
                                </div>
                            </a>

                        </div>
                        <div class="p-inner">
                            <h4>Creative Package Design</h4>
                            <div class="cat">Packaging</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all packaging">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="images/p4.jpg" alt="">
                            </div>
                            <a href="images/p4.jpg" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>Packaging Brand</h4>
                            <div class="cat">Packaging</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all typography">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="images/p5.jpg" alt="">
                            </div>
                            <a href="images/p5.jpg" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>Isometric 3D Extrusion</h4>
                            <div class="cat">Typography</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all photography">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="images/p6.jpg" alt="">
                            </div>
                            <a href="images/p6.jpg" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>White Space Photography</h4>
                            <div class="cat">photography</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->


    <section class="site-section " id="section-resume">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>My <span id="fw-nfg">Resume</span id="fw-nfg"></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-5">Education</h2>
                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
                        <h3>Masteral in Information Technology</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <span class="school">New York University</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> March 2013 - Present Deacember.</span>
                        <h3>Masteral in Information Technology</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <span class="school">New York University</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
                        <h3>Masteral in Information Technology</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <span class="school">New York University</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> March 2013 - Present Deacember.</span>
                        <h3>Masteral in Information Technology</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <span class="school">New York University</span>
                    </div>

                </div>
                <div class="col-md-6">


                    <h2 class="mb-5">Experience</h2>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
                        <h3>Lead Product Designer</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <span class="school">Github</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
                        <h3>Lead Product Designer</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <span class="school">Facebook</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
                        <h3>Lead Product Designer</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <span class="school">Twitter</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
                        <h3>Lead Product Designer</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <span class="school">Shopify</span>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- .section -->

    <section class="site-section" id="section-about">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
                    <img src="<?php echo $user_img[0];?>" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <div class="section-heading">
                        <h2>About Me</h2>
                    </div>
                    <p class="lead">
<?php echo $user_about[0];?>
                    </p>

                    <p>
                        <a href="#section-contact" class="btn px-4 py-2 btn-sm smoothscroll" id="btnsubmit">Hire Me</a>
                        <a href="<?php echo $user_cv[0];?>" class="btn btn-danger px-4 py-2 btn-sm" target="_blank" download>Download CV</a>
                    </p>
                </div>
            </div>


        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>Client <span id="fw-nfg">Testimonial</span id="fw-nfg"></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="block-47 d-flex mb-5">
                        <div class="block-47-image">
                            <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid">
                        </div>
                        <blockquote class="block-47-quote">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ Inc.</a></cite>
                        </blockquote>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="block-47 d-flex mb-5">
                        <div class="block-47-image">
                            <img src="images/person_2.jpg" alt="Image placeholder" class="img-fluid">
                        </div>
                        <blockquote class="block-47-quote">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
                        </blockquote>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="block-47 d-flex mb-5">
                        <div class="block-47-image">
                            <img src="images/person_3.jpg" alt="Image placeholder" class="img-fluid">
                        </div>
                        <blockquote class="block-47-quote">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ Inc.</a></cite>
                        </blockquote>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="block-47 d-flex mb-5">
                        <div class="block-47-image">
                            <img src="images/person_4.jpg" alt="Image placeholder" class="img-fluid">
                        </div>
                        <blockquote class="block-47-quote">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
                        </blockquote>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="site-section pb-0" id="section-services">
        <div class="container">

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>My <span id="fw-nfg">Services</span id="fw-nfg"></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
                        <span class="icon">
							<span class="icon-browser2"></span>
                        </span>
                        <h3 class="mb-4">Web Design</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
                        <span class="icon">
							<span class="icon-presentation"></span>
                        </span>
                        <h3 class="mb-4">Search Engine Optimization</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
                        <span class="icon">
							<span class="icon-video2"></span>
                        </span>
                        <h3 class="mb-4">Video Editing</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
                    </div>
                </div>



            </div>
        </div>
    </section>




    <section class="site-section" id="section-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>Blog on <span id="fw-nfg">Medium</span id="fw-nfg"></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="blog-entry">
                        <a href="#"><img src="images/post_1.jpg" alt="Image placeholder" class="img-fluid"></a>
                        <div class="blog-entry-text">
                            <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                            <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                            <div class="meta">
                                <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                                <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="blog-entry">
                        <a href="#"><img src="images/post_2.jpg" alt="Image placeholder" class="img-fluid"></a>
                        <div class="blog-entry-text">
                            <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                            <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                            <div class="meta">
                                <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                                <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="blog-entry">
                        <a href="#"><img src="images/post_3.jpg" alt="Image placeholder" class="img-fluid"></a>
                        <div class="blog-entry-text">
                            <h3><a href="#">Creative Product Designer From Facebook</a></h3>
                            <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                            <div class="meta">
                                <a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
                                <a href="#"><span class="icon-bubble"></span> 5 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="site-section" id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>Get <span id="fw-nfg">In Touch</span id="fw-nfg"></h2>
                    </div>
                </div>

                <div class="col-md-7 mb-5 mb-md-0">
                    <form action="" class="site-form">
                        <h3 class="mb-5">Get In Touch</h3>
                        <div class="form-group">
                            <input type="text" class="form-control px-3 py-4" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control px-3 py-4" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control px-3 py-4" placeholder="Your Phone">
                        </div>
                        <div class="form-group mb-5">
                            <textarea class="form-control px-3 py-4" cols="30" rows="10" placeholder="Write a Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn px-4 py-3" id="btnsubmit" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 pl-md-5">
                    <h3 class="mb-5">My Contact Details</h3>
                    <ul class="site-contact-details">
                        <li>
                            <span class="text-uppercase">Email</span> <?php echo $user_email[0];?>
                        </li>
                        <li>
                            <span class="text-uppercase">Phone</span> <?php echo $user_tel[0];?>
                        </li>
                        <li>
                            <span class="text-uppercase">Fax</span> <?php echo $user_fax[0];?>
                        </li>
                        <li>
                            <span class="text-uppercase">Address</span> <?php echo $user_addr1[0];?><br> <?php echo $user_addr2[0];?><br><?php echo $user_city[0]; echo " "; echo $user_pincode[0];?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">

            <div class="row mb-5">
                <p class="col-12 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> | All rights reserved By NorthFoxGroup
                </p>
            </div>

            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <p>
                        <a target="_blank" href="https://www.facebook.com/<?php echo $facebook[0];?>" class="social-item"><span class="icon-facebook2"></span></a>
                        <a target="_blank" href="https://www.twitter.com/<?php echo $twitter[0];?>" class="social-item"><span class="icon-twitter"></span></a>
                        <a target="_blank" href="https://www.instagram.com/<?php echo $instagram[0];?>" class="social-item"><span class="icon-instagram2"></span></a>
                    </p>
                </div>
            </div>

        </div>
    </footer>




    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/vendor/jquery.easing.1.3.js"></script>

    <script src="js/vendor/jquery.stellar.min.js"></script>
    <script src="js/vendor/jquery.waypoints.min.js"></script>

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    	<script src="js/google-map.js"></script> -->

</body>

</html>