@extends('layouts.master')


@section('title', 'gestion des classes')

@section('contenu')

    <div class="row">
        <div class="col-8">
            <div class="card" style="margin-top: 10%">
                <div class="card-title">
                    <h4 class="mx-2 my-4" style="font-style: italic"> Formulaire Ajout Des Classes</h4>
                    <hr>

                </div>

                <div class="card-body">
                    <form action="{{ route('ad.salle') }}" method="post">

                        @csrf
                        <label for="">Libelle</label>
                        <input type="text" name="libelle" class="form-control">
                        <br>
                        <label for="">Niveau</label>
                        <select name="niveaux" id="" class="form-control">
                            <optgroup label="selectionnez le niveau">
                                <option value="">.....</option>
                                @foreach ($niveau as $niv)
                                    <option value="{{ $niv->id }}">{{ $niv->libelle }}</option>
                                @endforeach
                            </optgroup>
                        </select><br>
                        <label for="">Cycle</label>
                        <select name="cycle_id" id="" class="form-control">
                            <optgroup label="selectionnez le cycle">
                                <option>......</option>
                                @foreach ($cycle as $cycl)
                                    <option value="{{ $cycl->id }}">{{ $cycl->libelle }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        <label for="">Professeur Titulaire</label>
                        <select name="prof_id" id="" class="form-control">
                            <optgroup label="selectionnez le prof titulaire">
                                <option value="">.......</option>
                                @foreach ($enseignant as $ens)
                                    <option value="{{ $ens->id }}">{{ $ens->nom }} {{ $ens->prenom }}</option>
                                @endforeach
                            </optgroup>
                        </select><br>
                        <div class="col-4">
                            <input type="submit" class="btn btn-success form-control">
                            <a href="{{ route('salle') }}" class="btn btn-danger form-control my-2">retour</a>

                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer bg-primary"></div>
        </div>
    </div>
@stop
