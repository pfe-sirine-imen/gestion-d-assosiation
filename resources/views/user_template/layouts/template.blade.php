<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('home/img/apple-icon.png')}} ">
    <link rel="icon" type="image/png" href="{{asset('home/img/favicon.ico')}} ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Gestion d'assosiation</title>
    

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('home/css/light-bootstrap-dashboard.css?v=2.0.0')}} " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('home/css/demo.css')}} " rel="stylesheet" />
    
</head>

<body>
<div class="wrapper">
<div class="sidebar" data-image="{{asset('home/img/sidebar-5.jpg')}} ">
    
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Assosiation Nour
            </a>
        </div>
        <ul class="nav">
            
            <li>
                <a class="nav-link" href="{{route ('profil')}}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Profile</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route ('listeadherents')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Gestion d'adherent</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route ('liste_reunion')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Gestion de reunion</p>
                </a>
            </li>


            <li>
                <a class="nav-link" >
                    <i class="nc-icon nc-notes"></i>
                    <p>Liste de evenement</p>
                </a>
                <ul class="menu-sub"> 
                    <li class="nav-link">
                        <a class="nc-icon nc-notes"  style="color:white" href="{{route ('liste_evenement')}}">
                        <p> D'assosiation </p>
                        </a>  
                    </li>
                    <li class="nav-link">
                        <a class="nc-icon nc-notes" style="color:white"  href="{{route ('liste_evenement_bailleur')}}">
                        <p> Bailleur de fond </p>
                        </a>  
                    </li>
                </ul>
            </li>

            
            <li>
                <a class="nav-link" href="{{route ('liste_caisse')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Gestion de caisse</p>
                </a>
            </li>
            
            <li>
                <a class="nav-link" href="{{route ('liste_don')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Gestion du don</p>
                </a>
            </li>
            
            <li>
                <a class="nav-link" href="{{route ('liste_projet')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Gestion du projet</p>
                </a>
            </li>
            
            
        </ul>
    </div>
</div>

<div class="main-panel">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{route ('ass')}}" style="color:#A569BD ">Assosiation Nour</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link"  style="color:#A569BD " href="{{route ('adherents')}}">adherents</a>
        </li>


        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  style="color:#A569BD " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Evenemnts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route ('evenement')}}">Liste d'evenement d'assostaion </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route ('evenement_bailleur')}}">Liste d'evenement (Bailleur de fond)</a>
        </div>
      </li>
       
        <li class="nav-item">
          <a class="nav-link"  style="color:#A569BD " href="{{route ('reunion')}}">Reunion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#A569BD "  href="{{route ('dons')}}">Don</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#A569BD " href="{{route ('caisse')}}">Caisse</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" style="color:#A569BD "  href="{{route ('projet')}}" >Projet</a>
        </li>
      </ul>
      
        <input class="form-control me-2" type="search" placeholder="recherche" aria-label="Search">
      
     
    </div>
  
                
   <li class="nav-item d-flex align-items-center"  >
    <a href="{{route('admin.logout')}}" style="color:#A569BD " class="glyphicon glyphicon-log-ou">
        <i class="fa fa-user me-sm-1" style="color:#A569BD "></i>
        <span class="d-sm-inline d-none" style="color:#A569BD ">Deconnexion</span>
    </a>
    </li>

</nav>



<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
        <script type="text/javascript"> 
            var botmanWidget={
                introMessage:'Bonjour a assosiation feminine nour !',
                aboutText:'ExpertRohila'
            };
        </script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        <!-- commun part -->


              
                    
<div class="container py-5">
    @yield('main-content')

    
</div>


<!-- end commen part -->


    <!-- End Navbar -->
   
</div>

</div>

</body>
       
<!--   Core JS Files   -->
<script src="{{asset('home/js/core/jquery.3.2.1.min.js')}} " type="text/javascript"></script>
<script src="{{asset('home/js/core/popper.min.js')}} " type="text/javascript"></script>
<script src="{{asset('home/js/core/bootstrap.min.js')}} " type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('home/js/plugins/bootstrap-switch.js')}} "></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('home/js/plugins/chartist.min.js')}} "></script>
<!--  Notifications Plugin    -->
<script src="{{asset('home/js/plugins/bootstrap-notify.js')}} "></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('home/js/light-bootstrap-dashboard.js?v=2.0.0')}}  " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('home/js/demo.js')}} "></script>

</script>

 </html>
