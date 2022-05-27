@extends('app.masterPage')

@section('content')
    <div class="alert alert-primary d-flex align-items-center mt-2" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <div>
            <h1>Create new post</h1>
        </div>
    </div>    
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        @include('posts.form')
        <div class="d-grid gap-2 col-6 mx-auto mt-4">
            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-circle-plus"> </i> Create</button>
        </div>
    </form>
@endsection