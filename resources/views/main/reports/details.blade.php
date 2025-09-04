<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report details </title>

    <!-- Include Css -->
    <link rel="stylesheet" href="{{asset('assets/css/main/default.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/main/sidebar.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/main/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/dashboardResponsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/header.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/report/contents.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/report/execution_summary.css')}}">



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

   
    @php 
        $id =  $data['slug'] ?? '' ;
    @endphp 


    <!-- report details  header -->

    <div class="container my-4">
        <nav class="navbar custom-navbar d-flex justify-content-between align-items-center">
            <!-- Nav Links -->
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link report_detail active" data-id="{{$id}}" href="{{route('report_details.contents')}}">Contents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  report_detail " data-id="{{$id}}"   href="{{route('report_details.dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link report_detail " data-id="{{$id}}" href="{{route('report_details.execution_summary')}}">Exceution Summary </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link report_detail" data-id="{{$id}}"  href="{{route('report_details.report_pdf')}}">Reports </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link report_detail" href="{{route('report_details.data_sheet')}}">Data Sheet </a>
                </li>
            </ul>


        </nav>
    </div>

    <div class="outputdiv">

    </div>


    <!--  -->






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap V5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    @yield('script')
    <script>

      $(document).ready(function () {
    let ele = $('.report_detail.active'); 
    let href = ele.attr('href');
    let id = ele.data('id');
    GetAjaxData(id, href);
});


        
        $(document).on('click', '.report_detail', function(event) {
            event.preventDefault();
            $('.report_detail').removeClass('active');
            let href = $(this).attr('href');
            let id = $(this).data('id');
            $(this).addClass('active');
            GetAjaxData(id ,href);
        })

        function GetAjaxData(id  ,href){
              $.ajax({
                url: href, // Your route or API endpoint
                type: 'POST',
                dataType:'json',
                data: {
                     id : "{{request()->slug}}" ,
                    _token: "{{csrf_token()}}" // important in Laravel
                },
                success: function(response) {
                     $('.outputdiv').html(response.html);

                },
                error: function(xhr) {
                    console.error("Error:", xhr.responseText);
                }
            });    
        }
    </script>
</body>

</html>