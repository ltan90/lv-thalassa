@extends('layouts.master')
@section('title')
    <title>{{ $category->title }}</title>
@stop
@section('content')
    <main id="content" class="globale-content content-page">
        <div class="container">
            <div class="brecump">
                <a href="{{ url('/') }}">Home</a> <img src="{{ asset("assets/images/arrow-right.png") }}" alt="">
                <a href="{{ url('/categories/' . $category->slug) }}">{{ $category->title }}</a> <img src="{{ asset("assets/images/arrow-right.png") }}" alt="">
                <span>{{ $subCategory->title }}</span>
            </div>
            <div class="item-list relative-section">
                <h2 class="section-title">{{ $subCategory->title }}</h2>
                <ul>
                    @foreach($products as $item)
                        <li>
                            <div class="item-item">
                                <a href="{{ url($subCategory->slug . '/' . $item->slug) }}.html" class="image-fit">
                                    <img src="{{ !empty($item->image) ? asset(Storage::url($item->image)) : asset('assets/images/sub1.png') }}" alt="{{ $item->title }}">
                                </a>
                                <div class="info">
                                    <h3><a href="{{ url($subCategory->slug . '/' . $item->slug) }}.html">{{ $item->title }}</a></h3>
                                    <div class="des">{!! \Illuminate\Support\Str::limit($item->excerpt, '70','...') !!}</div>
                                    <div class="price">${{ $item->price }} / 1 hour</div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection
