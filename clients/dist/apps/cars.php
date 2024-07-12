<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Vioo Bookings">

    <title>Vioo Bookings / hotels</title>
    <link rel="icon" href="logo.png" type="image/png">
    <!-- Favicon-->
    <link rel="stylesheet" href="../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/amaze.style.min.css">
</head>

<body class="font-raleway ">

    <div id="body" class="theme-blue">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="mt-3"><img class="zmdi-hc-spin w60" src="../assets/images/loader.svg" alt="Amaze"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <div class="overlay"></div>

        <?php
        include "inc/header.php";
        include "inc/sidebar.php";
        ?>

        <!-- Main Content -->
        <div class="body_area after_bg sm">

            <div class="block-header">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <ul class="breadcrumb pl-0 pb-0 ">
                                <li class="breadcrumb-item"><a href="app">Home</a></li>
                                <li class="breadcrumb-item active">Cars</li>
                            </ul>
                            <h1 class="mb-1 mt-1">Cars</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">
                            <a href="add-cars.php" class="btn btn-secondary">Add New Cars</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control show-tick">
                                                <option value="">-- Beds --</option>
                                                <option value="10">1</option>
                                                <option value="10">2</option>
                                                <option value="20">3</option>
                                                <option value="20">4</option>
                                                <option value="20">5</option>
                                                <option value="20">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control show-tick">
                                                <option value="">-- Baths --</option>
                                                <option value="10">1</option>
                                                <option value="10">2</option>
                                                <option value="20">3</option>
                                                <option value="20">4</option>
                                                <option value="20">5</option>
                                                <option value="20">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Sq Ft">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Car Model</th>
                                            <th class="border-top-0">Car Year</th>
                                            <th class="border-top-0">Type</th>
                                            <th class="border-top-0">Price Per Day</th>
                                            <th class="border-top-0">Availability</th>
                                            <th class="border-top-0">Location</th>
                                            <th class="border-top-0">Agent</th>
                                            <th class="border-top-0">Rental Status</th>
                                            <th class="border-top-0">Features</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="d-flex">
                                                <a href="property-list.html#"><img class="img-fluid rounded w60"
                                                        src="../assets/images/realestate/1.jpg" alt="property img"></a>
                                                <div class="ml-3">
                                                    <!-- <strong>Toyota Camry</strong> -->
                                                    <div class="pt-2">Toyota Camry</div>
                                                </div>
                                            </td>
                                            <td>2003</td>
                                            <td>Sedan</td>
                                            <td>$40</td>
                                            <td><span class="badge badge-success p-2">Available</span></td>
                                            <td>
                                                <div class="font-13 text-muted"><i class="zmdi zmdi-pin"></i> Downtown</div>
                                            </td>
                                            <td>
                                                <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar"
                                                    alt="">
                                                <span>Robert</span>
                                            </td>
                                            <td><span class="badge badge-success p-2">Available</span></td>
                                            <td>GPS, Automatic</td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="">View</a>
                                                        <a class="dropdown-item" href="">Edit</a>
                                                        <a class="dropdown-item" href="">Delete</a>
                                                        <a class="dropdown-item" href="">Suspend</a>
                                                    </div>
                                                </div>
                                            </td>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                include "inc/footer.php";
                ?>
            </div>

        </div>

    </div>


    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>