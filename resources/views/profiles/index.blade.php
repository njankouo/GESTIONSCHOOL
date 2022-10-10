@extends('layouts.master')

@section('contenu')
    <div class="col-md-6 col-lg-4" style="margin-top:15%;">
        <div class="full white_shd margin_bottom_30">
            <div class="info_people">
                <div class="p_info_img">
                    <img src="{{ asset('images/logo/lion.png') }}" alt="#">
                </div>
                <div class="user_info_cont">
                    <h4>{{ Auth()->user()->nom }}{{ Auth()->user()->prenom }}</h4>
                    <p>{{ Auth()->user()->email }}</p>
                    <p class="p_status">{{ Auth()->user()->role->libelle }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
