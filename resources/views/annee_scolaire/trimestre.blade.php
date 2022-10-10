@extends('layouts.master')

@section('title', 'gestion des trimestres')

@section('contenu')

    <div class="row">
        <div class="col-8">
            <div class="card" style="margin-top: 10%">
                <div class="card-title">
                    <h4 class="mx-2 my-4" style="font-style: italic">AJOUT DES TRIMESTRES</h4>
                    <hr>
                </div>
                <div class="card-body">
                    <form action="{{ route('ajouter.trimestre') }}" method="post">
                        @csrf
                        <label for="">Annee Scolaire</label>
                        <input type="text" class="form-control" value="{{ $answer->libelle }}"readonly>
                        <br>


                        <label for="">ID</label>
                        <input type="text" class="form-control" name="annee_id" value="{{ $answer->id }}" readonly>
                        <br>
                        <label for="">Trimestre</label>
                        <input type="text" class="form-control" name="libelle">
                        <br>
                        <div class="col-4">
                            <input type="submit" class=" my-2 form-control btn btn-success" value="valider">
                            <a href="{{ route('annee') }}" class="btn btn-danger form-control">retour</a>
                        </div>

                    </form>
                </div>
            </div>
            <div class="card-footer bg-primary"></div>
        </div>
    </div>
@stop
