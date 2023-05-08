@extends('user_template.layouts.template')
@section('main-content')

<div class="card mb-3">
<div class="card card-user">
<div class="card-image">
<img src="{{asset('home/img/img4.jpg')}}" alt="">
</div>

<div class="card-body">
  <div class="author">
    <a href="#">
        <img class="avatar border-gray" src="{{asset('home/img/faces/im1.jpg')}}" alt="...">
        <h5 class="title">WAFI Sabrine</h5>
    </a>
    
</div>
<p class="description text-center">
جمعية نسائية تهدف الى:

    <br> * المحافظة على مكتسبات المراة
    
</p>

</div>

</div>
</div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="{{asset('home/img/img4.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">Le evenement</h4>
        <p class="card-text">Un événement revêt de multiples objectifs : financer une association, faire connaitre les activités de l’association loi 1901, recruter des volontaires...</p>
        <a href="/liste_evenement" class="btn btn-primary " style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Voir</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{asset('home/img/projet.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">Le projet</h4>
        <p class="card-text">Le projet associatif est le résultat d'une réflexion collective sur ce que souhaitent réaliser les membres de l'association et sur la manière dont ils veulent le faire.</p>
        <a href="/liste_projet" class="btn btn-primary "  style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >voir</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{asset('home/img/don.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">le Stock de don</h4>
        <p class="card-text">Un don est un don fait par une personne physique ou morale à des fins caritatives.</p>
        <a href="/liste_don" class="btn btn-primary " style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >voir</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{asset('home/img/caisse.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">Le operation de caisse</h4>
        <p class="card-text"> consiste à suivre les transactions en espèces réalisées dans votre assosiation .</p>
        <a href="/liste_caisse" class="btn btn-primary "  style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >voir </a>
    </div>
    </div>
  </div>
</div>



@endsection