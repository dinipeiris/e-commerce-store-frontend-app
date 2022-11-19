<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel - New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/globe-grid (1).png" />
</head>

<body>

    <div class="container-fluid">
        <div class="row"> 
            <?php include "adminHeader.php"; ?>

            <div class="col-12 mx-auto">
                <div><h3>Update Product Details <hr></h3></div>
                <div><h4 class="text-secondary">Apple iPhone 13 Pro Max - 256GB (Graphite)</h4></div>

                <form>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="dname" class="col-form-label">Display Name</label>
                        </div>
                        <div class="col-5">
                            <input type="text" id="dname" class="form-control" aria-describedby="dname">
                        </div>
                        <div class="col-auto">
                            <span id="dname" class="form-text">Must be less than 100 characters.</span>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="pname" class="col-form-label">Product Name</label>
                        </div>
                        <div class="col-5">
                            <input type="text" id="pname" class="form-control" aria-describedby="pname">
                        </div>
                        <div class="col-auto">
                            <span id="pname" class="form-text">Must be less than 100 characters.</span>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="code" class="col-form-label">Product Code</label>
                        </div>
                        <div class="col-5">
                            <input type="text" id="code" class="form-control" aria-describedby="code">
                        </div>
                        <div class="col-auto">
                            <span id="code" class="form-text">Must be less than 100 characters.</span>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="category" class="col-form-label">Category</label>
                        </div>
                        <div class="col-5">
                            <select class="form-select" id="category">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="brand" class="col-form-label">Brand</label>
                        </div>
                        <div class="col-5">
                            <select class="form-select" id="brand">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="model" class="col-form-label">Model</label>
                        </div>
                        <div class="col-5">
                            <input type="text" id="model" class="form-control" aria-describedby="model">
                        </div>
                        <div class="col-auto">
                            <span id="model" class="form-text">Must be less than 100 characters.</span>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="price" class="col-form-label">Price</label>
                        </div>
                        <div class="col-5">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Rs.</span>
                                <input type="text" class="form-control" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="col-auto">
                            <span id="price" class="form-text">Must be in LKR.</span>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="status" class="col-form-label">Status</label>
                        </div>
                        <div class="form-check col-3 px-5">
                            <input class="form-check-input" type="radio" name="radio1" id="radio1">
                            <label class="form-check-label" for="radio1">Brand New</label>
                        </div>
                        <div class="form-check col-3 px-5">
                            <input class="form-check-input" type="radio" name="radio1" id="radio1">
                            <label class="form-check-label" for="radio1">Used (With warranty)</label>
                        </div>
                        <div class="form-check col-3 px-5">
                            <input class="form-check-input" type="radio" name="radio1" id="radio1">
                            <label class="form-check-label" for="radio1">Used (No warranty)</label>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="colour" class="col-form-label">Colour</label>
                        </div>
                        <div class="col-5">
                            <input type="color" id="colour" class="form-control" aria-describedby="colour">
                        </div>
                        <div class="col-auto">
                            <span id="colour" class="form-text">Select the colour.</span>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="key" class="col-form-label">Keywords</label>
                        </div>
                        <div class="col-5">
                            <textarea class="form-control" id="key" rows="4"></textarea>
                        </div>
                        <div class="col-auto">
                            <span id="code" class="form-text">Separate word from word using only space.</span>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 align-items-center">
                        <div class="col-3 text-end text1">
                            <label for="image" class="col-form-label">Product Code</label>
                        </div>
                        <div class="col-5">
                            <input type="file" id="image" class="form-control" aria-describedby="image">
                            <input type="file" id="image" class="form-control" aria-describedby="image">
                            <input type="file" id="image" class="form-control" aria-describedby="image">
                            <input type="file" id="image" class="form-control" aria-describedby="image">
                        </div>
                        <div class="col-auto">
                            <span id="image" class="form-text">Only .jpg .jpeg .png are accepted.</span>
                        </div>
                    </div>

                </form>

                <div class="d-flex pt-5 text-center">
                    <div class="col-4">
                        <button class="btn btn-success col-md-6">Save changes</button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary col-md-6">Save draft</button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-danger col-md-6" onclick="home();">Discard</button>
                    </div>
                </div>
                
            </div>

            <?php include "footer.php"; ?>
        </div>
    </div>



    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    
</body>