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
                                    <p>Profil</p>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route ('adherents')}}">
                                    <i class="nc-icon nc-notes"></i>
                                    <p>Liste d'adherents</p>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route ('reunion')}}">
                                    <i class="nc-icon nc-notes"></i>
                                    <p>Liste de reunion</p>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route ('evenement')}}">
                                    <i class="nc-icon nc-notes"></i>
                                    <p>Liste d'evenements</p>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route ('caisse')}}">
                                    <i class="nc-icon nc-notes"></i>
                                    <p>Gestion de caisse</p>
                                </a>
                            </li>
                          
                            <li>
                                <a class="nav-link" href="{{route ('dons')}}">
                                    <i class="nc-icon nc-notes"></i>
                                    <p>Gestion des dons</p>
                                </a>
                            </li>
                          
                            <li>
                                <a class="nav-link" href="{{route ('projet')}}">
                                    <i class="nc-icon nc-notes"></i>
                                    <p>Liste de projet</p>
                                </a>
                            </li>
                          
                           
                        </ul>
                    </div>
                </div>
                
                <div class="main-panel">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                        <div class="container-fluid">
                         
                            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar burger-lines"></span>
                                <span class="navbar-toggler-bar burger-lines"></span>
                                <span class="navbar-toggler-bar burger-lines"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                                <ul class="nav navbar-nav mr-auto">
                                   
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nc-icon nc-zoom-split"></i>
                                            <span class="d-lg-block">&nbsp;recherche</span>
                                        </a>
                                    </li>
                                </ul>
                                <li class="nav-item d-flex align-items-center">
                                    <a href="{{route('admin.logout')}}" class="glyphicon glyphicon-log-ou">
                                        <i class="fa fa-user me-sm-1"></i>
                                        <span class="d-sm-inline d-none">Déconnexion</span>
                                    </a>
                                    </li>
                            </div>
                        </div>
                    </nav>
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
