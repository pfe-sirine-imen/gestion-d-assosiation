@extends('admin.layouts.template')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 Align=Center>Listes des projets</h4>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                        <form action="/listeP" method="GET">
                            <input type="text"  placeholder="Rechercher un nom..."  name="search" >
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        </div>
                    </div>
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif 
                </div>
                    <div class="d-grid">
                    <a href="/P" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-plus'></i>Ajouter Projet</a>
                    </div>

                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Nom </th>
                                <th>L'objectif </th>
                                <th>la responsable</th>
                                <th>la  Date debut </th>
                                <th>la Date fin </th>
                                <th>le montant de la dépense</th>
                                <th> l'état d'avancement(%)</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @php
                               $ide= 1;
                            @endphp
                                @foreach ( $projets as $projet)
    
                                <tr>
                                    <td>{{ $ide }}</td>
                                    <td>{{ $projet->nom }}</td>
                                    <td>{{ $projet->objectif }}</td>
                                    <td>{{ $projet->responsable  }}</td>
                                    <td>{{ $projet->date_debut  }}</td>
                                    <td>{{ $projet->date_fin  }}</td>
                                    <td>{{ $projet->montant  }}</td>
                                    <td>{{ $projet->etat  }}</td>
                                    <td>
                                        
                                        <a href="/admin/update_P/{{$projet->id }}" style="background-color:#008000 ; border-color:#008000 ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>Modifier</a>
                                    <form 
                                        action="/admin/sup_P/{{$projet->id }}"
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
                        <div class="row d-flex justify-content-center">
                           {{$projets->links()}}
                        </div>
    
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection