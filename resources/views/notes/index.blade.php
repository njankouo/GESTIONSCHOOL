@extends('layouts.master')


@section('title', 'gestion des notes')


<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">

@section('contenu')


    <div class="row">
        <div class="col-12">
            <div class="card" style="margin-top: 8%">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <blockquote>
                                <h5 style="font-family: forte">
                                    NOTES DES ELEVES
                                </h5>
                            </blockquote>

                        </div>
                    </div>
                    <table id="example" class="table table-striped data-table">
                        <thead>
                            <th>Nom Des eleves</th>
                            <th>Classe</th>
                            <th>Matière</th>
                            <th>Notes</th>
                            <th>Coefficients</th>
                            <th>Année Scolaire</th>

                        </thead>

                        <tbody>
                            @foreach ($eleve as $eleves)
                                @if ($class->id == $eleves->salle_id)
                                    <form method="post" action="{{ route('add.note') }}">
                                        @csrf
                                        <tr>
                                            <td>
                                                <input type="text" value="{{ $eleves->nom }} {{ $eleves->prenom }}"
                                                    class="form-control @error('nom') is-invalid

                                                    @enderror"
                                                    name="nom">
                                                @error('nom')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text"
                                                    class="form-control @error('libelle') is-invalid @enderror"
                                                    value='{{ $class->libelle }}' readonly name="libelle">
                                                @error('libelle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </td>
                                            <td>
                                                <input type="text"
                                                    class="form-control @error('matiere') is-invalid

                                                @enderror"
                                                    name="matiere" value="{{ old('matiere') }}">
                                                @error('matiere')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </td>
                                            <td>
                                                <input type="number"
                                                    class="form-control @error('note') is-invalid

                                                @enderror"
                                                    value="{{ old('note') }}" name="note">
                                                @error('note')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="number"
                                                    class="form-control @error('coef') is-invalid

                                                @enderror"
                                                    value="{{ old('coef') }}" name="coef">
                                                @error('coef')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text"
                                                    class="form-control @error('annee') is-invalid

                                                @enderror"
                                                    value="{{ old('annee') }}" name="annee">
                                                @error('annee')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </td>
                                        </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary" style="float: right">enregistrer note(s)</button>
                </div>
            </div>

        </div>
    </div>
    </div>
    </form>


@stop
