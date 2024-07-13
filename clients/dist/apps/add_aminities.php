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
                            <h1 class="mb-1 mt-1">Add / Amenities</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">
                            <a href="add_business.php" class="btn btn-secondary">Manage Hotel</a>
                            <a href="add_business.php" class="btn btn-secondary">Manage Amenities</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="container mt-5">
                                    <h2>Select Hotel Amenities</h2>
                                    <form name="myForm" id="myForm" method="post"
                                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <div class="row">
                                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                        <input type="hidden" name="hotelid" value="<?php echo $hotelid; ?>">
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="WiFi" id="wifi">
                                                    <label class="form-check-label" for="wifi">WiFi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="TV" id="tv">
                                                    <label class="form-check-label" for="tv">TV</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Air Conditioning (AC)" id="ac">
                                                    <label class="form-check-label" for="ac">Air Conditioning
                                                        (AC)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Mini Bar" id="mini_bar">
                                                    <label class="form-check-label" for="mini_bar">Mini Bar</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Jacuzzi" id="jacuzzi">
                                                    <label class="form-check-label" for="jacuzzi">Jacuzzi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Swimming Pool" id="swimming_pool">
                                                    <label class="form-check-label" for="swimming_pool">Swimming
                                                        Pool</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Fitness Center / Gym" id="gym">
                                                    <label class="form-check-label" for="gym">Fitness Center /
                                                        Gym</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Spa" id="spa">
                                                    <label class="form-check-label" for="spa">Spa</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Restaurant" id="restaurant">
                                                    <label class="form-check-label" for="restaurant">Restaurant</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Bar" id="bar">
                                                    <label class="form-check-label" for="bar">Bar</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Live music/performance" id="live_music">
                                                    <label class="form-check-label" for="live_music">Live
                                                        music/performance</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Happy hour" id="happy_hour">
                                                    <label class="form-check-label" for="happy_hour">Happy hour</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Themed dinner nights" id="themed_dinner_nights">
                                                    <label class="form-check-label" for="themed_dinner_nights">Themed
                                                        dinner nights</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Bike tours" id="bike_tours">
                                                    <label class="form-check-label" for="bike_tours">Bike tours</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Room Service" id="room_service">
                                                    <label class="form-check-label" for="room_service">Room
                                                        Service</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Laundry Service" id="laundry_service">
                                                    <label class="form-check-label" for="laundry_service">Laundry
                                                        Service</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Parking" id="parking">
                                                    <label class="form-check-label" for="parking">Parking</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Conference Room" id="conference_room">
                                                    <label class="form-check-label" for="conference_room">Conference
                                                        Room</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Business Center" id="business_center">
                                                    <label class="form-check-label" for="business_center">Business
                                                        Center</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Airport Shuttle" id="airport_shuttle">
                                                    <label class="form-check-label" for="airport_shuttle">Airport
                                                        Shuttle</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="24-Hour Front Desk" id="front_desk">
                                                    <label class="form-check-label" for="front_desk">24-Hour Front
                                                        Desk</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Concierge Service" id="concierge_service">
                                                    <label class="form-check-label" for="concierge_service">Concierge
                                                        Service</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Elevator" id="elevator">
                                                    <label class="form-check-label" for="elevator">Elevator</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Luggage Storage" id="luggage_storage">
                                                    <label class="form-check-label" for="luggage_storage">Luggage
                                                        Storage</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Non-Smoking Rooms" id="non_smoking">
                                                    <label class="form-check-label" for="non_smoking">Non-Smoking
                                                        Rooms</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Pets Allowed" id="pets_allowed">
                                                    <label class="form-check-label" for="pets_allowed">Pets
                                                        Allowed</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Evening entertainment" id="evening_entertainment">
                                                    <label class="form-check-label" for="evening_entertainment">Evening
                                                        entertainment</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Nightclub/DJ" id="nightclub">
                                                    <label class="form-check-label" for="nightclub">Nightclub/DJ</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Entertainment staff" id="entertainment_staff">
                                                    <label class="form-check-label"
                                                        for="entertainment_staff">Entertainment staff</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Karaoke" id="karaoke">
                                                    <label class="form-check-label" for="karaoke">Karaoke</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Breakfast Included" id="breakfast_included">
                                                    <label class="form-check-label" for="breakfast_included">Breakfast
                                                        Included</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Wheelchair Accessible" id="wheelchair_accessible">
                                                    <label class="form-check-label"
                                                        for="wheelchair_accessible">Wheelchair Accessible</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Safety Deposit Box" id="safety_deposit_box">
                                                    <label class="form-check-label" for="safety_deposit_box">Safety
                                                        Deposit Box</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Children's Playground" id="playground">
                                                    <label class="form-check-label" for="playground">Children's
                                                        Playground</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Babysitting Service" id="babysitting">
                                                    <label class="form-check-label" for="babysitting">Babysitting
                                                        Service</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Library" id="library">
                                                    <label class="form-check-label" for="library">Library</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Gift Shop" id="gift_shop">
                                                    <label class="form-check-label" for="gift_shop">Gift Shop</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Tennis Court" id="tennis_court">
                                                    <label class="form-check-label" for="tennis_court">Tennis
                                                        Court</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Golf Course" id="golf_course">
                                                    <label class="form-check-label" for="golf_course">Golf
                                                        Course</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Bicycle Rental" id="bicycle_rental">
                                                    <label class="form-check-label" for="bicycle_rental">Bicycle
                                                        Rental</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Car Rental" id="car_rental">
                                                    <label class="form-check-label" for="car_rental">Car Rental</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Sauna" id="sauna">
                                                    <label class="form-check-label" for="sauna">Sauna</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Hot Tub" id="hot_tub">
                                                    <label class="form-check-label" for="hot_tub">Hot Tub</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Beach Access" id="beach_access">
                                                    <label class="form-check-label" for="beach_access">Beach
                                                        Access</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="facilities[]"
                                                        value="Games room" id="games_room">
                                                    <label class="form-check-label" for="games_room">Games room</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="reset-btn" class="btn btn-primary">Add
                                            Amenities</button>
                                    </form>

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


    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="../assets/bundles/datatablescripts.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    url: "ajax/account/add_amenities",
                    type: "post",
                    data: datas,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: (data) => {
                        
                        if (data.trim() == "Success") {
                            Swal.fire({
                                title: "success!",
                                text: "Amenities Added, Please wait redirecting...!",
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


            }));

        });
    </script>
</body>

</html>