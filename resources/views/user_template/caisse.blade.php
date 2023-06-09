@extends('user_template.layouts.template')
@section('main-content')
<div class="card">
    <div class="header">
       <div class="col-md-8">
         <h4 Align=Center>Gestion des opérations des caisses</h4>

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif  
        
             
        <form action="/ajouter_caisse"  method="POST" enctype="multipart/form-data">
          @csrf
              
              <div class="form-group">
                <label  style="color:#FF0000";>*  </label>
                <label>N CIN </label>
                <input type="number"  class="form-control"  value="{{ old('cin') }}" min="0"  name ="cin" placeholder="N CIN " >
                @if($errors->any('cin'))
                    <span class="text-danger"> {{$errors->first('cin')}} </span>
                @endif
               </div>  
            <div class="form-group">
                <label  style="color:#FF0000";>*  </label>
                <label>Nom  du projet</label>
                <input type="text"  class="form-control"  name ="nom" value="{{ old('nom') }}" placeholder="Nom  du projet" >
                @if($errors->any('nom'))
                    <span class="text-danger"> {{$errors->first('nom')}} </span>
                @endif
            </div>
            <div class="form-group">
                <label  style="color:#FF0000";>*  </label>
                <label>Nom  de activite </label>
                <input type="text"  class="form-control"  name ="activite" value="{{ old('activite') }}" placeholder="Nom  du projet" >
                @if($errors->any('activite'))
                    <span class="text-danger"> {{$errors->first('activite')}} </span>
                @endif
            </div>
            <div class="form-group">
                <label  style="color:#FF0000";>*  </label>
                <label>La Responsable d'assosiation  </label>
                <input type="text"  class="form-control"  name ="responsable" value="{{ old('responsable') }}"  placeholder="  la Responsable d'assosiation" >
                @if($errors->any('responsable'))
                    <span class="text-danger"> {{$errors->first('responsable')}} </span>
                @endif
            </div>
            
            <div class="form-group">
                <label  style="color:#FF0000";>*  </label>
                <label> Bénéficiaire </label>
                <input type="text"  class="form-control"  name ="benefice" value="{{ old('benefice') }}" placeholder=" Bénéficiaire" >
                @if($errors->any('benefice'))
                    <span class="text-danger"> {{$errors->first('benefice')}} </span>
                @endif
            </div>
           
            <div class="col-md-12">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>la  Date </label>
                    <input type="date"  name="date" id="start" value="{{ old('date') }}" value="aaaa-mm-jj" >
                    @if($errors->any('date'))
                    <span class="text-danger"> {{$errors->first('date')}} </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label  style="color:#FF0000";>*  </label>
                <label> Heure de  operation de caisse </label>
                <input type="time"  name="heure" value="{{ old('heure') }}" >
                @if($errors->any('heure'))
                    <span class="text-danger"> {{$errors->first('heure')}} </span>
                @endif
            </div>
            <div class="form-group">
                <label  style="color:#FF0000";>*  </label>
                <label>total des dépenses</label>
                <input type="number"  class="form-control" min="0" value="{{ old('total') }}" name ="total" placeholder="total des dépenses" >
                @if($errors->any('total'))
                    <span class="text-danger"> {{$errors->first('total')}} </span>
                @endif
            </div>  
          
               <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right">Ajouter un operation de caisse </button>
               <br></br>
              <a href="/liste_caisse" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des opérations des caisses</a>
     
           
    
        </form>                       
            
        </div>
    </div>
</div>
@endsection