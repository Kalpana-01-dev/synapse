<div class="container-fluid py-4">
    <div class="row">
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

        <!-- Main content -->
        <div class="col-md-9">
            <!-- Tabs -->
            <ul class="nav nav-tabs mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="#">All Reports ({{count($hubReport)}})</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Reports (0)</a>
                </li>
            </ul>

            <!-- Search -->
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Search Reports">
            </div>

            @foreach($hubReport as $key=>$val)
            <!-- Report Card -->
            <div class="report-card">
                <h6>{{$val['name']}}</h6>
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
</div>