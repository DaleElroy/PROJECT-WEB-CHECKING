@extends('layouts.app')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit the Userss Details</h4>
                    <a href="{{url('Admin')}}" class="btn btn-primary float-end">Back</a>
                    
                    <div class="card-body">
                        <form action="{{url('Admin/'.$user->id)}}" method ="POST">
                        @csrf
                        @method('PUT')
                        <h4>Users</h4>
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" name="age" class="form-control" value="{{$user->email}}">
                        </div>
                        

                        <h4>User Details</h4>

                        <div class="mb-3">
                            <label>Age</label>
                            <input type="text" name="course" class="form-control" value="{{$user->detail->age}}">
                        </div>

                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="year" class="form-control" value="{{$user->detail->address}}">
                        </div>
                        <div class="mb-3">
                            <label>Gender</label>
                            <input type="text" name="continent" class="form-control" value="{{$user->detail->gender}}">
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