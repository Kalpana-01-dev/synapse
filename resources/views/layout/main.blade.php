<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synapse</title>

    <!-- Include Css -->
    <link rel="stylesheet" href="{{asset('assets/css/main/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/dashboardResponsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/header.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/companies.css')}}">

    <!-- Include Css -->

    <link rel="icon" type="image/x-icon" href="../assets/images/logo/feviconIcon.png">

    <!-- Bootstrap V5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap V5.3 CSS -->

</head>

<body>


    <!-- header  -->
        @include('layout.header')



    <!-- header ends here  -->

    <div class="container-fluid p-0 h-100 dashboardMain">
        <!-- sidebar  -->
          @include('layout.sidebar')
        <!-- sidebar ends  -->

        <div class=" innerMainContent   homeDashboard">
            <div class="col-md-12">
                <div class="box">
                   @yield('content')
                </div>

            </div>
        </div>
    </div>


    <!-------------------------
     Login Area Ends here
     ------------------------------>

    
    <!-- Bootstrap V5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

@yield('script')
</body>

</html>