<div>
    <div class="left-bar-item">
        <h3 class="sidebar-title mb-2">Youtube</h3>
        <iframe style="width:100%; height:200px" src="https://www.youtube.com/embed/1Q7XR_1EZRI" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="br"></div>

    <div class="left-bar-item">
        <h3 class="sidebar-title">Social Media</h3>
        <a href="#" style="color:#3b5998"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="ml-4" style="color:#1da1f2"><i class="fab fa-twitter"></i></i></a>
        <a href="#" class="ml-4" style="color:#25d366"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="ml-4" style="color:#FF0000"><i class="fab fa-youtube"></i></a>
    </div>

    <div class="br"></div>

    <div class="left-bar-item">
        @if (count($latest) < 1)
            <p>No latest post</p>
        @else
            <div class="latest-article">
                <h3 class="sidebar-title">Latest Posts</h3>
                @foreach ($latest as $post)
                        <div class="media post_item">
                            <img class="img-fluid" src="{{ asset('storage\\' . $post->image) }}" width="100" height="60"/>
                            <div class="media-body ml-3">
                                <a href="{{'/resources/' . $post->category . '/'  . $post->id }}"><h3 style="font-size: 18px">{{$post->title}}</h3></a>
                            <p>{{ date('dS M Y', strtotime($post->created_at)) }}</p>
                            </div>
                        </div>
                @endforeach
            </div>
        @endif
        
        
    </div>

    <div class="left-bar-item">
        <h3 class="sidebar-title">Tags</h3>

        <a href="#" class="tag-link"><span class="tag">Salvation</span></a>
        <a href="#" class="tag-link"><span class="tag">Faith</span></a>
        <a href="#" class="tag-link"><span class="tag">Love</span></a>
        <a href="#" class="tag-link"><span class="tag">Hope</span></a>
        <a href="#" class="tag-link"><span class="tag">Sin</span></a>
    </div>

</div>