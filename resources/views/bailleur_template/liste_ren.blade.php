@extends('bailleur_template.layouts.template_b')
@section('main-content')
<div class="container">

           
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Listes des reunions</h4>
                    <div class="row g-3 align-items-center mt-2">
                    <div class="col-auto">
                    <form action="/consulter_reunion" method="GET">
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
                            <th>Titre de reunion</th>
                            <th>Les listes d’invités des reunions</th>
                            <th>E-mail(s) pour invités de reunion</th>
                            <th>Date de reunion</th>
                            <th>Heure de  reunion</th>
                            <th>place de reunion </th>
                            <th>Compte rendu  de reunion </th>
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
                                <td><img  src="/image/{{ $reunion->rendu  }}" width="70px" height="70px" alt=""></td>
                           
                                
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