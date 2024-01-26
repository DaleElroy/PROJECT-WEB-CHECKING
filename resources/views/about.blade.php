<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - Bilibeads</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(255, 255, 255);
        }
        nav {
            background: linear-gradient(to right, #474e68, #6b72Be);
            font-family: 'Times New Roman', Times, serif;
        }

        .about {
            padding: 78px 0px;
        }

        .about img {
            height: auto;
            width: 250px;
            border-radius: 20px;
            margin-bottom: 20px;
        }

        .main {
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .about-text {
            max-width: 550px;
            color: black;
        }

        .about-text h5 {
            text-transform: capitalize;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        span {
            color: #6b72Be;
        }

        .about-text p {
            letter-spacing: 1px;
            line-height: 20px;
            margin-bottom: 45px;
        }
    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand text-white" href="#">Bilibeads</a>
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
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
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
                    <a class="nav-link text-white" href="/about" data-after="About">About</a>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        
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

    <div class="container-fluid text-center" style="margin-top: 5%">
        <h1 class="display-4">About Bilibeads</h1>
        <p class="lead">Exploring, creating, and customizing vibrant bead accessories.</p>
    </div>

    <div class="container">
        <p>
            Bilibeads is committed to providing a comprehensive platform where bead enthusiasts can explore, purchase,
            and unleash their creativity through a wide range of bead-based products and craft ideas.
        </p>

        <h2>Why Bilibeads?</h2>
        <p>
            At Bilibeads, we believe in the power of self-expression and individuality. Our platform is designed to
            cater to the diverse tastes and preferences of those who appreciate the artistry of bead accessories.
        </p>

        <h2>Join Us in the Bead Journey</h2>
        <p>
            Whether you're a seasoned bead enthusiast or just starting your journey, Bilibeads welcomes you to explore
            the vibrant world of bead products and create accessories that reflect your unique style.
        </p>
    </div>

    <h1 class="text-center">Meet the Team</h1>
    <section class="about">
        <div class="container">
            <div class="main">
                <div class="about-item">
                    <img src="image1.jpg" alt="Team Member 1">
                    <div class="about-text">
                        <h5>Team Member 1</h5>
                        <p>Description of Team Member 1.</p>
                    </div>
                </div>
                <div class="about-item">
                    <img src="/img/japs.png" alt="Team Member 2">
                    <div class="about-text">
                        <h5>Team Member 2</h5>
                        <p>Description of Team Member 2.</p>
                    </div>
                </div>
                <div class="about-item">
                    <img src="image3.jpg" alt="Team Member 3">
                    <div class="about-text">
                        <h5>Team Member 3</h5>
                        <p>Description of Team Member 3.</p>
                    </div>
                </div>
                <div class="about-item">
                    <img src="image4.jpg" alt="Team Member 4">
                    <div class="about-text">
                        <h5>Team Member 4</h5>
                        <p>Description of Team Member 4.</p>
                    </div>
                </div>
                <div class="about-item">
                    <img src="image5.jpg" alt="Team Member 5">
                    <div class="about-text">
                        <h5>Team Member 5</h5>
                        <p>Description of Team Member 5.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    @include('footer')
</body>

</html>
