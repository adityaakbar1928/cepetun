<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - CepeTun</title>

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
                        <img class="logo-fold align-items-center" src="/assets/images/logo-fold.png" style="height:4rem"
                            alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="/assets/images/logo-light.png" style="height:4rem" alt="Logo">
                        <img class="logo-fold align-items-center" src="/assets/images/logo-fold.png" style="height:4rem"
                            alt="Logo">
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
                                <div
                                    class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
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
                                    <img src="{{ Auth::user()->profile_pic }}" alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="{{ Auth::user()->profile_pic }}" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">{{ Auth::user()->name }}</p>
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
                                <span class="title {{ (request()->is('dashboard')) ? 'active' : '' }}" style="font-weight: bold">Dashboard</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item dropdown">
                            <a href="{{ route('topupsaldo') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-wallet"></i>
                                </span>
                                <span class="title {{ (request()->is('dashboard/topup')) ? 'active' : '' }}" style="font-weight: bold">Topup Saldo</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-shopping-cart"></i>
                                </span>
                                <span class="title {{ (request()->is('dashboard/tunnel/')) ? 'active' : '' }}" style="font-weight: bold">Layanan Kami</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="{{ (request()->is('dashboard/tunnel/remote')) ? 'active' : '' }}">
                                    <a href="{{ route('tunnelremote') }}">Tunnel Remote</a>
                                </li>
                                <li class="{{  (request()->is('dashboard/tunnel/game')) ? 'active' : ''  }}">
                                    <a href="">Tunnel Game (Coming Soon)</a>
                                </li>
                                <li class="{{  (request()->is('dashboard/tunnel/game')) ? 'active' : ''  }}">
                                    <a href="">Hosting Mikhmon (Coming Soon)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-shopping-cart"></i>
                                </span>
                                <span class="title {{ (request()->is('dashboard/docs')) ? 'active' : '' }}" style="font-weight: bold">Dokumentasi</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="{{  (request()->is('dashboard/docs/howitworks')) ? 'active' : ''  }}">
                                    <a href="">Cara kerja Tunneling</a>
                                </li>
                                <li class="{{  (request()->is('dashboard/docs/howtoconnect')) ? 'active' : ''  }}">
                                    <a href="">Panduan Connect Tunneling</a>
                                </li>
                                <li class="{{  (request()->is('dashboard/docs/howtoorder')) ? 'active' : ''  }}">
                                    <a href="">Panduan Order Tunneling</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->
