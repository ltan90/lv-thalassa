@extends('layouts.master')

@section('title')
    <title>Cart</title>
@endsection

@section('content')
    <main id="content" class="cart-content content-page">
        <div class="container">
            <h1 class="section-title">Cart (3)</h1>
            <div class="cart-list">
                <div class="cart-item">
                    <div class="relative-section">
                        <a href="" class="image-fit"><img src="assets/images/item1.jpg" alt=""></a>
                        <div class="info relative-section">
                            <h3><a href="">Signature Salt Bath Treatment</a></h3>
                            <div class="number-custom relative-section">
                                <a href="" class="minus"></a>
                                <input type="number" name="" id="" value="1"  min="1">
                                <a href="" class="plus"></a>
                            </div>
                            <div class="price">$285.0</div>
                        </div>
                        <a href="" class="cart-remove"><img src="assets/images/menu-close.png" alt=""></a>
                    </div>
                </div>
                <div class="cart-item">
                    <div class="relative-section">
                        <a href="" class="image-fit"><img src="assets/images/item2.jpg" alt=""></a>
                        <div class="info relative-section">
                            <h3><a href="">NEW CBD Bath Treatment</a></h3>
                            <div class="number-custom relative-section">
                                <a href="" class="minus"></a>
                                <input type="number" name="" id="" value="1"  min="1">
                                <a href="" class="plus"></a>
                            </div>
                            <div class="price">$450.0</div>
                        </div>
                        <a href="" class="cart-remove"><img src="assets/images/menu-close.png" alt=""></a>
                    </div>
                </div>
                <div class="cart-item">
                    <div class="relative-section">
                        <a href="" class="image-fit"><img src="assets/images/item3.jpg" alt=""></a>
                        <div class="info relative-section">
                            <h3><a href="">Seasonal Bath Treatment</a></h3>
                            <div class="number-custom relative-section">
                                <a href="" class="minus"></a>
                                <input type="number" name="" id="" value="1"  min="1">
                                <a href="" class="plus"></a>
                            </div>
                            <div class="price">$628.0</div>
                        </div>
                        <a href="" class="cart-remove"><img src="assets/images/menu-close.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="addCarts" class="paybar">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="total-price">
                        Total Price
                    </div>
                </div>
                <div class="col-6">
                    <div class="price-number text-right font-bold">$1,363.0</div>
                </div>
            </div>
            <button class="btn btn-default font-bold">Process to Pay</button>
        </div>
    </div>
@endsection

@section('jscript')
    <script>
        jQuery(function($){
            $('.cart-list .cart-item .cart-remove').on('click',function() {
                $(this).parents('.cart-item').remove();
                return false;
            });
        })
    </script>
@endsection
