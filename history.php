<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>History - New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/globe-grid (1).png" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php include "header.php"; ?>

            <div class="mx-auto">
                <div><h3>My Order History <hr></h3></div>
                <div class="col-11 mx-auto">
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">Image</th>
                                <th class="text-center" scope="col">Description</th>
                                <th class="text-center" scope="col">Order Status</th>
                                <th class="text-center" scope="col">Ordered Date</th>
                                <th class="text-center" scope="col">Shipping Status</th>
                                <th class="text-center" scope="col">Delieverd Date</th>
                                <th class="text-center" scope="col">Delieverd Location</th>
                                <th class="text-center" scope="col">Hide</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center" scope="row">1</th> 
                                    <td class="text-center"><img src="phones/Apple-iPhone-13-Pro-Max-Graphite-01.jpg" class="tab-img"></td>
                                    <td class="text-center">Apple iPhone 13 Pro Max - 256GB (Graphite)
                                        <br>
                                        <a href="singleProduct.php">View Product <i class="bi bi-chevron-double-right"></i></a>
                                    </td>
                                    <td class="text-center">Successful</td>
                                    <td class="text-center">2022.10.15</td>
                                    <td class="text-center">Successful</td>
                                    <td class="text-center">2022.10.18</td>
                                    <td class="text-center">12, St. Peters Road, Mt. Lavinia, Colombo.</td>
                                    <td class="text-center"><i class="bi bi-file-x-fill"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div><h3 class="pt-3">Recently Searched Items <hr></h3></div>
                <div class="col d-flex">
                    <div class="row">
                            
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 card">
                            <img class="card-img-top" src="phones/Apple-iPhone-13-Pro-Max-Graphite-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Apple iPhone 13 Pro Max - 256GB (Graphite)</h4></div>
                                <div class="card-subtitle">3 more available.</div>
                                <div class="card-footer px-0">
                                    <h4>Rs.492,400</h4>
                                </div>
                                <div class=" py-2">
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
                            <img class="card-img-top" src="phones\HU-NOVA9SE-B-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Huawei Nova 9 SE (128GB) (Black)</h4></div>
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
                            <img class="card-img-top" src="phones/SMG-SM-S22U-B-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Samsung Galaxy S22 Ultra (256GB) (Black)</h4></div>
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
                            <img class="card-img-top" src="phones/Apple-iPhone-13-Pro-Max-Graphite-01.jpg">
                            <div class="card-text card-img-overlay"></div>
                            <div class="card-body">
                                <div class="card-title"><h4>Apple iPhone 13 Pro Max - 128GB (Graphite)</h4></div>
                                <div class="card-subtitle">3 more available.</div>
                                <div class="card-footer px-0">
                                    <h4>Rs.492,400</h4>
                                </div>
                                <div class=" py-2">
                                    <button class="btn btn-danger col-12">Add to cart <i class="bi bi-cart-check"></i></button>
                                    <button class="btn btn-success col-12">Add to watchlist <i class="bi bi-bag-heart"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php include "footer.php"; ?>
        </div>
    </div>



    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    
</body>