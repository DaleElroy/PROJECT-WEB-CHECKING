@extends('dashboard')
@section('content')
    <section id="necklace" class="product-section">
        <div class="container mt-5" style="margin-top: 50px">
            @foreach ($products->chunk(6) as $chunkedProducts)
                @foreach ($chunkedProducts as $category => $categoryProducts)
                    <div class="col border border-2" style="margin-top: 10%">
                        <div class="category-border">
                            <h1 class="text-center"><span class="category">{{ ucfirst($category) }}</span></h1>
                            <div class="row">
                                @foreach ($categoryProducts as $product)
                                    
                                        <div class="card mb-4 g-col-6">
                                            <div class="text-center tumb">
                                                <img src="{{ asset('images/' . $product->gallery) }}" class="img-fluid"
                                                    alt="{{ $product->title }}">
                                            </div>
                                            <div class="card-body details">
                                                <h4>{{ $product->title }}</h4>
                                                <p>{{ $product->description }}</p>
                                                <div class="position-relative bottom-details">
                                                    <p class="card-text"><strong>Price:{{ $product->price }} </strong></p>
                                                    <div class="links">
                                                        <form action="/add_to_cart" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{$product['id']}}">
                                                            <button class="btn btn-primary">Add to Cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>

    </section>
   

    <style>
        .border{
            margin-top: 50px;
        }
        .card {
            position: absolute;
            place-items: center;
            width: 220px;
            background: #fafafa;
            box-shadow: 0 2px 7px #dfdfdf;
            font-family: sans-serif;


        }

        .tumb {
            height: 150px;
            background: #f0f0f0;
            padding: 20px;

            place-items: center;
            /* Ensure the container has dimensions for the images */
            width: 150px;
            /* Assuming a fixed width */
        }

        .tumb img {
            max-width: 100%;
            /* Ensure the image doesn't exceed the container's width */
            max-height: 100%;
            /* Ensure the image doesn't exceed the container's height */
            /* Ensure the image fits inside the container while maintaining its aspect ratio */
        }
    </style>
