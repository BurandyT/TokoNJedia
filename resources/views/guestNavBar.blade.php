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


        .third-layer {
            background-color: #ffffff;
            color: #ffffff;
        }

        .custom-width {
            width: 13%;
        }

        .btn-login {
            color: #28a745;
            background-color: #ffffff;
            border: 2px solid #28a745;
        }

        a.no-underline {
            text-decoration: none;
        }

    </style>
</head>
<body>

    <div class="container-fluid first-layer">
        <div class="row justify-content-end">
            <div class="col-md-6 custom-width text-right">
                <a href="#" class=" text-dark no-underline">Link 1</a>
                <a href="#" class=" text-dark no-underline">Link 2</a>
                <a href="#" class=" text-dark no-underline">Link 3</a>
                <a href="#" class=" text-dark no-underline">Link 4</a>
                <a href="#" class=" text-dark no-underline">Link 5</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            <h2 class="tokoNJedia">tokoNJedia</h2>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <div class="col-md-3 login-register-buttons">
            <a href="#" class="btn btn-login">Login</a>
            <a href="#" class="btn btn-success">Register</a>
        </div>
    </div>
</div>

    <div class="container-fluid third-layer">
        <div class="text-end">
            <div class="col-md-3">
                <a href="#" class=" text-dark no-underline">Link 1</a>
                <a href="#" class=" text-dark no-underline">Link 2</a>
                <a href="#" class=" text-dark no-underline">Link 3</a>
                <a href="#" class=" text-dark no-underline">Link 4</a>
                <a href="#" class=" text-dark no-underline">Link 5</a>
            </div>
        </div>
    </div>
    @extends('layouts.home')
</body>
</html>
