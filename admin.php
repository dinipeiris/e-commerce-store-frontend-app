<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/globe-grid (1).png" />

</head>

<body class="main-body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <!-- header -->
            <div class="col-12 d-lg-none">
                <div class="row">
                    <div class="col-12 logo1"></div>
                </div>
            </div>
            <!-- header -->

            <!-- content -->
            <div class="col-12 p-3">
                <div class="row">

                    <div class="col-6 d-none d-lg-block logo"></div>

                    <div class="col-12 col-lg-6">
                        <div class="row g-2">
                                <div class="col-12">
                                    <h1 class="p-3">Admin Sign In</h1>
                                    <span class="text-danger" id="msg2"></span>
                                </div>

                                <div class="col-12 form-floating">
                                    <input type="email" id="email" class="form-control" placeholder="E-mail Address">
                                    <label for="email" class="form-label">E-mail Address</label>
                                </div>
                                <div class="col-12 form-floating">
                                    <input type="password" id="pw" class="form-control" placeholder="Password">
                                    <label for="pw" class="form-label">Password</label>
                                </div>
                                <div class="col-12 form-floating">
                                    <input type="password" id="pw" class="form-control" placeholder="Verification Code">
                                    <label for="code" class="form-label">Verification Code</label>
                                </div>
                                <div class="col-12 d-grid">
                                    <button class="btn btn-primary" onclick="adminPanel();">Sign In</button>
                                </div>
                                <div class="col-12 d-grid">
                                    <button class="btn btn-danger" onclick="admin();">Not an admin? Click here</button>
                                </div>
                            </div>

                        </div>

                </div>
            </div>
            <!-- content -->

            <!-- footer -->

            <div class="col-12 fixed-bottom d-none d-lg-block">
                <p class="text-center">&copy; 2022 NewTech.lk || All Right Reserved</p>
            </div>

            <!-- footer -->

            </div>

    </div>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>