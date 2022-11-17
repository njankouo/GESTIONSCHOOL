@extends('layouts.master')

@section('title', 'edition des cours')


@section('contenu')

    <div class="row">
        <div class="col-8">
            <div class="card my-4">
                <div class="card-title">
                    <h6 style="font-style: italic;font-weight:bold" class="mx-4 my-4">EDITION DES COURS</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.cour', ['cours' => $cours]) }}" method="POST">

                        @csrf
                        <input type="hidden" value="put" name="_method">

                        <label for="">ENSEIGNANT</label>
                        <select name="enseignant" id="" class="form-control my-2">
                            <option value="">...</option>
                            @foreach ($enseignant as $ens)
                                @if ($cours->enseignant_id == $ens->id)
                                    <option value="{{ $ens->id }}" selected>{{ $ens->nom }} {{ $ens->prenom }}
                                    </option>
                                @else
                                    <option value="{{ $ens->id }}">{{ $ens->nom }} {{ $ens->prenom }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        <label for="">MATIERE</label>
                        <select name="matiere" id="" class="form-control">
                            <option value="">....</option>
                            @foreach ($matiere as $mat)
                                @if ($cours->matiere_id == $mat->id)
                                    <option value="{{ $mat->id }}" selected>{{ $mat->libelle }}</option>
                                @else
                                    <option value="{{ $mat->id }}">{{ $mat->libelle }}</option>
                                @endif
                            @endforeach
                        </select>
                        <label for="">CLASSE</label>
                        <select name="classe" id="" class="form-control my-2">
                            <option value=""></option>
                            @foreach ($classe as $classes)
                                @if ($cours->classe_id == $classes->id)
                                    <option value="{{ $classes->id }}" selected>{{ $classes->libelle }}</option>
                                @else
                                    <option value="{{ $classes->id }}">{{ $classes->libelle }}</option>
                                @endif
                            @endforeach
                        </select>
                        <label for="">DUREE</label>
                        <input type="text" class="form-control my-2" name="duree" value="{{ $cours->duree_cour }}"
                            value="{{ $cours->duree_cour }}">
                        <label for="">JOUR DES COURS</label>
                        <input type="text" class="form-control my-2" name="jour" value="{{ $cours->journee }}">
                        <label for="">ANNEE SCOLAIRE</label>

                        <select id="" class="form-control my-2" name="annee">
                            <option value="">.....</option>
                            @foreach ($annee as $ans)
                                @if ($cours->annee_id == $ans->id)
                                    <option value="{{ $ans->id }}" selected>{{ $ans->libelle }}</option>
                                @else
                                    <option value="{{ $ans->id }}">{{ $ans->libelle }}</option>
                                @endif
                            @endforeach
                        </select>

                        <input type="reset" class="btn btn-danger my-2" href value="annuler" data-dismiss="modal">
                        <input type="submit" class="btn btn-success my-2" href value="valider">
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
