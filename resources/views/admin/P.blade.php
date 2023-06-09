@extends('admin.layouts.template')
@section('content')
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
                        <form  action="/admin/P" method="POST" >
                            @csrf
                    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label  style="color:#FF0000";>*  </label>
                                <label>Nom du projet</label>
                                <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" placeholder="Nom du projet" >
                            </div>
                            @if($errors->any('nom'))
                            <span class="text-danger"> {{$errors->first('nom')}} </span>
                            @endif
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label  style="color:#FF0000";>*  </label>
                                <label>L'objectif du projet</label>
                                <input type="text" class="form-control" name="objectif"  value="{{ old('objectif') }}" placeholder="L'objectif du projet" >
                            </div>
                            @if($errors->any('objectif'))
                            <span class="text-danger"> {{$errors->first('objectif')}} </span>
                            @endif
                        </div>
                       
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label  style="color:#FF0000";>*  </label>
                                <label>la responsable du projet</label>
                                <input type="text" class="form-control" name="responsable" value="{{ old('responsable') }}" placeholder="Responsable du projet" >
                            </div>
                            @if($errors->any('responsable'))
                            <span class="text-danger"> {{$errors->first('responsable')}} </span>
                            @endif
                        </div>
    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label  style="color:#FF0000";>*  </label>
                                <label>la  Date debut  du projet</label>
                                <input type="date"  name="date_debut" id="start" value="{{ old('date_debut') }}" value="aaaa-mm-jj" >
                             </div>
                             @if($errors->any('date_debut'))
                            <span class="text-danger"> {{$errors->first('date_debut')}} </span>
                            @endif
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label  style="color:#FF0000";>*  </label>
                                <label>la Date fin du projet</label>
                                <input type="date"  name="date_fin" id="start" value="{{ old('date_fin') }}" value="aaaa-mm-jj" >
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
                                <input type="number" class="form-control" min="0" value="{{ old('montant') }}" name="montant" placeholder="le montant de la dépense" >
                            </div>
                            @if($errors->any('montant'))
                            <span class="text-danger"> {{$errors->first('montant')}} </span>
                            @endif
                    </div>
                    <div class="col-md-12">
                            <div class="form-group">
                                <label  style="color:#FF0000";>*  </label>
                                <label>l'état d'avancement du projet(%)</label>
                                <input type="number" class="form-control" value="{{ old('etat') }}" min="0" name="etat" placeholder="l'état d'avancement du projet" >
                            </div>
                            @if($errors->any('etat'))
                            <span class="text-danger"> {{$errors->first('etat')}} </span>
                            @endif
                    </div>
                    
                    <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right">Ajouter un projet</button>
               
                    <a href="/listeP" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des projets</a>
                    
                </form>
            </div>
        </div>
    </div>
            
    
        </div>
    </div>
          
    </div>
@endsection