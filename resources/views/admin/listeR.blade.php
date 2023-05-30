@extends('admin.layouts.template')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 Align=Center>Listes des reunions</h4>
                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                            <form action="/liste_reunion" method="GET">
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
                        <a href="/reunion" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-plus'></i>Ajouter Reunion</a>
                    </div>
                    <div class="d-grid">
                        <a href="{{ Route('pdf')}}" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class="fas fa-file-edit">Télecharger PDF</i></a>
                    </div>
             

                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Titre </th>
                                <th>Les listes d’invités </th>
                                <th>E-mail(s) pour invités </th>
                                <th>La Date </th>
                                <th>Heure</th>
                                <th>place </th>
                                
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