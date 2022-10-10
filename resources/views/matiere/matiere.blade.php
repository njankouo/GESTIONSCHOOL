@extends('layouts.master')

@section('title', 'ajout des matiere')

@section('contenu')


    <div class="col-lg-6">
        <div class="card" style="margin-top: 10%">
            <div class="card-body">
                <div class="card-title">
                    <h4 style="font-style: italic" class="mx-4 my-2">Matiere Coffeciée</h4>
                </div>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="input-1">Classe</label>
                        <select name="classe" id="" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-2">Matière</label>
                        <select name="matiere" id="" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-3">Coefficient</label>
                        <input type="number" name="coef" id="" class="form-control">
                    </div>



                    <div class="form-group">
                        <button type="submit" class="btn btn-success px-5"><i class="icon-lock"></i> Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
