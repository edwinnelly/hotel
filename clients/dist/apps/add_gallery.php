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
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Vioo Bookings / account setup </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/amaze.style.min.css">
    <link rel="stylesheet" href="../assets/plugins/light-gallery/css/lightgallery.css">
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
        <div class="body_area">

            <div class="block-header">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <ul class="breadcrumb pl-0 pb-0 ">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item">Account</li>
                                <li class="breadcrumb-item active">Add Photos</li>
                            </ul>
                            <h1 class="mb-1 mt-1">Add New Photo</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">
                        <a href="hotel?hotelid=<?php echo base64_encode($hotelid); ?>" class="btn btn-secondary">Manage Hotel</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Account Basic Information <small></small> </h2>
                            </div>
                            <div class="body">
                                <form name="myForm009" id="myForm009" method="post"
                                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                    enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="hotel_name"
                                                    name="description" placeholder="Photo Description" required>
                                            </div>
                                        </div>
                                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                        <input type="hidden" name="hotelid" value="<?php echo $hotelid; ?>">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="file" name="file">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <button type="submit" id="upload-btn" class="btn btn-primary">Upload
                                Photo</button>
                            <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
                        </div>

                    </div>

                    </form>
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
                                    <button class="btn btn-danger" data-id="<?php  echo $hotels_list['id'];  ?>">X</button>
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
                    <div class="tab-pane" id="Birthday">
                        <ul id="aniimated-thumbnials-Birthday" class="list-unstyled row clearfix ul_li_animation">
                            <li class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <a href="../assets/images/image-gallery/6.jpg"> <img class="img-fluid img-thumbnail"
                                            src="../assets/images/image-gallery/6.jpg" alt=""></a>
                                </div>
                            </li>
                            <li class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <a href="../assets/images/image-gallery/7.jpg"> <img class="img-fluid img-thumbnail"
                                            src="../assets/images/image-gallery/7.jpg" alt=""></a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-pane" id="Events">
                        <ul id="aniimated-thumbnials-Events" class="list-unstyled row clearfix ul_li_animation">
                            <li class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <a href="../assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail"
                                            src="../assets/images/image-gallery/1.jpg" alt=""></a>
                                </div>
                            </li>
                            <li class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <a href="../assets/images/image-gallery/3.jpg"> <img class="img-fluid img-thumbnail"
                                            src="../assets/images/image-gallery/3.jpg" alt=""></a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-pane" id="Media">
                        <h2>No Image found</h2>
                    </div>
                </div>
            </div>


            <?php
            include "inc/footer.php";
            ?>
        </div>

    </div>

    </div>

    <script src="../assets/plugins/light-gallery/js/lightgallery-all.min.js"></script> <!-- Light Gallery Plugin Js -->

    <script src="../../js/pages/medias/image-gallery.js"></script>
    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/bundles/mainscripts.bundle.js"></script>
    <script>
        //validate email

        $("#myForm009").on('submit', (function (e) {
            //validateForm();
            //let check = validateForm();
            e.preventDefault();
            var btn = $("#upload-btn");
            btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> Uploading");
            var datas = new FormData(this);
            $.ajax({
                url: "ajax/hotel/upload_photo",
                type: "post",
                data: datas,
                contentType: false,
                cache: false,
                processData: false,
                success: (data) => {
                    // alert(data);
                    if (data.trim() == "Success") {
                        Swal.fire({
                            title: "success!",
                            text: "New Photo Added To Hotel Gallery, Please wait redirecting...!",
                            icon: "success",
                        });
                        setTimeout(function () {
                            var btn = $("#upload-btn");
                            btn
                                .attr("disabled", false)
                                .html("Update Account");
                            location.reload();
                        }, 3000);
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: "Posting Failed try again!",
                            icon: "error",
                        });

                    }

                },

            });



        }));
    </script>
</body>

</html>