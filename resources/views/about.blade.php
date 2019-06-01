@extends('layouts.default')

@section('body')
    <!--Top of Page-->
    <div class="top-phrase w-100" style="background-image: url({{ asset('aged.jpg')}}); background-size: 100%; background-repeat: no-repeat">
        <div class="transparent-cover">
            <h1 class="display-4 text-center text-white">About</h1>
        </div>
    </div>

    <!--Main body-->
    <div class="container mt-5">
        <!--Write up about SOTW-->
        <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Amet nihil reprehenderit inventore. Pariatur porro, omnis nihil, 
            aut ut eveniet nisi corporis sit molestias totam iure magni quasi! Corrupti, eligendi voluptatem!
        </p>
        
        <!--Our Team-->
        <div>
            <h1 class="display-4 text-center">Our Team</h1>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('aged.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                        </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('aged.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('aged.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('aged.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                        </div>
                </div>

                <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('aged.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection

