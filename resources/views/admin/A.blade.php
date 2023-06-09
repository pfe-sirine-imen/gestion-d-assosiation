@extends('admin.layouts.template')
@section('content')
<div class="container">
    <div class="content">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 Align=Center>formulaire d'inscription des adhérents</h4>
                              
                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{session('status')}}
                                    </div>
                                @endif  
                                     
                                
                               
                                <div class="content">
                                    <form action="/admin/A"  method="POST" enctype="multipart/form-data">
                                      
                                        @csrf
                                       
    
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label > Nom </label>
                                                    <input type="text" name ="nom" value="{{ old('nom') }}"  class="form-control" placeholder="Nom"  >
                                                </div>
                                                @if($errors->any('nom'))
                                                <span class="text-danger"> {{$errors->first('nom')}} </span>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Prenom</label>
                                                    <input type="text" name ="prenom"  value="{{ old('prenom') }}" class="form-control" placeholder="Prenom" >
                                                </div>
                                                @if($errors->any('prenom'))
                                                <span class="text-danger"> {{$errors->first('prenom')}} </span>
                                                @endif
                                            </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Adresse E-mail</label>
                                                    <input type="text" name ="mail" value="{{ old('mail') }}" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Adresse E-mail" >
                                                </div>
                                                @if($errors->any('mail'))
                                                <span class="text-danger"> {{$errors->first('mail')}} </span>
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Mot de passe</label>
                                                    <input type="password" name ="pwd" value="{{ old('pwd') }}" class="form-control" pattern=".{6,}" placeholder="Mot de passe" >
                                                </div>
                                                @if($errors->any('pwd'))
                                                <span class="text-danger"> {{$errors->first('pwd')}} </span>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
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
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Date de naissance</label>
                                                    <input type="date"  name="age" value="{{ old('age') }}" id="start"  value="aaaa-mm-jj" >
                                                </div>
                                                @if($errors->any('age'))
                                                <span class="text-danger"> {{$errors->first('age')}} </span>
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label class="form-select form-select-lg">niveau d'étude</label>
                                                    <select class="form-select form-select-lg"  name="niveau">
                                                        <option>niveau d'étude</option>
                                                        <option>- autre...</option>
                                                        <option>7éme</option>
                                                        <option>8éme</option>
                                                        <option>9éme</option>
                                                        <option>1ére secondaire</option>
                                                        <option>2éme secondaire</option>
                                                        <option>3éme secondaire</option>
                                                        <option>baccalauréat</option>
                                                        <option>1ére faculte</option>
                                                        <option>2éme faculte</option>
                                                        <option>3éme faculte</option>
                                                        <option>+ autre...</option>
                                                    </select>                                           
                                                     @if($errors->any('niveau'))
                                                        <span class="text-danger"> {{$errors->first('niveau')}} </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        <div class="row">
                                        
                                        <div class="col-md-12">
                                            <label  style="color:#FF0000";>*  </label>
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
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Ville</label>
                                                    <input type="text"  name ="capital" value="{{ old('capital') }}" class="form-control" placeholder="Ville" >
                                                </div>
                                                @if($errors->any('capital'))
                                                <span class="text-danger"> {{$errors->first('capital')}} </span>
                                                @endif
                                            </div>
                                            
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Code Postal</label>
                                                    <input type="text"  name ="code" value="{{ old('code') }}" class="form-control" placeholder="Code postal" >
                                                </div>
                                                @if($errors->any('code'))
                                                <span class="text-danger"> {{$errors->first('code')}} </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Numero de téléphone</label>
                                                    
                                                    <input type="text" name ="tel" value="{{ old('tel') }}" class="form-control" placeholder="Numero de téléphone" >
                                                </div>
                                                @if($errors->any('tel'))
                                                <span class="text-danger"> {{$errors->first('tel')}} </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label>Photos </label>
                                                    <input type="file" name="photo"  value="{{ old('photo') }}"
                                                      
                                                        accept="image/png, image/jpeg">
                                                </div>
                                                @if($errors->any('photo'))
                                                <span class="text-danger"> {{$errors->first('photo')}} </span>
                                                @endif
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  style="color:#FF0000";>*  </label>
                                                    <label> Une copie de la carte nationale d'identité</label>
                                                    <input type="file" name="copie"
                                                            value="{{ old('copie') }}"
                                                        accept="image/png, image/jpeg">
                                                </div>
                                                @if($errors->any('copie'))
                                                <span class="text-danger"> {{$errors->first('copie')}} </span>
                                                @endif
                                             </div>
                                    <div class="centre">
                                        <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right">Ajouter Adherents</button>
                                        
                                        <a href="/listeA" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a  liste des  Adherents</a>
                                    </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        
    
                    </div>
                </div>
          
    </div>
    
    
    
@endsection