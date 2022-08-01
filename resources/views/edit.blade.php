@extends("layout")

@section("content")
<div class="container">

    <div class="card">
        <div class="card-header text-center">
            Edit Post
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="{{ old('name',$post->name) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>

                    <textarea type="text" name="description" class="form-control" id="exampleInputPassword1">{{ old('name',$post->description) }}</textarea>
                </div>
                <select name="category_id" id="" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $post->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/posts" class="btn btn-success">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection