@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
<div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Modifier l'inscription des adhérents</h4>
                          
                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                            @endif  
                                
                            
                           
                            <div class="content">
                                <form action="/update_adherents/trat" method="POST" enctype="multipart/form-data">
                                  
                                    @csrf
                                  <input type="text" name="id" style="display:none;" value="{{$adherents->id}}">
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" name ="nom" value="{{$adherents->nom}}" class="form-control" placeholder="Nom" >
                                            </div>
                                            @if($errors->any('nom'))
                                            <span class="text-danger"> {{$errors->first('nom')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Prenom</label>
                                                <input type="text" name ="prenom" value="{{$adherents->prenom}}" class="form-control" placeholder="Prenom" >
                                            </div>
                                            @if($errors->any('prenom'))
                                            <span class="text-danger"> {{$errors->first('prenom')}} </span>
                                            @endif
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Adresse E-mail</label>
                                                <input type="text" name ="mail" value="{{$adherents->mail}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Adresse E-mail" >
                                            </div>
                                            @if($errors->any('mail'))
                                            <span class="text-danger"> {{$errors->first('mail')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" name ="pwd" value="{{$adherents->pwd}}" pattern=".{6,}" class="form-control" placeholder="Mot de passe" >
                                            </div>
                                            @if($errors->any('pwd'))
                                            <span class="text-danger"> {{$errors->first('pwd')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>situation</label>
                                                <div>
                                                        <input type="radio" id="marié" name="situation" value="{{$adherents->situation}}">
                                                        <label for="marié">marié</label>
                                                        </div>

                                                        <div>
                                                        <input type="radio" id="célibataire" name="situation" value="{{$adherents->situation}}">
                                                        <label for="célibataire">célibataire</label>
                                                        </div>
                                                        <div>
                                                        <input type="radio" id="divorce" name="situation" value="{{$adherents->situation}}">
                                                        <label for="divorce">divorce</label>
                                                        </div>

                                                        <div>
                                                        <input type="radio" id="veuf" name="situation" value="{{$adherents->situation}}">
                                                        <label for="veuf">veuf</label>
                                                        </div>
                                                 </div>
                                                 @if($errors->any('situation'))
                                                <span class="text-danger"> {{$errors->first('situation')}} </span>
                                                @endif
                                            </div>
                                            
                                        <div>
   
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date de naissance</label>
                                                <input type="date"  name="age" id="start"  value="{{$adherents->age}}">
                                           
                                            </div>
                                            @if($errors->any('age'))
                                            <span class="text-danger"> {{$errors->first('age')}} </span>
                                            @endif
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>niveau d'étude</label>
                                                <input type="text" class="form-control" name="niveau" value="{{$adherents->niveau}}" placeholder="niveau d'étude" >
                                            </div>
                                            @if($errors->any('niveau'))
                                            <span class="text-danger"> {{$errors->first('niveau')}} </span>
                                            @endif
                                        </div>
                                        
                                    

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>pays</label>
                                                <input type="text" name ="pays" value="{{$adherents->pays}}" class="form-control" placeholder="pays" >
                                            </div>
                                            @if($errors->any('pays'))
                                            <span class="text-danger"> {{$errors->first('pays')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ville</label>
                                                <input type="text" name ="capital" value="{{$adherents->capital}}" class="form-control" placeholder="ville" >
                                            </div>
                                            @if($errors->any('capital'))
                                            <span class="text-danger"> {{$errors->first('capital')}} </span>
                                            @endif
                                        </div>
                                        
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Code Postal</label>
                                                <input type="text"  name ="code" value="{{$adherents->code}}" class="form-control" placeholder="Code postal" >
                                            </div>
                                            @if($errors->any('code'))
                                            <span class="text-danger"> {{$errors->first('code')}} </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Numero de téléphone</label>
                                                <input type="text" name ="tel" value="{{$adherents->tel}}" class="form-control" placeholder="Numero de téléphone" >
                                            </div>
                                            @if($errors->any('tel'))
                                            <span class="text-danger"> {{$errors->first('tel')}} </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Photos </label>
                                                <input type="file" name ="photo" value="{{$adherents->photo}}" accept="image/*">
                                            </div>
                                            @if($errors->any('photo'))
                                            <span class="text-danger"> {{$errors->first('photo')}} </span>
                                            @endif
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Une copie de la carte nationale d'identité</label>
                                                <input type="file" name ="copie" value="{{$adherents->copie}}" accept="image/*">
                                            </div>
                                            @if($errors->any('copie'))
                                            <span class="text-danger"> {{$errors->first('copie')}} </span>
                                            @endif
                                         </div>

                                    <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right">Modifier Adherents</button>
                                    <a href="/liste/adherents" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right">Revenir a  liste des  Adherents</a>
                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
      
</div>
@endsection