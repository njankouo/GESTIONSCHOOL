@extends('layouts.master')
@section('title', 'gestion des niveaux')

@section('contenu')



    <div class="col-8">
        <div class="card" style="margin-top:10%">
            <div class="card-title">
                <h4 style="font-style: italic" class="mx-2 my-4">AJOUT DES NIVEAUX</h4>
                <hr>
            </div>
            <div class="card-body">
                <form action="{{ route('ajouter.niveaux') }}" method="post">
                    @csrf
                    <label for="">Libelle</label>
                    <input type="text" class="form-control" name="libelle">
                    <br>
                    <label for="">cycle</label>
                    <select name="cycle_id" id="" class="form-control">
                        <option value="">......</option>
                        @foreach ($cycle as $cycles)
                            <option value="{{ $cycles->id }}">{{ $cycles->libelle }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="col-4">
                <input type="submit" value="valider" class="form-control btn btn-success my-2">

            </div>

            </form>
        </div>
        <div class="card-footer bg-primary"></div>
    </div>
@stop
