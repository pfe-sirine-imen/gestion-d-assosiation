@extends('admin.layouts.template')
@section('content')
<div class="card">
    <div class="header">
       <div class="col-md-8">
      <h4 Align=Center>Formulaire pour Modifier  des evenements</h4>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif  
                    
        <form action="/admin/update_E/trat" method="POST"  enctype="multipart/form-data">
              @csrf
              <input type="text" name="id" style="display:none;" value="{{$event->id}}">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Titre de evenement</label>
                    <input type="text"  class="form-control"  name ="titre" value="{{$event->titre}}"  placeholder="Titre de evenement" >
                    @if($errors->any('titre'))
                    <span class="text-danger"> {{$errors->first('titre')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Responsable de evenement</label>
                    <input type="text"  class="form-control"  name ="responsable" value="{{$event->responsable}}" placeholder="Responsable de evenement" >
                    @if($errors->any('responsable'))
                    <span class="text-danger"> {{$errors->first('responsable')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Date debut de evenements</label>
                    <input type="date"  name="date_debut" id="start" value="{{$event->date_debut}}"  value="aaaa-mm-jj" >
                    @if($errors->any('date_debut'))
                    <span class="text-danger"> {{$errors->first('date_debut')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Date fin de evenements</label>
                    <input type="date" name="date_fin"  id="start" value="{{$event->date_fin}}" value="aaaa-mm-jj">
                    @if($errors->any('date_fin'))
                    <span class="text-danger"> {{$errors->first('date_fin')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>L'objectif  de evenement</label>
                    <input type="text" name="objectif" value="{{$event->objectif}}" class="form-control"  placeholder="L'objectif  de evenement" >
                    @if($errors->any('objectif'))
                    <span class="text-danger"> {{$errors->first('objectif')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>lieu  de evenement</label>
                    <input type="text"  class="form-control"  name="lieu" value="{{$event->lieu}}" placeholder="lieu   de evenement" >
                    @if($errors->any('lieu'))
                    <span class="text-danger"> {{$errors->first('lieu')}} </span>
                    @endif
                </div>
                
                <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" > Modifier un evenement </button>
              
                <a href="/listeE" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des evenement</a>
            
        </form>                       
            
        </div>
    </div>
</div>
@endsection