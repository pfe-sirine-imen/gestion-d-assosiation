@extends('user_template.layouts.template')
@section('main-content')
<div class="card">
    <div class="header">
       <div class="col-md-8">
      <h4 Align=Center>Gestion des stocks des dons</h4>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif  
                    
        <form action="ajouter_don/trat" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="col-md-12">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label> le type du don </label>
                    <input type="text" name ="type" value="{{ old('type') }}" class="form-control" placeholder=" le type du don " >
                    @if($errors->any('type'))
                    <span class="text-danger"> {{$errors->first('type')}} </span>
                    @endif
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>la destination du don</label>
                    <input type="text" name ="destination" value="{{ old('destination') }}" class="form-control" placeholder="la destination de dons" >
                    @if($errors->any('destination'))
                    <span class="text-danger"> {{$errors->first('destination')}} </span>
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>La nature du don </label>
                    <input type="text" name ="nature" value="{{ old('nature') }}" class="form-control" placeholder="La nature du don " >
                    @if($errors->any('nature'))
                    <span class="text-danger"> {{$errors->first('nature')}} </span>
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>L’identité du donateur (Optionnel) </label>
                    <input type="text" name ="donateur" value="{{ old('donateur') }}" class="form-control" placeholder="L’identité du donateur " >
                
                    <label>  (Saisissez un nom, une adresse email ou un numéro ,Si le donateur le veut)</label>
                    
                </div>
            </div>
            
            
           
            <div class="form-group">
              
                <label> La date du versement</label>
                <input type="date"  name="date" id="start" value="{{ old('date') }}"  value="aaaa-mm-jj" >
               
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    
                    <label> Le montant du don</label>
                    <input type="number"  name="montant" value="{{ old('montant') }}" id="montant" min="0"  placeholder="Le montant du don" ><label> DT</label>
                   
                </div>
            </div>  
            <div class="col-md-12">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>A quel Bailleur</label>
                    <input type="text" name ="bailleur_id" value="{{ old('bailleur_id') }}" class="form-control" placeholder="A quel Bailleur" >
                    @if($errors->any('bailleur_id'))
                    <span class="text-danger"> {{$errors->first('bailleur_id')}} </span>
                    @endif
                </div>
            </div>
                <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" > Ajouter un don </button>
                <br>
                <a href="/liste_don" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des stocks des dons</a>
            
        </form>                       
            
        </div>
    </div>
</div>
@endsection