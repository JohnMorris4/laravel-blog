@extends('layouts.master')

@section('content')
<div class="col-sm-8">
    <h1>Register</h1>


    <form action="/register" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        
        @include('layouts/errors')
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
        
    </form>

</div>

@endsection