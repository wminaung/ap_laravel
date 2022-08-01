@extends("layout")

@section("content")
<div class="container">

    <div class="card">
        <div class="card-header text-center">
            New Post
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

            <form action="/posts" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" placeholder="Name">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">{{ old('description') }}</textarea>
                </div>

                <select name="category_id" id="" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select><br>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/posts" class="btn btn-success">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection