@extends('admin.layouts.template')
@section('content')
<div class="container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Listes des Comptes des bailleurs des fonds</h4>
                             
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Mail</th>
                                    	<th>Pays</th>
                                    	
                                    </thead>
                                    <tbody>
                                     @foreach ( $bailleur as $bailleurs)
                                        <tr>
                                        	<<td>{{ $bailleurs->id }}</td>
                                        	<td>{{ $bailleurs->nom }}</td>
                                        	<td>{{  $bailleurs->prenom }}</td>
                                            <td>{{ $bailleurs->mail  }}</td>
                                            <td>{{ $bailleurs->pays  }}</td>
                                          
                                           
                                        </tr>
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