<?php
include "../config/auth_verify.php";
//hotel id
$hotelid = base64_decode($app->get_request('hotelid'));
//get hotel details
$selectSql = "SELECT  * FROM business_accounts where business_account=:business_account";
$params = [
    ':business_account' => $hotelid, // only inactive hotels are displayed in the table, change 'no' to 'yes' to display active hotels
];
$hotels = $app->fetchData($selectSql, $params);
foreach ($hotels as $hotels_details);
?>
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
                                <li class="breadcrumb-item active">Hotel</li>
                            </ul>
                            <h1 class="mb-1 mt-1">Hotel Manager / Profile</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">
                            <a href="manage_aminities.php?hotelid=<?php echo base64_encode($hotelid); ?>"
                                class="btn btn-secondary">Manage Amenities</a>
                            <a href="manage_nearby.php?hotelid=<?php echo base64_encode($hotelid); ?>" class="btn btn-secondary">Hotel surroundings</a>
                            <a href="add_business.php" class="btn btn-secondary">House rules</a>
                            <a href="hotel-gallery.php?hotelid=<?php echo base64_encode($hotelid); ?>"
                                class="btn btn-secondary">Gallery</a>
                            <a href="add_business.php" class="btn btn-secondary">Manage Rooms</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="body">

                                <div class="property grid mt-4">
                                    <div class="details flex-grow-1">
                                        <div class="tc_content">
                                            <div class="d-flex justify-content-between">
                                                <ul class="list-unstyled tag">
                                                    <li class="list-inline-item"><a href="property-detail.html#"
                                                            class="rent">Active</a></li>
                                                    <!-- <li class="list-inline-item"><a href="property-detail.html#"
                                                            class="sale">Featured</a></li> -->
                                                </ul>
                                                <!-- <span class="font-25">Active<small></small></span> -->
                                            </div>
                                            <p class="text-danger">Stays / Hotel</p>
                                            <h5><?php echo $hotels_details['business_name']; ?></h5>
                                            <p><i
                                                    class="zmdi zmdi-map-pin font-13"></i><?php echo $hotels_details['address']; ?>
                                            </p>
                                            <!-- <ul class="list-unstyled property-info">
                                                <li class="list-inline-item"><a href="property-detail.html#">Beds:
                                                        <strong>4</strong></a></li>
                                                <li class="list-inline-item"><a href="property-detail.html#">Baths:
                                                        <strong>2</strong></a></li>
                                                <li class="list-inline-item"><a href="property-detail.html#">Sq Ft:
                                                        <strong>5280</strong></a></li>
                                            </ul> -->
                                        </div>
                                        <!-- <div class="d-flex justify-content-between align-items-center">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><a href="property-detail.html#"><img
                                                            class="avatar rounded-circle"
                                                            src="../assets/images/xs/avatar1.jpg" alt="avatar.png"></a>
                                                </li>
                                                <li class="list-inline-item"><a href="property-detail.html#">Rose
                                                        Rivera</a></li>
                                            </ul>
                                            <div>4 years ago</div>
                                        </div> -->
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
                                <?php
                                            // Initialize the Manager class and create an instance of it
                                            $app = new Manager();
                                            $selectSql = "SELECT  * FROM hotel_facilities where hotel_id=:hotel_id";
                                            $params = [
                                                ':hotel_id' => $hotelid, // only inactive hotels are displayed in the table, change 'no' to 'yes' to display active hotels
                                            ];
                                            $hotels = $app->fetchData($selectSql, $params);
                                            // Display fetched records
                                            $sn = 1;
                                            foreach ($hotels as $hotels_list) {
                                                ?>
                                <li class="col-lg-4 col-md-5 col-sm-6"><i class="zmdi zmdi-check mr-1"></i><?php echo $hotels_list['facility_name']; ?></li>
                                        <?php

                                            }
                                        ?>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>What's Nearby</h2>
                            </div>
                            <div class="body">
                                <h5><i class="zmdi zmdi-graduation-cap mr-2"></i>Education</h5>
                                <ul class="list-unstyled amenities-list mb-0">
                                    <li class="d-flex justify-content-between">
                                        <div>Eladia's Kids (3.13 km)</div>
                                        <div>
                                            <span>10k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Gear Up With ACLS (4.66 km)</div>
                                        <div>
                                            <span>5k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Brooklyn Brainery (3.31 km)</div>
                                        <div>
                                            <span>2k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                                <hr>
                                <h5><i class="zmdi zmdi-hospital-alt mr-2"></i>Health & Medical</h5>
                                <ul class="list-unstyled amenities-list mb-0">
                                    <li class="d-flex justify-content-between">
                                        <div>Eladia's Kids (3.13 km)</div>
                                        <div>
                                            <span>556 reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Gear Up With ACLS (4.66 km)</div>
                                        <div>
                                            <span>3k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Brooklyn Brainery (3.31 km)</div>
                                        <div>
                                            <span>2.1k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                                <hr>
                                <h5><i class="zmdi zmdi-truck mr-2"></i>Transportation</h5>
                                <ul class="list-unstyled amenities-list mb-0">
                                    <li class="d-flex justify-content-between">
                                        <div>Eladia's Kids (3.13 km)</div>
                                        <div>
                                            <span>3.2k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Gear Up With ACLS (4.66 km)</div>
                                        <div>
                                            <span>5k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div>Brooklyn Brainery (3.31 km)</div>
                                        <div>
                                            <span>3k reviews</span>
                                            <span class="rating ml-4 hidden-xs">
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star text-warning"></i>
                                                <i class="zmdi zmdi-star-outline text-warning"></i>
                                            </span>
                                        </div>
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
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=svdezAlqZP2WIeKGiLW4EUnoJvnxVP7i&width=100%25&height=300&lang=tr_TR&sourceType=constructor&scroll=true"></script>
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

                <div class="row clearfix">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <p class="copyright mb-0">Copyright 2020 © All Rights Reserved. <a
                                        href="https://thememakker.com/" target="_blank">ThemeMakker</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Default Size -->


    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="../assets/bundles/datatablescripts.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
</body>

</html>