<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $.fn.poshytip = {
        defaults: null
    }
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js">
</script>
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">

@extends('layouts.master')

@section('title', 'gestion des utilisateurs')

@section('contenu')





    <div class="card" style="margin-top: 8%">
        <div class="card-title">

            <h4 style="margin-left:15px;font-style:italic;font-size:25px" class="my-4">Repertoire des Utilisateurs</h4>

            <button class="btn btn-primary mx-2" style="float: right" data-toggle="modal"
                data-target=".bd-example-modal-lg">
                Nouveau Utilisateur
            </button>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="left_modal"
            data-backdrop="false">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <h4 style="font-style: italic" class="mx-4 my-4">formulaire Ajout Des Utilisateurs</h4>
                    <hr>

                    <div class="col-12">
                        <form action="{{ route('add.user') }}" method="POST">

                            @csrf

                            <label for="">Nom</label>
                            <input type="text" class="form-control my-2 @error('nom') is-invalid @enderror"
                                name='nom'>
                            <br>
                            <label for="">E-mail</label>
                            <input type="email" class="form-control" name="email">
                            <br>
                            <label for="">Telephone</label>
                            <input type="tel" name="telephone" id="" class="form-control">
                            <br>
                            <label for="">Sexe</label>
                            <select name="sexe" id="" class="form-control">
                                <option value="">.........</option>
                                <option value="f">Feminin</option>
                                <option value="m">Masculin</option>
                            </select>
                            <input type="reset" class="btn btn-danger my-2" href value="annuler" data-dismiss="modal">
                            <input type="submit" class="btn btn-success my-2" href value="valider">
                        </form>
                        @error('nom')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card-body ">
        <div class="table-responsive-sm">
            <table class="table table-striped data-table" id="example">
                <thead>
                    <tr>
                        <th>nom</th>
                        <th>sexe</th>
                        <th>telephone</th>
                        <th>Role</th>
                        <th>Opération</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $users)
                        <tr>
                            <td>
                                <a href="" class="update" data-name="nom" data-type="text"
                                    data-pk="{{ $users->id }}" data-title="Enter name">

                                    {{ $users->nom }}
                                </a>
                            </td>

                            </td>
                            <td>
                                @if ($users->sexe == 'f')
                                    <img src="{{ asset('images/logo/lien.png') }}" alt="" style="width:30px">
                                @else
                                    <img src="{{ asset('images/logo/lion.png') }}" alt="" style="width:30px">
                                @endif
                            </td>
                            <td>{{ $users->telephone }}</td>
                            <td>{{ $users->role->libelle ?? '' }}</td>
                            <td>
                                <a href="{{ route('edit.user', $users->id) }}" class="btn btn-success">
                                    <i class="fa fa-pencil fa-2x"></i>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $.noConflict();
            $('#example').DataTable(

            );
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
            url: "{{ route('users.update') }}",
            type: 'text',
            pk: 1,
            nom: 'nom',
            title: 'Enter name'
        });
    </script>

@stop
