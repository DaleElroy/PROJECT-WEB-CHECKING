<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAIN DOCUMENT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand text-white" href="/">Bilibeads</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/" data-after="Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#shop" data-after="shop">Shop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="#bracelet" data-after="bracelet">Bracelet</a>
                        <a class="dropdown-item" href="#necklace" data-after="necklace">Necklace</a>
                        <a class="dropdown-item" href="#ring">Ring</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/customize">Customize</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/about" data-after="About">About</a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/cart" class="nav-link text-white" id="openCart">
                        <i class="bi bi-cart"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Sign In</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">Sign Up</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown2" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="dropdown-item">Logout</a>
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<body>
    <div class="container mt-6" style="padding-top: 80px">
        <div class="row">
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner ml-3">
                            @foreach ($pictures as $index => $carousel)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img class="img-fluid rounded" src="{{ asset('uploads/' . $carousel->photo) }}"
                                        alt="Carousel Photo" alt="Carousel Image {{ $index + 1 }}">
                                </div>
                            @endforeach
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
    
                    <h1 class="font-weight-light">Bilibeads: Fashion Accessories</h1>
                    <p>
                        Bilibeads: Fashion Accessories is an application for people who like bead accessories.
                        Bilibeads is designed to cater to the vibrant world of bead products. Bilibeads will be a
                        comprehensive platform where users can explore, purchase, create, and customize a wide range
                        of bead-based products and craft ideas.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        @foreach ($products->chunk(6) as $chunkedProducts)
            @foreach ($chunkedProducts as $category => $categoryProducts)
                <div class="col mb-4 border border-2">
                    <div class="category-border">
                        <h1 class="text-center"><span class="category">{{ ucfirst($category) }}</span></h1>
                        <div class="row">
                            @foreach ($categoryProducts as $product)
                                <a href="{{ route('detail', $product->id) }}">
                                    <div class="card mb-4 g-col-6">
                                        <div class="text-center tumb">
                                            <img src="{{ asset('images/' . $product->gallery) }}" class="img-fluid"
                                                alt="{{ $product->title }}">
                                        </div>
                                        <div class="card-body details">
                                            <h1 class="card-title">{{ $product->title }}</h1>
                                            <p class="card-text">{{ $product->description }}</p>
                                            <div class="position-relative bottom-details">
                                                <p class="card-text">{{ $product->price }} </p>
                                                <div class="links">
                                                    <form action="add_to_cart" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <button class="btn btn-primary">Add to Cart</button>
                                                    </form>
                                                    
                                                    <a href="#"><i class="bi bi-cart"></i></a>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-cart"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>

</section>

    


    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>

</html>
