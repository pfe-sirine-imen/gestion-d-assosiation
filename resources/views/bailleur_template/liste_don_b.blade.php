@extends('bailleur_template.layouts.template_b')
@section('main-content')
<div class="container">

           
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 Align=Center>Listes des stocks du dons</h4>
                    <div class="row g-3 align-items-center mt-2">
                    <div class="col-auto">
                    <form action="/consulter_dons" method="GET">
                        <input type="text"  placeholder="Rechercher un nom..."  name="search" >
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                    </div>
                        
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>le type du don </th>
                            <th>la destination du don</th>
                            <th>La nature du don</th>
                            <th>L’identité du donateur (Optionnel)</th>
                        
                            <th>La date du versement</th>
                            <th> Le montant du don</th>
                         
                        </thead>
                        <tbody>
                        @php
                          $ide= 1;
                        @endphp
                            @foreach ( $dons as $don)

                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $don->type}}</td>
                               
                               
                                <td>{{ $don->destination }}</td>
                                <td>{{ $don->nature  }}</td>
                                <td>{{ $don->donateur  }}</td>
                              
                                <td>{{ $don->date  }}</td>
                                <td>{{ $don->montant }}</td>
                               
                                
                            </tr>
                            @php
                              $ide += 1;
                            @endphp
                                @endforeach
                        </tbody>
                    </table>
                    <div class="row d-flex justify-content-center">
                       {{$dons->links()}}
                    </div>

                </div>
            </div>
        </div>


                 


    </div>
       
 

</div>
@endsection