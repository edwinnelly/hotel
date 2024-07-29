<?php
include "../config/auth_verify.php";
//hotel id
 $hotelid = base64_decode($app->get_request('hotelid'));
 $cat_id = base64_decode($app->get_request('bid'));
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
                        <h1 class="mb-1 mt-1">Hotel surroundings list</h1>
                    </div>
                    <div class="col-lg-6 col-md-12 text-md-right">
                        <a href="hotel?hotelid=<?php echo base64_encode($hotelid); ?>"
                           class="btn btn-secondary">Manage Hotel</a>
                        <a href="add_aminities.php?hotelid=<?php echo base64_encode($hotelid); ?>"
                           class="btn btn-secondary">Add Amenities</a>

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
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Distance</th>
                                        <th>Created on</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    // Initialize the Manager class and create an instance of it
                                    $app = new Manager();
                                    $selectSql = "SELECT  * FROM nearby_places where  category_id=:category_id and hotel_id=:hotel_id";
                                    //create array for hotel data
                                    $params = [
                                        ':hotel_id' => $hotelid, // only inactive hotels are displayed in the table, change 'no' to 'yes' to display active hotels
                                        ':category_id' => $cat_id
                                    ];
                                    $hotels = $app->fetchData($selectSql,$params);
                                    // Display fetched records
                                    $sn = 1;
                                    foreach ($hotels as $hotels_list) {
                                        ?>
                                        <tr>
                                            <td class="d-flex">
                                                <?php echo $sn++; ?>
                                            </td>
                                            <td>
                                                <?php echo $hotels_list['name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $hotels_list['description']; ?>
                                            </td>
                                            <td>
                                                <?php echo $hotels_list['distance']; ?>KM
                                            </td>
                                            <td>
                                                <?php echo $hotels_list['created_at']; ?>
                                            </td>

                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-secondary dropdown-toggle" href="#"
                                                       role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                                        <a href="">Manage</a>
                                                        <br>
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


    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title" id="defaultModalLabel">Do You Want To Delete The Amenities</h5>
                </div>
                <div class="modal-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="emp_name" readonly>
                            <input type="hidden" class="form-control" id="id">
                            <input type="hidden" class="form-control" id="hotel">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success btn-simple waves-effect" id="delete_emp"
                            data-dismiss="modal">Delete
                    </button>
                    <button type="button" class="btn btn-danger btn-simple waves-effect"
                            data-dismiss="modal">X
                    </button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).on('click', '.delete_emp', function () {
        //fetch data from data attribute
        const id = $(this).attr("data-id");
        const hotel = $(this).attr("data-hotel");
        const amen = $(this).attr("data-amen");

        // show in text field
        $("#emp_name").val(amen);
        $("#id").val(id);
        $("#hotel").val(hotel);

        //call  modal
        $('#defaultModal').modal('show');

        $("#delete_emp").click(function () {
            const emp_name_del = $("#emp_name").val();
            const id_del = $("#id").val();
            const hotelid = $("#hotel").val();

            //disable the button
            const btn = $("#delete_emp");
            btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting...');
            //validate
            //call Ajax
            if (id_del === '' || id_del === 0) {
                Swal.fire({
                    title: "success!",
                    text: "Invalid request, Please wait redirecting...!",
                    icon: "success",
                });
                const btn = $("#del_stf");
                btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Try Again...');
            } else {
                $.ajax({
                    url: "ajax/hotel/delete_amenities",
                    method: "POST",
                    data: {
                        id_del: id_del, hotelid: hotelid
                    },
                    success: function (data) {

                        if (data.trim() == 'Success') {

                            //hide  modal
                            $('#defaultModal').modal('hide');

                            Swal.fire({
                                title: "success!",
                                text: "Amenities Deleted, Please wait redirecting...!",
                                icon: "success",
                            });

                            setTimeout(function () {
                                location.reload();
                            }, 3000);


                        }
                    }
                });

            }

        });

    });
</script>
</body>

</html>