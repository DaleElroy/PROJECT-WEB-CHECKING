@extends('landing')
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
