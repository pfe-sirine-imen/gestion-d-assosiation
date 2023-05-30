@extends('user_template.layouts.template')
@section('main-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 Align=Center>Listes des evenements (Bailleur de fond)</h4>
                        <div class="col-auto">
                            <form action="/liste_evenement_bailleur" method="GET">
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
                            <div class="d-grid">
                                <a href="/evenement_bailleur" style="background-color:#7B68EE ; border-color:#7B68EE ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-plus'></i>Ajouter evenement(Bailleur de fond)</a>
                            </div>  
                            <div class="d-grid">
                                <a href="{{ Route('pdf_b')}}" style="background-color:#7B68EE ; border-color:#7B68EE ;color:white" class="btn btn-info btn-fill pull-right">Télecharger PDF</a>
                            </div>      
                        
                    <div class="card-body table-full-width table-responsive">
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
                                      <td>
                                          
                                        <a href="/update_eve_bailleur/{{ $even->id }}" style="background-color:#008000 ; border-color:#008000 ; color:white" class="btn btn-info btn-fill pull-right"><i class='fa fa-edit'></i>Modifier</a><br>
                                          
                                          
                                          
                                      <form 
                                          action="/sup_eve_bailleur/{{ $even->id }}"
                                          method="get"
                                          class="inline-block"
                                          onsubmit="return confirm('Etre-vous sur?');">
                                          
      
                                          {{csrf_field()}}
                                          {{method_field('get')}}
                                          <input type="submit" value="Supprimer" style="background-color:#DE3163 ; border-color:#DE3163 ; color:white" class="btn btn-info btn-fill pull-right"><br>
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
</div>
@endsection