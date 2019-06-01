@extends('layouts.default')

@section('body')
    <!--Top of Page-->
    <div class="top-phrase w-100" style="background-image: url({{ asset('aged.jpg')}}); background-size: 100%; background-repeat: no-repeat">
        <div class="transparent-cover">
            <h1 class="display-4 text-center text-white">Apologetics</h1>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                    <div class="row p-4 mt-5 mb-5 article-small">
                        <div class="col-md-5">
                            <img class="img-fluid" src="{{ asset('aged.jpg')}}" alt="Post Image" >
                        </div>
    
                        <div class="col-md-7">
                            <h4>Title</h4>
                            <h6>Author | Date</h6>
                            <p>
                                Llorem ipsum dolor color bacon
                            </p>
                            <a href="#" class="read-article btn bg-theme">Read Article</a>
                        </div>
                    </div>
            </div>

            <div  class="col-lg-4 mt-2 p-5">
                <!--Right side bar-->
                @include('includes.sidebar')
            </div>
        </div>

        
    </div>
@endsection