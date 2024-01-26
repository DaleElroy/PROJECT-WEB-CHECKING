<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/customize.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="/">Bilibeads</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/#Home" data-after="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/#shop" data-after="shop">Shop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/#bracelet" data-after="bracelet">Bracelet</a>
                            <a class="dropdown-item" href="/#necklace" data-after="necklace">Necklace</a>
                            <a class="dropdown-item" href="/#ring">Ring</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/customize">Customize</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/#About" data-after="About">About</a>
                    </li>
                </ul>
                <form class="form-inline mx-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <ul class="navbar-nav ml-auto">
                    <!-- Add the shopping cart icon here -->
                    <li class="nav-item">
                        <a href="/cart" class="nav-link text-white" id="openCart">
                            <i class="bi bi-cart"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />

                            </svg>

                        </a>
                    </li>
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
    <!--<div class="container" style="margin-top: 10% ">
        <div class="row">
            <div class="border p-4">
                <img src="#" alt="">
            </div>
        </div>
    </div>

    
-->
    <section class="input-customize">
        <div class="container mt-4 mb-4">
            <div class="border p-4">
                <div class="row">
                    <!-- Bracelet Product 1 -->
                    <a href="#"> ---------------------------------------------------------------------
                        -------------------------------------------------------------------------------------------
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="customize" class="product-section">
        <div class="container mt-4 mb-4">
            <div class="border p-4">
                <div class="row">
                    <!-- Bracelet Product 1 -->
                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 mb-4">
                        <a href="#"> <!-- Add your desired href here -->
                            <div class="card">
                                <img src="/img/design6.jpg" class="card-img-top" alt="Bracelet 1">
                            </div>
                        </a>
                    </div>



                </div>
            </div>
        </div>
        </div>
    </section>







</body>
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>

</html>
