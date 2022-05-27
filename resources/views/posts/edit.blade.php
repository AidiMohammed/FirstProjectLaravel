@extends('app.masterPage')

@section('content')
    <div class="alert alert-warning d-flex align-items-center mt-2" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            <h1>Update post</h1>
        </div>
    </div>    
    <form method="POST" action="{{route('posts.update',['post' => $post->id])}}">
        @csrf
        @method('PUT')
        @include('posts.form')
        <div class="d-grid gap-2 col-6 mx-auto mt-4">
            <button class="btn btn-warning" type="submit"><i class="fa fa-edit" aria-hidden="true"> </i> Update</button>
        </div>
    </form>
@endsection