<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Amaze :: Patient List</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->

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
    <div class="body_area">

        <div class="block-header">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <ul class="breadcrumb pl-0 pb-0 ">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item">Patient</li>
                            <li class="breadcrumb-item active">All</li>
                        </ul>
                        <h1 class="mb-1 mt-1">Patient List</h1>
                    </div>            
                    <div class="col-lg-6 col-md-12 text-md-right">
                        <button class="btn btn-default hidden-xs ml-2">Add Patient</button>
                        <button class="btn btn-secondary hidden-xs ml-2">Manage Account</button>
                    </div>
                </div>
                <div class="bh_divider"></div>
                <div class="row clearfix">
                    <div class="col-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link show active" data-toggle="tab" href="patient-all.html#All">All</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="patient-all.html#USA">USA</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="patient-all.html#India">India</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card patients-list">
                        <div class="body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content padding-0">
                                <div class="tab-pane table-responsive active show" id="All">
                                    <table class="table mb-0 table-hover js-basic-example dataTable table-custom table-striped">
                                        <thead>
                                            <tr>                                       
                                                <th class="border-top-0">Media</th>
                                                <th class="border-top-0">ID</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Age</th>
                                                <th class="border-top-0">Address</th>
                                                <th class="border-top-0">Number</th>
                                                <th class="border-top-0">Last Visit</th>
                                                <th class="border-top-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00598</span></td>
                                                <td>Daniel</td>
                                                <td>32</td>
                                                <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                                                <td>404-447-6013</td>
                                                <td>11 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00258</span></td>
                                                <td>Alexander</td>
                                                <td>22</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>15 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar3.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00369</span></td>
                                                <td>Richard</td>
                                                <td>26</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>16 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar4.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00147</span></td>
                                                <td>Samuel</td>
                                                <td>45</td>
                                                <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                                                <td>404-447-6013</td>
                                                <td>17 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar5.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00123</span></td>
                                                <td>Stephen</td>
                                                <td>55</td>
                                                <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                                                <td>404-447-6013</td>
                                                <td>18 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00456</span></td>
                                                <td>Joseph</td>
                                                <td>27</td>
                                                <td>70 Bowman St. South Windsor, CT 06074</td>
                                                <td>404-447-6013</td>
                                                <td>19 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00789</span></td>
                                                <td>Cameron</td>
                                                <td>38</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>19 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar3.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00987</span></td>
                                                <td>Alex</td>
                                                <td>39</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>20 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar4.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00951</span></td>
                                                <td>James</td>
                                                <td>32</td>
                                                <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                                <td>404-447-6013</td>
                                                <td>22 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00953</span></td>
                                                <td>charlie</td>
                                                <td>51</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>22 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar5.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00984</span></td>
                                                <td>William</td>
                                                <td>35</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>22 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00934</span></td>
                                                <td>Bing</td>
                                                <td>26</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>29 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>                            
                                </div>
                                <div class="tab-pane table-responsive" id="USA">
                                    <table class="table mb-0 table-hover">
                                        <thead>
                                            <tr>                                       
                                                <th class="border-top-0">Media</th>
                                                <th class="border-top-0">ID</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Age</th>
                                                <th class="border-top-0">Address</th>
                                                <th class="border-top-0">Number</th>
                                                <th class="border-top-0">Last Visit</th>
                                                <th class="border-top-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00598</span></td>
                                                <td>Daniel</td>
                                                <td>32</td>
                                                <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                                                <td>404-447-6013</td>
                                                <td>11 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00258</span></td>
                                                <td>Alexander</td>
                                                <td>22</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>15 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>                                       
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00456</span></td>
                                                <td>Joseph</td>
                                                <td>27</td>
                                                <td>70 Bowman St. South Windsor, CT 06074</td>
                                                <td>404-447-6013</td>
                                                <td>19 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00789</span></td>
                                                <td>Cameron</td>
                                                <td>38</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>19 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar3.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00987</span></td>
                                                <td>Alex</td>
                                                <td>39</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>20 Jan 2018</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar4.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00951</span></td>
                                                <td>James</td>
                                                <td>32</td>
                                                <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                                <td>404-447-6013</td>
                                                <td>22 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00953</span></td>
                                                <td>charlie</td>
                                                <td>51</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>22 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00934</span></td>
                                                <td>Bing</td>
                                                <td>26</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>29 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane table-responsive" id="India">
                                    <table class="table mb-0 table-hover">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Media</th>
                                                <th class="border-top-0">ID</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Age</th>
                                                <th class="border-top-0">Address</th>
                                                <th class="border-top-0">Number</th>
                                                <th class="border-top-0">Last Visit</th>
                                                <th class="border-top-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar4.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00951</span></td>
                                                <td>James</td>
                                                <td>32</td>
                                                <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                                <td>404-447-6013</td>
                                                <td>22 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00953</span></td>
                                                <td>charlie</td>
                                                <td>51</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>22 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="avatar" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                                <td><span class="list-name">KU 00934</span></td>
                                                <td>Bing</td>
                                                <td>26</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-6013</td>
                                                <td>29 Jan 2018</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
<script src="../assets/bundles/libscripts.bundle.js"></script>
<script src="../assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>