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
                                <li class="breadcrumb-item active">Edit Cars</li>
                            </ul>
                            <h1 class="mb-1 mt-1">Cars</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">
                            <a href="cars.php" class="btn btn-success text-white">Manage Cars</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row clearfix">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Basic Information</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="" class="mb-2"> Car Model</label>
                                            <input type="text" class="form-control" placeholder="Car Model">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="" class="mb-2">Price Per Day</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="" class="mb-2">Types</label>
                                        <select class="form-control show-tick">
                                            <option value="">Sedan</option>
                                            <option value="10">SUV </option>
                                            <option value="20">Convertible</option>
                                            <option value="20">Coupe</option>
                                            <option value="20">Hatchback</option>
                                            <option value="20">Minivan</option>
                                            <option value="20">Pickup Truck</option>
                                            <option value="20">Luxury Car</option>
                                            <option value="20">Luxury Van</option>
                                            <option value="20">Electric Car</option>
                                            <option value="20">Sports Car</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="" class="mb-2">Features</label>
                                                <textarea rows="4" class="form-control no-resize"
                                                    placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="" class="mb-2">Car Year</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="" class="mb-2">Location</label>
                                            <textarea rows="4" class="form-control no-resize" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="mt-4 mb-3">General Amenities</h6>
                                <div class="row">
                                    <div class="col-sm-12 d-flex flex-wrap">
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Air Conditioning</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Heated Seats</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Adjustable Seats</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Power Windows</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Leather Upholstery</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Bluetooth Connectivity</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">USB Ports</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Audio System (CD/MP3)</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Touchscreen Display</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Satellite Radio</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Airbags (Front and Side)</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Anti-lock Braking System (ABS)</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Stability Control</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Rearview Camera</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Parking Sensors</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Keyless Entry</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Cruise Control</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Navigation System</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Remote Start</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Luggage Rack</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">All-Wheel Drive (AWD) or Four-Wheel Drive (4WD)</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Turbocharged Engine</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Manual/Automatic Transmission Options</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Smart Key Technology</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Wi-Fi Hotspot</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Smartphone Integration (Apple CarPlay, Android
                                                Auto)</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Hybrid Engine</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Electric Vehicle Charging Options</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Child Seat Availability</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Roof Railing</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Sunroof/Moonroof</span>
                                        </label>
                                        <label class="c_checkbox mb-2 mr-4 col-lg-4">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="ml-2">Tow Package</span>
                                        </label>
                                    </div>
                                   
                                    <div class="container">
                                        <h6 class="mt-4  fw-bold">Choose Images</h6>
                                        <div class="row">
                                            <div class="col-sm-4 mt-2">
                                                <label for="" class="mb-2">Image 1</label>
                                                <div class="form-control">
                                                    <input type="file" class="dropify">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-2">
                                                <label for="" class="mb-2">Image 2</label>
                                                <div class="form-control">
                                                    <input type="file" class="dropify">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-2">
                                                <label for="" class="mb-2">Image 3</label>
                                                <div class="form-control">
                                                    <input type="file" class="dropify">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-2">
                                                <label for="" class="mb-2">Image 4</label>
                                                <div class="form-control">
                                                    <input type="file" class="dropify">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-2">
                                                <label for="" class="mb-2">Image 5</label>
                                                <div class="form-control">
                                                    <input type="file" class="dropify">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-2">
                                                <label for="" class="mb-2">Image 6</label>
                                                <div class="form-control">
                                                    <input type="file" class="dropify">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="submit" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
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

    </div>


    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>