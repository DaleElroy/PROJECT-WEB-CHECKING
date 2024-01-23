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
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        #bead-container {
            border: 2px solid #333;
            padding: 10px;
            margin-bottom: 20px;
            display: inline-block;
        }

        .bead {
            width: 20px;
            height: 20px;
            background-color: #3498db;
            border: 1px solid #2980b9;
            border-radius: 50%;
            margin: 5px;
            display: inline-block;
            cursor: pointer;
        }

        #string-container {
            border: 2px solid #333;
            height: 50px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .bead-string {
            width: 20px;
            height: 20px;
            background-color: #3498db;
            border: 1px solid #2980b9;
            border-radius: 50%;
            margin: 5px;
            display: inline-block;
            transition: transform 0.3s ease;
            /* Add a smooth transition effect */
        }
    </style>
    </head>

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

        <div id="bead-container">
            <!-- Buttons to add beads -->
            <button onclick="addBead()">Add Bead</button>
            <button onclick="removeBead()">Remove Bead</button>
            <button onclick="resetString()">Reset String</button>

            <!-- Beads Container -->
            <div id="beads"></div>
        </div>

        <!-- String Container -->
        <div id="string-container">
            <div id="string"></div>
        </div>
    </body>

</html>
