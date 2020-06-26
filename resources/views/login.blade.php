@extends('layouts.master')

@section('title')
    <title>Login</title>
@endsection

@section('header')

@endsection
@section('content')
    <main id="content" class="login-content text-center">
        <div class="container">
            <a href="" class="logo"><img src="assets/images/logo.png" alt=""></a>
            <h1 class="font-bold">Sign in to Thalassa Concept</h1>
            <form action="{{ route('post.login') }}" id="loginForm" method="POST">
                @csrf
                <div class="form-group text-left">
                    <label>Email</label>
                    <input type="text" class="form-control {{ isset($errors) && $errors->has('email') ? 'error' : '' }}" name="email" placeholder="Enter your email">
                    {!! $errors->first('email', '<label id="email-error" class="error" for="email">:message</label>') !!}
                </div>
                <div class="form-group text-left">
                    <label>Password</label>
                    <input type="password" class="form-control {{ isset($errors) && $errors->has('password') ? 'error' : '' }}" name="password" placeholder="Enter your password">
                    {!! $errors->first('password', '<label id="email-error" class="error" for="email">:message</label>') !!}
                </div>
                {!! isset($errorLogin) ? '<label id="email-error" class="error" for="email">'.$errorLogin.'</label>' : '' !!}
                <div class="form-group form-remember text-left">
                    <label>
                        <input type="checkbox" name="chk-remember"> Remember me?
                    </label>
                </div>
                <div class="form-submit">
                    <button class="btn btn-default" type="submit">Sign In</button>
                </div>
            </form>
        </div>
    </main>
@endsection
@section('footer')
    <footer id="footer" class="footer-login text-center">
        <div class="container">
            <div class="languages text-left">
                <a href="" class="current"><img src="assets/images/fr.png" alt=""> Francais</a>
                <ul>
                    <li><a href=""><img src="assets/images/fr.png" alt=""> Francais</a></li>
                    <li><a href=""><img src="assets/images/en.jpg" alt=""> England</a></li>
                </ul>
            </div>
            <div class="copyright">© 2020 Thalassa Concept. All rights reserved.</div>
        </div>
    </footer>
@endsection
@section('js')
    <script>
        jQuery(function($){
            $("#loginForm").validate({
                rules: {
                    email: "required",
                    password: "required"
                },
                messages: {
                    email: "Please enter correct your email",
                    password: "Please enter correct your password"
                }
            });
        })
    </script>
@endsection
