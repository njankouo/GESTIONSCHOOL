<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script>
    $.fn.poshytip = {
        defaults: null
    }
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js">
</script>

<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet" />

@extends('layouts.master')

@section('title', 'liste des cours')

@section('contenu')



    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-title">
                    <h4 style="font-style: italic " class="mx-4 my-4">Gestion Des Cours</h4>

                    <button type="button" class="btn btn-primary mx-4 my-4" data-toggle="modal"
                        data-target=".bd-example-modal-lg" data-bs-target="#staticBackdrop" style="float: right">
                        Nouveau Cour(s)
                    </button>



                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example"
                                class="table table-striped table-bordered dt-responsive nowrap table-hover"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ENSEIGNANT</th>
                                        <th>MATIERE</th>
                                        <th>CLASSE</th>
                                        <th>DUREE</th>
                                        <th>JOUR DES COURS</th>
                                        <th>ANNEE SCOLAIRE</th>
                                        <th>OPERATION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cour as $cours)
                                        <tr>
                                            <td>{{ $cours->enseignant->nom }} {{ $cours->enseignant->prenom }}</td>
                                            <td>{{ $cours->matiere->libelle }}</td>
                                            <td>{{ $cours->classe->libelle }}</td>
                                            <td>{{ $cours->duree_cour }}</td>
                                            <td>{{ $cours->journee }}</td>
                                            <td>{{ $cours->annee->libelle ?? '' }}</td>
                                            <td>
                                                {{-- <a href="" class="btn btn-danger">
                                                    <i class="fa fa-minus-circle fa-2x"></i>
                                                </a> --}}
                                                <a href="{{ route('edit.cour', $cours->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-eye fa-2x"> </i>
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
                aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <h4 style="font-style: italic" class="mx-2 my-2">Nouveau Cour(s)</h4>
                        <hr>

                        <div class="col-12">
                            <form action="{{ route('save.cour') }}" method="POST">

                                @csrf

                                <label for="">ENSEIGNANT</label>
                                <select name="enseignant" id="" class="form-control my-2">
                                    <option value="">...</option>
                                    @foreach ($enseignant as $ens)
                                        <option value="{{ $ens->id }}">{{ $ens->nom }} {{ $ens->prenom }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="">MATIERE</label>
                                <select name="matiere" id="" class="form-control">
                                    <option value="">....</option>
                                    @foreach ($matiere as $mat)
                                        <option value="{{ $mat->id }}">{{ $mat->libelle }}</option>
                                    @endforeach
                                </select>
                                <label for="">CLASSE</label>
                                <select name="classe" id="" class="form-control my-2">
                                    <option value=""></option>
                                    @foreach ($classe as $classes)
                                        <option value="{{ $classes->id }}">{{ $classes->libelle }}</option>
                                    @endforeach
                                </select>
                                <label for="">DUREE</label>
                                <input type="text" class="form-control my-2" name="duree">
                                <label for="">JOUR DES COURS</label>
                                <input type="text" class="form-control my-2" name="jour">
                                <label for="">ANNEE SCOLAIRE</label>

                                <select id="" class="form-control my-2" name="annee">
                                    <option value="">.....</option>
                                    @foreach ($annee as $ans)
                                        <option value="{{ $ans->id }}">{{ $ans->libelle }}</option>
                                    @endforeach
                                </select>

                                <input type="reset" class="btn btn-danger my-2" href value="annuler" data-dismiss="modal">
                                <input type="submit" class="btn btn-success my-2" href value="valider">
                            </form>


                        </div>
                    </div>
                </div>

            </div>


            <script>
                $(document).ready(function() {
                    $.noConflict();
                    $('#example').DataTable({});
                });
            </script>
            <script>
                document.getElementById('test').onclick = function() {
                    window.location.hash = "#bottom-sheet";
                };
            </script>
            <script type="text/javascript">
                $.fn.editable.defaults.mode = 'inline';

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                $('.update').editable({
                    url: "{{ route('update.contrat') }}",
                    type: 'text',
                    pk: 1,
                    name: 'date_fin',
                    title: 'Enter name'
                });
            </script>
        @stop
