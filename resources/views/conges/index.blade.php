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
                    <h4 class="mx-2 my-4" style="font-style: italic">Repertoire Des Congés</h4>
                    <hr>
                    <a href="{{ route('add.conge') }}" class="btn btn-primary mx-2">
                        <i class="fa fa-plus"></i> Nouveau Congé
                    </a>
                </div>
                <div class="body">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">


                            <table class="table table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>Nom Du Concerné</th>
                                        <th>Date debut</th>
                                        <th>Date Fin</th>

                                        <th>Opération</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conges as $cong)
                                        <tr>
                                            <td>{{ $cong->enseignant->nom }} {{ $cong->enseignant->prenom }}</td>
                                            <td>{{ $cong->date_debut }}</td>
                                            <td>{{ $cong->date_fin }}</td>
                                            <td>
                                                <a href="" class="btn btn-primary">
                                                    <i class="fa fa-eye fa-2x"> </i>
                                                </a>
                                                <a href="" class="btn btn-danger">
                                                    <i class="fa fa-minus-circle fa-2x"></i>
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
