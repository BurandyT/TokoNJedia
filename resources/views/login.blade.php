<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="{{ asset('assets/bootstrap-5.1.3-dist/css/bootstrap.css') }}"  rel="stylesheet" >
</head>
<body>
    <header class="text-center my-lg-3">
        <h1 class="tokoNJedia">tokoNJedia</h1>
    </header>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="col-md-12 text-center position-relative" >
            <img src="assets/images/backgrounds/login-bg.png" style="width: 50%; z-index: -1;">

            <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 1; width: 368px; background: #FFFFFF; position: absolute; top: 15px; left: 0; right: 0; border-radius: 8px; padding: 32px;">
                <div class="row justify-content-center">
                    <div class="col-md-12">

                            <div>
                                <h5 class="card-title text-center">Welcome Back!</h5>
                            </div>
                            <div>
                                Don't have an account?
                                <a href="{{ route('register') }}" class="text-muted">Register</a>
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

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-success">Login</button>
                                    </div>
                                </form>
                            </div>

                    </div>
                </div>
            </div>

        </div>
    </form>
    <script src="{{ asset('public/assets/bootstrap-5.1.3-dist/js/bootstrap.js') }}"></script>
</body>
</html>
