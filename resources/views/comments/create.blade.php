@extends('masterPage')

@section('content')
    <h1>crete new comment</h1>
    <form method="POST" action="{{route(comments.store)}}">
        <label for="content">Content</label>
        <input type="text" required name="content" id="content" value="{{old('content')}}">
        <button type="submit">Create comment</button>
    </form>
@endsection