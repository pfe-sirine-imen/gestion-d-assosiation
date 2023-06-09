@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
<div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 Align=Center>Page profil</h4>
                                       @if(session('status'))
                                        <div class="alert alert-success">
                                            {{session('status')}}
                                        </div>
                                        @endif  
                                    
                            </div>
                            <div class="content">
                                <form  action="/ajoutuser/trat" method="POST" >
                                    @csrf
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  style="color:#FF0000";>*  </label>
                                                <label>Adresse E-mail</label>
                                                <input type="text" class="form-control" value="{{ old('mail') }}"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="mail" placeholder="Adresse E-mail" >
                                            </div>
                                            @if($errors->any('mail'))
                                            <span class="text-danger"> {{$errors->first('mail')}} </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label  style="color:#FF0000";>*  </label>
                                                <label>Mot de passe</label>
                                                <input type="password" class="form-control" value="{{ old('pwd') }}" name="pwd"  pattern=".{6,}" placeholder="Mot de passe" >
                                            </div>
                                            @if($errors->any('pwd'))
                                            <span class="text-danger"> {{$errors->first('pwd')}} </span>
                                            @endif
                                        </div>
                                       
                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                
                                                <label>Nom</label>
                                                <input type="text" class="form-control" value="{{ old('nom') }}" name="nom" placeholder="nom" >
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               
                                                <label>Prenom</label>
                                                <input type="text" class="form-control" value="{{ old('prenom') }}" name="prenom" placeholder="prenom" >
                                           
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                
                                                <label>Domaine d'activités</label>
                                                <input type="text" class="form-control" value="{{ old('domaine_activite') }}" name="domaine_activite"  placeholder="Domaine d'activites" >
                                            
                                            </div>
                                        </div>
                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                               
                                                <label>Adresse</label>
                                                <input type="text" class="form-control"  placeholder="Adresse" >
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                
                                                <label>pays</label>
                                                <input type="text" class="form-control"  value="{{ old('pays') }}" name="pays" placeholder="Pays" >
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               
                                                <label>Ville</label>
                                                <input type="text" class="form-control" placeholder="Ville" >
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               
                                                <label> Code Postal</label>
                                                <input type="number" class="form-control"   min="0" placeholder="code postal">
                                            
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                              
                                                <label>Numero de téléphone</label>
                                                <input type="text" class="form-control" name="tel" value="{{ old('tel') }}"  min="0" placeholder="numeroo de telephone" >
                                           
                                            </div>
                                        </div>
                                    </div>

                                   

                                    <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>Modifier Profil</button>

                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
      
</div>
@endsection