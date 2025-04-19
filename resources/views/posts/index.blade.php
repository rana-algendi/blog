@extends('layouts.app')
@section('title')
    index
@endsection
@section('content')
    <div class="mt-4">
        <div class="text-center">
            <a href="{{ route('posts.create') }}" type="button"class="btn btn-success">Create Post</a>
        </div>
        <table class="table mt-4 ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created Ay</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['posted_by'] }}</td>
                        <td>{{ $post['created_at'] }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post['id']) }}" type="button"class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', $post['id']) }}" type="button"class="btn btn-primary">Edit</a>

                            <form style="display:inline ;"method="post" action="{{ route('posts.destroy', $post['id']) }}">
                                @csrf
                                @method('delete')
                                <button type="submit"class="btn btn-danger"
                                    onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">Delete</button>

                            </form>



                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
