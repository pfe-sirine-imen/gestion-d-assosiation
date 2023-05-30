@extends('user_template.layouts.template')
@section('main-content')
<div class="card">
    <div class="header">
       <div class="col-md-8">
      <h4 Align=Center> Modifier les stocks des dons</h4>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif  
                   
        <form action="/update_don/trat" method="POST" enctype="multipart/form-data">
              @csrf
                <input type="text" name="id" style="display:none;" value="{{ $dons->id }}">
            <div class="col-md-12">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label> le type du don </label>
                    <input type="text" name ="type" value="{{ $dons->type }}" class="form-control" placeholder=" le type du don " >
                </div>
                @if($errors->any('type'))
                <span class="text-danger"> {{$errors->first('type')}} </span>
                @endif
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>la destination du don</label>
                    <input type="text" name ="destination" value="{{ $dons->destination }}" class="form-control" placeholder="la destination de dons" >
                </div>
                @if($errors->any('destination'))
                <span class="text-danger"> {{$errors->first('destination')}} </span>
                @endif
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label>La nature du don </label>
                    <input type="text" name ="nature" value="{{ $dons->nature }}" class="form-control" placeholder="La nature du don " >
                </div>
                @if($errors->any('nature'))
                <span class="text-danger"> {{$errors->first('nature')}} </span>
                @endif
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>L’identité du donateur (Optionnel) </label>
                    <input type="text" name ="donateur" value="{{ $dons->donateur }}" class="form-control" placeholder="L’identité du donateur " >
                    <label>  (Saisissez un nom, une adresse email ou un numéro ,Si le donateur le veut)</label>
                </div>
                @if($errors->any('donateur'))
                <span class="text-danger"> {{$errors->first('donateur')}} </span>
                @endif
            </div>
            
           
           
            <div class="form-group">
                <label  style="color:#FF0000";>*  </label>
                <label> La date du versement</label>
                <input type="date"  name="date" value="{{ $dons->date }}" id="start"  value="aaaa-mm-jj" >
                @if($errors->any('date'))
                <span class="text-danger"> {{$errors->first('date')}} </span>
                @endif
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label  style="color:#FF0000";>*  </label>
                    <label> Le montant du don</label>
                    <input type="number"  name="montant" id="montant" value="{{ $dons->montant }}" placeholder="Le montant du don" > <label> DT</label>
                </div>
                @if($errors->any('montant'))
                <span class="text-danger"> {{$errors->first('montant')}} </span>
                @endif
            </div>  
                <button type="submit" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" > Modifier un don </button>
                <br></br>
                <a href="/liste_don" style="background-color:#A569BD ; border-color:#A569BD ; color:white" class="btn btn-info btn-fill pull-right" >Revenir a liste des stocks des dons</a>
            
        </form>                       
            
        </div>
    </div>
</div>
@endsection