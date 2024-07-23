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

        <!-- Top Bar -->
        <?php 
       include_once "inc/header.php"; 
       include_once "inc/sidebar.php";
       ?>

        <!-- Main Content -->
        <div class="body_area">

            <div class="block-header">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <ul class="breadcrumb pl-0 pb-0 ">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Cars</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ul>
                            <h1 class="mb-1 mt-1">Car Details</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div id="propertyImgSlider" class="carousel slide" data-ride="carousel">
                                    <ul class="carousel-indicators">
                                        <li data-target="#demo2" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo2" data-slide-to="1" class=""></li>
                                        <li data-target="#demo2" data-slide-to="2" class=""></li>
                                    </ul>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../assets/images/realestate/1.jpg" class="img-fluid" alt="">
                                            <div class="carousel-caption">
                                                <h3>Chicago</h3>
                                                <p>Thank you, Chicago!</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/realestate/2.jpg" class="img-fluid" alt="">
                                            <div class="carousel-caption">
                                                <h3>New York</h3>
                                                <p>We love the Big Apple!</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/realestate/3.jpg" class="img-fluid" alt="">
                                            <div class="carousel-caption">
                                                <h3>Los Angeles</h3>
                                                <p>We had such a great time in LA!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="property-detail.html#propertyImgSlider"
                                        data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                                    <a class="carousel-control-next" href="property-detail.html#propertyImgSlider"
                                        data-slide="next"><span class="carousel-control-next-icon"></span></a>
                                </div>
                                <div class="property grid mt-4">
                                    <div class="details flex-grow-1">
                                        <div class="tc_content">
                                            <div class="d-flex justify-content-between">
                                                <ul class="list-unstyled tag">
                                                    <li class="list-inline-item"><a href="property-detail.html#"
                                                            class="rent">For Rent</a></li>
                                                    <li class="list-inline-item"><a href="property-detail.html#"
                                                            class="sale">Featured</a></li>
                                                </ul>
                                                <span class="font-25">$8,850<small>/mo</small></span>
                                            </div>
                                            <p class="text-danger">Apartment</p>
                                            <span class="rating">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                            </span>
                                            <h5>Camry 2005</h5>
                                            <p><i class="zmdi zmdi-map-pin font-13"></i> Pick-Up: 1421 San Pedro St, Los Angeles,
                                                CA 90015</p>
                                            <ul class="list-unstyled property-info">
                                                <li class="list-inline-item"><a href="property-detail.html#">Beds:
                                                        <strong>4</strong></a></li>
                                                <li class="list-inline-item"><a href="property-detail.html#">Baths:
                                                        <strong>2</strong></a></li>
                                                <li class="list-inline-item"><a href="property-detail.html#">Sq Ft:
                                                        <strong>5280</strong></a></li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><a href="property-detail.html#"><img
                                                            class="avatar rounded-circle"
                                                            src="../assets/images/xs/avatar1.jpg" alt="avatar.png"></a>
                                                </li>
                                                <li class="list-inline-item"><a href="property-detail.html#">Rose
                                                        Rivera</a></li>
                                            </ul>
                                            <div>4 years ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>General Amenities</h2>
                            </div>
                            <div class="body">
                                <ul class="row list-unstyled amenities-list mb-0">
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Air Conditioning</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Heated Seats</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Adjustable Seats
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Power Windows
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Leather Upholstery
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Bluetooth Connectivity</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>USB Ports
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i
                                            class="zmdi zmdi-check mr-1"></i>Audio System (CD/MP3)</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Touchscreen Display
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Satellite Radio
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Airbags (Front and Side)</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Anti-lock Braking System (ABS)
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Stability Control
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Rearview Camera
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Parking Sensors
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i
                                            class="zmdi zmdi-check mr-1"></i>Keyless Entry</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Cruise Control</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Navigation System</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Remote Start</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Luggage Rack</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>All-Wheel Drive (AWD) or Four-Wheel Drive (4WD)
                                    </li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Turbocharged Engine</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Manual/Automatic Transmission Options</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Smart Key Technology</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Wi-Fi Hotspot</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Smartphone Integration (Apple CarPlay, Android Auto)</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Electric Vehicle Charging Options</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Child Seat Availability</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Roof Railing</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Sunroof/Moonroof</li>
                                    <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i>Tow Package</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>What People Say</h2>
                            </div>
                            <div class="body">
                                <h5><i class="zmdi zmdi-graduation-cap mr-2"></i>Education</h5>
                                <ul class="list-unstyled amenities-list mb-0">
                                    <li class="d-flex justify-content-between">
                                        <div>Eladia's Kids (3.13 km)</div>
                                        <!-- <div>
                                            <span>10k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div> -->
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Gear Up With ACLS (4.66 km)</div>
                                        <!-- <div>
                                            <span>5k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div> -->
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Brooklyn Brainery (3.31 km)</div>
                                        <!-- <div>
                                            <span>2k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div> -->
                                    </li>
                                </ul>
                                <hr>
                                <h5><i class="zmdi zmdi-hospital-alt mr-2"></i>Health & Medical</h5>
                                <ul class="list-unstyled amenities-list mb-0">
                                    <li class="d-flex justify-content-between">
                                        <div>Eladia's Kids (3.13 km)</div>
                                        <!-- <div>
                                            <span>556 reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                            </span>
                                        </div> -->
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Gear Up With ACLS (4.66 km)</div>
                                        <!-- <div>
                                            <span>3k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                            </span>
                                        </div> -->
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Brooklyn Brainery (3.31 km)</div>
                                        <!-- <div>
                                            <span>2.1k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div> -->
                                    </li>
                                </ul>
                                <hr>
                                <h5><i class="zmdi zmdi-truck mr-2"></i>Transportation</h5>
                                <ul class="list-unstyled amenities-list mb-0">
                                    <li class="d-flex justify-content-between">
                                        <div>Eladia's Kids (3.13 km)</div>
                                        <!-- <div>
                                            <span>3.2k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div> -->
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Gear Up With ACLS (4.66 km)</div>
                                        <!-- <div>
                                            <span>5k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                            </span>
                                        </div> -->
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Brooklyn Brainery (3.31 km)</div>
                                        <!-- <div>
                                            <span>3k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>Property Location <small>Description text here...</small> </h2>
                            </div>
                            <div class="body">
                                <script type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=svdezAlqZP2WIeKGiLW4EUnoJvnxVP7i&width=100%25&height=300&lang=tr_TR&sourceType=constructor&scroll=true">
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card member-card">
                            <div class="header bg-primary text-light mb-3">
                                <h4 class="mt-2 mb-0">Eliana Smith</h4>
                                <span>+(123) 123-456</span>
                            </div>
                            <div class="member-img">
                                <a href="agent-profile.html"><img src="../assets/images/lg/avatar2.jpg"
                                        class="rounded-circle" alt="profile-image"></a>
                            </div>
                            <div class="body">
                                <ul class="social-links list-unstyled">
                                    <li><a title="facebook" href="javascript:void(0);"><i
                                                class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a title="twitter" href="javascript:void(0);"><i
                                                class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a title="instagram" href="javascript:void(0);"><i
                                                class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <p class="text-muted mb-3">795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</p>
                                <div class="row">
                                    <div class="col-4">
                                        <h5 class="mb-1">418</h5>
                                        <small>PROPERTY</small>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-1">109</h5>
                                        <small>CLIENTS</small>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-1">$1,656</h5>
                                        <small>INCOME</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>More Details</h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-sm table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Price:</th>
                                                <td>$390,000</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Contract type: </th>
                                                <td><span class="badge badge-primary">For Sale</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bathrooms:</th>
                                                <td>1.5</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Square ft:</th>
                                                <td>468</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Garage Spaces:</th>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Land Size:</th>
                                                <td>721 m²</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Floors:</th>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Listed for:</th>
                                                <td>15 days</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Available:</th>
                                                <td>Immediately</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pets:</th>
                                                <td>Pets Allowed</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bedrooms:</th>
                                                <td>3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>Request Inquiry</h2>
                            </div>
                            <div class="body">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mobile No.">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize"
                                        placeholder="Please type what you want..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include_once  "inc/footer.php"?>
            </div>

        </div>

    </div>


    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>