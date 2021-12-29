<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Let's Connect</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row navbar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" class="img-fluid"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <?php
                                if(!isset($_SESSION['username'])){
                                    echo "<a class='nav-link' href='./login.php'>Login</a>";
                                }
                                else{
                                    echo "
                                        <a class='dropdown-toggle ms-4' style='text-decoration:none;' type='button'
                                            id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                                            <img src='https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg' width='40' height='40' class='rounded-circle'>
                                        </a>
                                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                                            <li><a class='dropdown-item' href='#'>Order History</a></li><hr>
                                            <li><a class='dropdown-item' href='#'>Logout
                                            </a></li>
                                            
                                        </ul>
                                        ";
                                }
                              ?>
                                    
                                        
                                    

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                            </ul>
                </nav>
            </div>
            <div class="row hg align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-12 col-10 left">
                    <h4>INTRODUCING LUCID THEME</h4>
                    <h1>Carefully crafted and beautiful landing page.</h1>
                    <P>Etiam ullamcorper et turpis eget hendrerit. Praesent varius risus mi, at elementum magna
                        ultricies accumsan. Cras venenatis lacus sed dolor placerat tempus. Morbi blandit at neque ut
                        imperdiet.</P>
                    <a href="" class="btn btn-download">DOWNLOAD NOW</a>>
                    <a href="" class="btn btn-view">VIEW FEATURES</a>>
                </div>
                <div class="col-lg-6 phone">
                    <img src="images/background-phone.png" alt="" class="img-fluid" width="1300px" height="1300px">
                </div>
            </div>
        </div>
    </header>



    <section class="brands">

        <div class="container">
            <div class="row py-5">
                <div class="col-md-4">
                    <div class="online_course">
                        <img src="images/apple.png" alt="" class="img-fluid">
                        <h3>Apple</h3>
                        <p>Let's Connect</p>
                        <a href="./product.php?brand=apple" class="btn btn-course">Buy Product</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="online_course">
                        <img src="images/samsung.png" alt="" class="img-fluid">
                        <h3>Samsung</h3>
                        <p>Let's Connect</p>
                        <a href="./product.php?brand=samsung" class="btn btn-course">Buy Product</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="online_course">
                        <img src="images/mi.png" alt="" class="img-fluid">
                        <h3>Xiaomi</h3>
                        <p>Let's Connect</p>
                        <a href="./product.php?brand=xiaomi" class="btn btn-course">Buy Product</a>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-md-4">
                    <div class="online_course">
                        <img src="images/one plus.png" alt="" class="img-fluid">
                        <h3>OnePlus</h3>
                        <p>Let's Connect</p>
                        <a href="./product.php?brand=oneplus" class="btn btn-course">Buy Product</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="online_course">
                        <img src="images/readme.png" alt="" class="img-fluid">
                        <h3>Realme</h3>
                        <p>Let's Connect</p>
                        <a href="./product.php?brand=realme" class="btn btn-course">Buy Product</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="online_course">
                        <img src="images/google.png" alt="" class="img-fluid">
                        <h3>Google Pixel</h3>
                        <p>Let's Connect</p>
                        <a href="./product.php?brand=google pixel" class="btn btn-course">Buy Product</a>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="logos">
                        <i class="fab fa-behance"></i>
                        <i class="fas fa-basketball-ball"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <p>COPYRIGHT &copy; 2014 LUCID ONEPAGE THEME</p>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js  "></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 2,
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 500,
                nav: true,

                responsive: {
                    0: {
                        items: 1
                    },
                    700: {
                        items: 2
                    }
                }
            });
        });
    </script>
</body>

</html>