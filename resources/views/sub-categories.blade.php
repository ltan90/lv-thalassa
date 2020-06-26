@extends('layouts.master')
@section('title')
    <title>Sub Category</title>
@stop
@section('content')
    <main id="content" class="globale-content content-page">
        <div class="container">
            <div class="brecump">
                <a href="{{ url('/') }}">Home</a> <img src="{{ asset("assets/images/arrow-right.png") }}" alt="">
                <a href="{{ url('/categories') }}">Categories</a> <img src="{{ asset("assets/images/arrow-right.png") }}" alt="">
                <span>Hydrotherapy</span>
            </div>
            <h2 class="section-title">Hydrotherapy</h2>
            <ul class="list-inline catsub-list text-center">
                @for ($i = 1; $i <= 8; $i++)
                    <li class="item-inline">
                        <a class="catsub-item font-bold" href="">
                            <div class="image">
                                <img src="{{ asset("assets/images/sub".$i.".png") }}" alt="">
                            </div>
                            Icon sub {{ $i }}
                        </a>
                    </li>
                @endfor
            </ul>
        </div>
    </main>
@endsection
