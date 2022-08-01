@extends("layout")

@section("content")
<div class="container">
    <div>
        <a href="{{ route('root') }}" class="btn btn-success">go to root path</a>
        <a href="/posts/create" class="btn btn-success">New Post</a>
    </div><br>
    <div class="card">
        <div class="card-header text-center">
            Contents
        </div>
        <div class="card-body">
            @foreach($data as $post)
            <div>
                <h5 class="card-title">{{ $post->name }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <div class="d-flex">
                    <a href="/posts/{{$post->id}}" class="btn btn-primary mr-1">View</a>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning mr-1">Edit</a>
                    <form action="/posts/{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            <hr>
            @endforeach

        </div>
    </div>
</div>
@endsection