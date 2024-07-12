<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Chat</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->

<!-- Custom Css -->
<link rel="stylesheet" href="../assets/css/amaze.style.min.css">
<link rel="stylesheet" href="../assets/css/chatapp.css">
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
    <div class="body_area after_bg sm">

        <div class="block-header">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <ul class="breadcrumb pl-0 pb-0 ">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">App</li>
                            <li class="breadcrumb-item active">Chat</li>
                        </ul>
                        <h1 class="mb-1 mt-1">Chat App</h1>
                    </div>            
                    <div class="col-lg-6 col-md-12 text-md-right">
                        <ul class="list-unstyled team-info sm d-inline-flex">
                            <li><span class="mr-3">Recently Added:</span></li>
                            <li><img src="../assets/images/xs/avatar1.jpg" alt="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar"></li>
                            <li><img src="../assets/images/xs/avatar7.jpg" alt="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar"></li>
                            <li><img src="../assets/images/xs/avatar2.jpg" alt="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar"></li>
                            <li><img src="../assets/images/xs/avatar5.jpg" alt="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar"></li>
                        </ul>
                        <button class="btn btn-secondary hidden-xs ml-3">Add New</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12 col-xl-12">
                    <div class="card chat_app">
                        <div class="chat_list">
                            <div class="input-group search">
                                <input type="text" class="form-control" placeholder="Search here...">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-0 ul_li_animation">
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar1.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter<span class="font-10 float-right">2:27 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter <span class="font-10 float-right">2:33 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar3.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter <span class="badge badge-primary">14</span> <span class="font-10 float-right">2:35 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar4.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter<span class="font-10 float-right">2:27 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar5.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter <span class="font-10 float-right">2:33 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar6.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter<span class="font-10 float-right">2:27 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar7.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter <span class="font-10 float-right">2:33 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar4.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter<span class="font-10 float-right">2:27 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar5.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter <span class="font-10 float-right">2:33 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar1.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter<span class="font-10 float-right">2:27 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                                        <div class="about ml-2 flex-grow-1">
                                            <h6 class="name mb-1">Vincent Porter <span class="font-10 float-right">2:33 pm</span></h6>
                                            <div class="user_msg font-12 text-muted">A big HELLO to all my connections!</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="chat_body">
                            <div class="chat-header d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img class="avatar lg rounded-circle" src="../assets/images/xs/avatar3.jpg" alt="avatar" />
                                    <div class="chat_about ml-2">
                                        <h6 class="mb-0">Vincent Porter </h6>
                                        <small>Click here to Contact info</small>
                                    </div>
                                </div>
                                <div class="hidden-sm text-right">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-simple"><i class="icon-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-simple"><i class="icon-camcorder"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-simple"><i class="icon-settings"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-simple"><i class="icon-question"></i></a>
                                </div>
                            </div>

                            <ul class="chat-history">
                                <li class="flex-row justify-content-end text-right">
                                    <div class="message-data">
                                        <span class="font-12" >10:10 am</span>
                                    </div>
                                    <div class="msg_body right"> Hi Aiden, how are you? How is the project coming along? </div>
                                </li>
                                <li class="flex-row justify-content-start">
                                    <div class="message-data">
                                        <img class="avatar sm rounded-circle ml-2" src="../assets/images/xs/avatar3.jpg" alt="avatar">
                                        <span class="font-12" >10:11 am</span>
                                    </div>
                                    <div class="msg_body left">Are we meeting today?</div>
                                </li>
                                <li class="flex-row justify-content-start">
                                    <div class="message-data">
                                        <img class="avatar sm rounded-circle ml-2" src="../assets/images/xs/avatar3.jpg" alt="avatar">
                                        <span class="font-12" >10:12 am</span>
                                    </div>
                                    <div class="msg_body left">It is a long established fact that a reader will be distracted.</div>
                                    <div class="msg_body left before_none">it will be distracted by the readable content of a page when looking at its layout. </div>
                                </li>
                                <li class="flex-row justify-content-end text-right">
                                    <div class="message-data">
                                        <span class="font-12" >10:10 am</span>
                                    </div>
                                    <div class="msg_body right"> Contrary to popular belief, Lorem Ipsum is not simply random text </div>
                                </li>
                                <li class="flex-row justify-content-start">
                                    <div class="message-data">
                                        <img class="avatar sm rounded-circle ml-2" src="../assets/images/xs/avatar3.jpg" alt="avatar">
                                        <span class="font-12" >10:12 am</span>
                                    </div>
                                    <div class="msg_body left">Thank you for your time.</div>
                                </li>
                            </ul>

                            <div class="chat-message">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter text here...">
                                    <div class="input-group-append">
                                      <span class="input-group-text"><i class="zmdi zmdi-mail-send"></i></span>
                                    </div>
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
                            <p class="copyright mb-0">Copyright 2020 © All Rights Reserved. Amaze Dashboard Template</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>
</html>