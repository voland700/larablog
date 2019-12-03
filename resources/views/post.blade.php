@extends('layouts.app')

@section('content')

    <article class="blog-post">
        <div class="blog-thumb">
            <img src="/images/{{ $post->img }}" alt="{{ $post->name }}">
        </div>
        <div class="blog-content">
            <h2 class="post-title">{{ $post->name }}</h2>
            <div class="blog-meta">
                <span>{{ date('m.d.y', strtotime($post->created_at)) }}</span>
                <span><a href="/author/{{$author->slug}}">{{ $post->autor->author_name }}</a></span>
                <span><a href="/list/{{$post->category->slag}}">{{ $post->category->name }}</a></span>
            </div>

            <div class="text" id="text">{!! $post->description !!} </div>

            <div class="user-info">
                <div class="user-text">
                    <span class="user-name">By; {{ $post->autor->author_name }}</span>
                    <span><a href="/list/{{$post->category->slag}}">{{ $post->category->name }}</a></span>
                </div>
                <div class="user-share">
                    <span>Share:</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>


            <div class="next-prev">

                @if($travel['prev'])
                <a class="prev-btn" href="/post/{{$travel['prev']}}"><i class="fa fa-angle-left"></i> prev post</a>
                @endif
                @if($travel['next'])
                <a class="next-btn" href="/post/{{$travel['next']}}">next post <i class="fa fa-angle-right"></i></a>
                @endif
            </div>


            @if($otherPosts)


            <div class="related-post">
                <h3 class="sidebar-title">Related Post</h3>
                <div class="row">
                @foreach($otherPosts as $item)
                    <div class="col-md-4 col-sm-4">
                        <div class="single-related-post mb-30">
                            <a href="/post/{{ $item->slag }}"><img src="/images/{{ $item->img }}" alt="{{ $item->name }}"></a>
                            <div class="related-post-title">
                                <h3><a href="/post/{{ $item->slag }}">{{$item->name }}</a></h3>
                                <span>{{ date('m.d.y', strtotime($item->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach


                </div>
            </div>

            @endif

        </div>
    </article>




@endsection




