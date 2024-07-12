<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Doctor Dashboard</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="../assets/plugins/morrisjs/morris.min.css" />
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

        <!-- Top Bar -->
        <?php
        include "inc/nav.php";
        include "inc/header.php";
        include "inc/rightside.php";
        ?>
        <!-- Right Sidebar -->
        
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
                            <h1 class="mb-1 mt-1">Good Morning, Alizee</h1>
                            <span>Welcome back to your dashboard, if need a help <a href="javascript:void(0);"
                                    class="text-secondary">Contact</a> us.</span>
                        </div>
                        <div class="col-lg-6 col-md-12 text-md-right">
                            <button class="btn btn-default hidden-xs ml-2">Download Report</button>
                            <button class="btn btn-secondary hidden-xs ml-2">New Report</button>
                        </div>
                    </div>
                    <div class="bh_divider"></div>
                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-12">
                            <p>New Patient</p>
                            <ul class="list-unstyled team-info sm">
                                <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar1.jpg"
                                            alt=""></a></li>
                                <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar7.jpg"
                                            alt=""></a></li>
                                <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar3.jpg"
                                            alt=""></a></li>
                                <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar4.jpg"
                                            alt=""></a></li>
                                <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar8.jpg"
                                            alt=""></a></li>
                                <li><a href="patient-profile.html" title=""><img src="../assets/images/xs/avatar5.jpg"
                                            alt=""></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12 text-md-right">
                            <div class="inlineblock hidden-sm">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="40px"
                                    data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#ffffff">
                                    6,2,6,5,9,3,7,9,5,1,3,5,7,4,6</div>
                                <small>Page Views</small>
                            </div>
                            <div class="inlineblock ml-4 hidden-sm">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="40px"
                                    data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#ffffff">
                                    8,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                                <small>Visitors</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row clearfix row-deck">
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-6">
                                <div class="card top_widget">
                                    <div id="top_counter1" class="carousel slide" data-ride="carousel"
                                        data-interval="2500">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-accounts"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">Total Patient</div>
                                                        <h4 class="number mb-0">3,251 <span
                                                                class="font-12 text-muted"><i
                                                                    class="fa fa-level-up"></i> 13%</span></h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-account"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">New Patient</div>
                                                        <h4 class="number mb-0">351 <span class="font-12 text-muted"><i
                                                                    class="fa fa-level-up"></i> 8.2%</span></h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card top_widget">
                                    <div id="top_counter2" class="carousel slide" data-ride="carousel"
                                        data-interval="2000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-hospital-alt"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">Operations</div>
                                                        <h4 class="number mb-0">32 <span class="font-12 text-muted"><i
                                                                    class="fa fa-level-up"></i> 13%</span></h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-hospital-alt"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">Surgery</div>
                                                        <h4 class="number mb-0">24 <span class="font-12 text-muted"><i
                                                                    class="fa fa-level-up"></i> 8.2%</span></h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-hospital-alt"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">Treatment</div>
                                                        <h4 class="number mb-0">45 <span class="font-12 text-muted"><i
                                                                    class="fa fa-level-up"></i> 8.2%</span></h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card top_widget">
                                    <div id="top_counter3" class="carousel slide" data-ride="carousel"
                                        data-interval="2300">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-eye"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">Total Visitors</div>
                                                        <h4 class="number mb-0">32k <span class="font-12 text-muted"><i
                                                                    class="fa fa-level-up"></i> 13%</span></h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-eye"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">Today Visitors</div>
                                                        <h4 class="number mb-0">351 <span class="font-12 text-muted"><i
                                                                    class="fa fa-level-up"></i> 8.2%</span></h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-eye"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">Month Visitors</div>
                                                        <h4 class="number mb-0">1,351 <span
                                                                class="font-12 text-muted"><i
                                                                    class="fa fa-level-up"></i> 8.2%</span></h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card top_widget">
                                    <div id="top_counter4" class="carousel slide" data-ride="carousel"
                                        data-interval="2300">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-thumb-up"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">Happy Clients</div>
                                                        <h4 class="number mb-0">780</h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="body">
                                                    <div class="icon"><i class="zmdi zmdi-mood"></i></div>
                                                    <div class="content">
                                                        <div class="text mb-2 text-uppercase">Smiley Faces</div>
                                                        <h4 class="number mb-0">2,351</h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Total Revenue</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
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
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="body">
                                            <h4><i class="icon-wallet"></i> 7,12,326$</h4>
                                            <span>Operation Income</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="body">
                                            <h4><i class="icon-wallet"></i> 25,965$</h4>
                                            <span>Pharmacy Income</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="body">
                                            <h4><i class="icon-wallet"></i> 14,965$</h4>
                                            <span>Hospital Expenses</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="apex-chart-line-column"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-xl-3 col-lg-5 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Social Counter</h2>
                            </div>
                            <div class="body social_counter">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        FaceBook
                                        <span class="badge badge-primary badge-pill">40k</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Twitter
                                        <span class="badge badge-primary badge-pill">23k</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Linkedin
                                        <span class="badge badge-primary badge-pill">71k</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Behance
                                        <span class="badge badge-primary badge-pill">42k</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Dribbble
                                        <span class="badge badge-primary badge-pill">15k</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="carousel slide twitter feed" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <i class="zmdi zmdi-twitter zmdi-hc-2x"></i>
                                        <p>23th Feb</p>
                                        <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                                        <div class="m-t-20"><i>- post form ThemeMakker</i></div>
                                    </div>
                                    <div class="carousel-item">
                                        <i class="zmdi zmdi-twitter zmdi-hc-2x"></i>
                                        <p>25th Jan</p>
                                        <h4>Now Get <span>50% Off</span><br>on buy</h4>
                                        <div class="m-t-20"><i>- post form thememakker</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-7 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Visitors Statistics</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
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
                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-6">
                                        <div id="Visitors_chart1" class="carousel slide" data-ride="carousel"
                                            data-interval="2000">
                                            <div class="card carousel-inner mb-1">
                                                <div class="body carousel-item active">
                                                    <h4>2,025</h4>
                                                    <span>America</span>
                                                </div>
                                                <div class="body carousel-item">
                                                    <h4>1,100</h4>
                                                    <span>Canada</span>
                                                </div>
                                                <div class="body carousel-item">
                                                    <h4>680</h4>
                                                    <span>Brazil</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6">
                                        <div id="Visitors_chart2" class="carousel slide" data-ride="carousel"
                                            data-interval="2200">
                                            <div class="card carousel-inner mb-1">
                                                <div class="body carousel-item active">
                                                    <h4>1,025</h4>
                                                    <span>UK</span>
                                                </div>
                                                <div class="body carousel-item">
                                                    <h4>582</h4>
                                                    <span>France</span>
                                                </div>
                                                <div class="body carousel-item">
                                                    <h4>128</h4>
                                                    <span>Georgia</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6">
                                        <div class="card mb-1">
                                            <div class="body">
                                                <h4>3,845</h4>
                                                <span>India</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6">
                                        <div class="card mb-1">
                                            <div class="body">
                                                <h4>863</h4>
                                                <span>Other</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="apex-simple-bubble"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Patients Status</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
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
                                <p class="float-md-right">
                                    <span class="badge badge-success">3 Admit</span>
                                    <span class="badge badge-default">2 Discharge</span>
                                </p>
                                <div class="table-responsive table_middel">
                                    <table class="table mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Patients</th>
                                                <th>Adress</th>
                                                <th>START Date</th>
                                                <th>END Date</th>
                                                <th>Priority</th>
                                                <th>Progress</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img src="../assets/images/xs/avatar3.jpg"
                                                        class="rounded-circle avatar mr-2"
                                                        alt="profile-image"><span>John</span></td>
                                                <td><span>70 Bowman St. South Windsor, CT 06074</span></td>
                                                <td>Sept 13, 2017</td>
                                                <td>Sept 16, 2017</td>
                                                <td><span class="badge badge-warning">MEDIUM</span></td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-warning"
                                                            role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 40%;"> <span
                                                                class="sr-only">40% Complete</span> </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Admit</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><img src="../assets/images/xs/avatar1.jpg"
                                                        class="rounded-circle avatar mr-2"
                                                        alt="profile-image"><span>Jack Bird</span></td>
                                                <td><span>123 6th St. Melbourne, FL 32904</span></td>
                                                <td>Sept 13, 2017</td>
                                                <td>Sept 22, 2017</td>
                                                <td><span class="badge badge-warning">MEDIUM</span></td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                            <span class="sr-only">100% Complete</span> </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-default">Discharge</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><img src="../assets/images/xs/avatar4.jpg"
                                                        class="rounded-circle avatar mr-2"
                                                        alt="profile-image"><span>Dean Otto</span></td>
                                                <td><span>123 6th St. Melbourne, FL 32904</span></td>
                                                <td>Sept 13, 2017</td>
                                                <td>Sept 23, 2017</td>
                                                <td><span class="badge badge-warning">MEDIUM</span></td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-success"
                                                            role="progressbar" aria-valuenow="15" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 15%;"> <span
                                                                class="sr-only">15% Complete</span> </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Admit</span></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><img src="../assets/images/xs/avatar2.jpg"
                                                        class="rounded-circle avatar mr-2"
                                                        alt="profile-image"><span>Jack Bird</span></td>
                                                <td><span>4 Shirley Ave. West Chicago, IL 60185</span></td>
                                                <td>Sept 17, 2017</td>
                                                <td>Sept 16, 2017</td>
                                                <td><span class="badge badge-success">LOW</span></td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                            <span class="sr-only">100% Complete</span> </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-default">Discharge</span></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><img src="../assets/images/xs/avatar5.jpg"
                                                        class="rounded-circle avatar mr-2"
                                                        alt="profile-image"><span>Hughe L.</span></td>
                                                <td><span>4 Shirley Ave. West Chicago, IL 60185</span></td>
                                                <td>Sept 18, 2017</td>
                                                <td>Sept 18, 2017</td>
                                                <td><span class="badge badge-danger">HIGH</span></td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 85%;"> <span class="sr-only">85%
                                                                Complete</span> </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Admit</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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

    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="../assets/bundles/apexcharts.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script>
    <script src="../../js/hospital/index.js"></script>
</body>

</html>