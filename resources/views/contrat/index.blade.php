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


@section('title', 'liste des contrats')


@section('contenu')


    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-title">
                    <h4 style="font-style: italic " class="mx-4 my-4">Gestion Des Contrats</h4>

                    <button type="button" class="btn btn-primary mx-4 my-4" data-toggle="modal"
                        data-target=".bd-example-modal-lg" data-bs-target="#staticBackdrop" style="float: right">
                        Nouveau Contrat
                    </button>



                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example"
                                class="table table-striped table-bordered dt-responsive nowrap table-hover"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Enseignant</th>
                                        <th>Date Debut Contrat</th>
                                        <th>Date Fin Contrat</th>

                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contrat as $contrats)
                                        <tr>
                                            <td>
                                                {{ $contrats->enseignant->nom ?? '' }}
                                                {{ $contrats->enseignant->prenom ?? '' }}

                                            </td>
                                            <td>{{ $contrats->date_debut }}</td>
                                            <td>
                                                <a href="" class="update" data-name="date_fin" data-type="text"
                                                    data-pk="{{ $contrats->id }}" data-title="Enter name">

                                                    {{ $contrats->date_fin }}
                                                </a>

                                            </td>
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

                    </div>
                </div>
            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <h4 style="font-style: italic" class="mx-2 my-2">Nouveau Contrat</h4>
                        <hr>

                        <div class="col-12">
                            <form action="{{ route('save.contrat') }}" method="POST">

                                @csrf

                                <label for="">ENSEIGNANT</label>
                                <select name="enseignant" id="" class="form-control my-2">
                                    @foreach ($enseignant as $ens)
                                        <option value="{{ $ens->id }}">{{ $ens->nom }} {{ $ens->prenom }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="">DATE DEBUT</label>
                                <input type="date" class="form-control my-2" name="date_debut">
                                <label for="">DATE FIN</label>
                                <input type="date" class="form-control my-2" name="date_fin">
                                <label for="">FICHIER SCANNé</label>
                                <input type="file" class="form-control my-2" name="file">
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
        @endsection
