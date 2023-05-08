@extends('user_template.layouts.template')
@section('main-content')
<div class="card">
    <div class="header">
       <div class="col-md-8">
      <h4 class="title">Modifier  des reunions</h4>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif  
                 
        <form action="/update_reunion/trat" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="text" name="id" style="display:none;" value="{{$reunions->id}}">
                <div class="form-group">
                    <label>Titre de reunion</label>
                    <input type="text"  class="form-control"  name ="titre" value="{{$reunions->titre}}" placeholder="Titre de reunion" >
                    @if($errors->any('titre'))
                    <span class="text-danger"> {{$errors->first('titre')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Les listes d’invités des reunions</label>
                    <div>
                        <input type="checkbox"  name="invite"  value="{{$reunions->invite}}" checked>
                        <label for="Le président de l'association">Le président de l'association</label>
                        </div>
                        <div>
                        <input type="checkbox"  name="invite" value="{{$reunions->invite}}">
                        <label for="bailleur de fond">bailleur de fond</label>
                        </div>
                        <div>
                        <input type="checkbox"  name="invite" value="{{$reunions->invite}}">
                        <label for="Horns">Horns</label>
                        </div>
                        <div>
                        <input type="checkbox"  name="invite" value="{{$reunions->invite}}">
                        <label for="Horns">Horns</label>
                        </div>
                        @if($errors->any('invite'))
                        <span class="text-danger"> {{$errors->first('invite')}} </span>
                        @endif
                </div>
                <div class="form-group">
                    <label>E-mail(s) pour invités de reunion</label>
                    <input type="text"  class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name ="mail" value="{{$reunions->mail}}" placeholder="E-mail(s) pour invités de reunion" >
                    @if($errors->any('mail'))
                    <span class="text-danger"> {{$errors->first('mail')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label> Date de reunion</label>
                    <input type="date"  name="date" id="start" value="{{$reunions->date}}"  value="aaaa-mm-jj" >
                    @if($errors->any('date'))
                    <span class="text-danger"> {{$errors->first('date')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label> Heure de  reunion </label>
                    <input type="time" id="appt" name="heure" value="{{$reunions->heure}}" min="09:00" max="18:00" required>
                    @if($errors->any('heure'))
                    <span class="text-danger"> {{$errors->first('heure')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>place de reunion </label>
                    <input type="text"  name="place" class="form-control" value="{{$reunions->place}}" placeholder="espace de reunion" >
                    @if($errors->any('place'))
                    <span class="text-danger"> {{$errors->first('place')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Compte rendu  de reunion </label>
                    <input type="file"  name="rendu" value="{{$reunions->rendu}}" accept="image/*">
                    @if($errors->any('rendu'))
                    <span class="text-danger"> {{$errors->first('rendu')}} </span>
                    @endif
                </div>
                
                <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" > Modifier un reunion </button>
                <br></br>
                <a href="/liste_reunion" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des reunion</a>
            
        </form>                       
            
        </div>
    </div>
</div>
@endsection