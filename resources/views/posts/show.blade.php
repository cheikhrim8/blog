@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span class="h3 font-weight-light">{{$post->title}}</span>
                        <a href="{{route('posts.index')}}" class="btn btn-primary">back to blogs</a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img src="https://via.placeholder.com/150" alt="" class="rounded-circle" width="40">
                                <span class="ml-2">user name</span>
                            </div>
                            <div class="d-flex justify-content-between align-self-center">
                                <span class="small mr-2">{{$post->created_at->diffForHumans()}}</span>
                                @if(auth()->id() == $post->user_id)
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{route('posts.edit' , $post->id)}}">edit</a>
                                            <a class="dropdown-item" href="#exampleModal" data-toggle="modal"
                                            >delete</a>
                                            <form action="{{route('posts.destroy' , ['post' => $post->id])}}"
                                                  method="post"
                                                  id="delete-post" style="display: none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <p class="card-text mt-3 py-2 px-5">
                            {{$post->content}}
                        </p>
                    </div>
                </div>

                {{-- comments section --}}
                @foreach($post->comments as $comment)
                    <div class="card my-2">
                        <div class="card-header border-0 bg-transparent">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <img src="https://via.placeholder.com/150" alt="" class="rounded-circle" width="40">
                                    <span class="ml-2">{{$comment->user->name}}</span>
                                </div>
                                <div class="d-flex justify-content-between align-self-center">
                                    <span class="small mr-2">{{$comment->created_at->diffForHumans()}}</span>
                                    @if(auth()->id() == $comment->user_id)
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{route('posts.edit' , $comment->id)}}">edit</a>
                                                <a class="dropdown-item">delete</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-5">
                            <p class="card-text mt-3 py-2 px-5">
                                {{$comment->comment}}
                            </p>
                        </div>
                    </div>
                @endforeach


                <div class="card mt-4 py-3 px-5">
                    <div class="card-header bg-transparent">
                        <h2>leave your comment here</h2>
                    </div>
                    <form action="{{route('posts.comment', $post->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="comment"></label>
                            <textarea name="comment" class="form-control" id="comment" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg" value="submit">
                            <input type="reset" value="reset" class="btn btn-danger btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


{{--Popup modal--}}
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure do you want to delete this post.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                        onclick="event.preventDefault(); document.getElementById('delete-post').submit();">OK
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
