<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/buttons.dataTables.min.css') }}">
@extends('layouts.master')


@section('title', 'gestion des eleves')

@section('contenu')


    <div class="card" style="margin-top: 10%">
        <div class="card-title ">
            <h4 style="margin-left:15px;font-style:italic;font-size:25px" class="my-4">Repertoire des eleves</h4>
            <hr>
            <a class="btn btn-primary mx-2" style="float: right" href="{{ route('add.eleve') }}">
                Ajouter Nouvelle Elève
                <i class="fa fa-plus"></i>
            </a>
            <a class="btn btn-dark mx-2" style="float: right" href="{{ route('print.eleve') }}">
                Impression PDF
                <i class="fa fa-PRINT"></i>
            </a>

        </div>

        <div style="margin-left: 15px">

            <h6 style="font-style: italic;font-weight:bold">NOMBRE DE GARCON(S): {{ $elevef }}</h6>
            <h6 style="font-style: italic;font-weight:bold">NOMBRE DE FILLE(S): {{ $elevem }}</h6>
        </div>
        <div class="card-body">

            @include('eleves.table')
        </div>
    </div>
    <div class="card-footer bg-primary"></div>
    <script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.noConflict();
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
                ],
                columnDefs: [{
                    targets: -1,
                    visible: false
                }]
            });



        });
    </script>
@stop
