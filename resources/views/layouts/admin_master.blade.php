<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin @yield('title') Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{asset('public/')}}/assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/')}}/assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/')}}/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/')}}/assets/css/style1.css" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap bg1">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="{{asset('public/')}}/assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            @include('inc.admin.header')
            <!-- begin app-container -->
            <div class="app-container">
                @include('inc.admin.sidebar')
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            @include('inc.admin.footer')
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfqH9LV7E0y3DvblpSUoAHkA33S7pWCII"></script>
    <script src="{{asset('public/')}}/assets/js/vendors.js"></script>
    <!-- custom app -->
    <script src="{{asset('public/')}}/assets/js/app.js"></script>
    @yield('script')
</body>


</html>