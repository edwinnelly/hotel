<?php
include "../config/auth_verify.php";
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
                                <li class="breadcrumb-item active">Business</li>
                            </ul>
                            <h1 class="mb-1 mt-1">Business Manager</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">
                            <a href="add_business.php" class="btn btn-secondary">Add Business</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Contact</th>
                                                <th>Agents</th>
                                                <th>Country</th>
                                                <th>State</th>
                                                <th>Rating</th>
                                                <th>Status</th>
                                                <th>Creation Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Initialize the Manager class and create an instance of it
                                            $app = new Manager();
                                            $selectSql = "SELECT  * FROM business_accounts where activation=:activation";
                                            $params = [
                                                ':activation' => 'no', // only inactive hotels are displayed in the table, change 'no' to 'yes' to display active hotels
                                            ];
                                            $hotels = $app->fetchData($selectSql, $params);
                                            // Display fetched records
                                            foreach ($hotels as $hotels_list) {
                                                ?>
                                                <tr>
                                                    <td class="d-flex">
                                                        <a href=""><img class="img-fluid rounded w60" src="business.webp"
                                                                alt="Business img"></a>
                                                        <div class="ml-3">
                                                            <strong><?php echo $hotels_list['business_name']; ?></strong>
                                                            <div class="font-13 text-muted hidden-md"><i
                                                                    class="zmdi zmdi-pin"></i>
                                                                <?php echo $hotels_list['address']; ?></div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $hotels_list['username']; ?></td>
                                                    <td><?php echo $hotels_list['phone']; ?></td>
                                                    <td><?php echo $hotels_list['agent_id']; ?></td>
                                                    <td><?php echo $hotels_list['country']; ?></td>
                                                    <td><?php echo $hotels_list['hotel_state']; ?></td>


                                                    <td><?php echo '***'; ?></td>
                                                    <td><?php echo ($hotels_list['activation'] == 'no') ? "Inactive" : "Active"; ?>
                                                    </td>

                                                    <td><strong
                                                            class="text-info"><?php echo $hotels_list['added_date']; ?></strong>
                                                    </td>
                                                    <td>
                                                    <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#"
                                                                role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            
                                                                <a class="dropdown-item" href="hotel.php?hotelid=<?php echo base64_encode($hotels_list['business_account']); ?>">Hotel</a>  
                                                                <a class="dropdown-item" href="">Stays</a> 
                                                                <a class="dropdown-item" href="cars.php">Cars</a> 
                                                                <a class="dropdown-item" href="">Rentals</a>
                                                                <a class="dropdown-item" href="">Cruise</a>          
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                include "inc/footer.php";
                ?>
            </div>
        </div>

        <!-- Default Size -->
        <div class="modal fade" id="Add_Agencies" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="title" id="defaultModalLabel">Add Agencies</h6>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" value="" placeholder="Agencies Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" value="" placeholder="Contact No." class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" value="" placeholder="Sector" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Address" rows="5" cols="30"
                                required=""></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Add Agencies</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="../assets/bundles/datatablescripts.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
</body>

</html>