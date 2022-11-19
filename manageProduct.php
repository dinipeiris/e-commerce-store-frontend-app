<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Products & Users - New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/globe-grid (1).png" />
</head>

<body>

    <div class="container-fluid">
        <div class="row"> 
            <?php include "adminHeader.php"; ?>
            
            <div class="col-11 mx-auto">
                <div>
                    <div class="row">
                        <h2 class="text-start">Manage Products <hr></h2>
                        <button class="btn btn-warning col-3" onclick="addNew();">Add New Product <i class="bi bi-plus"></i></button>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">Image</th>
                            <th class="text-center" scope="col">Description</th>
                            <th class="text-center" scope="col">Available Amount</th>
                            <th class="text-center" scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center" scope="row">1</th> 
                                <td class="text-center"><img src="phones/Apple-iPhone-13-Pro-Max-Graphite-01.jpg" class="tab-img"></td>
                                <td class="text-center">Apple iPhone 13 Pro Max - 256GB (Graphite)
                                    <br>
                                    <a href="updateProduct.php">Update Product <i class="bi bi-chevron-double-right"></i></a>
                                </td>
                                <td class="text-center">10</td>
                                <td class="text-center"><i class="bi bi-file-x-fill"></i></td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th> 
                                <td class="text-center"><img src="phones/Apple-iPhone-13-Pro-Max-Sierra-Blue-01.jpg" class="tab-img"></td>
                                <td class="text-center">Apple iPhone 13 Pro Max - 256GB (Sierra Blue)
                                    <br>
                                    <a href="#">Update Product <i class="bi bi-chevron-double-right"></i></a>
                                </td>
                                <td class="text-center">12</td>
                                <td class="text-center"><i class="bi bi-file-x-fill"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div>
                    <h2>Manage Users <hr></h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">Name</th>
                                <th class="text-center" scope="col">Email Address</th>
                                <th class="text-center" scope="col">Mobile Number</th>
                                <th class="text-center" scope="col">District</th>
                                <th class="text-center" scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center" scope="row">1</th> 
                                <td class="text-center">Dinithi Peiris Deraniyagala</td>
                                <td class="text-center">dinithidjava@gmail.com
                                    <br>
                                    <a href="singleProduct.php">View Profile <i class="bi bi-chevron-double-right"></i></a>
                                </td>
                                <td class="text-center">0715896321</td>
                                <td class="text-center">Colombo</td>
                                <td class="text-center"><i class="bi bi-file-x-fill"></i></td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th> 
                                <td class="text-center">Ishini Perera</td>
                                <td class="text-center">ishi1997@gmail.com
                                    <br>
                                    <a href="singleProduct.php">View Profile <i class="bi bi-chevron-double-right"></i></a>
                                </td>
                                <td class="text-center">0777586478</td>
                                <td class="text-center">Kandy</td>
                                <td class="text-center"><i class="bi bi-file-x-fill"></i></td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th> 
                                <td class="text-center">Udara Dias</td>
                                <td class="text-center">ud123658@gmail.com
                                    <br>
                                    <a href="singleProduct.php">View Profile <i class="bi bi-chevron-double-right"></i></a>
                                </td>
                                <td class="text-center">0714596328</td>
                                <td class="text-center">Galle</td>
                                <td class="text-center"><i class="bi bi-file-x-fill"></i></td>
                            </tr>

                            
                        </tbody>
                    </table>
                </div>
            </div>

            <?php include "footer.php"; ?>
        </div>
    </div>



    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    
</body>