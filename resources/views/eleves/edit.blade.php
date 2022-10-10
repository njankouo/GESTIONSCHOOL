 <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
 <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
 @extends('layouts.master')

 @section('title', 'creation d\'un elève')

 @section('contenu')
     <div class="row">
         <div class="col-8">
             <div class="card my-4">
                 <div class="card-title bg-primary">
                     <h4 style="font-style: italic " class="mx-2 my-3 text-light">Mise à Jour Elève</h4>
                 </div>
                 <hr>
                 <div class="card-body">
                     <form action="{{ route('edition.eleve', ['eleve' => $eleve->id]) }}" method="POST">
                         @csrf
                         <input type="hidden" name="_method" value="put">
                         <div class="form-row" style="margin: 10px;">


                             <div class="col-6">
                                 <label for="">Nom</label>
                                 <input type="text" class="my-2 form-control @error('nom') is-invalid @enderror"
                                     placeholder="Enter ..." name="nom" value="{{ $eleve->nom }}" readonly>
                                 @error('nom')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror


                                 <label for="">Prenom</label>
                                 <input type="text" name="prenom"
                                     class="form-control @error('prenom') is-invalid @enderror my-2"
                                     value="{{ $eleve->prenom }}" readonly>
                                 @error('prenom')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror

                             </div>


                             <div class="col-6">
                                 <label for="">Sexe</label>
                                 <input type="text" value="{{ $eleve->sexe }}"
                                     class=" form-control @error('sexe') is-invalid @enderror my-2" name="sexe">
                                 @error('sexe')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                                 <label for="">Telephone1</label>
                                 <input type="tel" class="my-2 form-control @error('telephone1') is-invalid @enderror"
                                     id="inputSuccess" placeholder="Enter ..." name="telephone1"
                                     value="{{ $eleve->telephone1 }}" readonly>
                                 @error('telephone1')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                             </div>

                             <div class="col-6">
                                 <label for="">Telephone2</label>
                                 <input type="tel"
                                     class=" text-right  form-control my-2 @error('telephone2') is-invalid @enderror"
                                     name="telephone2" placeholder="..." value="{{ $eleve->telephone2 }}">
                                 @error('telephone2')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror

                             </div>
                             <div class="col-6">
                                 <label for="">Nom Du Père </label>
                                 <input type="text" class="form-control my-2 @error('nom_pere') is-invalid @enderror"
                                     name="nom_pere" value="{{ $eleve->nom_pere }}" readonly>

                                 @error('nom_pere')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                             </div>
                             <div class="col-6">
                                 <label for="">Profession Du père </label>
                                 <input type="text"
                                     class="text-right  form-control my-2 @error('profession_pere') is-invalid @enderror"
                                     name="profession_pere" placeholder="..." value="{{ $eleve->profession_pere }}"
                                     readonly>
                                 @error('profession_pere')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                             </div>

                             <div class="col-6">
                                 <label for="">Nom de la mère </label>
                                 <input type="text"
                                     class=" text-right  form-control my-2 @error('nom_mere') is-invalid @enderror"
                                     name="nom_mere" placeholder="..." value="{{ $eleve->nom_mere }}" readonly>
                                 @error('nom_mere')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                             </div>
                             <div class="col-6">
                                 <label for="">Profession de la mère</label>
                                 <input type="text"
                                     class="form-control my-2 @error('profession_mere') is-invalid @enderror"
                                     name="profession_mere" value="{{ $eleve->profession_mere }}" readonly>

                                 @error('profession_mere')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                             </div>
                             <div class="col-6">
                                 <label for="">Telephone du père</label>
                                 <input type="tel" name="telephone_pere"
                                     class="form-control @error('telephone_pere') is-invalid @enderror my-2"
                                     value="{{ $eleve->telephone_pere }}" readonly>

                                 @error('telephone_pere')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                             </div>
                             <div class="col-6">
                                 <label for="">Telephone de la mère</label>
                                 <input type="tel"
                                     class="my-2 form-control @error('telephone_mere') is-invalid @enderror"
                                     name="telephone_mere" placeholder="Enter ..." value="{{ $eleve->telephone_mere }}"
                                     readonly>
                                 @error('telephone_mere')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                             </div>

                             <div class="col-6">
                                 <label for="">date Naissance</label>
                                 <input type="date" name="date_naissance" id=""
                                     class="form-control my-2 @error('date_naissance') is-invalid @enderror"
                                     value="{{ $eleve->date_naissance }}" readonly>
                                 @error('date_naissance')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror
                             </div>
                             <div class="col-6">
                                 <label for="">Lieu de naissance</label>
                                 <input type="text" name="lieu" id=""
                                     class="form-control my-2 @error('lieu_naissance') is-invalid @enderror"
                                     value="{{ $eleve->lieu_naissance }}" readonly>
                                 @error('lieu_naissance')
                                     <p class="text-danger">{{ $message }}</p>
                                 @enderror


                             </div>

                             <div class="col-6">
                                 <label for="">Photo élève</label>
                                 <input type="file"
                                     class="form-control my-2
                        @error('image') is-invalid @enderror"
                                     name="image" onchange="previewFile(this)">
                                 @error('image')
                                     <span class="alert alert-danger">{{ $message }}</span>
                                 @enderror

                             </div>

                             <div class="col-6">
                                 <label for="">Classe</label>
                                 <select name="classe_id" id="search"
                                     class="form-control my-2 @error('classe') is-invalid @enderror">
                                     <optgroup label="selectionnez votre classe">
                                         <option value="">......</option>
                                         @foreach ($classe as $classes)
                                             @if ($classes->id == $eleve->salle_id)
                                                 <option value="{{ $classes->id }}" selected> {{ $classes->libelle }}
                                                 </option>
                                             @else
                                                 <option value="{{ $classes->id }}"> {{ $classes->libelle }}</option>
                                             @endif
                                         @endforeach

                                 </select>
                             </div>
                             <div class="col-6">
                                 <label for="">Cycle</label>
                                 <select name="cycle_id" class="form-control  @error('classe') is-invalid @enderror">
                                     <optgroup label="selectionnez votre classe">
                                         <option value="">......</option>
                                         <option value="">{{ 'choose cycle' }}</option>
                                         @foreach ($cycle as $cycles)
                                             <option value="{{ $cycles->id }}"> {{ $cycles->libelle }}
                                             </option>
                                         @endforeach

                                 </select>
                             </div>

                             <div class="col-6">
                                 <label for="">Annee Scolaire</label>
                                 <select name="annee_id" class="form-control my-2 @error('annee') is-invalid @enderror">
                                     <optgroup label="selectionnez votre classe">
                                         <option value="">{{ 'choose Annee Scolaire' }}</option>
                                         @foreach ($annee as $answer)
                                             <option value="{{ $answer->id }}"> {{ $answer->libelle }}
                                             </option>
                                         @endforeach

                                 </select>
                             </div>
                         </div>

                 </div>
                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Mise à Jour</button>
                     </form>
                 </div>
             </div>
             <div class="card-footer bg-primary"></div>
         </div>
         <div class="col-4">
             <div class="card my-4">
                 <div class="card-title bg-primary">
                     <h4 class="text-light mx-2 my-3" style="font-style: italic">Photo de l'élève</h4>
                 </div>
                 <div class="card-body">
                     <fieldset class="text-light">
                         <img id="previewImg" alt="" style="width:70%; height:auto;" class="my-4 mx-4">
                     </fieldset>
                 </div>
             </div>
             <div class="card-footer bg-primary"></div>
         </div>
     </div>
     <script>
         function previewFile(input) {
             var file = $('input[type=file]').get(0).files[0];
             if (file) {
                 var reader = new FileReader();
                 reader.onload = function() {
                     $('#previewImg').attr('src', reader.result);
                 }
                 reader.readAsDataURL(file);
             }
         }
     </script>

     <script src="{{ asset('js/select2.min.js') }}"></script>
     <script>
         $('#search').select2();
     </script>
 @stop
