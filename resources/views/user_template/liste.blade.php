@extends('user_template.layouts.template')
@section('main-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 Align=Center>Listes des adhérents</h4>
                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                            <form action="/liste/adherents" method="GET">
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

                    <div class="d-grid">
                        <a href="/adherents" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-plus'></i>Ajouter Adherent</a>
                    </div>

                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Mail</th>
                        <th>Pays</th>
                        <th>Date de naissance</th>
                        <th>situation</th>
                        <th>niveau</th>
                        <th>photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @php
                        $ide= 1;
                    @endphp
                        @foreach ( $adherent as $adherents)

                        <tr>
                            <td>{{$ide }}</td>
                            <td>{{ $adherents->nom }}</td>
                            <td>{{  $adherents->prenom }}</td>
                            <td>{{ $adherents->mail  }}</td>
                            <td>{{ $adherents->pays  }}</td>
                            <td>{{ $adherents->age  }}</td>
                            <td>{{ $adherents->situation  }}</td>
                            <td>{{ $adherents->niveau  }}</td>
                            <td><img src="{{ asset('image/'.$adherents->photo)}}" width="70px" height="70px" alt=""></td>
                            <td>
                                
                                <a href="/update_adherents/{{ $adherents->id}}" style="background-color:#008000 ; border-color:#008000 ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>modifier</a>
                            <form 
                                action="/sup_adherents/{{ $adherents->id}}"
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
                    {{$adherent->links()}}
                </div>
            </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection