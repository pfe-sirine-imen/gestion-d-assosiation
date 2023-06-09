@extends('admin.layouts.template')
@section('content')
<div class="container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 Align=Center>Listes des Comptes des Chef de suivi </h4>
                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{session('status')}}
                                    </div>
                                @endif 

                                
                                <a href="/ajouterbail" style="background-color:#E74C3C ;  color:white" class="btn btn-info btn-fill pull-right" >Ajouter un compte de bailleur de fond</a> 
                             
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Mail</th>
                                    	<th>Nom de projet</th>
                                        <th>Action</th>
                                    	
                                    </thead>
                                    <tbody>
                                        @php
                                            $ide= 1;
                                        @endphp
                                     @foreach ( $bailleur as $bailleurs)
                                        <tr>
                                        	<<td>{{$ide }}</td>
                                        	<td>{{ $bailleurs->nom }}</td>
                                        	<td>{{  $bailleurs->prenom }}</td>
                                            <td>{{ $bailleurs->mail  }}</td>
                                            <td>{{ $bailleurs->pays  }}</td>
                                            <td>
                                        
                                                <a href="/admin/update_A/{{ $bailleurs->id}}" style="background-color:#008000 ; border-color:#008000 ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>modifier</a>
                                            <form 
                                                action="/admin/sup_A/{{$bailleurs->id}}"
                                                method="get"
                                                class="inline-block"
                                                onsubmit="return confirm('Etre-vous sur?');">
                                                
                
                                                {{csrf_field()}}
                                                {{method_field('get')}}
                                                <input type="submit" value="Supprimer" style="background-color:#DE3163 ; border-color:#DE3163 ; color:white" class="btn btn-info btn-fill pull-right">
                                            </form>
                                            </td>
                                           
                                        </tr>
                                        @php
                                            $ide += 1;
                                        @endphp
                                     @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                 


                </div>
            </div>
 

</div>
@endsection