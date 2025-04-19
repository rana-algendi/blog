@extends('layouts.app')
@section('title')
    edit
@endsection
@section('content')

<form method="post" action="{{route('posts.update' ,1)}}">
    @csrf
    @method("put")

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea  name="description"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
        <input name="post_creator" type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <input class="btn btn-primary" type="submit" value="update">
    </div>
</form>
@endsection
