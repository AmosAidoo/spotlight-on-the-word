@extends('layouts.default')

@section('body')
    <!--Top of Page-->
    <div class="top-phrase w-100" style="background-image: url({{ asset('aged.jpg')}}); background-size: 100%; background-repeat: no-repeat">
        <div class="transparent-cover">
            <h1 class="display-4 text-center text-white">
                @foreach ($post as $i)
                    {{ $i->category }}
                @endforeach
            </h1>
        </div>
    </div>
    <!--Main body-->
    <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-5">
                        @foreach ($post as $i)
                            <img class="img-fluid" src="{{ asset('storage\\' . $i->image) }}" alt="Post Image" >
                            <h1> {{ $i->title }}</h1>
                            <h6>{{ $i->author }} | {{ $i->created_at }}</h6>

                            <p class="lead">
                                {{ strip_tags($i->body)  }}
                            </p>
                        @endforeach
                </div>

                <div class="sidebar col-lg-4 mt-2 p-5">
                    <!--Right side bar-->
                    @include('includes.sidebar')
                </div>
            </div>
    </div>
    

@endsection

