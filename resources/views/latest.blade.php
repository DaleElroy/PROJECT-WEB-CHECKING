@extends('dashboard')
    <div class="container">
        <div class="border p-4">

            <div class="row">
                <div class="text-center">
                    <h4 class="text-center">Latest Product</h4> 
                    <div class="row text-center">
                        @foreach ($latest_product as $latest => $index)
                            <div class="col-md-3 mb-4">
                                <img class="card-img-top" src="{{ asset('latest_product/' . $index->latest_product) }}">
                                <div class="card-title">
                                    <h4 class="card-title">{{ $index->name }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
  
