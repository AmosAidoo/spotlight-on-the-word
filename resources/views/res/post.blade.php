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
                <div class="col-lg-8 mt-3">
                        @foreach ($post as $i)
                            <img class="img-fluid shadow-sm rounded" src="{{ asset('storage\\' . $i->image) }}" alt="Post Image" >
                            <div class="pl-5 pr-5">
                                <h1 class="mt-2" style="font-family: 'Muli', sans-serif; font-size: 48px"> {{ $i->title }}</h1>
                                {{-- <h6>{{ $i->author }} | {{ $i->created_at }}</h6> --}}
                                <p class="text-muted"><i class="fas fa-user"></i> {{ $i->author}}  <i class="fas fa-calendar-alt"></i> {{ date('dS M Y', strtotime($i->created_at)) }}</h6>
                                <div>
                                    <?php
                                        $tags = explode(" " ,$i->tags);

                                        foreach ($tags as $tag)
                                            echo '<span class="tag text-white mr-4">' . $tag . '</span>';
                                    ?>
                                </div>
                                

                                <div class="body-post">
                                    <?php
                                        echo  $i->body;
                                    ?>
                                </div>
                                <style>
                                    .body-post {
                                        margin-top: 10px;
                                    }

                                    .body-post p {
                                        font-family: 'Noticia Text', serif;
                                        font-size: 22px;
                                    }
                                </style>
                            </div>
                        @endforeach
                </div>

                <div class="sidebar col-lg-4 mt-2 p-5">
                    <!--Right side bar-->
                    @include('includes.sidebar')
                </div>
            </div>
    </div>
    

@endsection

