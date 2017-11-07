@extends ('layouts.master')
    

@section ('content')

<div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">Creating a better tommorow</p>
      </div>
    </div>
<div class="col-sm-8 blog-main">
          <!-- NOTE MAKE SURE TO INCLUDE THE PARENT DIRECTORY -->
          @foreach($posts as $post)
          @include ('posts.includes.post')  
          @endforeach
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

@endsection