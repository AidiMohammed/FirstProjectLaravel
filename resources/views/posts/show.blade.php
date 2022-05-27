@extends('app.masterPage')

@section('content')
    <div class="card mb-3 mt-3">
        <div class="card-body bg-info text-center ">
            <h1>Detail Post</h1>
        </div>
    </div>

    <div class="card">
         <div class="card-header d-flex justify-content-between">
            <h5>admins</h5>
            <em>created at :{{$post->created_at}}</em>
        </div>

        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <a class="btn btn-primary mt-4" href="{{route('posts.index')}}"> <i class="fa-solid fa-circle-left"> </i> Posts</a>
        </div>
        
    </div>
    @include('comments.showComments')
@endsection