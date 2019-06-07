@extends('layouts.default')

@section('body')
    <!--Large Image-->
    <div class="large-image w-100 mb-5" style="background-image: url({{ asset('bible2.jpg')}});">
        <div style="width:100%; height: 100%; background-color: rgba(20, 20, 20, 0.5)">
            {{-- <h1>That all may know the truth</h1> --}}
        </div>
    </div>

    <!--Main body-->
    <div class="container mt-5">
        <div class="row">
            <!--Articles Highlights-->
            <div class="col-lg-8 mt-2">
                <h3 class="p-2 pl-0 mb-4" style="border-left:solid 3px #111E6C">Upcoming Event</h3>
                <div class=" mb-4">
                    <img class="img-fluid" src="{{ asset('aged.jpg')}}" alt="#">
                </div>
                
                <h3 class="p-2 pl-0 mb-4" style="border-left:solid 3px #2866c9">Articles</h3>
                <div class="row p-4 mb-5 article-small">
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

                <div class="row p-4 article-small">
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

            <!--Right side bar-->
            <div class="sidebar col-lg-4 mt-2 p-5">
                @include('includes.sidebar')
            </div>
        </div>
    </div>
@endsection

