<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{ asset('assets/bootstrap-5.1.3-dist/css/bootstrap.css') }}"  rel="stylesheet" >
    <style>

        .first-layer {
            background-color: #F0F3F7;
            color: #6D7588;
        }

        .second-layer{
            max-height: 40px;
            margin-bottom: 0;
        }

        .third-layer {
            background-color: #ffffff;
            color: #ffffff;
        }

        .custom-width {
            width: 17%;
        }

        .btn-login {
            color: #28a745;
            background-color: #ffffff;
            border: 2px solid #28a745;
        }

        a.no-underline {
            text-decoration: none;
        }

        .cart {
            margin-top: 5px;
            padding-right: 6%;
            max-height: 2%;
            width: auto;
        }

        .profile{
            margin-top: 5px;
            padding-right: 4%;
            max-height: 3%;
        }

        .link{
            margin-right: 5%;
        }

        body .form-control {
        width: 100%;
    }

    </style>
</head>
<body>

    <div class="container-fluid first-layer">
        <div class="row justify-content-end">
            <div class="col-md-6 custom-width text-right">
                <a href="#" class="link text-dark no-underline">Link 1</a>
                <a href="#" class="link text-dark no-underline">Link 2</a>
                <a href="#" class="link text-dark no-underline">Link 3</a>
                <a href="#" class="link text-dark no-underline">Link 4</a>
                <a href="#" class="link text-dark no-underline">Link 5</a>
            </div>
        </div>
    </div>

    <div class="container-fluid second-layer">
        <div class="row">
            <div class="col-md-1">
            <h2 class="tokoNJedia">tokoNJedia</h2>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" placeholder="Search">
        </div>

        <div class="col-md-3">
            <img src="assets/images/cart.png" class="cart">
            <img src="assets/images/chat.png" class="cart">
            {{-- <img src="assets/images/logo/logo.png" class=" cart"> --}}
            <img src="{{ auth()->check() ? $image : 'assets/images/default-user-image.png' }}" class="profile">
            <label for="">{{ auth()->check() ? $username : 'Guest' }}</label>

        </div>

    </div>
</div>

    <div class="container-fluid third-layer">
        <div class="text-end">
            <div class="col-md-3">
                <a href="#" class="link text-dark no-underline">Link 1</a>
                <a href="#" class="link text-dark no-underline">Link 2</a>
                <a href="#" class="link text-dark no-underline">Link 3</a>
                <a href="#" class="link text-dark no-underline">Link 4</a>
                <a href="#" class="link text-dark no-underline">Link 5</a>
            </div>
        </div>
    </div>
@extends('layouts.home')
</body>
</html>
