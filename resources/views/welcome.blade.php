@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col">
                <div class="card-border-0 bg-transparent shadow">
                    <div class="card-header bg-primary d-flex justify-content-between">
                        <h2 class="text-capitalize text-white">blogs</h2>
                        <a href="#" class="btn btn-outline-light text-capitalize">add post</a>
                    </div>
                    <div class="card-body">
                        <div class="card mt-3">
                            <div class="card-header d-flex justify-content-between">
                                <a href="#" class="font-weight-light h2">Blog title</a>
                                <span>23 minutes ago</span>
                            </div>
                            <div class="card-body">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eum fuga
                                    iure numquam odio officia quae? Atque explicabo provident veniam!</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="flex-row">
                                        0 comments
                                    </div>
                                    <div class="flex-row">
                                        <strong>Created by </strong><span class="text-black-50">user name</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header d-flex justify-content-between">
                                <h2 class="font-weight-light">Blog title</h2>
                                <span>23 minutes ago</span>
                            </div>
                            <div class="card-body">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eum fuga
                                    iure numquam odio officia quae? Atque explicabo provident veniam!</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="flex-row">
                                        0 comments
                                    </div>
                                    <div class="flex-row">
                                        <strong>Created by </strong><span class="text-black-50">user name</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
