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
                    
                    <div class="col-12 col-lg-6" id="signUpBox">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title1">First time visitor? Register</p>
                                <p class="title2">Register now and get your first order free delievered!!!</p>
                            </div>
                            <div class="col-6 form-floating">
                                <input type="text" class="form-control" placeholder="First Name">
                                <label for="fname" class="form-label text">First Name</label>
                            </div>
                            <div class="col-6 form-floating">
                                <input type="text" class="form-control" placeholder="Last Name">
                                <label for="lname" class="form-label text">Last Name</label>
                            </div>
                            <div class="col-12 form-floating">
                                <input type="email" class="form-control" placeholder="E-mail Address">
                                <label for="email" class="form-label">E-mail Address</label>
                            </div>
                            <div class="col-6 form-floating">
                                <input type="password" class="form-control" placeholder="Password">
                                <label for="pw" class="form-label text">Password</label>
                            </div>
                            <div class="col-6 form-floating">
                                <input type="password" class="form-control" placeholder="Re-enter Password">
                                <label for="pw" class="form-label text">Re-enter Password</label>
                            </div>
                            <div class="col-6 form-floating">
                                <input type="text" class="form-control" placeholder="Mobile Number">
                                <label for="mobile" class="form-label text">Mobile Number</label>
                            </div>
                            <div class="col-6 form-floating">
                                <div>
                                    <select class="form-select py-3" id="brand">
                                        <option selected>Province</option>
                                        <option value="1">Western Province</option>
                                        <option value="2">Eastern province</option>
                                        <option value="3">Central Province</option>
                                        <option value="3">Nothern Province</option>
                                        <option value="3">North-Central Province</option>
                                        <option value="3">North-Western Province</option>
                                        <option value="3">Sabaragamuwa Province</option>
                                        <option value="3">Southern Province</option>
                                        <option value="3">Uva Province</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="home();">Sign Up</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-dark" onclick="changeView();">Already have an account? Sign In</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 d-none" id="signInBox">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title1">Sign In</p>
                                <p class="title2">Welcome back!!!</p>
                                <span class="text-danger" id="msg2"></span>
                            </div>

                            <div class="col-12 form-floating">
                                <input type="email" class="form-control" placeholder="E-mail Address">
                                <label for="email" class="form-label">E-mail Address</label>
                            </div>
                            <div class="col-12 form-floating">
                                <input type="password" class="form-control" placeholder="Password">
                                <label for="pw" class="form-label">Password</label>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-check-label">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="link-primary">Forgot Password?</a>
                            </div>
                            <div class="col-12 d-grid">
                                <button class="btn btn-primary" onclick="home();">Sign In</button>
                            </div>
                            <div class="col-12 d-grid">
                                <button class="btn btn-success" onclick="changeView();">New user? Join Now</button>
                            </div>
                            <div class="col-12 text-center">
                                <a href="admin.php" class="link-success">Admin Sign In</a>
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