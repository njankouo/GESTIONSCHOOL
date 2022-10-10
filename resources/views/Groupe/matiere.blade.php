<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/jquery.typeahead.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
@extends('layouts.master')

@section('title', 'Liste Des Matières')

@section('contenu')
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin-top: 10%">
                <div class="card-title"></div>
                <div class="card-body">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">


                            <table class="table table-striped table-hover" id="example">
                                <thead>
                                    <tr>

                                        <th>Libelle</th>
                                        <th>Groupe De Matière</th>
                                        <th>Opération</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matiere as $mat)
                                        <tr>
                                            <td>{{ $mat->libelle }}</td>
                                            <td>{{ $mat->groupe->libelle }}</td>
                                            <td>
                                                <a href="" class="btn btn-primary">
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
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.noConflict();
            $('#example').DataTable();
        });
    </script>
@stop
