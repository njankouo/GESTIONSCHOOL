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
        <div class="col-12">
            <div class="card" style="margin-top:10%">
                <div class="card-title">
                    <h4 class="mx-2 my-4" style="font-style: italic">Repertoire Des Groupes de Matière</h4>
                    <a href="" class="btn btn-primary mx-2" style="float: right" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        Nouveau Groupe Des Matières
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr>

                                <th>Libelle</th>


                                <th>Opération</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groupe as $group)
                                <tr>
                                    <td>{{ $group->libelle }}</td>
                                    <td>
                                        <a href="" class="btn btn-danger">
                                            <i class="fa fa-minus-circle fa-2x"></i>
                                        </a>
                                        <a href="{{ route('edit.group', $group->id) }}" class="btn btn-primary">
                                            <i class="fa fa-edit fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h4 style="font-style: italic" class="mx-2 my-2">formulaire Ajout Des Groupes de Matières</h4>
                <hr>

                <div class="col-12">
                    <form action="{{ route('add.groupe') }}" method="POST">
                        @csrf
                        <label for="">Libelle</label>
                        <input type="text" class="form-control my-2 @error('libelle') is-invalid @enderror"
                            name='libelle'>
                        <input type="reset" class="btn btn-danger my-2" href value="annuler" data-dismiss="modal">
                        <input type="submit" class="btn btn-success my-2" href value="valider">
                    </form>
                    @error('libelle')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>
            </div>
        </div>

    </div>

    </div>
    </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $.noConflict();
            $('#example').DataTable();
        });
    </script>
@stop
