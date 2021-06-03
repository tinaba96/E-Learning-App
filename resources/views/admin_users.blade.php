<style>

    .post-card {
      margin-top: 10px;
      margin-bottom: 10px;
    }


</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1> Admin Dashboard | Users</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <a href='{{ url('/admin/categories/') }}'><h3>Categories</h3></a>
        </div>
        <div class="col-md-2">
            <a href='{{ url('/admin/users/') }}'><h3>Users</h3></a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form align='right' action='/admin/categories/create' method='GET'>
                @csrf
                <button type='submit' class='btn btn-primary' style='background-color:#0e2feb'>New Category</button>
            </form
        </div>
    </div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Nationality</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    @foreach ($users as $user)
        <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->nationality }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                    <form action='/admin/users/{{ $user->id }}/edit' method='GET'>
                        @csrf
                        <button type='submit' class='btn btn-primary' style='background-color:#046604'>Edit</button>
                    </form>
                    </div>
                        <div class="col-md-2">
                        <form action='/admin/users/{{ $user->id }}/edit' method='POST'>
                        @csrf
                        @method('DELETE')
                        <button type='submit' class='btn btn-warning' style='background-color:red'>DELETE</button>
                        </div>
                    </form>
                    </div>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>
</div>
@endsection
