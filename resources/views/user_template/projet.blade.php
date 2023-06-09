@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 Align=Center>Gestion de projet</h4>
                            @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                            @endif  
                            
                </div>
                <div class="content">
                    <form  action="ajouter_projet/trat" method="POST" >
                        @csrf
                
                    <div class="col-md-12">
                        <div class="form-group">
                            <label  style="color:#FF0000";>*  </label>
                            <label>Nom du projet</label>
                            <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="Nom du projet" >
                        </div>
                        @if($errors->any('nom'))
                        <span class="text-danger"> {{$errors->first('nom')}} </span>
                        @endif
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label  style="color:#FF0000";>*  </label>
                            <label>L'objectif du projet</label>
                            <input type="text" class="form-control" value="{{ old('objectif') }}" name="objectif" placeholder="L'objectif du projet" >
                        </div>
                        @if($errors->any('objectif'))
                        <span class="text-danger"> {{$errors->first('objectif')}} </span>
                        @endif
                    </div>
                   
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label  style="color:#FF0000";>*  </label>
                            <label>la responsable du projet</label>
                            <input type="text" class="form-control" value="{{ old('responsable') }}" name="responsable" placeholder="Responsable du projet" >
                        </div>
                        @if($errors->any('responsable'))
                        <span class="text-danger"> {{$errors->first('responsable')}} </span>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label  style="color:#FF0000";>*  </label>
                            <label>la  Date debut  du projet</label>
                            <input type="date"  name="date_debut" value="{{ old('date_debut') }}" id="start"  value="aaaa-mm-jj" >
                         </div>
                         @if($errors->any('date_debut'))
                        <span class="text-danger"> {{$errors->first('date_debut')}} </span>
                        @endif
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label  style="color:#FF0000";>*  </label>
                            <label>la Date fin du projet</label>
                            <input type="date"  name="date_fin" value="{{ old('date_fin') }}" id="start"  value="aaaa-mm-jj" >
                         </div>
                         @if($errors->any('date_fin'))
                        <span class="text-danger"> {{$errors->first('date_fin')}} </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                        <div class="form-group">
                            <label  style="color:#FF0000";>*  </label>
                            <label>le montant de la dépense</label>
                            <input type="number" class="form-control" value="{{ old('montant') }}" min="0" name="montant" placeholder="le montant de la dépense" >
                        </div>
                        @if($errors->any('montant'))
                        <span class="text-danger"> {{$errors->first('montant')}} </span>
                        @endif
                </div>
                <div class="col-md-12">
                        <div class="form-group">
                            <label  style="color:#FF0000";>*  </label>
                            <label>l'état d'avancement du projet(%)</label>
                            <input type="number" class="form-control" min="0" value="{{ old('etat') }}" name="etat" placeholder="l'état d'avancement du projet" >
                        </div>
                        @if($errors->any('etat'))
                        <span class="text-danger"> {{$errors->first('etat')}} </span>
                        @endif
                </div>
                
                <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right">Ajouter un projet</button>
                </br>
                <a href="/liste_projet" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des projets</a>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
        

    </div>
</div>
      
</div>
@endsection