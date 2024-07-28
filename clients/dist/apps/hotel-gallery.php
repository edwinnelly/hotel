<?php
include "../config/auth_verify.php";
//hotel id
 $hotelid = base64_decode($app->get_request('hotelid'));
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Vioo Bookings">

    <title>Gallery / hotels</title>
    <link rel="icon" href="logo.png" type="image/png">
    <!-- Favicon-->
    <link rel="stylesheet" href="../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/amaze.style.min.css">
    <link rel="stylesheet" href="../assets/plugins/light-gallery/css/lightgallery.css">
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
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item">hotel</li>
                            <li class="breadcrumb-item active"> Gallery</li>
                        </ul>
                        <h1 class="mb-1 mt-1">Hotel Gallery</h1>
                    </div>            
                    <div class="col-lg-6 col-md-12 text-md-right">
                        <a href="add_gallery.php?hotelid=<?php echo base64_encode($hotelid); ?>"><button class="btn btn-secondary hidden-xs ml-2">Upload new</button></a>
                        <a href="manage_hotel_photos.php?hotelid=<?php echo base64_encode($hotelid); ?>"><button class="btn btn-secondary hidden-xs ml-2">Manage Photos</button></a>
                    </div>
                </div>
                
                
            </div>
        </div>

        <div class="container">
            <div class="tab-content">
                <div class="tab-pane active" id="All">
                    <ul id="aniimated-thumbnials-all" class="list-unstyled row clearfix ul_li_animation">
                    <?php
                            // Initialize the Manager class and create an instance of it
                            $app = new Manager();
                            $selectSql = "SELECT  * FROM hotel_gallery where hotel_id=:hotel_id order by id desc";
                            $params = [
                                ':hotel_id' => $hotelid, // only inactive hotels are displayed in the table, change 'no' to 'yes' to display active hotels
                            ];
                            $hotels = $app->fetchData($selectSql, $params);
                            // Display fetched records
                            foreach ($hotels as $hotels_list) {
                                ?>
                                <li class="col-lg-3 col-md-6 col-sm-12">
                                    <label for="" class="text-success"><?php  echo $hotels_list['description'];  ?></label>
                                    <div class="card">
                                        <a href="hotel_photos/<?php  echo $hotels_list['photo_path'];  ?>"> <img class="img-fluid img-thumbnail"
                                                src="hotel_photos/<?php  echo $hotels_list['photo_path'];  ?>" alt=""></a>
                                    </div>
                                </li>

                                <?php
                            } 
                            ?>
                        
                    </ul>
                </div>
                
                <div class="tab-pane" id="Media">
                    <h2>No Image found</h2>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Jquery Core Js --> 
<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="../assets/plugins/light-gallery/js/lightgallery-all.min.js"></script> <!-- Light Gallery Plugin Js --> 

<script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="../../js/pages/medias/image-gallery.js"></script>
</body>
</html>