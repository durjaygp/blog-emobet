<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Starter Page | Veltrix - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('adminPanel')}}/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('adminPanel')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{asset('adminPanel')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{asset('adminPanel')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @include('backEnd.inc.header')

    <!-- ========== Left Sidebar Start ========== -->
    @include('backEnd.inc.sidebar')
    <!-- Left Sidebar End -->)

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h6 class="page-title">Starter Page</h6>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="#">Extra Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Starter Page</li>
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <div class="float-end d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-cog me-2"></i> Settings
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->



            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        @include('backEnd.inc.footer')


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{asset('adminPanel')}}/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('adminPanel')}}/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="{{asset('adminPanel')}}/assets/css/bootstrap-dark.min.css"
                       data-appStyle="{{asset('adminPanel')}}/assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('adminPanel')}}/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="{{asset('adminPanel')}}/assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('adminPanel')}}/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('adminPanel')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('adminPanel')}}/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('adminPanel')}}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('adminPanel')}}/assets/libs/node-waves/waves.min.js"></script>


<script src="{{asset('adminPanel')}}/assets/js/app.js"></script>

</body>
</html>
