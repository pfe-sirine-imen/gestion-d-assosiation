@extends('admin.layouts.template')
@section('content')
<div class="container-fluid py-4">
<div class="row">

  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Nombre  d'utilisateur</p>
            <h4 class="mb-0">{{$totalUser}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <a href="{{route('compte_user')}}" class="text-black">voir</a>
        
        </div>

      </div>
      <hr>
    </div>
 


    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Nombre  des chef de suivi</p>
            <h4 class="mb-0">{{$totalBailleur}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <a href="{{route('compte_bailleur')}}" class="text-black">voir</a>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Nombre  des adhérents</p>
            <h4 class="mb-0">{{ $totalAdherent}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <a href="/listeA" class="text-black">voir</a>
        </div>
      </div>
    </div>
  
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Nombre  des évenements</p>
            <h4 class="mb-0">{{$totalAdherent}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <a href="/listeE" class="text-black">voir</a>
        </div>
      </div>
    </div>
  
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Nombre  des Réunions</p>
            <h4 class="mb-0">{{$totalReunion}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <a href="/listeR" class="text-black">voir</a>
        </div>
      </div>
    </div>
  

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Nombre  des dons</p>
            <h4 class="mb-0">{{$totalDon}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <a href="/listeD" class="text-black">voir</a>
        </div>
      </div>
    </div>
  
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Nombre  des caisses</p>
            <h4 class="mb-0">{{$totalCaisse}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <a href="/listeC" class="text-black">voir</a>
        </div>
      </div>
    </div>
 
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Nombre  des projets</p>
            <h4 class="mb-0">{{$totalProjet}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <a href="/listeP" class="text-black">voir</a>
        </div>
      </div>
    </div>
    <hr>

  <div class="col-lg-4 col-md-6">
    <div class="card h-100">
      <div>Menu </h6>
        
      </div>
      <div class="card-body p-3">
        <div class="timeline timeline-one-side">
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="material-icons text-success text-gradient">person</i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Adhérent</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">adhérents d'une association</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="material-icons text-danger text-gradient">code</i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Réunion</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Réunion d'une association</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="material-icons text-info text-gradient">Et</i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Evénement</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Evenement d'une association</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="material-icons text-warning text-gradient">C</i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Caisse</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Operation de caisse d'une association</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="material-icons text-primary text-gradient">key</i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Don</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Don d'une association</p>
            </div>
          </div>
          <div class="timeline-block">
            <span class="timeline-step">
              <i class="material-icons text-dark text-gradient">payments</i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Projet</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Projet d'une association</p>
            </div>
          </div>
        </div>
        
      </div>

      
    </div>
  </div>
</div>
</div>
</div>
@endsection