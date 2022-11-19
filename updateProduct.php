<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Product - New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/globe-grid (1).png" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php include "adminHeader.php"; ?>

            <div class="d-md-flex">

                <div class="col-12 col-md-6 col-lg-5">

                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="phones/Apple-iPhone-13-Pro-Max-Graphite-01.jpg" class="d-block mx-auto proimage">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="phones/Apple-iPhone-13-Pro-Max-Graphite-03.jpg" class="d-block mx-auto proimage">
                            </div>
                            <div class="carousel-item">
                                <img src="phones/Apple-iPhone-13-Pro-Max-Graphite-04.jpg" class="d-block mx-auto proimage">
                            </div>
                            <div class="carousel-item">
                                <img src="phones/Apple-iPhone-13-Pro-Max-Graphite-05.jpg" class="d-block mx-auto proimage">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg 7">
                    <div class="row">
                        <img src="phones/apple_logo-cropped.png" class="img1">
                    </div>
                    <div class="row">
                        <h1>Apple iPhone 13 Pro Max - 256GB (Graphite)</h1>
                        <ul class="list-unstyled text1 pl-3">
                            <li><i class="bi bi-check"></i>Released 2021, September 24</li>
                            <li><i class="bi bi-check"></i>240g, 7.7mm thickness</li>
                            <li><i class="bi bi-check"></i>iOS 15, up to iOS 16.1</li>
                            <li><i class="bi bi-check"></i>128GB/256GB/1TB storage, no card slot</li>
                            <br>
                            <li><h2><mark>Rs.492,400.00</mark></h2></li>
                        </ul>
                    </div>
                    <div class="row py-2">
                        <div class="col-2 text-center"><h4><small class="text-muted">Colour</small></h4></div>
                        <div class="col-2 col-lg-1">
                            <a href="#" class="col1"></a>
                        </div>
                        <div class="col-2 col-lg-1">
                            <a href="#" class="col2"></a>
                        </div>
                    </div>
                    
                    <div class="py-3 px-auto">
                        <button class="btn btn-primary col-10" onclick="update();">Update Product <i class="bi bi-text-left"></i></button>
                    </div>
                    <div class=" px-auto">
                        <button class="btn btn-danger col-5">Remove Product <i class="bi bi-file-x"></i></button>
                        <button class="btn btn-dark col-5">Hold for a while <i class="bi bi-hourglass-split"></i></button>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <img src="resources/117800618-1-year-warranty-vector-label-stamp.webp" class="warranty">
                        </div>
                        <div class="col-12 col-lg-5">
                            <h4 class="pt-3">We accept</h4>
                            <img src="resources/6220ac0f912013c51947f9c4.png" class="master">
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