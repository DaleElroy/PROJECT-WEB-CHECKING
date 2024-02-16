@extends('backend.layouts.app')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('message'))
                    <h4 class="alert alert-success">{{ session('message') }}</h4>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Product
                            <a href="{{ url('students/create') }}" class="btn btn-primary float-end">Add Students</a>
                        </h4>
                        <div class="card-body">
                            <table class="table table-boarded table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Title</th>
                                        <th>Product Description</th>
                                        <th>Product Photo</th>
                                        <th>Product categoty</th>
                                        <th>Product Price</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>  <img src="{{ asset('images/' . $product->gallery) }}"
                                                class="card-img-top" alt="{{ $product->title }}"  style="max-width: 100px; max-height: 100px;"></td>
                                            <td>{{ $product->category }}</td>
                                            <td>{{ $product->price }}</td>
                                            
                                            
                                            <td>
                                                <a href="{{ url('products/' . $product->id) . '/edit' }}"
                                                    class="btn btn-success btn-sm">Edit</a>
                                                <form action="{{ url('products/' . $product->id) }}" method= "POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>