<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bonoro - Responsive Admin Dashboard Template">
    <meta name="author" content="Belostemas">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <title> @yield('title') </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    @yield('styles')



    <script src="assets/js/modernizr.min.js"></script>
</head>

<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        @include('layouts.includes.topbar')
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.includes.left_sidebar')
        <!-- Left Sidebar End -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('content')
            <!-- content -->
                
            

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        @include('layouts.includes.right_sidebar')
        <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>


    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/pages/dashboard1.js"></script>

    
    @yield('scripts')

</body>


<!-- Mirrored from bonoroadmin.web.app/vertical-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 10:48:07 GMT -->
</html>