<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hub Layout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/main/default.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/main/sidebar.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/main/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/dashboardResponsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/hub.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/hub_report.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/hub_companie.css')}}">


  <style>
    
    .hub-header {
      background: linear-gradient(to right, #e8f9f5, #e6f0ff);
      padding: 2rem 1rem;
      border-bottom: 1px solid #ddd;
    }
    .hub-header h2 {
      font-weight: 600;
    }
    .nav-tabs .nav-link {
      color: #333;
      font-weight: 500;
    }
    .nav-tabs .nav-link.active {
      border-bottom: 3px solid #007bff;
      color: #007bff;
    }
    .sidebar {
      background: #fff;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
    }
    .sidebar .list-group-item {
      border: none;
      border-left: 4px solid transparent;
      cursor: pointer;
    }
    .sidebar .list-group-item.active {
      background: #f0f8ff;
      border-left: 4px solid #007bff;
      font-weight: 500;
      color: #007bff;
    }
    .content {
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
      border: 1px solid #e0e0e0;
    }
  </style>
</head>
<body class="bg-light">

    @include('layout.header')

 

  <!-- Header Section -->
 

  <!-- Navigation Tabs -->
  <div class="border-bottom">
    <div class="container">
      <ul class="nav nav-tabs mt-3" id="hubTabs">
        <li class="nav-item"><a class="nav-link active navitems"  
         data-type="1" data-bs-toggle="tab" href="{{route('hub_details.about')}}">About</a></li>
        <li class="nav-item "><a class="nav-link navitems" data-slug = "{{request()->slug}}" data-bs-toggle="tab" href="{{route('hub_details.report')}}">Reports</a></li>
        <li class="nav-item">
          <a class="nav-link navitems" data-bs-toggle="tab"  href="{{route('hub_details.companies')}}">Companies</a>
        </li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#marketShare">Market Share</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#visualize">Visualize</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#masterData">Master Data</a></li>
      </ul>
    </div>
  </div>

   <div class="main_out_put">

   </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
$(document).on('click' ,'.navitems' ,function(event){
    event.preventDefault();
   let type = $(this).data('type');
   let href = $(this).attr('href');
   let slug = $(this).data('slug');
   console.log(href);
   $.ajax({
    url: href,  // Laravel route
    type: "POST",
    dataType:'json',
    data: {
        type:type , 
        slug:slug, 
        _token: "{{csrf_token()}}" // CSRF Token
    },
    success: function(response) {
        $('.main_out_put').html(response.html);
    },
    error: function(xhr) {
        console.log("Error:", xhr.responseText);
    }
});


});

</script>
</html>
