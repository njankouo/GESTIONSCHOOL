<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
@extends('layouts.master')

@section('title', 'gestion des eleves')

@section('contenu')


    <div class="card" style="margin-top: 10%">
        <div class="card-title ">
            <h4 style="margin-left:15px;font-style:italic;font-size:25px" class="my-4">Repertoire des enseignants</h4>
            <hr>
            <a class="btn btn-primary mx-2" style="float: right" href="{{ route('add.enseignant') }}">
                Ajouter Enseignant
                <i class="fa fa-plus"></i>
            </a>
        </div>


        <div class="card-body">
            @include('enseignants.table')
        </div>
    </div>
    <div class="card-footer bg-primary"></div>
    <script>
        jQuery.fn.dataTable.Api.register('processing()', function(show) {
            return this.iterator('table', function(ctx) {
                ctx.oApi._fnProcessingDisplay(ctx, show);
            });
        });
    </script>
    <script>
        // $(document).ready(function() {
        //     $.noConflict();
        //  $.fn.dataTable.ext.errMode = 'throw';
        // var table = $('#example').DataTable({
        //     processing: true,
        // serverSide: true,
        // ajax: 'scripts/server_processing.php ',
        //deferLoading: 57,

        //         });
        //         table.processing(true);

        //         setTimeout(function() {
        //             table.processing(false);
        //         }, 2000);
        //     });
        $(document).ready(function() {
            $.noConflict();
            $('#example')
                .on('processing.dt', function(e, settings, processing) {
                    $('#processingIndicator').css('display', processing ? 'block' : 'none');
                })
                .dataTable();
        })
        //
    </script>
@stop
