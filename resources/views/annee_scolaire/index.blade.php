<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
<link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">


@extends('layouts.master')

@section('title', 'liste des annees scolaires')

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
            <div class="card" style="margin-top:1%">
                <div class="card-title">
                    <h4 class="my-2 mx-4" style="font-style:italic"> Repertoire Annee Scolaire</h4>
                    <hr>
                    <a href="" class="btn btn-primary mx-2" style="float: right" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        Nouvelle Annee
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr>

                                <th>Libelle</th>
                                <th>Status</th>
                                <th>Opération</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($an as $ans)
                                <tr>
                                    <td>{{ $ans->libelle }}</td>
                                    <td>
                                        <input data-id="{{ $ans->id }}" class="toggle-class" type="checkbox"
                                            data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                            data-on="activé" data-off="desactivé" {{ $ans->status ? 'checked' : '' }}>
                                    </td>
                                    <td>

                                        <a href="{{ route('trimestre.add', $ans->id) }}" class="btn btn-primary">
                                            <i class="fa fa-eye fa-2x"></i>
                                        </a>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="card-footer bg-primary"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card" style="margin-top:1%">
                <div class="card-title">
                    <h4 class="my-2 mx-4" style="font-style:italic"> Repertoire Des Trimestres</h4>
                    <hr>

                </div>
                <div class="card-body">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">


                            <table class="table table-striped table-hover" id="example">
                                <thead>

                                    <tr>

                                        <th>Année Scolaire</th>
                                        <th>Trimestre</th>
                                        <th>Opération</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($trim as $trimestre)
                                        <tr>
                                            <td>{{ $trimestre->annee->libelle }}</td>
                                            <td>{{ $trimestre->libelle }}</td>
                                            <td>
                                                <a href="" class="btn btn-primary">
                                                    <i class="fa fa-eye fa-2x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                {{ $trim->links() }}
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-primary"></div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="margin-top:1%">
                <div class="card-title">
                    <h4 class="my-2 mx-4" style="font-style:italic"> Repertoire Des Sequences</h4>
                    <hr>

                </div>
                <div class="card-body">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">


                            <table class="table table-striped table-hover" id="example">
                                <thead>

                                    <tr>

                                        <th>Année Scolaire</th>
                                        <th>Trimestre</th>
                                        <th>Sequence</th>
                                        <th>Opération</th>
                                    </tr>

                                </thead>
                                <tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-primary"></div>
            </div>
        </div>

    </div>


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h4 style="font-style: italic" class="mx-2 my-2">formulaire Ajout nouvelle annee</h4>
                <hr>

                <div class="col-12">
                    <form action="{{ route('add.annee') }}" method="POST">

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
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.noConflict();
            $('#example').DataTable();
        });
    </script>

    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var commande_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('toggle.find') }}',
                    data: {
                        'status': status,
                        'commande_id': commande_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
@stop
