<?php
$user = Auth::user();
$firstLetter = $user ? substr($user->name, 0, 1)  : '';
?>



<div class="container my-4">
  <nav class="navbar custom-navbar d-flex justify-content-between align-items-center">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
    </a>

    <!-- Nav Links -->
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link {{request()->routeIs('hub') ? 'active' :''}}" href="{{route('hub')}}">Hubs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{request()->routeIs('reports') ? 'active' :''}}" href="{{route('reports')}}">Reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{request()->route('companies') ? 'active' :''}}" href="{{route('companies')}}">Companies</a>
      </li>
     
    </ul>

    <!-- Profile Circle -->

    <div class="dropdown">
  <button class="btn " type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <div class="profile-circle">{{strtoupper($firstLetter)}}</div>
        
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item active" href="{{route('logout')}}">Logout</a></li>
   
  </ul>
</div>
  </nav>
</div>


<!-- heaer ends here  -->

<!-- banner section -->

<div class="container my-5">
  <div class="custom-box">
    <h2>Astute Analytica knowledge hub </h2>
    <h5>Dive Deeper, Collaborate Smarter With Synapse</h5>
    <a href="#">Your All-In-One Market Intelligence Tool</a>
    <p>
      Astute Analytica's Synapse empowers your entire team with one powerful, collaborative 
      platform designed to conquer any market challenge. Whatever your question, Synapse 
      unlocks the answers. Our deep industry expertise and dedicated analyst teams ensure 
      you have the support you need to answer even the most niche business questions.
    </p>
    
      <button class="btn btn-primary btn-sm w-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        Talk to us 
    </button>
  </div>
</div>




@include('layout.talk_to_us')

