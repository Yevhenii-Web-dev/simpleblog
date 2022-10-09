@extends('layouts.app')
@section('header')
    <x-header>
        <x-slot:title>
            Welcome to About us page!
        </x-slot:title>
        Sub title About us page!
    </x-header>
@endsection

@section('content')
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-12">
            <p class="lead mb-0"> About same text</p>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer>Copyright &copy; Your Website 2022</x-footer>
@endsection
