@extends('layouts.master')

@section('content')
    <main id="content" class="globale-content content-page">
        <div class="container">
            <div class="brecump">
                <a href="{{ url('/') }}">Home</a> <img src="{{ asset("assets/images/arrow-right.png") }}" alt="">
                <span>Categories</span>
            </div>
            <div class="categories">
                <h2 class="section-title">Categories</h2>
                <ul>
                    @foreach($categories as $item)
                        <li>
                            <a href="{{ url('/categories/' . $item->slug) }}" class="cat-item image-fit">
                                <img src="{{ !empty($item->image) ? asset(\Storage::url($item->image)) : asset('assets/images/cat1.jpg') }}" alt="{{ $item->title }}">
                                <h3>{{ $item->title }}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection
