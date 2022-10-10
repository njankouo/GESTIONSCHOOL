@extends('layouts.master')

@section('title', 'gestion des congés')

@section('contenu')
    <div class="col-lg-6">
        <div class="card" style="margin-top: 10%">
            <div class="card-body">
                <div class="card-title">
                    <h4 style="font-style: italic" class="mx-4 my-2">AJOUT DES CONGES</h4>
                </div>
                <hr>
                <form method="POST" action="{{ route('new.conge') }}">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Concerné</label>
                        <select name="enseignant" id="" class="form-control">
                            <option value="">...</option>
                            @foreach ($enseignant as $ens)
                                <option value="{{ $ens->id }}">{{ $ens->nom }} {{ $ens->prenom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="input-3">Date Debut</label>
                        <input type="date" name="date_debut" class="form-control" id="input-3"
                            placeholder="Enter Your Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="input-4">Date Fin</label>
                        <input type="date" name="date_fin" class="form-control" id="input-4"
                            placeholder="Enter Password">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-success px-5"><i class="icon-lock"></i> Register</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-footer bg-primary"></div>
    </div>
@stop
