@extends('layouts.app')
@section('content')
    <div class="container">

        @if(session('status'))
            <div class="alert alert-success">
                <strong>{{session('status')}}</strong>
            </div>
        @endif

        <div class="row justify-content-center my-5">
            <div class="col">
                <div class="card-border-0 bg-transparent shadow">
                    <div class="card-header bg-primary d-flex justify-content-between">
                        <h2 class="text-capitalize text-white">blogs</h2>
                        <a href="{{route('posts.create')}}" class="btn btn-outline-light text-capitalize">add post</a>
                    </div>
                    <div class="card-body">
                        @if(count($posts))
                            @foreach($posts as $post)
                                <div class="card mt-3">
                                    <div class="card-header d-flex justify-content-between">
                                        <a href="{{route('posts.show', $post->id)}}"
                                           class="font-weight-light h2">{{__(Str::limit($post->title ,40 ))}}</a>
                                        <div class="d-flex justify-content-between">
                                            <span class="mr-2">{{$post->created_at->diffForHumans()}}</span>

                                            @if(auth()->id() == $post->user_id)
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button"
                                                            id="dropdownMenuButton"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item"
                                                           href="{{route('posts.edit' , $post->id)}}">edit</a>
                                                        <a class="dropdown-item" href="#deleteModel" data-toggle="modal"
                                                        >delete</a>
                                                        <form
                                                            action="{{route('posts.destroy' , ['post' => $post->id])}}"
                                                            method="post" id="delete-post" style="display: none">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </div>
                                            @endif

                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <p class="lead">
                                            {{Str::limit($post->content , 100) }}
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-row">
                                                {{count($post->comments)}}
                                                {{ Str::plural('comment' , count($post->comments))}}
                                            </div>
                                            <div class="flex-row">
                                                <strong>Created by </strong><span class="text-black-50">{{$post->user->name}}</span>
                                                @if($post->updated_at)
                                                    <span>edited {{$post->updated_at}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @else
                            <h3 class="text-center">no posts found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


{{--Popup modal--}}
<div class="modal" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
