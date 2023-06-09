@extends('user_template.layouts.template')
@section('main-content')
<div class="card">
    <div class="header">
       <div class="col-md-8">
      <h4 Align=Center>Formulaire  d'ajouter  des evenements d'assosiation</h4>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif  
                   
        <form action="/ajouter_eve" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Titre de evenement</label>
                    <input type="text"  class="form-control" name="titre" value="{{ old('titre') }}" placeholder="Titre de evenement" >
                    @if($errors->any('titre'))
                    <span class="text-danger"> {{$errors->first('titre')}} </span>
                    @endif
                </div>
                
                 
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Responsable de evenement</label>
                    <input type="text"  class="form-control"  name ="responsable" value="{{ old('responsable') }}" placeholder="Responsable de evenement" >
                    @if($errors->any('responsable'))
                    <span class="text-danger"> {{$errors->first('responsable')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Date debut de evenements</label>
                   
                    <input type="date"  name="date_debut" id="start" value="{{ old('date_debut') }}"  value="aaaa-mm-jj" >
                    @if($errors->any('date_debut'))
                    <span class="text-danger"> {{$errors->first('date_debut')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Date fin de evenements</label>
                    <input type="date" name="date_fin"  id="start" value="{{ old('date_fin') }}" value="aaaa-mm-jj">
                    @if($errors->any('date_fin'))
                    <span class="text-danger"> {{$errors->first('date_fin')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>L'objectif  de evenement</label>
                    <textarea rows="4" cols="80" class="form-control" placeholder="L'objectif  de evenement" value="{{ old('objectif') }}"  name="objectif"></textarea>
                    @if($errors->any('objectif'))
                    <span class="text-danger"> {{$errors->first('objectif')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Lieu  de evenement</label>
                    <input type="text"  class="form-control" name="lieu" value="{{ old('lieu') }}" placeholder="Lieu de evenement" >
                    @if($errors->any('lieu'))
                    <span class="text-danger"> {{$errors->first('lieu')}} </span>
                    @endif
                </div>
                <div class="form-group">
                <img img="right" width=30% height=30% class=" btn-fill pull-right" src="{{asset('home/img/event.jpg')}}"/>
                </div>
                <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" > Ajouter un evenement </button>
                <br></br>
                <a href="/liste_evenement" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des evenement</a>
            
        </form>                       
            
        </div>
    </div>
</div>

@endsection
