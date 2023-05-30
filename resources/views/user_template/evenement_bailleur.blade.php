@extends('user_template.layouts.template')
@section('main-content')

<div class="card">
    <div class="header">
       <div class="col-md-8">
      <h4 Align=Center>Formulaire  d'ajouter  des evenements (Bailleur de fond)</h4>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif  
                    
        <form action="/ajouter_eve_bailleur" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Titre de evenement</label>
                    <input type="text"  class="form-control"  name ="titre" placeholder="Titre de evenement" >
                    @if($errors->any('titre'))
                    <span class="text-danger"> {{$errors->first('titre')}} </span>
                    @endif
                </div>
                
                 
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Responsable de evenement</label>
                    <input type="text"  class="form-control"  name ="responsable" placeholder="Responsable de evenement" >
                    @if($errors->any('responsable'))
                    <span class="text-danger"> {{$errors->first('responsable')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Date debut de evenements</label>
                   
                    <input type="date"  name="date_debut" id="start"  value="aaaa-mm-jj" >
                    @if($errors->any('date_debut'))
                    <span class="text-danger"> {{$errors->first('date_debut')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Date fin de evenements</label>
                    <input type="date" name="date_fin"  id="start"  value="aaaa-mm-jj">
                    @if($errors->any('date_fin'))
                    <span class="text-danger"> {{$errors->first('date_fin')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Budget  de evenement</label>
                    <input type="number" name="budget" class="form-control" placeholder="Budget  de evenement" >
                    @if($errors->any('budget'))
                    <span class="text-danger"> {{$errors->first('budget')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>L'objectif  de evenement</label>
                    <input type="text"  class="form-control" name="objectif" placeholder="L'objectif  de evenement" >
                    @if($errors->any('objectif'))
                    <span class="text-danger"> {{$errors->first('objectif')}} </span>
                    @endif
                </div>

                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Lieu  de evenement</label>
                    <input type="text"  class="form-control" name="lieu" placeholder="Lieu de evenement" >
                    @if($errors->any('lieu'))
                    <span class="text-danger"> {{$errors->first('lieu')}} </span>
                    @endif
                </div>
                
                
                
                <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" > Ajouter un evenement </button>
                <br></br>
                <a href="/liste_evenement_bailleur" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des evenement</a>
            
        </form>                       
            
        </div>
    </div>
</div>

@endsection