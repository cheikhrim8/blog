@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="jumbotron">
            <h1 class="display-4">this is a tutorial in laravel framework!</h1>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam enim expedita, laboriosam nulla porro
                recusandae reiciendis?
            </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </section>

    <section class="bg-info py-4">
        <div class="container">
            <h1 class="display-4 text-light text-center">what is the site about</h1>
            <div class="row justify-content-center mt-4">
                <div class="mt-md-0 mt-4 col-12 col-md-4">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="https://via.placeholder.com/150" width="100%" height="200" alt="">
                        </div>
                        <div class="card-body">
                            <h2>title here</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor eaque enim
                                et
                                fuga labore, maiores non optio quos soluta!</p>
                            <button class="btn btn-primary">read more</button>
                        </div>
                    </div>
                </div>
                <div class="mt-md-0 mt-4 col-12 col-md-4">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="https://via.placeholder.com/150" width="100%" height="200" alt="">
                        </div>
                        <div class="card-body">
                            <h2>title here</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor eaque enim
                                et
                                fuga labore, maiores non optio quos soluta!</p>
                            <button class="btn btn-primary">read more</button>
                        </div>
                    </div>
                </div>
                <div class="mt-md-0 mt-4 col-12 col-md-4">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="https://via.placeholder.com/150" width="100%" height="200" alt="">
                        </div>
                        <div class="card-body">
                            <h2>title here</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor eaque enim
                                et
                                fuga labore, maiores non optio quos soluta!</p>
                            <button class="btn btn-primary">read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-secondary p-5">
        <p class="text-center text-light">&copy; all rights are reserved</p>
    </footer>
@stop
