<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Search - New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/globe-grid (1).png" />
</head>

<body class="body">
    
    <div class="container-fluid">
        <div class="row">
            <?php include "header.php"; ?>

            <div class="col-12 title1">Try searching for your favourite products using keywords</div>

            <div class="col-12 col-lg-11 mx-auto p-3">

                <div class="input-group">
                    <div class="input-group-text">
                        <select class="form-select" style="max-width: 200px;">
                            <option>All Categories</option>
                            <option>Phones</option>
                            <option>Computers</option>
                            <option>Tablets</option>
                            <option>Gaming Accessories</option>
                            <option>Mobile Accessories</option>
                            <option>Computer Accessories</option>
                        </select>
                    </div>

                    <input type="search" id="form1" class="form-control" placeholder="Enter keywords"/>

                    <button class="btn btn-primary input-group-text">
                        <i class="bi bi-search display-6"></i>
                    </button>
                </div>
            </div>

            <div class="col-6 col-lg-3 d-grid pt-2 pb-3 mx-auto">
                <button class="btn btn-outline-primary" id="button" onclick="advancedSearch();"><i class="bi bi-binoculars-fill"></i> Try Advanced Search <i class="bi bi-chevron-double-down"></i></button>  
            </div>

            <div class="col-12 col-lg-10 pt-2 mx-auto d-none" id="advance">
                <div class="row p-3">
                    <div class="col-12 col-lg-4">
                        <select class="form-select">
                            <option>Select Category</option>
                            <option>Phones</option>
                            <option>Computers</option>
                            <option>Tablets</option>
                            <option>Gaming Accessories</option>
                            <option>Mobile Accessories</option>
                            <option>Computer Accessories</option>
                        </select>
                    </div>

                    <div class="col-12 col-lg-4">
                        <select class="form-select">
                            <option>Select Brand</option>
                            <option>Apple</option>
                            <option>Samsung</option>
                            <option>Huawei</option>
                            <option>Dell</option>
                            <option>ASUS</option>
                            <option>MSI</option>
                            <option>TCL</option>
                            <option>Canon</option>
                            <option>Epson</option>
                            <option>Gamdias</option>
                            <option>Logitech</option>
                            <option>ADATA</option>
                            <option>MI</option>
                            <option>Xiomi</option>
                            <option>Joyroom</option>
                        </select>
                    </div>

                    <div class="col-12 col-lg-4">
                        <select class="form-select">
                            <option>Select Model</option>
                            <option>Pro</option>
                            <option>Pro Max</option>
                            <option>Samsung</option>
                        </select>
                    </div>
                </div>

                <div class="row p-3">
                    <div class="col-12 col-lg-3">
                        <select class="form-select">
                            <option>Select Condition</option>
                            <option>Brand new</option>
                            <option>Used (With warranty))</option>
                            <option>Used (No warranty)</option>
                        </select>
                    </div>

                    <div class="col-12 col-lg-3">
                        <select class="form-select">
                            <option>Select Colour</option>
                            <option>Graphite</option>
                            <option>Sierra Blue</option>
                            <option>Rose Gold</option>
                        </select>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="input-group">
                            <div class="input-group-text">From Rs.</div>
                            <input type="text" class="form-control" placeholder="Min-price">
                            <div class="input-group-text">To Rs.</div>
                            <input type="text" class="form-control" placeholder="Max-price">
                        </div>
                    </div>
                </div>
            </div>

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
                                <div class="card-title"><h4>Samsung Galaxy Tab A7 10.4" (2020) (3GB+32GB) (Gray)</h4></div>
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
                                <div class="card-title"><h4>Huawei Nova 9 SE (8GB+128GB) (Blue)</h4></div>
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
                                <div class="card-title"><h4>Samsung Galaxy S22 Ultra (12GB+256GB) (Green)</h4></div>
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

            <?php include "footer.php"; ?>
        </div>
    </div>
    

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

