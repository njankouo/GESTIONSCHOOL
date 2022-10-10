@extends('layouts.master')

@section('title', 'gestion des utilisateurs')

@section('contenu')
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="margin-top: 10%">
                <div class="card-body">
                    <div class="card-title">
                        <h4 style="font-style: italic" class="mx-2 my-4"> Gest Utilisateurs</h4>
                    </div>
                    <hr>
                    <form method="POST" action="{{ route('user.upgrade', ['user' => $user->id]) }}">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name"
                                value="{{ $user->nom }}" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Email</label>
                            <input type="text" class="form-control" id="input-2" placeholder="Enter Your Email Address"
                                value="{{ $user->email }}" name="email">
                        </div>
                        <div class="form-group">
                            <label for="input-3">Mobile</label>
                            <input type="text" class="form-control" id="input-3" placeholder="Enter Your Mobile Number"
                                value="{{ $user->telephone }}" name="telephone">
                        </div>
                        <div class="form-group">
                            <label for="input-4">SEXE</label>
                            <input type="text" class="form-control" id="input-4" placeholder='sexe'
                                value="{{ $user->sexe }}" name="sexe">
                        </div>
                        <div class="form-group">
                            <label for="input-5">Password</label>
                            <input type="password" class="form-control" id="input-5" placeholder=" Password"
                                name="password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success px-5"><i class="icon-lock"></i> Register</button>
                            <a type="button" class="btn btn-danger px-5" href="{{ route('utilisateurs') }}"><i
                                    class="icon-lock"></i> Retour</a>

                        </div>

                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card" style="margin-top: 15%">
                <div class="card-title">
                    <h4 style="font-style: italic" class="mx-2 my-4">Roles</h4>
                    <hr>
                </div>

                <div class="card-body">
                    <div class="form-group py-2">
                        <div class="icheck-material-white">

                            @foreach ($role as $roles)
                                @if ($user->role_id == $roles->id)
                                    <td>
                                        <label> {{ $roles->libelle }}</label>
                                        <input type="checkbox" name="role" value="{{ $roles->id }}" checked><br>
                                    </td>
                                @else
                                    <td>
                                        <label> {{ $roles->libelle }}</label>
                                        <input type="checkbox" name="role" value="{{ $roles->id }}"><br>
                                    </td>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="card-footer bg-primary"></div>
        </div>
    </div>
@stop
