@extends("layout")

@section("content")
<div class="container">

    <div class="card">
        <div class="card-header text-center">
            Contents Show
        </div>
        <div class="card-body">

            <div>
                <h5 class="card-title"><b>{{ $post->name }}</b></h5>
                <p class="card-text">{{ $post->description }}</p>
                <p class="card-text"><b><i>{{ 'Categories : '. $post->categories->name }}</i></b></p>
            </div>
            <hr>
            <div>
                <a href="/posts" class="btn btn-success">Back</a>
            </div>

        </div>
    </div>
</div>
@endsection