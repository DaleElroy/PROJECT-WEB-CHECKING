
@extends('dashboard')

<section id="necklace" class="product-section">
    <div class="container mt-4 mb-4 ">
        <div class="row">
            <div class="container">
                @foreach ($products->chunk(6) as $chunkedProducts)
                    <div class="col-md mb-4 ">
                        @foreach ($chunkedProducts as $category => $categoryProducts)
                            <div class="col-md mb-4 border border-2" >
                                <div class="category-border" >
                                    <h2>{{ ucfirst($category) }}</h2>
                                    <div class="row">
                                        @foreach ($categoryProducts as $product)
                                            <a href="#"{{$product->id}}>
                                                <div class="card">
                                                        <img src="{{ asset('images/' . $product->gallery) }}"
                                                            class="card-img-top" alt="{{ $product->title }}">
                                                        <div class="card-body">
                                                            <h1 class="card-title">{{ $product->title }}</h1>
                                                            <p class="card-text">{{ $product->description }}</p>
                                                            <p class="card-text">{{ $product->price }} </p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>