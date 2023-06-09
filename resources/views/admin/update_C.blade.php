@extends('admin.layouts.template')
@section('content')
<div class="card">
    <div class="header">
       <div class="col-md-8">
         <h4 Align=Center>Modifier  les opérations des caisses</h4>

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif  
        
             
        <form action="/admin/update_C/trat"  method="POST" enctype="multipart/form-data">
            @csrf
                <input type="text" name="id" style="display:none;"  value="{{ $caisses->id }}">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>N CIN</label>
                    <input type="number"  class="form-control"  name ="cin" value="{{ $caisses->cin }}" placeholder="N CIN " >
                    @if($errors->any('cin'))
                    <span class="text-danger"> {{$errors->first('cin')}} </span>
                    @endif
                </div>  
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Nom  du projet</label>
                    <input type="text"  class="form-control"  name ="nom"  value="{{ $caisses->nom }}"  placeholder="Nom  du projet" >
                    @if($errors->any('nom'))
                    <span class="text-danger"> {{$errors->first('nom')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>Nom  de activite </label>
                    <input type="text"  class="form-control"  name ="activite" value="{{ $caisses->activite }}"  placeholder="Nom  du projet" >
                    @if($errors->any('activite'))
                    <span class="text-danger"> {{$errors->first('activite')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>La Responsable d'assosiation  </label>
                    <input type="text"  class="form-control"  name ="responsable" value="{{ $caisses->responsable }}"  placeholder="  la Responsable dassosiation" >
                    @if($errors->any('responsable'))
                    <span class="text-danger"> {{$errors->first('responsable')}} </span>
                    @endif
                </div>
                
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label> Bénéficiaire </label>
                    <input type="text"  class="form-control"  name ="benefice"  value="{{ $caisses->benefice }}"  placeholder=" Beneficiaire" >
                    @if($errors->any('benefice'))
                    <span class="text-danger"> {{$errors->first('benefice')}} </span>
                    @endif
                </div>
            
                <div class="col-md-12">
                    <div class="form-group">
                        <label  style="color:#FF0000";>*  </label>
                        <label>la  Date </label>
                        <input type="date"  name="date" value="{{ $caisses->date }}"   id="start"  value="aaaa-mm-jj" >
                        @if($errors->any('date'))
                        <span class="text-danger"> {{$errors->first('date')}} </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label> Heure de  operation de caisse</label>
                    <input type="time"  name="heure"  value="{{ $caisses->heure }}"  >
                    @if($errors->any('heure'))
                    <span class="text-danger"> {{$errors->first('heure')}} </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>total des dépenses</label>
                    <input type="number"  class="form-control"  name ="total" value="{{ $caisses->total }}"  placeholder="total des depenses" >
                    @if($errors->any('total'))
                    <span class="text-danger"> {{$errors->first('total')}} </span>
                    @endif
                </div>  
          
               <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right">Modifier un operation de caisse </button>
              
              <a href="/listeC" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des opérations des caisses</a>
     
           
    
        </form>                       
            
        </div>
    </div>
</div>
@endsection