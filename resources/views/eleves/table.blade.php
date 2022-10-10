   <div class="table_section padding_infor_info">
       <div class="table-responsive-sm">


           <table class="table table-striped table-hover" id="example">
               <thead>
                   <tr>
                       <th>MATRICULE</th>
                       <th>NOM && PRENOM</th>
                       <th>TELEPHONE</th>
                       <th>STATUS</th>
                       <th>SEXE</th>
                       <th>CLASSE</th>
                       <th>CYCLE</th>
                       <th>EST INSCRIT</th>
                       <th>ANNEE SCOLAIRE</th>
                       <th>DATE DE CREATION</th>
                       <th>Opération</th>
                   </tr>
               </thead>

               <tbody>
                   @php $total=0 @endphp
                   @foreach ($eleve as $eleves)
                       @php $total = $eleve->count() @endphp
                       <tr>
                           <td>SEC{{ $eleves->id }}</td>
                           <td>{{ $eleves->nom }} {{ $eleves->prenom }}</td>

                           <td>
                               @if ($eleves->telephone1 == null)
                                   {{ $eleves->telephone2 }}
                               @else
                                   {{ $eleves->telephone1 }}
                           </td>
                           <td>
                               @if ($eleves->salle_id != null)
                                   <p class="badge badge-success">ACTIF</p>
                               @else
                                   <p class="badge badge-danger">INACTIF</p>
                               @endif

                           </td>
                   @endif

                   <td>
                       @if ($eleves->sexe == 0)
                           <img src="{{ asset('images/logo/lien.png') }}" style="width:50px" />
                       @else
                           <img src="{{ asset('images/logo/lion.png') }}"style="width:50px" />
                       @endif
                   </td>
                   <td>{{ optional($eleves->salle)->libelle }}</td>
                   <td>{{ $eleves->cycle->libelle ?? '' }}</td>
                   <td>
                       @if ($eleves->salle_id != null)
                           <p class="badge badge-success">INSCRIT</p>
                       @else
                           <p class="badge badge-danger">NON INSCRIT</p>
                       @endif
                   </td>

                   <td>{{ $eleves->annee->libelle ?? '' }}</td>
                   <td>{{ $eleves->created_at }}</td>
                   <td>
                       <a href="{{ route('edit.eleve', $eleves->id) }}" class="btn btn-primary">
                           <i class="fa fa-eye fa-2x"> </i>
                       </a>

                   </td>

                   </tr>
                   @endforeach

                   {{ $total }}


               </tbody>
           </table>

       </div>
   </div>
