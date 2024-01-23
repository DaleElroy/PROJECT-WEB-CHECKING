<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Bilibeads</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto"> <!-- Move the home and shop links to the left -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Home" data-after="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#shop" data-after="shop">Shop</a>
                    </li>
                    <li class="nav-item dropdown"> <!-- Added dropdown for Shop -->
                        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#bracelet" data-after="bracelet">Bracelet</a>
                            <a class="dropdown-item" href="#necklace" data-after="necklace">Necklace</a>
                            <a class="dropdown-item" href="#ring">Ring</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Customize</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#About" data-after="About">About</a>
                    </li>



                </ul>
                <form class="form-inline mx-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                </form>
                <i class="bi bi-cart"></i>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-white">Sign In</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link text-white">Sign Up</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<section class="carousel">
    <div class="container mt-6" style="padding-top: 80px">
        @if (Route::has('login'))
            <div class="row">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <div class="row gx-4 gx-lg-5 align-items-center my-5">
                        <div class="col-lg-7">
                            <!-- Carousel -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner ml-3">
                                    <div class="carousel-item active">
                                        <img class="img-fluid rounded" src="/img/pic3.jpg" alt="Carousel Image 1">
                                            
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid rounded" src="/img/pic6.jpg" alt="Carousel Image 2">
                                            
                                    </div>

                                    <div class="carousel-items">
                                        <img class="img-fluid rounded" src="/img/pic7.jpg" alt="Carousel Image 3">
                                            
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- Text content -->
                            <h1 class="font-weight-light">Bilibeads: Fashion Accessories</h1>
                            <p>
                                Bilibeads: Fashion Accessories is an application for people who like bead accessories.
                                Bilibeads is designed to cater to the vibrant world of bead products. Bilibeads will be a
                                comprehensive platform where users can explore, purchase, create, and customize a wide range
                                of bead-based products and craft ideas.
                                <!--<a class="btn btn-primary" href="#"></a> -->
                        </div>
                    </div>
</section>
                    <section id=shop>
                        <div class="container mt-4">
                            <div class="border p-4">
                                <h2 class="mb-4 text-center">Latest Products</h2>
                                <div class="row">
                                    <!-- Latest Product -->
                                    <div class="col-md-3 mb-4">                                   
                                        <div class="cards">
                                            <a href="#">
                                                <img src="/img/beadsPic1.png" class="card-img-top" alt="Latest Product">
                                                <div class="card-body">
                                                    <h5 class="card-title">Latest Product Name</h5>
                                                    <p class="card-text">₱40.00</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Other Products -->
                                    <div class="col-md-3 mb-4">
                                        <div class="cards">
                                            <a href="#">
                                                <img src="/img/beadsPic2.png" class="card-img-top" alt="Latest Product">
                                                <div class="card-body">
                                                    <h5 class="card-title">Latest Product Name</h5>
                                                    <p class="card-text">₱40.00</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-4">
                                        <div class="cards">
                                            <a href="#">
                                                <img src="/img/beadsPic3.png" class="card-img-top" alt="Latest Product">
                                                <div class="card-body">
                                                    <h5 class="card-title">Latest Product Name</h5>
                                                    <p class="card-text">₱40.00</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-4">
                                        <div class="cards">
                                            <a href="#">
                                                <img src="/img/beadsPic4.png" class="card-img-top" alt="Latest Product">
                                                <div class="card-body">
                                                    <h5 class="card-title">Latest Product Name</h5>
                                                    <p class="card-text">₱40.00</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Add more products as needed -->

                                </div>
                            </div>
                        </div>

                        <div class="container mt-4 mb-4">
                            <div class="border p-4">
                                <h2 class="mb-4 text-center">Best Seller</h2>
                                <div class="row">

                                    <!-- Latest Product -->
                                    <div class="col-md-3 mb-4">
                                        <div class="cards">
                                            <a href="#">
                                                <img src="/img/beadsPic5.png" class="card-img-top" alt="Latest Product">
                                                <div class="card-body">
                                                    <h5 class="card-title">Latest Product Name</h5>
                                                    <p class="card-text">₱40.00</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Other Products -->
                                    <div class="col-md-3 mb-4">
                                        <div class="cards">
                                            <a href="#">
                                                <img src="/img/beadsPic6.png" class="card-img-top" alt="Latest Product">
                                                <div class="card-body">
                                                    <h5 class="card-title">Latest Product Name</h5>
                                                    <p class="card-text">₱40.00</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-4">
                                        <div class="cards">
                                            <a href="#">
                                                <img src="/img/beadsPic1.png" class="card-img-top" alt="Latest Product">
                                                <div class="card-body">
                                                    <h5 class="card-title">Latest Product Name</h5>
                                                    <p class="card-text">₱40.00</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-4">
                                        <div class="cards">
                                            <a href="#">
                                                <img src="/img/beadsPic2.png" class="card-img-top" alt="Latest Product">
                                                <div class="card-body">
                                                    <h5 class="card-title">Latest Product Name</h5>
                                                    <p class="card-text">₱40.00</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Add more products as needed -->

                                </div>
                            </div>
                        </div>
                    </section>
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <section id="bracelet" class="product-section">
                        <div class="container mt-4 mb-4">
                            <div class="">
                                <h2 class="mb-4 text-center">Bracelets</h2>
                                <div class="row">
                                    <!-- Bracelet Product 1 -->
                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/beadsPic7.png" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/beadsPic8.png" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/beadsPic1.png" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/beadsPic10.png" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/beadsPic11.png" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/beadsPic12.png" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->




                    <section id="necklace" class="product-section">
                        <div class="container mt-4 mb-4">
                            <div class="">
                                <h2 class="mb-4 text-center">Necklace</h2>
                                <div class="row">
                                    <!-- Bracelet Product 1 -->
                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">₱40.00</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->



                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->






                    <section id="ring" class="product-section">
                        <div class="container mt-4 mb-4">
                            <div class="">
                                <h2 class="mb-4 text-center">Ring</h2>
                                <div class="row">
                                    <!-- Bracelet Product 1 -->
                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 mb-4">
                                        <a href="#"> <!-- Add your desired href here -->
                                            <div class="card">
                                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                                                <div class="card-footer text-left">
                                                    <div class="mb-3">
                                                        <h6 class="card-title">White</h6>
                                                    </div>
                                                    <p class="mb-0">$19.99</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>





                @endauth
            </div>
        @endif
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
