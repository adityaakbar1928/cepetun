<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CepeTun - Penyedia Jasa Tunneling</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Penyedia jasa tunneling, layanan ip public, tunneling, vpn, game vpn, monitoring, jasa termurah" name="description" />

    <!-- Vite App CSS -->
    @vite('resources/css/app.css')

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="#">

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

    <!-- Animation on Scroll css -->
    <link href="assets/libs/aos/aos.css" rel="stylesheet" type="text/css">

    <!-- Style css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
</head>

<body class="text-gray-700">
<!-- =========== Navbar Start =========== -->
    <header id="navbar" class="@@link-color fixed top-0 inset-x-0 flex items-center z-40 w-full lg:bg-transparent bg-white transition-all py-5">
        <div class="container">
            <nav class="flex items-center">
                <!-- Navbar Brand Logo -->
                <a href="index.html">
                    <img src="assets/images/logo-dark.png" class="h-12 logo-dark" alt="Logo Dark">
                    <img src="assets/images/logo-light.png" class="h-12 logo-light" alt="Logo Light">
                </a>

                <!-- Nevigation Menu -->
                <div class="hidden lg:block ms-auto mx-auto">
                    <ul class="navbar-nav flex gap-x-3 items-center justify-center">
                        <!-- Home Page Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <!-- Layanan Kami Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Layanan Kami</a>
                        </li>
                        <!-- Harga Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar Harga</a>
                        </li>
                        <!-- Contact Page Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>

                <!-- Login Button -->
                <div class="hidden lg:flex items-center ms-3">
                    <a href="#" target="_blank" class="bg-primary text-white px-4 py-2 rounded inline-flex items-center text-sm">Log In <span aria-hidden="true">&rarr;</span></a>
                </div>

                <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
                <div class="lg:hidden flex items-center ms-auto px-2.5">
                    <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                        <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>
    <!-- =========== Navbar End =========== -->

    <!-- =========== Mobile Menu Start (Offcanvas) =========== -->
    <div id="mobileMenu" class="fc-offcanvas-open:translate-x-0 translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-s hidden">
        <div class="flex flex-col h-full divide-y-2 divide-gray-200">
            <!-- Mobile Menu Topbar Logo (Header) -->
            <div class="p-6 flex items-center justify-between">
                <a href="#">
                    <img src="assets/images/logo-dark.png" class="h-10" alt="Logo">
                </a>

                <button data-fc-dismiss class="flex items-center px-2">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu Link List -->
            <div class="p-6 overflow-scroll h-full">
                <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <!-- Layanan Kami Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan Kami</a>
                    </li>
                    <!-- Harga Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Harga</a>
                    </li>
                    <!-- Contact Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                    </li>
                </ul>
            </div>

            <!-- Login Button (Footer) -->
            <div class="p-6 flex items-center justify-center">
                <a href="#" target="_blank" class="bg-primary w-full text-white p-3 rounded flex items-center justify-center text-sm">Log In <span aria-hidden="true">&rarr;</span></a>
            </div>
            <!-- Register Button (Footer) -->
            <div class="p-6 flex items-center justify-center">
                <a href="#" target="_blank" class="bg-stone-300 w-full text-white p-3 rounded flex items-center justify-center text-sm">Register <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </div>
    <!-- =========== Mobile Menu End =========== -->