@extends('admin.layouts.template')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 Align=Center>Listes des evenements d'assosiation</h4>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                        <form action="/listeE" method="GET">
                            <input type="text"  placeholder="Rechercher un titre..."  name="search" >
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
                <a href="/E" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-plus'></i>Ajouter evenement</a>
                </div>

                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Responsable </th>
                                <th>date debut</th>
                                <th>date fin</th>
                                <th>L'objectif</th>
                                <th>lieu</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @php
                              $ide= 1;
                            @endphp
                                @foreach ( $event as $events)
    
                                <tr>
                                    <td>{{ $ide }}</td>
                                    <td>{{ $events->titre }}</td>
                                    <td>{{  $events->responsable }}</td>
                                    <td>{{ $events->date_debut  }}</td>
                                    <td>{{ $events->date_fin  }}</td>
                                    <td>{{ $events->objectif  }}</td>
                                    <td>{{ $events->lieu  }}</td>
                                    <td>
                                        
                                        <a href="/admin/update_E/{{ $events->id }}" style="background-color:#008000 ; border-color:#008000 ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>Modifier</a>
                                    <form 
                                        action="/admin/sup_E/{{ $events->id }}"
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
                           {{$event->links()}}
                        </div>
    
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection