@extends('layouts.app')
@section('title') show @endsection
@section('content')

    <div>
        <div class="card mt-4">
            <div class="card-header">
                Post Info
            </div>
            <div class="card-body">
                <h5 class="card-title">Title: {{$post['title']}}</h5>
                <p class="card-text">Description: {{$post['description']}}</p>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                Post Creator Info
            </div>
            <div class="card-body">
                <h5 class="card-title">Name:Rana</h5>
                <p class="card-text">Email: rana@gmail.com</p>
                <p class="card-text">Created At: 2025-5-4 20:00:00</p>


            </div>
        </div>
    </div>

@endsection
   