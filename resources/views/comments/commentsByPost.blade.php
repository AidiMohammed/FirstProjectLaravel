@extends('app.masterPage')

@section('content')
    <div class="card">
        <div class="card-body text-center">
            <h1>List Comments</h1>
        </div>
    </div>
    <div class="row mt-4">
        @forelse ($comments as $comment)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Admin</h5>
                            <em>Created at : {{$comment->created_at->diffForHumans()}}</em>
                        </div>
                        <p class="card-text">
                            {{$comment->content}}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <h1>No Comment</h1>
        @endforelse
    </div>
@endsection