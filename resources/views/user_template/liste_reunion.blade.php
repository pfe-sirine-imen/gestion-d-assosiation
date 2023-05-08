@extends('user_template.layouts.template')
@section('main-content')
<div class="container">

           
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Listes des reunions</h4>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                        <form action="/liste_reunion" method="GET">
                            <input type="search" id="inputPassword6"  placeholder="Rechercher un titre..." name="search" class="form-control" aria-labelledby="passwordHelpInline">
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
                <a href="/reunion" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-plus'></i>Ajouter Reunion</a>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Titre de reunion</th>
                            <th>Les listes d’invités des reunions</th>
                            <th>E-mail(s) pour invités de reunion</th>
                            <th>Date de reunion</th>
                            <th>Heure de  reunion</th>
                            <th>place de reunion </th>
                            <th>Compte rendu  de reunion </th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @php
                           $ide= 1;
                        @endphp
                            @foreach ( $reunions as $reunion)

                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $reunion->titre }}</td>
                                <td>{{  $reunion->invite }}</td>
                                <td>{{ $reunion->mail  }}</td>
                                <td>{{ $reunion->date  }}</td>
                                <td>{{ $reunion->heure  }}</td>
                                <td>{{ $reunion->place  }}</td>
                                <td><img  src="/image/{{$reunion->rendu}}" width="70px" height="70px" alt=""></td>
                                <td>
                                    
                                    <a href="/update_reunion/{{$reunion->id }}" style="background-color:#008000 ; border-color:#008000 ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>Modifier</a>
                                <form 
                                    action="/sup_reunion/{{$reunion->id }}"
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
                       {{$reunions->links()}}
                    </div>

                </div>
            </div>
        </div>


                 


    </div>
       
 

</div>
@endsection