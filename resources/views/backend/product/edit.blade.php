@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit the Students Details</h4>
                    <a href="{{url('students/')}}" class="btn btn-primary float-end">Back</a>
                    
                    <div class="card-body">
                        <form action="{{url('students/'.$student->id)}}" method ="POST">
                        @csrf
                        @method('PUT')

                        <h4>Product</h4>
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{$product_title}}">
                        </div>
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="{{$product_price}}">
                        </div>
                        <div class="mb-3">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" value="{{$product_category}}">
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="{{$product_description}}">
                        </div>

                        <div class="mb-3">
                            <label>Photo</label>
                            <input type="text" name="photo" class="form-control" value="{{$product_photo}}">
                        </div>
                        <div class="mb-3">
                            <button type="submit " class="btn btn-primary ">Update</button>
                        </div>

    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>