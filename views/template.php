<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RamseoyDev</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="views/img/icon.png" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="views/lib/animate/animate.min.css" rel="stylesheet">
    <link href="views/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="views/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="views/css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">RamseoyDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#service" class="nav-item nav-link">Service</a>
                    <a href="#experience" class="nav-item nav-link">Experience</a>
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                    <a href="#price" class="nav-item nav-link">Price</a>
                    <a href="#review" class="nav-item nav-link">Review</a>
                    <a href="#team" class="nav-item nav-link">Team</a>
                    <a href="#blog" class="nav-item nav-link">Blog</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1>Yoesmar Loza</h1>
                            <h2></h2>
                            <div class="typed-text">Web Designer, Web Developer, Front End Developer, Apps Designer,
                                Apps Developer</div>
                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="">Hire Me</a>
                            <a class="btn" href="">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="views/img/icon.png" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <br> <br>
    <!-- About Start -->
    <?php require_once "modules/about.php"?>
    <!-- About End -->


    <!-- Service Start -->
    <?php require_once "modules/service.php"?>
    
    <!-- Service End -->


    <!-- Experience Start -->
    <?php require_once "modules/experience.php"?>
    
    <!-- Job Experience End -->

    <!-- Portfolio Start -->
    <?php require_once "modules/portfolio.php"?>
    
    <!-- Portfolio End -->


    <!-- Banner Start -->
    <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <p>Awesome Discount</p>
                <h2>Get <span>30%</span> Discount</h2>
            </div>
            <div class="container banner-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                    facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra
                    quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                </p>
                <a class="btn">Order Now</a>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Price Start -->
    <?php require_once "modules/price.php"?>
    
    <!-- Price End -->


    <!-- Testimonial Start -->
    <?php require_once "modules/review.php"?>
    
    <!-- Testimonial End -->


    <!-- Team Start -->
    <?php require_once "modules/team.php"?>
    
    <!-- Team End -->

    <!-- Blog Start -->
    <?php require_once "modules/blog.php"?>
    
    <!-- Blog End -->

    <!-- Contact Start -->
    <?php require_once "modules/contact.php"?>
    
    <!-- Contact End -->





    <!-- Footer Start -->
    <div class="footer wow fadeIn" Yoesmar Loza Molina="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <h2>Yoesmar Loza Molina</h2>
                    <h3>Sacaba, Cochabamba, Bolivia</h3>
                    <div class="footer-menu">
                        <a class="text-white" href="tel:71469948">+591 71469948 </a>
                        <p href="yoesmarloza@gmail.com">yoesmarloza@gmail.com</p>
                    </div>
                    <div class="footer-social">
                        <a href="https://twitter.com/YoesmarL" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/yoesmarloza" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/yoesmarloza/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/yoesmar-loza-593772204/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">My Blog </a>, All Right Reserved | Designed and Development By <a href="#">
                        Yoesmar Loza</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to top button -->
    <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="views/lib/easing/easing.min.js"></script>
    <script src="views/lib/wow/wow.min.js"></script>
    <script src="views/lib/waypoints/waypoints.min.js"></script>
    <script src="views/lib/typed/typed.min.js"></script>
    <script src="views/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="views/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="views/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="views/mail/jqBootstrapValidation.min.js"></script>
    <script src="views/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="views/js/main.js"></script>
</body>

</html>