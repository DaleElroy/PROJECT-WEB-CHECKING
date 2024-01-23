<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <body>
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
                            <a class="nav-link text-white" href="/" data-after="Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#shop" data-after="shop">Shop</a>
                        </li>
                        <li class="nav-item dropdown"> <!-- Added dropdown for Shop -->
                            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
