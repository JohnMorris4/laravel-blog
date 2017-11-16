@extends ('layouts.master')


@section ('content')
<div class="col-md-8 blog-main">
<h1> {{ $post->title }} </h1>
<p> {{ $post->body }} </p>

<small>Date: {{ $post->created_at->toDayDateTimeString() }}</small>
<br>
<hr>
    <h3>Comments:</h3>
    <div class="comments">

        <ul class="list-group">
            @foreach ($post->comments as $comment )
                <li class="list-group-item">
            
                    {{ $comment->body }}
                    <small>
                        <strong>
                            {{ $comment->created_at->toDayDateTimeString() }}
                        </strong>
                    </small>
                </li>
            
            @endforeach
        </ul>
    </div>
    
<br>
<br>
    @include ('layouts.errors')
    <h5>Add new Comment</h5>
    <div class="card">
       <div class="card-block">
            <form action="/posts/{{ $post->id }}/comments" method="POST">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" id="" placeholder="Your comment here"class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add Comment</button>
                    </div>
            </form>
       </div>
    
    </div>

</div>


@endsection