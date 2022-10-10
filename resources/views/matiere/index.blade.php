<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">

@extends('layouts.master')

@section('title', 'gestion des congés')


@section('contenu')

    <div class="row">
        <div class="col-12">
            <div class="card" style="margin-top:10%">
                <div class="card-title">
                    <h4 class="mx-2 my-4" style="font-style: italic">Repertoire Des Matieres</h4>
                    <hr>
                    <a href="{{ route('ajout.matiere') }}" class="btn btn-primary mx-2">
                        <i class="fa fa-plus"></i> Nouvelle Matiere
                    </a>
                </div>
                <div class="body">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">


                            <table class="table table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>Matière</th>
                                        <th>Classe</th>
                                        <th>Coefficient</th>

                                        <th>Opération</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-primary"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.noConflict();
            $('#example').DataTable(

            );
        });
    </script>

@stop
