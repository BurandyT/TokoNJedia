<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .flashSale{
            background-color: #cfe8d9;
            height: 20%;
            width: 10vw;
            overflow: hidden;
            border-radius: 0.8rem !important;
        }

        .extendImage{
            background-color: #cfe8d9;
            width: 20vw;
            border-radius: 1.2rem !important;
        }

        .position-relative {
            position: relative;
        }

        .overlay-image {
            position: absolute;
            top: 100px;
            left: 0;
            width: 100%;
            z-index: 1;
        }

        .text-overlay {
            position: absolute;
            /* transform: translate(-50%, -50%); */
            color: white;
            font-size: 10px;
            font-weight: bold;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="vh-55">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-50 h-75 mx-auto" src="assets/images/promos/christmas-sale.png" alt="First slide" onclick="setSelectedPromo(2, 'Santa’s Surprise', 'assets/images/promos/christmas-sale.png', 'Christmas Sale up to 50% off. Sale ends at 31th December.')">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50 h-75 mx-auto" src="assets/images/promos/driving-promo.jpg" alt="Second slide" onclick="setSelectedPromo(3, 'Driver’s Night', 'assets/images/promos/driving-promo.jpg', 'Sale on driving products.')">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50 h-75 mx-auto" src="assets/images/promos/pb-promo.jpg" alt="Third slide" onclick="setSelectedPromo(5, 'PB\'s Magical Blessing', 'assets/images/promos/pb-promo.jpg', 'Up to 100% off.')">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50 h-75 mx-auto" src="assets/images/promos/super-sale.png" alt="Fourth slide" onclick="setSelectedPromo(4, 'Super Sale', 'assets/images/promos/super-sale.png', 'Sale up to 75% off, limited time only.')">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50 h-75 mx-auto" src="assets/images/promos/year-end.png" alt="Fifth slide" onclick="setSelectedPromo(1, 'New Year’s Sale', 'assets/images/promos/year-end.png', 'New Year\'s Sale up to 70% off. Sale ends at 4th January.')">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="left: 20%;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="right: 20%;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    {{-- <div>
        <div class="container">
            <div class="row-md-3 mb-4">
                @foreach ($productsImages->random(4) as $productImage)
                    <div class="card">
                        <img src="{{ $productImage->image }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $productImage->product->category->name }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div class="container ">

                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">

                                <!-- Favorite Categories Section -->
                                <div class="col-md-7 mb-4">
                                    <h2 class="mt-4 mb-3">Favorite Categories</h2>
                                    <div class="row">

                                            @foreach ($productsImages->random(4) as $productImage)
                                                <div class="col-md-3 mb-1">
                                                    <div class="card">
                                                        <img src="{{ $productImage->image }}" class="card-img-top" alt="Product Image">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $productImage->product->category->name }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                    </div>
                                </div>

                                <!-- Top-up & Bills Section -->
                                <div class="col-md-5">
                                    <h2 class="mt-4 mb-3">Top-up & Bills</h2>
                                    <h5 class="card-title">Subscription</h5>

                                    <form>
                                        <div class="mb-3">
                                            <label for="subscriptionNumber" class="form-label">Subscription Number</label>
                                            <input type="text" class="form-control" id="subscriptionNumber" name="subscriptionNumber" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="Nominal" class="form-label">Nominal</label>
                                            <input type="text" class="form-control" id="subscriptionNumber" name="subscriptionNumber" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="extendImage">
                    <img src="assets\images\general\flash-sale.webp" class="flashSale">
                </div>
            </div>

            <div class="col-md-7">
                <div class="row">
                    @foreach ($productsImages->random(4) as $productImage)
                        <div class="col-md-3 mb-1">
                            <div class="card my-xl-5">
                                <div class="imageRule">
                                    <img src="{{ $productImage->image }}" class="card-img-top" alt="Product Image" height="100px">
                                    <div class="text-overlay">Flash Sale</div>
                                    <img src="assets/images/deals/deals-product-image-accent.png" class="overlay-image" alt="Overlay Image">
                                </div>
                                <div class="card-body">

                                    <label class="card-title"> Rp{{ $price}}</label>
                                    <h5 class="card-title">{{ $productImage->product->name }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @extends('layouts.Footer')
</body>
</html>
