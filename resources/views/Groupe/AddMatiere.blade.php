<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/jquery.typeahead.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
@extends('layouts.master')

@section('title', 'lieste des groupes de matiere')

@section('contenu')
    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                positionClass: 'toast-top-right'
            }
            toastr.success("{{ session('success') }}");
        @endif
    </script>
    <div class="row">
        <div class="col-8">
            <div class="card" style="margin-top:10%">
                <div class="card-title">
                    <h4 class="mx-4 my-2" style="font-style: italic">AJOUT DES MATIERES</h4>
                    <hr>
                </div>
                <div class="card-body">
                    <form action="{{ route('add.matiere') }}" method="post">
                        @csrf
                        <label for=""> Groupe de Matière</label>

                        <input type="text" class="form-control my-2" value="{{ $group->libelle }}" readonly>
                        <br>
                        <label for="">Identifiant Groupe de Matière </label>

                        <input type="text" class="form-control my-2" name="groupe_id" value="{{ $group->id }}"
                            readonly>
                        <br>

                        <label for="">Matière</label>
                        <input type="text" class="form-control my-2" name="matiere">
                </div>
                <div class="col-4">
                    <input type="submit" value="valider" class="form-control btn btn-success my-2">
                    <a href="{{ route('groupe') }}" class="btn btn-danger form-control my-2">Retour</a>

                </div>
                </form>
                <div class="card-footer bg-primary"></div>

            </div>
        </div>
    </div>

@stop
