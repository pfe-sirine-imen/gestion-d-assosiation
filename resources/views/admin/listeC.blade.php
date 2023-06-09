@extends('admin.layouts.template')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        
                        <h4 Align=Center>Listes des Operations des caisses</h4>
                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                            <form action="/listeC" method="GET">
                                <input type="text"  placeholder="Rechercher un cin..."  name="search" >
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
                    <a href="/C" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-plus'></i>Ajouter un operation de caisse</a>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>N CIN</th>
                                <th>Nom  du projet</th>
                                <th>Nom  de activite</th>
                                <th>La Responsable d'assosiation</th>
                              
                                <th>Bénéficiaire </th>
                                <th> la  Date</th>
                                <th>Heure de  operation de caisse </th>
                                <th> total des dépenses</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @php
                              $ide= 1;
                            @endphp
                                @foreach ( $caisses as $caisse)
    
                                <tr>
                                    <td>{{ $ide }}</td>
                                    <td>{{ $caisse->cin }}</td>
                                    <td>{{ $caisse->nom }}</td>
                                    <td>{{ $caisse->activite  }}</td>
                                    <td>{{ $caisse->responsable  }}</td>
                                  
                                    <td>{{ $caisse->benefice  }}</td>
                                    <td>{{ $caisse->date  }}</td>
                                    <td>{{ $caisse->heure  }}</td>
                                    <td>{{ $caisse->total  }}</td>
                                   
                                    <td>
                                        
                                        <a href="/admin/update_C/{{$caisse->id}}" style="background-color:#008000 ; border-color:#008000 ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>Modifier</a>
                                    <form 
                                        action="/admin/sup_C/{{$caisse->id}}"
                                        method="get"
                                        class="inline-block"
                                        onsubmit="return confirm('Etre-vous sur?');">
                                        
    
                                        {{csrf_field()}}
                                        {{method_field('get')}}
                                        
                                        <input type="submit" value="Supprimer" style="background-color:#DE3163 ; border-color:#DE3163 ; color:white" class="btn btn-info btn-fill pull-right" >
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
                           {{$caisses->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection