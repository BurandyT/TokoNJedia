<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link href="{{ asset('assets/bootstrap-5.1.3-dist/css/bootstrap.css') }}"  rel="stylesheet" >
</head>
<body>
    <header class="text-center my-lg-3">
        <h1 class="tokoNJedia">tokoNJedia</h1>
    </header>
    {{-- <form action="POST" action="{{ route('register') }}"> --}}
    <form method="POST" action="{{ route('save-to-database') }}">
        @csrf

        <div class="row justify-content-center align-items-center">

            <div class="row">

                <div class="col-md-6 d-flex justify-content-end" style="margin-right: 3%;">
                    <img src="{{ asset('assets/images/backgrounds/register_new.png') }}" alt="Register Image" class="img-fluid" style="width: 60%; object-fit: contain; right: 2%;">
                </div>

                <div class="col-md-6" style="width: 400px;">
                    <div class="card">

                            <h5 class="card-title text-center" style="padding-top: 3%">Register</h5>

                        <div class="card-body">

                            <div style="padding-left: 4%">
                                Already have an account?
                                <a href="{{ route('login') }}" class="text-muted">Login</a>
                            </div>

                            <div class="card-body">

                                <div class="mb-3 text-center">
                                    <button type="button" class="btn btn-outline-light" style="width: 100%; background-color: white; color: black; border: 1px solid #ccc;">
                                        <img src="assets/images/google.png" style="width: 20px; height: 20px; margin-right: 20px;">
                                        Google
                                    </button>
                                </div>

                                <div class="mb-3 text-center d-flex align-items-center">
                                    <div class="flex-grow-1 border-top border-1 border-secondary mx-4"></div>
                                    <span class="text-muted mx-2">or</span>
                                    <div class="flex-grow-1 border-top border-1 border-secondary mx-4"></div>
                                </div>

                                <form>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-12 col-form-label text-start">Email</label>
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="password" class="col-sm-12 col-form-label text-start">Password</label>
                                        <div class="col-sm-12">
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="Username" class="col-sm-12 col-form-label text-start">Username</label>
                                        <div class="col-sm-12">
                                            <input type="username" class="form-control" id="username" name="username" required>
                                        </div>
                                    </div>

                                    {{-- <form method="POST" action="{{ route('save-to-database') }}">
                                        @csrf --}}
                                        <div class="mb-3 row">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    {{-- </form> --}}

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</body>
</html>
