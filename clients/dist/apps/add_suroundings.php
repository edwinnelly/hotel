<?php
include "../config/auth_verify.php";
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
                                <li class="breadcrumb-item active">Add new</li>
                            </ul>
                            <h1 class="mb-1 mt-1">Add New surroundings</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">
                            <a href="hotel?hotelid=<?php echo base64_encode($hotelid); ?>"
                                class="btn btn-secondary">Manage Hotel</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Basic surroundings Information <small></small> </h2>
                            </div>
                            <div class="body">
                                <form name="myForm" id="myForm" method="post"
                                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <div class="row clearfix">

                                        

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name_category"
                                                    name="name_category" placeholder="Names" required>
                                            </div>
                                        </div>
                                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                        <input type="hidden" name="hotels" value="<?php echo $hotelid; ?>">

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="distance" name="distance"
                                                    placeholder="Distance.">
                                            </div>
                                        </div>



                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize"
                                                    placeholder="Description" id="description"
                                                    name="description"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <select class="form-control" id="category" name="category" required>
                                                <option value="">Choose Category</option>
                                                <?php
                                                // Initialize the Manager class and create an instance of it
                                                $app = new Manager();
                                                $selectSql = "SELECT  * FROM nearby_category_hotel";

                                                $hotels = $app->fetchData($selectSql);
                                                // Display fetched records
                                                $sn = 1;
                                                foreach ($hotels as $hotels_list) {
                                                    ?>
                                                    <option value="<?php echo $hotels_list['id']; ?>">
                                                        <?php echo $hotels_list['name']; ?></option>
                                                    <?php
                                                } ?>
                                            </select>
                                        </div>

                                        <br>
                                        <br>
                                        <br>


                                    </div>
                                    <button type="submit" id="reset-btn" class="btn btn-primary">Add
                                        surroundings</button>
                                    <button type="button" class="btn btn-default">Cancel</button>
                            </div>

                        </div>

                        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/bundles/mainscripts.bundle.js"></script>
    <script>
        //validate email
        $(document).ready(function () {
            function validateForm() {
                let name_category = document.forms["myForm"]["name_category"].value;
                let distance = document.forms["myForm"]["distance"].value;
                let description = document.forms["myForm"]["description"].value;

                if (name_category === "") {
                    Swal.fire({
                        title: "The Name Can Not Be Empty",
                        text: "Try Again!",
                        icon: "error"
                    });
                    return false;
                }

                if (distance === "") {
                    Swal.fire({
                        title: "The distance Can Not Be Empty",
                        text: "Try Again!",
                        icon: "error"
                    });
                    return false;
                }


                return true; // Form is valid
            }

            /* function to login user */
            $("#myForm").on('submit', (function (e) {
                // alert("eddwards");
                validateForm();
                let check = validateForm();
                e.preventDefault();
                if (check == true) {
                    var btn = $("#reset-btn");
                    // btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> Processing");
                    var datas = new FormData(this);
                    $.ajax({
                        url: "ajax/hotel/add_suroundings",
                        type: "post",
                        data: datas,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: (data) => {

                            if (data.trim() == "Success") {
                                Swal.fire({
                                    title: "success!",
                                    text: "Surroundings Created, Please wait redirecting...!",
                                    icon: "success",
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
                } else {

                }

            }));

        });
    </script>
</body>

</html>