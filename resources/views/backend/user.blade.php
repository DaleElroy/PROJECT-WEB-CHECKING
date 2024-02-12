@extends('backend.layouts.app')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('message'))
                <h4 class="alert alert-success">{{ session('message') }}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Student List
                        <a href="{{ url('students/create') }}" class="btn btn-primary float-end">Add Students</a>
                    </h4>
                    <div class="card-body">
                        <h5>Total Users: {{ $userCount }}</h5> 
                        <table class="table table-boarded table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        {{-- <td>{{ optional($user->detail)->age }}</td>
                                        <td>{{ optional($user->detail)->gender }}</td>
                                        <td>{{ optional($user->detail)->address }}</td> --}}
                                        <td>
                                            <a href="{{ url('users/' . $user->id) . '/edit' }}"
                                                class="btn btn-success btn-sm">Edit</a>
                                            <form action="{{ url('users/' . $user->id) }}" method= "POST"
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
