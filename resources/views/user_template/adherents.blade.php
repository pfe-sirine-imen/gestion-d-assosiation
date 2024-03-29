@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
<div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">formulaire d'inscription des adhérents</h4>
                          
                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                            @endif  
                                 
                            
                           
                            <div class="content">
                                <form action=" {{route ('ajouteradherents') }}" method="POST" enctype="multipart/form-data">
                                  
                                    @csrf
                                   

                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom </label>
                                                <input type="text" name ="nom" class="form-control" placeholder="Nom"  >
                                            </div>
                                            @if($errors->any('nom'))
                                            <span class="text-danger"> {{$errors->first('nom')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Prenom</label>
                                                <input type="text" name ="prenom" class="form-control" placeholder="Prenom" >
                                            </div>
                                            @if($errors->any('prenom'))
                                            <span class="text-danger"> {{$errors->first('prenom')}} </span>
                                            @endif
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Adresse E-mail</label>
                                                <input type="text" name ="mail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Adresse E-mail" >
                                            </div>
                                            @if($errors->any('mail'))
                                            <span class="text-danger"> {{$errors->first('mail')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" name ="pwd" class="form-control" pattern=".{6,}" placeholder="Mot de passe" >
                                            </div>
                                            @if($errors->any('pwd'))
                                            <span class="text-danger"> {{$errors->first('pwd')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>situation</label>
                                                <div>
                                                        <input type="radio" id="marié" name="situation" value="marié">
                                                        <label for="marié">marié</label>
                                                        </div>

                                                        <div>
                                                        <input type="radio" id="célibataire" name="situation" value="célibataire">
                                                        <label for="célibataire">célibataire</label>
                                                        </div>
                                                        <div>
                                                        <input type="radio" id="divorce" name="situation" value="divorce">
                                                        <label for="divorce">divorce</label>
                                                        </div>

                                                        <div>
                                                        <input type="radio" id="veuf" name="situation" value="veuf">
                                                        <label for="veuf">veuf</label>
                                                        </div>
                                                 </div>
                                            </div>
                                            @if($errors->any('situation'))
                                            <span class="text-danger"> {{$errors->first('situation')}} </span>
                                            @endif
                                        <div>
   
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date de naissance</label>
                                                <input type="date"  name="age" id="start"  value="aaaa-mm-jj" >
                                            </div>
                                            @if($errors->any('age'))
                                            <span class="text-danger"> {{$errors->first('age')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>niveau d'étude</label>
                                                <input type="text" class="form-control" name="niveau" placeholder="niveau d'étude" >
                                            @if($errors->any('niveau'))
                                            <span class="text-danger"> {{$errors->first('niveau')}} </span>
                                            @endif
                                            </div>
                                        </div>
                                        
                                    <div class="row">
                                    
                                    <div class="col-md-12">
                                         <label  class="form-select form-select-lg">pays</label>
                                            <select class="form-select form-select-lg"  name ="pays">
                                                <option>Tunisie</option>
                                                <option>France</option>
                                                <option>Maroc</option>
                                                <option>Qatar</option>
                                                <option>Algerie</option>
                                                <option>libya</option>
                                                <option>Égypte</option>
                                                <option>Iraq</option>
                                            </select>
                                       
                                        </div>
                                        @if($errors->any('pays'))
                                        <span class="text-danger"> {{$errors->first('pays')}} </span>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ville</label>
                                                <input type="text"  name ="capital" class="form-control" placeholder="Ville" >
                                            </div>
                                            @if($errors->any('capital'))
                                            <span class="text-danger"> {{$errors->first('capital')}} </span>
                                            @endif
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Code Postal</label>
                                                <input type="text"  name ="code" class="form-control" placeholder="Code postal" >
                                            </div>
                                            @if($errors->any('code'))
                                            <span class="text-danger"> {{$errors->first('code')}} </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Numero de téléphone</label>
                                                
                                                <input type="text" name ="tel"  class="form-control" placeholder="Numero de téléphone" >
                                            </div>
                                            @if($errors->any('tel'))
                                            <span class="text-danger"> {{$errors->first('tel')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Photos </label>
                                                <input type="file" name="photo"
                                                    id="avatar" name="avatar"
                                                    accept="image/png, image/jpeg">
                                            </div>
                                            @if($errors->any('photo'))
                                            <span class="text-danger"> {{$errors->first('photo')}} </span>
                                            @endif
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Une copie de la carte nationale d'identité</label>
                                                <input type="file" name="copie"
                                                    id="avatar" name="avatar"
                                                    accept="image/png, image/jpeg">
                                            </div>
                                            @if($errors->any('copie'))
                                            <span class="text-danger"> {{$errors->first('copie')}} </span>
                                            @endif
                                         </div>

                                    <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right">Ajouter Adherents</button><br></br>
                                    <a href="/liste/adherents" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a  liste des  Adherents</a>
                                    
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
      
</div>



@endsection