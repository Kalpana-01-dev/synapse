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
    <link rel="stylesheet" href="{{asset('assets/css/main/hub_report.css')}}">



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






    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="filter-sidebar">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="mb-0">Filters</h6>
                        <a href="#" class="small text-decoration-none">Reset All</a>
                    </div>
                    <div class="accordion" id="filterAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingRegion">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegion">
                                    Region
                                </button>
                            </h2>
                            <div id="collapseRegion" class="accordion-collapse collapse">
                                <div class="accordion-body">

                                    @foreach($region as $key=>$val)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="{{$val}}">
                                        <label class="form-check-label" for="{{$val}}">
                                            {{$val}}
                                        </label>
                                    </div>


                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCountry">
                                    Country
                                </button>
                            </h2>
                            <div id="collapseCountry" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    @foreach($country as $key=>$val)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="{{$val}}">
                                        <label class="form-check-label" for="{{$val}}">
                                            {{$val}}
                                        </label>
                                    </div>


                                    @endforeach
                                </div>
                            </div>


                        </div>
                        <!-- Add other filter sections (Market, End User Industry, Technology, Resin) -->
                    </div>
                </div>
            </div>




            <!-- sidebar ends here  -->

            <div class="col-md-9">
                <!-- all reports are here  -->
                 @foreach($reports as $key=>$val)
                <div class="report-card">
                    <a href="{{route('reports' ,$val['slug'])}}">{{$val['name']}}</a>
                    <span class="hub-badge">Hub: {{$val['hub']}}</span>
                    <ul class="list-unstyled mt-2 mb-2">
                        <li><strong>Published Date:</strong> {{date('d M Y ' ,strtotime($val['publish_date']))}}</li>
                        <li><strong>Study Period:</strong>{{$val['study_period']}}</li>
                        <li><strong>Format:</strong>{{$val['format']}}</li>
                        <li><strong>Country Covered:</strong>{{$val['country_covered']}}</li>
                    </ul>
                    <p class="text-primary fw-bold mb-2">* 24-72 Hrs Delivery Time</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="report-logos">
                            <img src="{{$val['img']}}" alt="" srcset="">
                        </div>
                        <div class="d-flex ">
                            <button class="btn btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path d="M216,48H40A16,16,0,0,0,24,64V224a15.84,15.84,0,0,0,9.25,14.5A16.05,16.05,0,0,0,40,240a15.89,15.89,0,0,0,10.25-3.78l.09-.07L83,208H216a16,16,0,0,0,16-16V64A16,16,0,0,0,216,48ZM40,224h0ZM216,192H80a8,8,0,0,0-5.23,1.95L40,224V64H216Z"></path>
                                </svg>
                            </button>
                            <button class="btn btn-primary w-auto"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Buy Now</button>
                        </div>
                    </div>
                </div>
                @endforeach

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