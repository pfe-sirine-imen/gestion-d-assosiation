@extends('user_template.layouts.template')
@section('main-content')
<div class="card">
    <div class="header">
       <div class="col-md-8">
         <h4 class="title">Modifier  les opérations des caisses</h4>

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif  
        
             
        <form action="/update_caisse/trat"  method="POST" enctype="multipart/form-data">
            @csrf
                <input type="text" name="id" style="display:none;"  value="{{ $caisse->id }}">
                <div class="form-group">
                    <label>N CIN</label>
                    <input type="number"  class="form-control"  name ="cin" value="{{ $caisse->cin }}" placeholder="N CIN " >
                    @if($errors->any('cin'))
                    <span class="text-danger"> {{$errors->first('cin')}} </span>
                    @endif
                </div>  
                <div class="form-group">
                    <label>Nom  du projet</label>
                    <input type="text"  class="form-control"  name ="nom"  value="{{ $caisse->nom }}"  placeholder="Nom  du projet" >
                    @if($errors->any('nom'))
                    <span class="text-danger"> {{$errors->first('nom')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nom  de activite </label>
                    <input type="text"  class="form-control"  name ="activite" value="{{ $caisse->activite }}"  placeholder="Nom  du projet" >
                    @if($errors->any('activite'))
                    <span class="text-danger"> {{$errors->first('activite')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>La Responsable d'assosiation  </label>
                    <input type="text"  class="form-control"  name ="responsable" value="{{ $caisse->responsable }}"  placeholder="  la Responsable dassosiation" >
                    @if($errors->any('responsable'))
                    <span class="text-danger"> {{$errors->first('responsable')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label> Solde d'ouverture</label>
                    <input type="number"  class="form-control"  name ="solde" value="{{ $caisse->solde }}"  placeholder=" Solde douverture" >
                    @if($errors->any('solde'))
                    <span class="text-danger"> {{$errors->first('solde')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label> Bénéficiaire </label>
                    <input type="text"  class="form-control"  name ="benefice"  value="{{ $caisse->benefice }}"  placeholder=" Beneficiaire" >
                    @if($errors->any('benefice'))
                    <span class="text-danger"> {{$errors->first('benefice')}} </span>
                    @endif
                </div>
            
                <div class="col-md-12">
                    <div class="form-group">
                        <label>la  Date </label>
                        <input type="date"  name="date" value="{{ $caisse->date }}"   id="start"  value="aaaa-mm-jj" >
                        @if($errors->any('date'))
                        <span class="text-danger"> {{$errors->first('date')}} </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label> Heure de  operation de caisse</label>
                    <input type="time"  name="heure"  value="{{ $caisse->heure }}"  >
                    @if($errors->any('heure'))
                    <span class="text-danger"> {{$errors->first('heure')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>total des dépenses</label>
                    <input type="number"  class="form-control"  name ="total" value="{{ $caisse->total }}"  placeholder="total des depenses" >
                    @if($errors->any('total'))
                    <span class="text-danger"> {{$errors->first('total')}} </span>
                    @endif
                </div>  
          
               <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right">Modifier un operation de caisse </button>
               <br></br>
              <a href="/liste_caisse" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des opérations des caisses</a>
     
           
    
        </form>                       
            
        </div>
    </div>
</div>
@endsection