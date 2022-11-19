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
            <div class="col-11 mx-auto">

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">Image</th>
                            <th class="text-center" scope="col">Description</th>
                            <th class="text-center" scope="col">Quantity</th>
                            <th class="text-center" scope="col">Price</th>
                            <th class="text-center" scope="col">Remove</th>
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
                            <td class="text-center">1</td>
                            <td class="text-center">Rs.492,400</td>
                            <td class="text-center"><i class="bi bi-file-x-fill"></i></td>
                        </tr>
                        <tr>
                            <th class="text-center"><i class="bi bi-chevron-compact-right"></i></th>
                            <td colspan="2" class="text-start"><h3>Sub Total</h3></td>
                            <td colspan="2" class="text-end"><h3>Rs.492,400</h3></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class=" table-success text-center"><i class="bi bi-chevron-compact-right"></i></th>
                            <td colspan="2" class="table-success text-start text-success"><h3>Discounts</h3></td>
                            <td colspan="2" class="table-success text-end text-success"><h3>-</h3></td>
                            <td class="table-success"></td>
                        </tr>
                        <tr>
                            <th class=" table-primary text-center"><i class="bi bi-chevron-compact-right"></i></th>
                            <td colspan="2" class="table-primary text-start text-primary"><h3>Shipping Cost</h3></td>
                            <td colspan="2" class="table-primary text-end text-primary"><h3>Rs.1,400</h3></td>
                            <td class="table-primary"></td>
                        </tr>
                        <tr>
                            <th class=" table-danger text-center"><i class="bi bi-chevron-compact-right"></i></th>
                            <td colspan="2" class="table-danger text-start text-danger"><h2>Total</h2></td>
                            <td colspan="2" class="table-danger text-end text-danger"><h2>Rs.493,800</h2></td>
                            <td class="table-danger"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="row p-3">
                    <h4>If you have a promotion code, please enter it here.</h4>
                    <div class="col-10 mx-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promotion Code">
                            <div class="input-group-text">Apply Discount</div>
                        </div>
                    </div>
                </div>

                <div class="row py-3">
                    <div class="d-grid gap-2 col-6 mx-auto text-center">
                        <button class="btn btn-info p-2" onclick="home();">Continue Shopping <i class="bi bi-cart-check"></i></button>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto text-center">
                        <button class="btn btn-danger p-2">Checkout <i class="bi bi-cart-check-fill"></i></button>
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>



    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    
</body>