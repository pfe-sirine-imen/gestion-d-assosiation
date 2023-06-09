@extends('admin.layouts.template')
@section('content')
<div class="container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            
                                <h4 Align=Center>Liste des Comptes d'utilisateurs</h4>
                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{session('status')}}
                                    </div>
                                @endif 


                                <a href='/ajouteruser' style="background-color:#E74C3C ;  color:white" class="btn btn-info btn-fill pull-right" >Ajouter un compte d'utilisateur</a>                        
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nom</th>
                                        <th>Prenom</th>
                                    	<th>Mail</th> 
                                        <th>Domaine d'activités</th>
                                        <th>Pays</th>
                                        <th>Tel</th>
                                        <th>Action</th>
                                    	
                                    </thead>
                                    <tbody> 
                                    @foreach ( $profil_user as $profil_users)
                                        <tr>
                                        	<td>{{ $profil_users->id }}</td>
                                        	<td>{{ $profil_users->nom }}</td>
                                        	<td>{{ $profil_users->prenom }}</td>
                                            <td>{{ $profil_users->mail }}</td>
                                            <td>{{ $profil_users->domaine_activite }}</td>
                                            <td>{{ $profil_users->pays }}</td>
                                            <td>{{ $profil_users->tel }}</td>
                                            <td>
                                        
                                                <a href="/admin/update_A/{{ $profil_users->id}}" style="background-color:#008000 ; border-color:#008000 ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>modifier</a>
                                            <form 
                                                action="/admin/sup_A/{{$profil_users->id}}"
                                                method="get"
                                                class="inline-block"
                                                onsubmit="return confirm('Etre-vous sur?');">
                                                
                
                                                {{csrf_field()}}
                                                {{method_field('get')}}
                                                <input type="submit" value="Supprimer" style="background-color:#DE3163 ; border-color:#DE3163 ; color:white" class="btn btn-info btn-fill pull-right">
                                            </form>
                                            </td>
                                           
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