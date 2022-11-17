<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
@extends('layouts.master')

@section('title', 'repertoire des salles de classe')

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
        <div class="col-7">
            <div class="card" style="margin-top: 50px">
                <div class="card-title">
                    <h4 style="font-style: italic" class="mx-4 my-2">Repertoire Des Cycles</h4>
                    <button class="btn btn-primary mx-2" style="float: right" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        Nouveau Cycle
                    </button>
                </div>
                <div class="card-body">
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="false">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <h4 style="font-style: italic" class="mx-2 my-2">formulaire Ajouter un nouveau cycle</h4>
                                <hr>

                                <div class="col-12">
                                    <form action="{{ route('add.cycle') }}" method="POST">

                                        @csrf

                                        <label for="">Libelle</label>
                                        <input type="text"
                                            class="form-control my-2 @error('libelle') is-invalid @enderror" name='libelle'>
                                        <input type="reset" class="btn btn-danger my-2" href value="annuler"
                                            data-dismiss="modal">
                                        <input type="submit" class="btn btn-success my-2" href value="valider">
                                    </form>
                                    @error('libelle')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">


                            <table class="table table-striped table-hover" id="">
                                <thead>
                                    <tr>
                                        <th>#</th>

                                        <th>libelle</th>
                                        <th>Opération</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cycle as $cycl)
                                        <tr>
                                            <td>{{ $cycl->id }}</td>
                                            <td>{{ $cycl->libelle }}</td>
                                            <td>
                                                @if (count($cycl->niveau))
                                                @elseif(count($cycl->salle))
                                                @else
                                                    <form method="POST" action="{{ route('delete.cycle', $cycl->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <i type="submit"
                                                            class="fa fa-minus-circle fa-3x text-danger btn-flat show_confirm"
                                                            data-toggle="tooltip" title='Delete'></i>
                                                    </form>
                                            </td>
                                    @endif
                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                            {{ $cycle->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer bg-primary"></div>
        </div>
        <div class="col-5">
            <div class="card" style="margin-top: 50px">
                <div class="card-title">
                    <h4 style="font-style: italic" class="mx-4 my-2">Repertoire Des Niveaux</h4>
                    <a href="{{ route('add.niveau') }}" class="btn btn-primary mx-2" style="float: right">
                        <i class="fa fa-download fa-2x"></i>
                    </a>

                </div>
                <div class="card-body">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">


                            <table class="table table-striped table-hover" id="">
                                <thead>
                                    <tr>
                                        <th>#</th>

                                        <th>libelle</th>
                                        <th>cycle</th>
                                        <th>Opération</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($niveau as $niveaux)
                                        <tr>
                                            <td>{{ $niveaux->id }}</td>
                                            <td>{{ $niveaux->libelle }}</td>
                                            <td>{{ $niveaux->cycle->libelle }}</td>
                                            <td>
                                                <a href="" class="btn btn-danger">
                                                    <i class="fa fa-minus-circle fa-2x"></i>

                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{ $niveau->links() }}
                    </div>

                </div>
            </div>
            <div class="card-footer bg-primary"></div>
        </div>
    </div>
    <div class="col-12">
        <div class="card my-4">
            <div class="card-title">
                <h4 style="font-style: italic" class="mx-4 my-2">Repertoire Des Classes</h4>
                <hr>
                <a href="{{ route('add.sall') }}" class="btn btn-primary mx-2" style="float: right">
                    Nouvelle classe
                </a>
            </div>
            <div class="card-body">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">


                        <table class="table table-striped table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>#</th>

                                    <th>libelle</th>
                                    <th>cycle</th>
                                    <th>précision classe</th>
                                    <th>professeur titulaire</th>
                                    <th>Opération</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($salle as $sall)
                                    <tr>
                                        <td>{{ $sall->id }}</td>
                                        <td>{{ $sall->libelle }}</td>
                                        <td>{{ optional($sall->cycle)->libelle }}</td>
                                        <td>{{ optional($sall->niveau)->libelle }}</td>
                                        <td>{{ $sall->enseignant->nom }} {{ $sall->enseignant->prenom }}</td>
                                        <td>

                                            <form action="{{ route('delete.classe', $sall->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit"
                                                    class="btn btn-danger show_confirm"data-toggle="tooltip" title='Delete'>
                                                    <i class="fa fa-minus-circle fa-2x"></i>

                                                </button>
                                            </form>
                                            <a href="{{ route('note.eleve', $sall->id) }}" class="btn btn-primary  my-2">
                                                <i class="fa fa-pencil-square fa-2x"></i>

                                            </a>
                                            <a href="" class="btn btn-success  my-2">
                                                <i class="fa fa-file fa-2x"></i>

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
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `voulez-vous retirer?`,
                    text: "si oui, validez OK.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
    <script>
        $(document).ready(function() {
            $.noConflict();
            $('#example').DataTable(

            );
        });
    </script>

@stop
