@extends('layouts.default')

@section('body')
    <!--Top of Page-->
    <div class="top-phrase w-100" style="background-image: url({{ asset('aged.jpg')}}); background-size: 100%; background-repeat: no-repeat">
        <div class="transparent-cover">
            <h1 class="display-4 text-center text-white">{{$category}}</h1>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                    @if (count($posts) < 1)
                        <p class="mt-5 lead">No posts to display...</p>
                    @else
                        @foreach ($posts as $post)
                            
                            <div class="row p-4 mt-5 mb-5 article-small">
                                <div class="col-md-5">
                                    <img class="img-fluid" src="{{ asset('storage\\' . $post->image) }}" alt="Post Image" >
                                </div>
            
                                <div class="col-md-7">
                                    <h4>{{ $post->title }}</h4>
                                    <p class="text-muted"><i class="fas fa-user"></i> {{ $post->author}}  <i class="fas fa-calendar-alt"></i> {{ date('dS M Y', strtotime($post->created_at)) }}</h6>
                                    <p>
                                            <?php
                                                $stripped = strip_tags($post->body);
                                                echo substr($stripped, 0, 150) . '...';
                                            ?>
                                    </p>
                                    <a href="{{'/resources/' . $post->category . '/'  . $post->id }}" class="read-article btn bg-theme">Read Article</a>
                                </div>
                            </div>
                        @endforeach  
                    @endif
                    
                    <div>
                        {{ $posts->links() }}
                    </div>
                    
                    
            </div>

            <div class="sidebar col-lg-4 mt-2 p-5">
                <!--Right side bar-->
                @include('includes.sidebar')
            </div>
        </div>

        
    </div>
@endsection