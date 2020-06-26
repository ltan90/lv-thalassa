@extends('layouts.master')
@section('title')
    <title>{{ $category->title }}</title>
@stop
@section('content')
    <main id="content" class="globale-content content-page">
        <div class="container">
            <div class="brecump">
                <a href="{{ url('/') }}">Home</a> <img src="{{ asset("assets/images/arrow-right.png") }}" alt="">
                <a href="{{ url('/categories') }}">Categories</a> <img src="{{ asset("assets/images/arrow-right.png") }}" alt="">
                <span>{{ $category->title }}</span>
            </div>
            <h2 class="section-title">{{ $category->title }}</h2>
            <ul class="list-inline catsub-list text-center">
                @foreach($subCategories as $item)
                    <li class="item-inline">
                        <a class="catsub-item font-bold" href="{{ url($category->slug . '/' . $item->slug) }}">
                            <div class="image">
                                <img width="45px" src="{{ !empty($item->image) ? asset(Storage::url($item->image)) : asset('assets/images/sub1.png') }}" alt="{{ $item->title }}">
                            </div>
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
