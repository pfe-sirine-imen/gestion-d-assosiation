@extends('bailleur_template.layouts.template_b')
@section('main-content')
<div class="container">
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 Align=Center>Coordonnée de chef de suivi et évaluation</h4>  
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
                                    <label  style="color:#FF0000";>*  </label>
                                    <label>Nom</label>
                                    <input type="text"  name="nom" class="form-control" placeholder="Nom" >
                                </div>
                                @if($errors->any('nom'))
                                <span class="text-danger"> {{$errors->first('nom')}} </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  style="color:#FF0000";>*  </label>
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
                                    <label  style="color:#FF0000";>*  </label>
                                    <label>Adresse E-mail</label>
                                    <input type="text" name="mail" class="form-control" placeholder="Adresse E-mail" >
                                </div>
                                @if($errors->any('mail'))
                                <span class="text-danger"> {{$errors->first('mail')}} </span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label  style="color:#FF0000";>*  </label>
                                    <label>Mot de passe</label>
                                    <input type="password" name ="pwd" class="form-control" placeholder="Mot de passe" >
                                </div>
                                @if($errors->any('pwd'))
                                <span class="text-danger"> {{$errors->first('pwd')}} </span>
                                @endif
                            </div>
                           
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label  style="color:#FF0000";>*  </label>
                                    <label>Nom de projet</label>
                                    <input type="text" name="pays" class="form-control" placeholder="Nom de projet" >
                                </div>
                                @if($errors->any('pays'))
                                <span class="text-danger"> {{$errors->first('pays')}} </span>
                                @endif
                            </div>  

                        <div class="col-md-12">
                            <div class="form-group">
                                <label  style="color:#FF0000";>*  </label>
                                <label>Budget</label>
                                <input type="number" name="denomination" class="form-control" placeholder="Budget" >
                            </div>
                            @if($errors->any('denomination'))
                                <span class="text-danger"> {{$errors->first('denomination')}} </span>
                            @endif
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