@extends('layouts.app')
@section('header')
    <x-header>
        <x-slot:title>
            Welcome to Home page!
        </x-slot:title>
        Sub title Home page!
    </x-header>
@endsection
@section('content')
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            @forelse($posts as $post)
                @if($loop->last)
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="{{ route('posts.show', $post->id) }}"><img class="card-img-top"
                                                                            src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                                                                            alt="..."/></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $post->created_at->format('d-m-Y') }}</div>
                            <h2 class="card-title h4">{{ $post->title }} : {{ $post->id }}</h2>
                            <p class="card-text">{{ $post->text }} </p>
                            <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">Read more →</a>
                        </div>
                    </div>
                @endif
            @empty
                <div>Don't have eny posts in database !!!</div>

            @endforelse
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    @forelse($posts as $post)
                        @if($loop->odd)
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="{{ route('posts.show', $post->id) }}"><img class="card-img-top"
                                                                                    src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                                                                    alt="..."/></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $post->created_at->format('d-m-Y') }}</div>
                                    <h2 class="card-title h4">{{ $post->title }} : {{ $post->id }}</h2>
                                    <p class="card-text">{{ $post->text }} </p>
                                    <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">Read more
                                        →</a>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div>Don't have eny posts in database !!!</div>

                    @endforelse

                </div>
                <div class="col-lg-6">
                    @forelse($posts as $post)
                        @if($loop->even)
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="{{ route('posts.show', $post->id) }}"><img class="card-img-top"
                                                                                    src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                                                                    alt="..."/></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $post->created_at->format('d-m-Y') }}</div>
                                    <h2 class="card-title h4">{{ $post->title }} : {{ $post->id }}</h2>
                                    <p class="card-text">{{ $post->text }}</p>
                                    <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">Read more
                                        →</a>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div>Don't have eny posts in database !!!</div>
                    @endforelse
                </div>
            </div>

            {{  $posts->links('pagination::custome') }}
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..."
                               aria-label="Enter search term..." aria-describedby="button-search"/>
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            @forelse($categories as $category)
                                {{--                                {{ $loop->index+1}}--}}
                                <ul class="list-unstyled mb-0">
                                    @if($loop->odd )
                                        <li>
                                            <a href="{{ route('home')}}?category_id={{ $category->id }}">{{ $category->name }}</a>
                                        </li>
                                    @endif
                                </ul>
                            @empty
                                <div>Don't have eny category in database !!!</div>
                            @endforelse
                        </div>
                        <div class="col-sm-6">
                            @forelse($categories as $category)
                                <ul class="list-unstyled mb-0">
                                    @if($loop->even)
                                        <li>
                                            <a href="{{ route('home') }}?category_id={{ $category->id }}">{{ $category->name }}</a>
                                        </li>
                                    @endif
                                </ul>
                            @empty
                                <div>Don't have eny category in database !!!</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use,
                    and feature the Bootstrap 5 card component!
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <x-footer>Copyright &copy; Your Website 2022</x-footer>
@endsection
