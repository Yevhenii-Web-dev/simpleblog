@extends('layouts.app')

@section('content')
    <!-- Featured blog post-->
    <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                          alt="..."/></a>
        <div class="card-body">
            <div class="small text-muted">{{ $post->created_at->format('d-m-Y') }}</div>
            <h2 class="card-title h4">{{ $post->title }} : {{ $post->id }}</h2>
            <p class="card-text">{{ $post->text }}</p>
            <a class="btn btn-primary" href="{{ route('home') }}">Back to list→</a>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer>Copyright &copy; Your Website 2022</x-footer>
@endsection
