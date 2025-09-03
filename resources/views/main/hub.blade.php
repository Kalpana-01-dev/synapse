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
    <link rel="stylesheet" href="{{asset('assets/css/main/hub.css')}}">

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



    <!-- header ends here  -->

    <div class="page-tabs">
        <div class="container-fluid px-4">
            <ul class="nav nav-tabs top-tabs ">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#myHubs">My Hubs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hubsCatalogue" data-bs-toggle="tab" id="tabCatalogue">Hubs Catalogue</a>
                </li>
            </ul>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6>Categories</h6>
                    <span class="reset-link">🔄 Reset All</span>
                </div>

                <div class="accordion" id="categoriesAccordion">
                    @foreach($sidebarData as $key=>$val)
                    @php $details = $val['categories'] @endphp
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_{{$key}}">
                                {{$val['name']}}
                            </button>
                        </h2>
                        <div id="collapseOne_{{$key}}" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                @foreach($details as $key2=>$val2)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="airportOps">
                                    <label class="form-check-label" for="airportOps">{{$val2['name']}} ({{$val2['report_count']}} reports)</label>
                                </div>
                                @endforeach
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="clear-link">Clear All</span>
                                    <button class="apply-btn">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content">
                    <!-- My Hubs -->
                    <div class="tab-pane fade show active" id="myHubs">
                        <div class="search-box mt-3">
                            <input type="text" class="form-control" placeholder="Search Hubs">
                        </div>
                        <div class="content-area text-center">
                            <p>There is no hub found</p>
                        </div>
                    </div>

                    <!-- Hubs Catalogue -->
                    <div class="tab-pane fade" id="hubsCatalogue">
                        <div class="search-box mt-3">
                            <input type="text" class="form-control" placeholder="Search in Catalogue">
                        </div>
                        <div class="content-area text-center">
                            <div class="grid">
                              @foreach($hub_catalouge as $key=>$val)
                                    <a  href="{{route('hub' ,$val['slug'])}}" class="card">
                                        <img src="{{$val['img']}}" alt="{{$val['name']}}">
                                        <div class="card-body">
                                            <div class="card-title">{{$val['name']}}</div>
                                            <div class="card-info">Reports: {{$val['report_count']}} | Purchased Reports: {{$val['purchases_count']}}</div>
                                            <div class="bookmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                            </div>
                        </div>
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