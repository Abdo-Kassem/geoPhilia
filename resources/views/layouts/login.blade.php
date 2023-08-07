<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Coddiv Systems For Web Desgin, Mobile App and Systems">
    <meta name="keywords" content="dashboard">
    <meta name="author" content="Coddiv">
    <title>Admin panel
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/dashboard/images/logo/geologo.jpg') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">



    @if (app()->getLocale() == 'en')
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors.css') }}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/app.css') }}">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/css/core/menu/menu-types/vertical-menu-modern.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/css/core/colors/palette-gradient.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/vendors/css/charts/morris.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/fonts/simple-line-icons/style.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/css/core/colors/palette-gradient.css') }}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="href=" {{ asset('assets/dashboard/css/style.css') }}">
        <!-- END Custom CSS-->
    @else
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css-rtl/vendors.css') }}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css-rtl/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css-rtl/custom-rtl.css') }}">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/css-rtl/core/menu/menu-types/vertical-menu-modern.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/css-rtl/core/colors/palette-gradient.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/vendors/css/charts/morris.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/fonts/simple-line-icons/style.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/dashboard/css-rtl/core/colors/palette-gradient.css') }}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="href=" {{ asset('assets/dashboard/css/style-rtl.css') }}">
        <!-- END Custom CSS-->
    @endif

</head>

<body class="vertical-layout vertical-content-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar  pace-done"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">




    @yield('content')



    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/dashboard/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('assets/dashboard/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/data/jvector/visitor-data.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('assets/dashboard/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/js/core/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/js/scripts/customizer.js') }}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/dashboard/js/scripts/pages/dashboard-sales.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>
