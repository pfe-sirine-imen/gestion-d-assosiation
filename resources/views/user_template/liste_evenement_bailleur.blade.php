@extends('user_template.layouts.template')
@section('main-content')
<div class="container">

           
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Listes des evenements (Bailleur de fond)</h4>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                        <form action="/liste_evenement_bailleur" method="GET">
                            <input type="search" id="inputPassword6" placeholder="Rechercher un titre..." name="search" class="form-control" aria-labelledby="passwordHelpInline">
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
                <a href="/evenement_bailleur" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-plus'></i>Ajouter evenement(Bailleur de fond)</a>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Titre de evenement</th>
                            <th>Responsable de evenement</th>
                            <th>date debut de evenement</th>
                            <th>date fin de evenement</th>
                            <th>lieu de evenement</th>
                            <th>Budget de evenement</th>
                            <th>L'objectif de evenement</th>
                            <th>La facture de evenement</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @php
                          $ide= 1;
                        @endphp
                            @foreach ( $evens as $even)

                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $even->titre }}</td>
                                <td>{{ $even->responsable }}</td>
                                <td>{{ $even->date_debut  }}</td>
                                <td>{{ $even->date_fin  }}</td>
                                <td>{{ $even->lieu  }}</td>
                                <td>{{ $even->budget  }}</td>
                                <td>{{ $even->objectif  }}</td>
                                <td><img  src="/image/{{ $even->facture  }}" width="70px" height="70px" alt=""></td>
                                <td>
                                    
                                    <a href="/update_eve_bailleur/{{ $even->id }}" style="background-color:#008000 ; border-color:#008000 ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>Modifier</a>
                                    
                                <form 
                                    action="/sup_eve_bailleur/{{ $even->id }}"
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
                       {{$evens->links()}}
                    </div>

                </div>
            </div>
        </div>


                 


    </div>
       
 

</div>
@endsection