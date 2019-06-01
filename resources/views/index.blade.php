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
                <h3 class="p-2 pl-0 mb-4" style="border-left:solid 3px #111E6C">Events</h3>
                {{-- <div class="mb-4">
                    <img class="img-fluid" src="{{ asset('aged.jpg')}}" alt="">
                </div> --}}
                <div class="owl-carousel owl-theme mb-3 w-100">
                        <div class="owl-inner">
                                <div id="sotv" class="item p-4 text-center" style="background-image: url({{ asset('bible1.jpg')}});">
                                    <h1 class="display-4">SPOTLIGHT ON THE VERSE</h1>
                                    <p>
                                        God is spirit and they that worship Him
                                        must worship Him in spirit and in truth

                                        <p style="text-align:right">John 4:24</p>
                                    </p>
                                    {{-- <img class="img-fluid" src="{{ asset('aged.jpg')}}"/> --}}
                                </div>
                        </div>
                    
                        <div class="owl-inner">
                                <div class="item" style="background-image: url({{ asset('bible2.jpg')}});">
                                        <h1 class="text-center
                                        ">IN SEARCH OF THE SCRIPTURES</h1>
                                </div>
                        </div>
                        <div class="owl-inner">
                                <div class="item" style="background-image: url({{ asset('aged.jpg')}});">
                                    {{-- <img class="img-fluid" src="{{ asset('aged.jpg')}}"/> --}}
                                </div>
                        </div>
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
            <div id="sidebar" class="col-lg-4 mt-2 p-5">
                @include('includes.sidebar')
            </div>
        </div>
    </div>
@endsection

