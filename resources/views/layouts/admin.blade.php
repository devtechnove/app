<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="dark">


<!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2022 18:47:57 GMT -->
<head>

    <meta charset="utf-8" />
    <title>MMMVNZLA |  @yield('title')</title>
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/css/system.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/libs/toastify/css/toastify.css') }}">
     <!--datatable css-->
    <link rel="stylesheet" href="/assets/libs/datatable/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="/assets/libs/datatable/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="/assets/libs/datatable/buttons/2.2.2/css/buttons.dataTables.min.css">
</head>

<body>

     <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

    <!-- Begin page -->
    <div id="layout-wrapper">

    <header id="page-topbar">
        @include('layouts.partials.header')
    </header>
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    @include('layouts.partials.menu')
                </div>


            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Horizontal</h4>

                                    <div class="page-title-right">
                                       @yield('breadcrumb')
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        @yield('content')

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Velzon.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->



        </div>

        <!-- JAVASCRIPT -->
         <script src="/assets/libs/jquery/jquery-3.6.0.min.js"></script>

        <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/assets/libs/node-waves/waves.min.js"></script>
        <script src="/assets/libs/feather-icons/feather.min.js"></script>
        <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="/assets/js/pplugins.js"></script>

        <!-- apexcharts -->
        <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="/assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!-- Dashboard init -->
        <script src="/assets/js/pages/dashboard-analytics.init.js"></script>

        <!-- App js -->
        <script src="/assets/js/app.js"></script>
        <script src="/assets/js/some.js"></script>
        <script src="{{ asset('assets/libs/toastify/js/toastify.js') }}" ></script>
          <!--datatable js-->
        <script src="/assets/libs/datatable/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="/assets/libs/datatable/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/libs/datatable/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="/assets/libs/datatable/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="/assets/libs/datatable/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="/assets/libs/datatable/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="/assets/libs/datatable/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="/assets/libs/datatable/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="/assets/libs/datatable/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script>
        $( document ).ready(function()
            {
                $("#status").fadeOut();
                $("#preloader").delay(100).fadeOut("slow")
            })

    </script>
         <script>
            $(window).on('load', function() {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })
        </script>
        @yield('scripts')
    </body>


    <!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2022 18:47:58 GMT -->
    </html>
