@extends ('layouts.master')


@section ('content')
<div class="col-md-8 blog-main">
<h1> {{ $post->title }} </h1>
<p> {{ $post->body }} </p>

<small>Date: {{ $post->created_at->toDayDateTimeString() }}</small>
<br>
<hr>
    <div class="comments">
            @foreach ($post->comments as $comment )

            <div class="bg-light text-muted text-center">
                    {{ $comment->body }}

    </div>
            @endforeach
    </div>
    
    <div class="card">
            <div class="card-block">
                <form action="/posts/{{$post->id}}/comments" method="POST">
                        <div class="form-group">
                            <textarea name="body" id="" class="form-control" placeholder="Your comment here"></textarea>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" >Submit Comment</button>
                        </div>

                </form>
            </div>

    </div>  

</div>


@endsection