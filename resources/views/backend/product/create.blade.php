@extends('backend.layout')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product Data</h4>
                    <a href="{{ url('product') }}" class="btn btn-primary float-end ">Back</a>
                    <div class="card-body">

                        <form action="{{url('product')}}" method = "POST">
                            @csrf
                        
                            <h4>Product</h4>
                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Category</label>
                                <input type="text" name="category" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Photo</label>
                                <input type="text" name="photo" class="form-control">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>