@extends ('layouts.master')


@section('content')
<div class="col-sm-8 blog-main">
<h1>Create a post</h1>

<hr>
@include('layouts.errors')
<form method="POST" action="/posts">
        {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body:</label>
    <textarea class="form-control" id="body" rows="6" name="body" ></textarea>
  </div>
 
  <button type="submit" class="btn btn-success">Submit</button>
</form>

</div>
@endsection