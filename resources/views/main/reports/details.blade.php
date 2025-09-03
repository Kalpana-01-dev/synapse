<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub </title>

    <!-- Include Css -->
    <link rel="stylesheet" href="{{asset('assets/css/main/default.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/main/sidebar.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/main/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/dashboardResponsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/header.css')}}">
  
    <link rel="stylesheet" href="{{asset('assets/css/report/contents.css')}}">


    <!-- Include Css -->

    <link rel="icon" type="image/x-icon" href="../assets/images/logo/feviconIcon.png">

    <!-- Bootstrap V5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap V5.3 CSS -->

</head>

<body class="bg-light">


    <!-- header  -->
    @include('layout.header')




    <!-- report details  header -->
       
        <div class="container my-4">
        <nav class="navbar custom-navbar d-flex justify-content-between align-items-center">
        <!-- Nav Links -->
        <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="#">Contents</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{request()->routeIs('reports') ? 'active' :''}}" href="{{route('reports')}}">Dashboard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{request()->route('companies') ? 'active' :''}}" href="{{route('companies')}}">Exceution Summary </a>
        </li>

        <li class="nav-item">
        <a class="nav-link {{request()->route('companies') ? 'active' :''}}" href="{{route('companies')}}">Reports </a>
        </li>

        <li class="nav-item">
        <a class="nav-link {{request()->route('companies') ? 'active' :''}}" href="{{route('companies')}}">Data Sheet </a>
        </li>
        </ul>


        </nav>
        </div>

     <div class="outputdiv">

     </div>


    <!--  -->







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