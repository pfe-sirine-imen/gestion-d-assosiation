@extends('admin.layouts.template')
@section('content')
<div class="container-fluid py-4">
<div class="row">



<div class="row mb-4">
  <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Les comptes d'utilisateurs</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-check text-info" aria-hidden="true"></i>
              <span class="font-weight-bold ms-1"></span> fait ce mois-ci
            </p>
          </div>
          
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom d'assosition</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Membres</th>
              

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="{{asset('dashboard/assets/img/im1.jpeg')}}" class="avatar avatar-sm me-3" alt="xd">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Assosiation feminine Nour </h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="avatar-group mt-2">
                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Wafi Sabrine">
                      <img src="{{asset('home/img/faces/im1.jpg')}}" alt="team1">
                    </a>
                    
                  </div>
                </td>
               
                </tr>
              </tr>
              
               
                    
            </tbody>
          </table>
        </div>

        
      </div>


    </div>
    
  </div>




  
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