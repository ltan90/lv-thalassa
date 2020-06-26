@extends('layouts.master')

@section('content')
    <main id="content" class="globale-content content-page">
        <div class="container">
            <div class="brecump">
                <a href="home.html">Home</a> <img src="assets/images/arrow-right.png" alt="">
                <span>Categories</span>
            </div>
            <div class="categories">
                <h2 class="section-title">Categories</h2>
                <ul>
                    <li>
                        <a href="" class="cat-item image-fit">
                            <img src="assets/images/cat1.jpg" alt="">
                            <h3>Hydrotherapy</h3>
                        </a>
                    </li>
                    <li>
                        <a href="" class="cat-item image-fit">
                            <img src="assets/images/cat2.jpg" alt="">
                            <h3>Algotherapy</h3>
                        </a>
                    </li>
                    <li>
                        <a href="" class="cat-item image-fit">
                            <img src="assets/images/cat3.jpg" alt="">
                            <h3>Physiotherapy</h3>
                        </a>
                    </li>
                    <li>
                        <a href="" class="cat-item image-fit">
                            <img src="assets/images/cat4.jpg" alt="">
                            <h3>Aqua Exercise</h3>
                        </a>
                    </li>
                    <li>
                        <a href="" class="cat-item image-fit">
                            <img src="assets/images/cat5.jpg" alt="">
                            <h3>Underwater Massage</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection
