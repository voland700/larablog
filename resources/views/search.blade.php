@extends('layouts.app')
@section('content')
    @if($posts && $posts->count())
    @foreach ($posts as $post)
        <article class="blog-post mb-40">
            <div class="blog-thumb">
                <a href="/post/{{ $post->slag }}"><img src="/images/{{ $post->img }}" alt="{{ $post->name }}"></a>
            </div>
            <div class="blog-content">
                <h2 class="post-title"><a href="/post/{{ $post->slag }}">{{ $post->name }}</a></h2>
                <div class="blog-meta">
                    <span>{{ date('m.d.y', strtotime($post->created_at)) }}</span>
                    <span><a href="/author/{{ $post->autor->slug }}">{{ $post->autor->author_name }}.</a></span>
                    <span><a href="/list/{{ $post->category->slag }}">{{ $post->category->name }}.</a></span>
                </div>
                <p>{{ $post->prev }}</p>
                <div class="read-more">
                    <a href="/post/{{ $post->slag }}">Read More</a>
                </div>
            </div>
        </article>
    @endforeach
    {{ $posts->links() }}
    @else
        <h3>По Вашему запросу ничего не найдено.</h3>
    @endif
@endsection
