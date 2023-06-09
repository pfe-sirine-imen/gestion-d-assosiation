@extends('admin.layouts.template')
@section('content')
<div class="container">
    <div class="content">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 Align=Center>Ajouter compte d'utilisateur</h4>
                                           @if(session('status'))
                                            <div class="alert alert-success">
                                                {{session('status')}}
                                            </div>
                                            @endif  
                                        
                                </div>
                                <div class="content">
                                    <form  action="/admin/compte_user" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Adresse E-mail</label>
                                                    <input type="text" class="form-control" value="{{ old('mail') }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="mail" placeholder="Adresse E-mail" >
                                                </div>
                                                @if($errors->any('mail'))
                                                <span class="text-danger"> {{$errors->first('mail')}} </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label  style="color:#FF0000";>*  </label>
                                                    <label>Mot de passe</label>
                                                    <input type="password" class="form-control" value="{{ old('pwd') }}"  name="pwd"  pattern=".{6,}" placeholder="Mot de passe" >
                                                </div>
                                                @if($errors->any('pwd'))
                                                <span class="text-danger"> {{$errors->first('pwd')}} </span>
                                                @endif
                                            </div>
                                           
                                        
    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="nom" >
                                                @if($errors->any('nom'))
                                                <span class="text-danger"> {{$errors->first('nom')}} </span>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Prenom</label>
                                                    <input type="text" class="form-control" value="{{ old('prenom') }}" name="prenom" placeholder="prenom" >
                                                @if($errors->any('prenom'))
                                                <span class="text-danger"> {{$errors->first('prenom')}} </span>
                                                @endif
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Domaine d'activités</label>
                                                    <input type="text" class="form-control" value="{{ old('domaine_activite') }}" name="domaine_activite"  placeholder="Domaine d'activites" >
                                                @if($errors->any('domaine_activite'))
                                                <span class="text-danger"> {{$errors->first('domaine_activite')}} </span>
                                                @endif
                                                </div>
                                            </div>
                                        
    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Adresse</label>
                                                    <input type="text" class="form-control"  placeholder="Adresse" >
                                                
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>pays</label>
                                                    <input type="text" class="form-control" value="{{ old('pays') }}" name="pays" placeholder="Pays" >
                                                @if($errors->any('pays'))
                                                <span class="text-danger"> {{$errors->first('pays')}} </span>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Ville</label>
                                                    <input type="text" class="form-control" placeholder="Ville" >
                                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label> Code Postal</label>
                                                    <input type="number" class="form-control" min="0" placeholder="code postal">
                                                
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Numero de téléphone</label>
                                                    <input type="text" class="form-control" value="{{ old('tel') }}" min="0"  name="tel"  placeholder="numeroo de telephone" >
                                                @if($errors->any('tel'))
                                                <span class="text-danger"> {{$errors->first('tel')}} </span>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
    
                                       
    
                                        <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>Ajouter compte de utilisateur</button>
    
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
    
                    </div>
                </div>
          
    </div>
@endsection