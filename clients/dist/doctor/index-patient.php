<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Amaze :: Patient Dashboard</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="https://www.thememakker.com/templates/amaze/html/dist/assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="../assets/plugins/c3/plugin.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="../assets/css/amaze.style.min.css">
</head>

<body class="font-ubuntu ">

<div id="body" class="theme-purple">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="mt-3"><img class="zmdi-hc-spin w60" src="../assets/images/loader.svg" alt="Amaze"></div>
            <p>Please wait...</p>        
        </div>
    </div>

    <div class="overlay"></div>

    <?php
        include "inc/nav.php";
        include "inc/header.php";
        include "inc/rightside.php";
        ?>

    <!-- Main Content -->
    <div class="body_area after_bg">

        <div class="block-header">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <ul class="breadcrumb pl-0 pb-0 ">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                        <h1 class="mb-1 mt-1">Patient Dashboard</h1>
                    </div>            
                    <div class="col-lg-6 col-md-12 text-md-right">
                        <button class="btn btn-default hidden-xs ml-2">Download Report</button>
                        <button class="btn btn-secondary hidden-xs ml-2">New Report</button>
                    </div>
                </div>
                <div class="bh_divider"></div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">
                        <p>New Corona Positive</p>
                        <ul class="list-unstyled team-info sm">
                            <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar1.jpg" alt=""></a></li>
                            <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar7.jpg" alt=""></a></li>
                            <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar2.jpg" alt=""></a></li>
                            <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar5.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 text-md-right">
                        <div class="inlineblock hidden-sm">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#ffffff">6,2,6,5,9,3,7,9,5,1,3,5,7,4,6</div>
                            <small>Page Views</small>
                        </div>
                        <div class="inlineblock ml-4 hidden-sm">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#ffffff">8,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                            <small>Visitors</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row clearfix row-deck">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon bg-light"><i class="zmdi zmdi-account"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">New Patient</div>
                                <h4 class="number mb-0">351 <span class="font-12"><i class="zmdi zmdi-long-arrow-up"></i> 8.1%</span></h4>
                                <small>Analytics for last month</small>
                            </div>
                            <div class="sparkline text-left mt-3" data-type="bar" data-offset="100" data-width="100%" data-height="40px"
                            data-bar-Width="4" data-bar-Color="#777777">2,9,8,7,4,4,6,7,3,4,9,1,5,1,7,8,4,2,1,4,1,2,4,6,7,8,3,2,1,2,5</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon bg-light"><i class="zmdi zmdi-hotel"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Admited</div>
                                <h4 class="number mb-0">219 <span class="font-12"><i class="zmdi zmdi-long-arrow-up"></i> 11%</span></h4>
                                <small>Analytics for last month</small>
                            </div>
                            <div class="sparkline text-left mt-3" data-type="bar" data-offset="100" data-width="100%" data-height="40px"
                            data-bar-Width="4" data-bar-Color="#59c4bc">2,7,8,3,2,1,2,5,6,7,3,4,9,1,5,9,8,7,4,4,4,1,2,4,6,1,7,8,4,2,1</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon bg-light"><i class="zmdi zmdi-rotate-left"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Re-Admits</div>
                                <h4 class="number mb-0">71 <span class="font-12"><i class="zmdi zmdi-long-arrow-down"></i> 5.2%</span></h4>
                                <small>Analytics for last month</small>
                            </div>
                            <div class="sparkline text-left mt-3" data-type="bar" data-offset="100" data-width="100%" data-height="40px"
                            data-bar-Width="4" data-bar-Color="#637aae">2,9,8,7,4,4,4,9,1,5,1,7,8,4,2,1,4,1,2,4,6,7,8,3,2,1,2,5,6,7,3</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon bg-light"><i class="zmdi zmdi-label-heart"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Discharge</div>
                                <h4 class="number mb-0">408 <span class="font-12"><i class="zmdi zmdi-long-arrow-up"></i> 3.8%</span></h4>
                                <small>Analytics for last month</small>
                            </div>
                            <div class="sparkline text-left mt-3" data-type="bar" data-offset="100" data-width="100%" data-height="40px"
                            data-bar-Width="4" data-bar-Color="#444444">2,9,8,7,4,4,4,1,2,4,6,7,8,3,2,1,2,5,6,7,3,4,9,1,5,1,7,8,4,2,1</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix row-deck">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Patients Analytics Report</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="google-analytics-dashboard" style="height: 260px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Patients by Age</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="Use-by-PatientsAge"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Patients by Gander</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="Use-by-gander"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix row-deck">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Patient history</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="Patient-history"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Overall Satisfaction</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="Overall-Satisfaction"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Claims by City</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    New York
                                    <span class="badge badge-primary badge-pill">45</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Los Angeles
                                    <span class="badge badge-primary badge-pill">23</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Phoenix
                                    <span class="badge badge-primary badge-pill">71</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    San Diego
                                    <span class="badge badge-primary badge-pill">42</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Boston
                                    <span class="badge badge-primary badge-pill">15</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="body">
                            <p class="copyright mb-0">Copyright 2020 © All Rights Reserved. <a href="https://thememakker.com/" target="_blank">ThemeMakker</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Jquery Core Js --> 
<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="../assets/bundles/apexcharts.bundle.js"></script>
<script src="../assets/bundles/c3.bundle.js"></script>
<script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../../js/hospital/index-patient.js"></script>
</body>
</html>