@extends('layouts.app')
@section('header')
    <x-header>
        <x-slot:title>
            Welcome to Contact page!
        </x-slot:title>
        Sub title contact page!
    </x-header>
@endsection

@section('content')
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-12">
            <p class="lead mb-0"> Contact same text</p>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer>Copyright &copy; Your Website 2022</x-footer>
@endsection
