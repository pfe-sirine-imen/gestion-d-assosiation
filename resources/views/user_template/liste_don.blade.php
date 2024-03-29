@extends('user_template.layouts.template')
@section('main-content')
<div class="container">

           
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Listes des stocks du dons</h4>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                        <form action="/liste_don" method="GET">
                            <input type="search" id="inputPassword6" placeholder="Rechercher un nom..."  name="search" class="form-control" aria-labelledby="passwordHelpInline">
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
                <a href="/dons" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-plus'></i>Ajouter Don</a>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Nom du stock</th>
                            <th>la destination du don</th>
                            <th>La nature du don</th>
                            <th>L’identité du donateur (Optionnel)</th>
                            <th>le type du don </th>
                            <th>La date du versement</th>
                            <th> Le montant du don</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @php
                          $ide= 1;
                        @endphp
                            @foreach ( $dons as $don)

                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $don->nom }}</td>
                                <td>{{ $don->destination }}</td>
                                <td>{{ $don->nature  }}</td>
                                <td>{{ $don->donateur  }}</td>
                                <td>{{ $don->type  }}</td>
                                <td>{{ $don->date  }}</td>
                                <td>{{ $don->montant  }}</td>
                                <td>
                                    
                                    <a href="/update_don/{{$don->id }}" style="background-color:#008000 ; border-color:#008000; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>Modifier</a>
                                <form 
                                    action="/sup_don/{{$don->id }}"
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
                       {{$dons->links()}}
                    </div>

                </div>
            </div>
        </div>


                 


    </div>
       
 

</div>
@endsection