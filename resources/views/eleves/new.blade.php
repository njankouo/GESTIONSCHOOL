@extends('layouts.master')

@section('title', 'creation d\'un elève')

@section('contenu')

    <div class="row">
        <div class="col-8">
            <div class="card my-4">
                <div class="card-title bg-primary">
                    <h4 style="font-style: italic " class="mx-2 my-3 text-light">Nouvelle Elève</h4>
                </div>
                <hr>
                <div class="card-body">
                    <form action="{{ route('save.eleve') }}" method="POST">
                        @csrf
                        <div class="form-row" style="margin: 10px;">


                            <div class="col-6">
                                <label for="">Nom</label>
                                <input type="text" class="my-2 form-control @error('nom') is-invalid @enderror"
                                    placeholder="Enter ..." name="nom" value="{{ old('nom') }}">
                                @error('nom')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror


                                <label for="">Prenom</label>
                                <input type="text" name="prenom"
                                    class="form-control @error('prenom') is-invalid @enderror my-2">
                                @error('prenom')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>


                            <div class="col-6">
                                <label for="">Sexe</label>
                                <select name="sexe" id=""
                                    class="form-control my-2 @error('sexe') is-invalid @enderror">
                                    <option value="">...</option>
                                    <option value="0">Feminin</option>
                                    <option value="1">Masculin</option>
                                </select>
                                @error('sexe')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <label for="">Telephone1</label>
                                <input type="tel" class="my-2 form-control @error('telephone1') is-invalid @enderror"
                                    id="inputSuccess" placeholder="Enter ..." name="telephone1"
                                    value="{{ old('telephone1') }}">
                                @error('telephone1')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Telephone2</label>
                                <input type="tel"
                                    class=" text-right  form-control my-2 @error('telephone2') is-invalid @enderror"
                                    name="telephone2" placeholder="..." value="{{ old('telephone2') }}">
                                @error('telephone2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="col-6">
                                <label for="">Nom Du Père </label>
                                <input type="text" class="form-control my-2 @error('nom_pere') is-invalid @enderror"
                                    name="nom_pere">

                                @error('nom_pere')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="">Profession Du père </label>
                                <input type="text"
                                    class="text-right  form-control my-2 @error('profession_pere') is-invalid @enderror"
                                    name="profession_pere" placeholder="..." value="{{ old('profession_pere') }}">
                                @error('profession_pere')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Nom de la mère </label>
                                <input type="text"
                                    class=" text-right  form-control my-2 @error('nom_mere') is-invalid @enderror"
                                    name="nom_mere" placeholder="..." value="{{ old('nom_mere') }}">
                                @error('nom_mere')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="">Profession de la mère</label>
                                <input type="text"
                                    class="form-control my-2 @error('profession_mere') is-invalid @enderror"
                                    name="profession_mere">

                                @error('profession_mere')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="">Telephone du père</label>
                                <input type="tel" name="telephone_pere"
                                    class="form-control @error('telephone_pere') is-invalid @enderror my-2">

                                @error('telephone_pere')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="">Telephone de la mère</label>
                                <input type="tel"
                                    class="my-2 form-control @error('telephone_mere') is-invalid @enderror"
                                    name="telephone_mere" placeholder="Enter ..." value="{{ old('telephone_mere') }}">
                                @error('telephone_mere')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">date Naissance</label>
                                <input type="date" name="date_naissance" id=""
                                    class="form-control my-2 @error('date_naissance') is-invalid @enderror"
                                    value="{{ old('date_naissance') }}">
                                @error('date_naissance')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="">Lieu de naissance</label>
                                <input type="text" name="lieu_naissance" id=""
                                    class="form-control my-2 @error('lieu_naissance') is-invalid @enderror"
                                    value="{{ old('lieu_naissance') }}">
                                @error('lieu_naissance')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                {{-- <label for="">FAMILLE PRODUIT</label>
                                <select name="famille_id" id="" class="form-control my-2">
                                    <optgroup label="selectionnez la famille de produit">
                                        <option value="">...........</option>
                                        @foreach ($famille as $familles)
                                            <option value="{{ $familles->id }}">{{ $familles->libelle }}</option>
                                        @endforeach
                                    </optgroup>
                                </select> --}}

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


                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">enregistrer</button>
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
@stop
