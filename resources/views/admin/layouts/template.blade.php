<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/assets/img/apple-icon.png')}}">
<link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/favicon.png')}}">

<title>
  
   Gestion d'assosiation

</title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="{{asset('dashboard/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{asset('dashboard/assets/css/nucleo-svg.css')}}" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="{{asset('dashboard/assets/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />
  </head>
  <body class="g-sidenav-show  bg-gray-100">
 
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="{{asset('dashboard/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Page Admin</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav"> 
 
    <li class="nav-item">
      <a class="nav-link text-white " href="{{route('admindashboard')}}">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
          <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white " href="{{route('compte_user')}}">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
          <span class="nav-link-text ms-1">compte d'utilisateur</span>
      </a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link text-white " href="{{route('compte_bailleur')}}">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
          <span class="nav-link-text ms-1">compte des bailleurs des fonds</span>
      </a>
    </li>



  


  

  
<li class="nav-item">
  <a class="nav-link text-white " href="./profile.html">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">person</i>
      </div> <span class="nav-link-text ms-1">Profile</span>
  </a>
</li>
</ul>
 </div>
  
 
    
  </div>
  
</aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
      </nav>
        </div>
        <ul class="navbar-nav  justify-content-end">
         
        <li class="nav-item d-flex align-items-center">
          <a href="{{route('admin.logout')}}" class="glyphicon glyphicon-log-ou">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Déconnexion</span>
          </a>
        </li>

        
      </ul>
    </div>
  </div>
</nav>

<!-- End Navbar -->



<div class="content-wrapper">
@yield('content')
</div>

     


 

<!--   Core JS Files   -->
<script src="{{asset('dashboard/assets/js/core/popper.min.js')}}" ></script>
<script src="{{asset('dashboard/assets/js/core/bootstrap.min.js')}}" ></script>
<script src="{{asset('dashboard/assets/js/plugins/perfect-scrollbar.min.js')}}" ></script>
<script src="{{asset('dashboard/assets/js/plugins/smooth-scrollbar.min.js')}}" ></script>



<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('dashboard/assets/js/material-dashboard.min.js?v=3.0.4')}}"></script>
  </body>

</html>
