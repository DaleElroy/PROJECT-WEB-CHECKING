<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>


<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Bilibeads</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto"> <!-- Move the home and shop links to the left -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown"> <!-- Added dropdown for Shop -->
                        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Shop
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Categories</a>
                            <a class="dropdown-item" href="#">Customize</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline mx-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
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
    
    
    <div class="container mt-6">
        @if (Route::has('login'))
            <div class="row">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <div class="row gx-4 gx-lg-5 align-items-center my-5">
                        <div class="col-lg-7">
                            <!-- Carousel -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner ml-3">
                                    <div class="carousel-item active">
                                        <img class="img-fluid rounded" src="/img/pic3.jpg" alt="Carousel Image 1" width="652.5" height="290">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid rounded" src="/img/pic6.jpg" alt="Carousel Image 2" width="652.5" height="290">
                                    </div>

                                    <div class="carousel-items">
                                        <img class="img-fluid rounded" src="/img/pic7.jpg" alt="Carousel Image 3" width="652.5" height="290">
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
                                Bilibeads: Fashion Accessories is an application for people who like bead accessories. Bilibeads is designed to cater to the vibrant world of bead products. Bilibeads will be a comprehensive platform where users can explore, purchase, create, and customize a wide range of bead-based products and craft ideas.
                            <!--<a class="btn btn-primary" href="#"></a> -->
                        </div>
                    </div>
                    
                    
                    
            

                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img src="/img/design1.jpg" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">Product Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">$19.99</p>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img src="/img/design2.jpg" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">Product Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">$19.99</p>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img src="/img/design3.jpg" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">Product Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">$19.99</p>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img src="/img/design6.jpg" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">Product Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">$19.99</p>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img src="/img/shan.png" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">Product Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">$19.99</p>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img src="/img/shan.png" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">Product Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">$19.99</p>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img src="/img/shan.png" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">Product Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">$19.99</p>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img src="/img/shan.png" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">Product Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">$19.99</p>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img src="/img/shan.png" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">Product Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">$19.99</p>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    

                    
                
                

            
                @endauth
            </div>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
