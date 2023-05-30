@extends('bailleur_template.layouts.template_b')
@section('main-content')
<div class="container">

           
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 Align=Center>Listes des activites</h4>
                    <div class="row g-3 align-items-center mt-2">
                    <div class="col-auto">
                    <form action="/consulter_evenement" method="GET">
                        <input type="text"  placeholder="Rechercher un nom..."  name="search" >
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                    <a href="{{ Route('pdf_b')}}"><i class="fas fa-file-edit">Télecharger PDF</i></a>

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
                            <th>Titre de activite</th>
                            <th>Responsable de activite</th>
                            
                            <th>date debut de activite</th>
                            <th>date fin de activite</th>
                            <th>lieu de activite</th>
                            <th>Budget de activite</th>
                          
                            
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