@extends('app.masterPage')

@section('content')
    <div class="text-center">
        <h1>List Posts</h1>
    </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Created at</th>
                            <th scope="col">Content</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Comments</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <th scope="row">{{$post->created_at->diffForHumans()}}</th>
                                <td>{{$post->content}}</td>
                                <td>{{$post->title}}</td>
                                <td>Admin</td>
                                <td>

                                    @if ($post->comments_count)
                                        <a href="{{route('commentsByPost',['post' => $post->id])}}">
                                            <span class="badge rounded-pill bg-info position-relative">
                                                Comments
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    {{$post->comments_count}}
                                                <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </span>
                                        </a>                                        
                                    @else
                                        <span class="badge rounded-pill bg-secondary">
                                            No comment
                                        </span>
                                    @endif

                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('posts.show',['post' => $post->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="{{route('posts.edit',['post' => $post->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a class="btn btn-success" href="{{route('comments.create',['post' => $post->id])}}"><i class="fa fa-comment-dots" aria-hidden="true"></i></a>
                                    <form class="from-inline" method="POST" action="{{route('posts.destroy',['post' => $post->id])}}"> 
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                            <div>
                                List is empty
                            </div>
                        </div>     
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>        
@endsection