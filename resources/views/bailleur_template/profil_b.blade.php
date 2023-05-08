@extends('bailleur_template.layouts.template_b')
@section('main-content')
<div class="container">
<div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Page profil</h4>  
                                        @if(session('status'))
                                        <div class="alert alert-success">
                                            {{session('status')}}
                                        </div>
                                        @endif  
                                         

                                      </div>
                              <div class="content">
                                <form action="{{ route ('ajouterbaill')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text"  name="nom" class="form-control" placeholder="Nom" >
                                            </div>
                                            @if($errors->any('nom'))
                                            <span class="text-danger"> {{$errors->first('nom')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Prenom</label>
                                                <input type="text"  name="prenom" class="form-control" placeholder="Prenom" >
                                            </div>
                                            @if($errors->any('prenom'))
                                            <span class="text-danger"> {{$errors->first('prenom')}} </span>
                                            @endif
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Adresse E-mail</label>
                                                <input type="text" name="mail" class="form-control" placeholder="Adresse E-mail" >
                                            </div>
                                            @if($errors->any('mail'))
                                            <span class="text-danger"> {{$errors->first('mail')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" name ="pwd" class="form-control" placeholder="Mot de passe" >
                                            </div>
                                            @if($errors->any('pwd'))
                                            <span class="text-danger"> {{$errors->first('pwd')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Denomination de lentreprise</label>
                                                <input type="text"  name="denomination" class="form-control" placeholder="Denomination de lentreprise" >
                                            </div>
                                            @if($errors->any('denomination'))
                                            <span class="text-danger"> {{$errors->first('denomination')}} </span>
                                            @endif
                                        </div>
                                    

                                    

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>pays</label>
                                                <input type="text" name="pays"  class="form-control" placeholder="pays" >
                                            </div>
                                            @if($errors->any('pays'))
                                            <span class="text-danger"> {{$errors->first('pays')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ville</label>
                                                <input type="text" class="form-control" placeholder="Ville" >
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Numero de telephone</label>
                                                <input type="text" class="form-control" placeholder="Numero de telephone" >
                                            </div>
                                        </div>
                                    </div>

                                   

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Modifier Profil</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
      
</div>
@endsection