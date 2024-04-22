<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- header section start -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg header-navbar navbarOther">
                    <div class="container">
                        <span class="text-white fs-2">Furni.</span>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto w-100 justify-content-end mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link nav-hover" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-hover" aria-current="page" href="shop.php">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-hover" aria-current="page" href="about.php">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-hover" aria-current="page" href="service.php">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-hover" aria-current="page" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-hover" aria-current="page" href="contact.php">Contact us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="signup.php"><i
                                            class="fa-solid fa-user fs-4 text-white"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="cart.php">
                                        <?php session_start(); ?>
                                        <span class="cartcount positon-absolute z-3"><?= count($_SESSION['product']);?></span>
                                        <i class="fa-solid fa-cart-shopping fs-4 text-white positon-relative"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- header section end -->