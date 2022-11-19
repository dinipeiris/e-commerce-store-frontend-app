<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart - New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/globe-grid (1).png" />
</head>

<body>

    <div class="container-fluid">
        <div class="row"> 
            <?php include "header.php"; ?>
            
            <div><h1>Cart <hr></h1></div>

            <div class="col-11 alert alert-success mx-auto my-3" role="alert">
                <h4 class="alert-heading">Your cart is empty!!!</h4>
                <p>Looks like you haven't added anything to your cart yet. </p>
                <hr>
                <button class="btn btn-success">Go Explore Now
                    <a href="allProducts.php" class="stretched-link"></a>
                </button>
            </div>

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