@extends('layouts.master')




@section('content')
<hr>
<div class="col-md-8">
<h1>Login</h1>
<hr>
<form action="/login" method="POST">
    {{ csrf_field() }}

    @include('layouts/errors')
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control"> 
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control"> 
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>

</form>

</div>


@endsection