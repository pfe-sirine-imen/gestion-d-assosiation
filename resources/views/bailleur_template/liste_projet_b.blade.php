@extends('bailleur_template.layouts.template_b')
@section('main-content')
<div class="container">

           
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 Align=Center>Listes des projets</h4>
                    <div class="row g-3 align-items-center mt-2">
                    <div class="col-auto">
                    <form action="/consulter_projet" method="GET">
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
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Nom du projet</th>
                            <th>L'objectif du projet</th>
                            <th>Chef du projet</th>
                            <th>la  Date debut  du projet</th>
                            <th>la Date fin du projet </th>
                            <th>le montant de la dépense</th>
                            <th> l'état d'avancement du projet(%)</th>
                   
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
@endsection