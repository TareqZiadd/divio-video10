@extends('layout.app')

@section('content')
<div class="col-12">

    <center class="mt-4">
        <h1>Add Post</h1>
    </center>
</div>

<div class="col-8 mx-auto">
    <form action="/posts/store" method="POST" class="form">
        <div class="mb-3">
            <label for="title">Post Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description">Post Description</label>
            <textarea class="form-control" name="description" id="description" rows="7"></textarea>
        </div>
        <div class="mb-3">
            <label for="user_id">Writer</label>
            <select name="user_id" class="form-control" id="user_id">
                <option value="1">Mostafa</option>
                <option value="2">Ali</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Save">
        </div>
    </form>
</div>
@endsection
