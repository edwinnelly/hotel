<?php
include "../config/auth_verify.php";
//hotel id
$hotelid = base64_decode($app->get_request('hotelid'));
//fetch hotel details base on hotel id  
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
    <link rel="stylesheet" href="../assets/plugins/summernote/dist/summernote.css" />
</head>

<body class="font-ubuntu">

    <div id="body" class="theme-blue">

        <!-- Page Loader -->
        <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="mt-3"><img class="zmdi-hc-spin w60" src="assets/images/loader.svg" alt="Amaze"></div>
            <p>Please wait...</p>        
        </div>
    </div> -->

        <div class="overlay"></div>

        <!-- Top Bar -->
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
                                <li class="breadcrumb-item">Profile</li>
                                <li class="breadcrumb-item active">Update</li>
                            </ul>
                            <h1 class="mb-1 mt-1">Hotel / Stays Profile</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">
                        <a href="manage_aminities.php?hotelid=<?php echo base64_encode($hotelid); ?>"
                                class="btn btn-secondary">Manage Amenities</a>        
                    </div>
                    </div>
                </div>
            </div>
            <?php
            // Initialize the Manager class and create an instance of it
            $app = new Manager();
            $selectSql = "SELECT  * FROM business_accounts where business_account=:business_account";
            $params = [
                ':business_account' => $hotelid, // only inactive hotels are displayed in the table, change 'no' to 'yes' to display active hotels
            ];
            $hotels = $app->fetchData($selectSql, $params);
            // Display fetched records
            $sn = 1;
            foreach ($hotels as $hotels_details)
                ;
            ?>
            <div class="container">
                <!-- CKEditor -->
                <form name="myForm" id="myForm" method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="hotelsng" id="" value="<?php echo $hotelid; ?>">
                    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h2> <strong>About this property</strong></h2>
                                </div>
                                <div class="body">
                                    <textarea class="summernote" name="aboutus">
                                    <?php
                                    echo html_entity_decode($hotels_details['aboutus']);
                                    ?>
                            </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h2> <strong>Accessibility</strong></h2>
                                </div>
                                <div class="body">
                                    <textarea class="summernote" name="accessibility"><?php
                                    echo html_entity_decode($hotels_details['accessibility']);
                                    ?>
                            </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h2> <strong>Policies</strong></h2>
                                </div>
                                <div class="body">
                                    <textarea class="summernote" name="policies">
                                    <?php
                                    echo html_entity_decode($hotels_details['policies']);
                                    ?>
                            </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h2> <strong>Important information</strong></h2>
                                </div>
                                <div class="body">
                                    <textarea class="summernote" name="important_note">
                                    <?php
                                    echo html_entity_decode($hotels_details['important_note']);
                                    ?>
                            </textarea>
                                </div>
                            </div>

                            <button type="submit" id="reset-btn" class="btn btn-primary">Update
                                Profile</button>
                </form>
                <br>
                <br>
                <br>
                <br>
            </div>


        </div>
    </div>
    </div>
    <!-- #END# CKEditor -->
    <?php
    include "inc/footer.php";
    ?>
    </div>

    </div>

    </div>


    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="../assets/plugins/summernote/dist/summernote.js"></script>
    <script>
        //validate email
        $(document).ready(function () {
            /* function to login user */
            $("#myForm").on('submit', (function (e) {
                e.preventDefault();
                var btn = $("#reset-btn");
                btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> Processing");
                var datas = new FormData(this);
                $.ajax({
                    url: "ajax/hotel/updateprofile_hotel",
                    type: "post",
                    data: datas,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: (data) => {
                        
                        if (data.trim() == "Success") {
                            Swal.fire({
                                title: "success!",
                                text: "Profile Updated, Please wait redirecting...!",
                                icon: "Success",
                            });
                            setTimeout(function () {
                                var btn = $("#reset-btn");
                                btn
                                    .attr("disabled", false)
                                    .html("Completed");
                                location.reload();
                            }, 3000);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: data,
                                icon: "error",
                            });

                        }

                    },

                });


            }));

        });
    </script>
    <script>
        jQuery(document).ready(function () {

            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
                popover: { image: [], link: [], air: [] }
            });

            $('.inline-editor').summernote({
                airMode: true
            });

        });

        window.edit = function () {
            $(".click2edit").summernote()
        },
            window.save = function () {
                $(".click2edit").summernote('destroy');
            }
    </script>
</body>

</html>