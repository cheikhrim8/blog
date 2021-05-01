@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-0 shadow">
                    <div class="card-header bg-primary d-flex justify-content-between">
                        <h2 class="font-weight-light text-capitalize text-light">post title</h2>
                        <a href="{{route('posts.index')}}" class="btn btn-outline-light">back to posts</a>
                    </div>
                    <div class="card-body">
                        <div class="card p-4">
                            <div class="card-body">
                                <form action="{{route('posts.update' , ['post' => $post->id])}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="title">title</label>
                                        <input type="text" name="title" id="title" value="{{$post->title}}"
                                               class="form-control @error('title') is-invalid @enderror"
                                               placeholder="post title">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="content">content</label>
                                        <textarea name="content" id="content"
                                                  class="form-control @error('content') is-invalid @enderror"
                                                  rows="5" placeholder="post content here...">{{$post->content}}</textarea>

                                        @error('title')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="save changes" class="btn btn-primary btn-lg">
                                        <input type="reset" value="reset" class="btn btn-danger btn-lg">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
