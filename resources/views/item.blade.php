@extends('layouts.master')
@section('title')
    <title>Item</title>
@stop
@section('content')
    <div class="detail-slider">
        <div class="slider-item">
            <img src="assets/images/detail1.jpg" alt="">
        </div>
        <div class="slider-item">
            <img src="assets/images/detail1.jpg" alt="">
        </div>
        <div class="slider-item">
            <img src="assets/images/detail1.jpg" alt="">
        </div>
        <div class="slider-item">
            <img src="assets/images/detail1.jpg" alt="">
        </div>
        <div class="slider-item">
            <img src="assets/images/detail1.jpg" alt="">
        </div>
    </div>
    <main id="content" class="globale-content">
        <div class="container">
            <h1 class="section-title">Signature Salt Bath Treatment</h1>
            <div class="content-text">
                <p>Enjoy the full benefits of Sundara’s signature products which draw ingredients indigenous to the area. This treatment begins with exfoliation of the skin, followed by a luxurious bath soak and then full body hydration to conclude the service.</p>
            </div>
        </div>
    </main>
@endsection
@section('footer')
    <div id="addCarts">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="total-price">
                        Total Price <b>$285.0</b>
                    </div>
                </div>
                <div class="col-7">
                    <div class="quatity text-right">
                        Qty:
                        <div class="number-custom relative-section">
                            <a href="" class="minus"></a>
                            <input type="number" name="" id="" value="1"  min="1">
                            <a href="" class="plus"></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-default font-bold">Add to Cart</button>
        </div>
    </div>
@endsection
@section('js')
    <script>
        jQuery(function($){
            $('.detail-slider').slick({
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
            });
            $('.suggestions ul').slick({
                infinite: true,
            });
            $('.nom-item li a').on('click',function() {
                $(this).toggleClass('active');
                return false;
            });
        })
    </script>
@endsection
