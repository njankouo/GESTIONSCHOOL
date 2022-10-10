<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
@extends('layouts.master')


@section('title', 'ajout des sanctions')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
@section('contenu')


    <div class="col-lg-6">
        <div class="card" style="margin-top: 10%">
            <div class="card-body">
                <div class="card-title">Ajout Des sanctions</div>
                <hr>
                <form action="{{ route('add.sanction') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Nom de L'eleve</label>
                        <select name="eleve_id" class="form-control @error('eleve_id') is-invalid @enderror">
                            <optgroup label="selectionnez le nom de l'elève">
                                <option>......</option>
                                @foreach ($eleve as $eleves)
                                    <option value="{{ $eleves->id }}">{{ $eleves->nom }} {{ $eleves->prenom }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('eleve_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="input-2">Classe</label>
                        <select name="classe_id" class="form-control @error('classe_id') is-invalid @enderror">
                            <option value="">......</option>
                            @foreach ($salle as $salles)
                                <option value="{{ $salles->id }}">{{ $salles->libelle }}</option>
                            @endforeach
                        </select>
                        @error('classe_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-3">Date Sanction</label>
                        <input type="date" name="date" id=""
                            class="form-control @error('date') is-invalid @enderror">
                        @error('date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-3">Motif Sanction</label>
                        <textarea name="motif" id="" cols="30" rows="10"
                            class="form-control @error('motif') is-invalid @enderror"></textarea>
                        @error('motif')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success px-5"><i class="icon-lock"></i> Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $('#select_id').select2();
    </script>
    <script>
        $('#select_name').select2();
    </script>
@stop
