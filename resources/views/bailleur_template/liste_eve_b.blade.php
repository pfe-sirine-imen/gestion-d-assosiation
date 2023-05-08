@extends('bailleur_template.layouts.template_b')
@section('main-content')
<div class="container">

           
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Listes des evenements</h4>
                    <div class="row g-3 align-items-center mt-2">
                    <div class="col-auto">
                    <form action="/consulter_evenement" method="GET">
                        <input type="search" id="inputPassword6"  name="search" placeholder="Rechercher un nom..."  class="form-control" aria-labelledby="passwordHelpInline">
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
                            <th>Titre de evenement</th>
                            <th>Responsable de evenement</th>
                            <th>date debut de evenement</th>
                            <th>date fin de evenement</th>
                            <th>lieu de evenement</th>
                            <th>Budget de evenement</th>
                            <th>La facture de evenement</th>
                            
                        </thead>
                        <tbody>
                        @php
                          $ide= 1;
                        @endphp
                            @foreach ( $evens as $even)

                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $even->titre }}</td>
                                <td>{{  $even->responsable }}</td>
                                <td>{{ $even->date_debut  }}</td>
                                <td>{{ $even->date_fin  }}</td>
                                <td>{{ $even->lieu  }}</td>
                                <td>{{ $even->budget  }}</td>
                                <td><img  src="/image/{{ $even->facture  }}" width="70px" height="70px" alt=""></td>
                                
                                
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