<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/globe-grid (1).png" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php include "header.php"; ?>

            <!-- carousel -->

            <div class="col-12 mb-3">
                <div class="row">

                    <div id="carouselExampleIndicators" class="offset-2 col-8 carousel slide carousel-fade" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="slider/1609225312735.webp" class="d-block w-100 mx-auto poster-img-1" />
                            </div>
                            <div class="carousel-item mx-auto">
                                <img src="slider/1609225261282.webp" class="d-block w-100 mx-auto poster-img-1" />
                            </div>
                            <div class="carousel-item">
                                <img src="slider\1623928954047.webp" class="d-block w-100 mx-auto poster-img-1" />
                            </div>
                            <div class="carousel-item">
                                <img src="slider\1633588959398.webp" class="d-block w-100 mx-auto poster-img-1" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>

            <!-- carousel -->

            <!-- featured -->
            <div class="mx-auto">
                <div><h3 class="pt-3">Featured Items <hr></h3></div>
                <div class="col d-flex">
                    <div class="row">
                                
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 card">
                            <img class="card-img-top" src="phones/HU-NOVA-Y70-BLU-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Huawei Nova Y70 (128GB) (Blue)</h4></div>
                                <div class="card-subtitle">3 more available.</div>
                                <div class="card-footer px-0">
                                    <h4>Rs.492,400</h4>
                                </div>
                                <div class="py-2">
                                    <button class="btn btn-danger col-12">Add to cart <i class="bi bi-cart-check"></i></button>
                                    <button class="btn btn-success col-12">Add to watchlist <i class="bi bi-bag-heart"></i></button>
                                </div>
                            </div>
                        </div>
                                    
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 card">
                            <img class="card-img-top" src="phones/Apple-iPhone-13-Pro-Max-Sierra-Blue-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Apple iPhone 13 Pro Max - 128GB (Blue)</h4></div>
                                <div class="card-subtitle">3 more available.</div>
                                <div class="card-footer px-0">
                                    <h4>Rs.492,400</h4>
                                </div>
                                <div class="py-2">
                                    <button class="btn btn-danger col-12">Add to cart <i class="bi bi-cart-check"></i></button>
                                    <button class="btn btn-success col-12">Add to watchlist <i class="bi bi-bag-heart"></i></button>
                                </div>
                            </div>
                        </div>
                                    
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 card">
                            <img class="card-img-top" src="otherProd\CAN-I-E4270-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Canon Inkjet Printer - PIXMA E4270</h4></div>
                                <div class="card-subtitle">3 more available.</div>
                                <div class="card-footer px-0">
                                    <h4>Rs.55,700</h4>
                                </div>
                                <div class="py-2">
                                    <button class="btn btn-danger col-12">Add to cart <i class="bi bi-cart-check"></i></button>
                                    <button class="btn btn-success col-12">Add to watchlist <i class="bi bi-bag-heart"></i></button>
                                </div>
                            </div>
                        </div>
                                    
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 card">
                            <img class="card-img-top" src="otherProd\SMG_SMG-SM-T505-GRY-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Samsung Galaxy Tab A7 10.4" (32GB) (Gray)</h4></div>
                                <div class="card-subtitle">3 more available.</div>
                                <div class="card-footer px-0">
                                    <h4>Rs.89,999</h4>
                                </div>
                                <div class="py-2">
                                    <button class="btn btn-danger col-12">Add to cart <i class="bi bi-cart-check"></i></button>
                                    <button class="btn btn-success col-12">Add to watchlist <i class="bi bi-bag-heart"></i></button>
                                </div>
                            </div>
                        </div>
                                    
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 card">
                            <img class="card-img-top" src="phones/HU-NOVA9SE-BLU-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Huawei Nova 9 SE (128GB) (Blue)</h4></div>
                                <div class="card-subtitle">3 more available.</div>
                                <div class="card-footer px-0">
                                    <h4>Rs.492,400</h4>
                                </div>
                                <div class="py-2">
                                    <button class="btn btn-danger col-12">Add to cart <i class="bi bi-cart-check"></i></button>
                                    <button class="btn btn-success col-12">Add to watchlist <i class="bi bi-bag-heart"></i></button>
                                </div>
                            </div>
                        </div>
                                    
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 card">
                            <img class="card-img-top" src="phones/SMG-SM-S22U-GRE-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Samsung Galaxy S22 Ultra (256GB) (Green)</h4></div>
                                <div class="card-subtitle">3 more available.</div>
                                <div class="card-footer px-0">
                                    <h4>Rs.492,400</h4>
                                </div>
                                <div class="py-2">
                                    <button class="btn btn-danger col-12">Add to cart <i class="bi bi-cart-check"></i></button>
                                    <button class="btn btn-success col-12">Add to watchlist <i class="bi bi-bag-heart"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                <!-- featured -->



            <?php include "footer.php"; ?>
        </div>
    </div>



    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    
</body>