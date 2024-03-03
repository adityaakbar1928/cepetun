<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Topup - CepeTun</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.png">

    <!-- page css -->
    <link href="/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/admincustom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Core css -->
    <link href="/assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.html">
                        <img src="/assets/images/logo-dark.png" style="height:4rem" alt="Logo">
                        <img class="logo-fold align-items-center" src="/assets/images/logo-fold.png" style="height:4rem" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="/assets/images/logo-light.png" style="height:4rem" alt="Logo">
                        <img class="logo-fold align-items-center" src="/assets/images/logo-fold.png" style="height:4rem" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                <i class="anticon anticon-search"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" data-toggle="dropdown">
                                <i class="anticon anticon-bell notification-badge"></i>
                            </a>
                            <div class="dropdown-menu pop-notification">
                                <div class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
                                    <p class="text-dark font-weight-semibold m-b-0">
                                        <i class="anticon anticon-bell"></i>
                                        <span class="m-l-10">Notification</span>
                                    </p>
                                    <a class="btn-sm btn-default btn" href="javascript:void(0);">
                                        <small>View All</small>
                                    </a>
                                </div>
                                <div class="relative">
                                    <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-blue avatar-icon">
                                                    <i class="anticon anticon-mail"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">You received a new message</p>
                                                    <p class="m-b-0"><small>8 min ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-cyan avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">New user registered</p>
                                                    <p class="m-b-0"><small>7 hours ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="{{ Auth::user()->profile_pic }}"  alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="{{ Auth::user()->profile_pic }}" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">{{Auth::user()->name}}</p>
                                            <p class="m-b-0 opacity-07">UI/UX Desinger</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                            <span class="m-l-10">Account Setting</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="{{ route('actionlogout') }}" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown">
                            <a href="{{ route('dashboard') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title" style="font-weight: bold">Dashboard</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item dropdown">
                            <a href="{{ route('topupsaldo') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-wallet"></i>
                                </span>
                                <span class="title active" style="font-weight: bold">Topup Saldo</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-shopping-cart"></i>
                                </span>
                                <span class="title" style="font-weight: bold">Layanan Kami</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="">Tunnel Remote</a>
                                </li>
                                <li>
                                    <a href="">Tunnel Game (Coming Soon)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-shopping-cart"></i>
                                </span>
                                <span class="title" style="font-weight: bold">Dokumentasi</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="">Cara kerja Tunneling</a>
                                </li>
                                <li>
                                    <a href="">Panduan Connect Tunneling</a>
                                </li>
                                <li>
                                    <a href="">Panduan Order Tunneling</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Pengumuman</span></div>
                                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                                     <a href="#">CepeTun masih dalam proses pengembangan! </a> 
                                     <i class="fa-solid fa-circle" style="color: red"></i>
                                     <a href="#">CepeTun dengan penyebutan frasa sama seperti Cepetan </a> 
                                     <i class="fa-solid fa-circle" style="color: red"></i>
                                     <a href="#">Faktanya, minum itu ngilangin haus </a>                                    
                                </marquee>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Topup Balance</h5>
                                    </div>
                                    <div class="m-t-30">
                                        <div class="d-inline-block m-r-30">
                                            <p class="m-b-0 d-flex align-items-center">
                                                <span class="badge badge-primary badge-dot m-r-10"></span>
                                                <span>Online</span>
                                            </p>
                                        </div>
                                        <div class="d-inline-block">
                                            <p class="m-b-0 d-flex align-items-center">
                                                <span class="badge badge-blue badge-dot m-r-10"></span>
                                                <span>Offline</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="m-t-50">
                                        <canvas class="chart" style="height: 205px" id="sales-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="m-b-0 text-muted">Remaining Balance</p>
                                                    <h2 class="m-b-0">$23,523</h2>
                                                </div>
                                                <span class="badge badge-pill badge-cyan font-size-12">
                                                    <i class="anticon anticon-arrow-up"></i>
                                                    <span class="font-weight-semibold m-l-5">6.71%</span>
                                                </span>
                                            </div>
                                            <div class="m-t-40">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary badge-dot m-r-10"></span>
                                                        <span class="text-gray font-weight-semibold font-size-13">Monthly Goal</span>
                                                    </div>
                                                    <span class="text-dark font-weight-semibold font-size-13">70% </span>
                                                </div>
                                                <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                                    <div class="progress-bar bg-primary" style="width: 70%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="m-b-0 text-muted">Total Spend</p>
                                                    <h2 class="m-b-0">$8,753</h2>
                                                </div>
                                                <span class="badge badge-pill badge-red font-size-12">
                                                    <i class="anticon anticon-arrow-down"></i>
                                                    <span class="font-weight-semibold m-l-5">3.26%</span>
                                                </span>
                                            </div>
                                            <div class="m-t-40">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-success badge-dot m-r-10"></span>
                                                        <span class="text-gray font-weight-semibold font-size-13">Monthly Goal</span>
                                                    </div>
                                                    <span class="text-dark font-weight-semibold font-size-13">60% </span>
                                                </div>
                                                <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="m-b-0 text-muted">Active Tunnel</p>
                                                    <h2 class="m-b-0">1,753</h2>
                                                </div>
                                                <span class="badge badge-pill badge-red font-size-12">
                                                    <i class="anticon anticon-arrow-down"></i>
                                                    <span class="font-weight-semibold m-l-5">2.71%</span>
                                                </span>
                                            </div>
                                            <div class="m-t-40">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-warning badge-dot m-r-10"></span>
                                                        <span class="text-gray font-weight-semibold font-size-13">Monthly Goal</span>
                                                    </div>
                                                    <span class="text-dark font-weight-semibold font-size-13">45% </span>
                                                </div>
                                                <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                                    <div class="progress-bar bg-warning" style="width: 45%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="m-b-0 text-muted">Expired Tunnel</p>
                                                    <h2 class="m-b-0">236</h2>
                                                </div>
                                                <span class="badge badge-pill badge-gold font-size-12">
                                                    <i class="anticon anticon-arrow-up"></i>
                                                    <span class="font-weight-semibold m-l-5">N/A</span>
                                                </span>
                                            </div>
                                            <div class="m-t-40">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-secondary badge-dot m-r-10"></span>
                                                        <span class="text-gray font-weight-semibold font-size-13">Monthly Goal</span>
                                                    </div>
                                                    <span class="text-dark font-weight-semibold font-size-13">50% </span>
                                                </div>
                                                <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                                    <div class="progress-bar bg-secondary" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- Start List Tunnel -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                   <div class="d-flex justify-content-between align-items-center">
                                        <h5>List Tunnel Kamu</h5>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-success">Order New</a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>Tunnel Name</th>
                                                        <th>IP Address:port</th>
                                                        <th>Service</th>
                                                        <th>Status</th>
                                                        <th>Expired at</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="m-l-10">
                                                                    <span>A Tunnel 1</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>192.168.1.0:58428</td>
                                                        <td>Winbox</td>
                                                        <td>Active</td>
                                                        <td>12-02-2000</td>
                                                        <td><button class="btn btn-info btn-xs">Info</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="m-l-10">
                                                                    <span>B Tunnel 1</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>192.168.1.0:58428</td>
                                                        <td>SSH</td>
                                                        <td>Expired</td>
                                                        <td>12-01-2000</td>
                                                        <td><button class="btn btn-info btn-xs">Info</button></td>
                                                    </tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2024 Bappo. All rights reserved.</p>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            <div class="modal modal-left fade search" id="search-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Search</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <!-- Content goes Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End-->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="/assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="/assets/js/pages/datatables.js"></script>

    <!-- Core JS -->
    <script src="/assets/js/app.min.js"></script>

</body>

</html>