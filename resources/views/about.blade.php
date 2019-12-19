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
        <p class="lead text-center">
                Spotlight On The Word is an organization set up by some brethren in the church of Christ.      
        </p>

        <h1 class="display-4 text-center">Mission</h1>
        <p class="lead text-center">
                Spotlight On The Word exist to preach and defend the glorious gospel of Christ.
        </p>

        <h1 class="display-4 text-center">Vision</h1>
        <p class="lead text-center">
            To stand as a pillar of encouragement for the world to come to the realization of the truth and for the brethren to worship God in Spirit and In Truth.
        </p>        
        
        <h1 class="display-4 text-center">Aim</h1>
        <p class="lead text-center">
            To provide sound Biblical materials for the Lost and also insulate the Lord’s church from any form of falsehood.
        </p>
               
        
        <!--Our Team-->
        <div>
            <h1 class="display-4 text-center">Staff</h1>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('images/Derrick.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Derrick Danso</h5>
                                <h5 class="card-text text-muted">Executive Director</h5>
                                
                            </div>
                        </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('images/Joel.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Joel Abrampah Mensah</h5>
                                <h5 class="card-text text-muted">Public Relations Officer</h5>
                            </div>
                        </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/Anokye.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Emmanuel Anokye Nsiah</h5>
                            <h5 class="card-text text-muted">Director of Operations</h5>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/Papa Kwamena.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Papa Kwamina Ansah</h5>
                                <h5 class="card-text text-muted">Director of Finance</h5>
                                
                            </div>
                        </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/Seth.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Seth Asare</h3>
                                <h5 class="card-text text-muted">Director of Personnel</h5>
                                
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection

