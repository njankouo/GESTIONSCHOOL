{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.master')
@section('contenu')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title d-flex">
                        <h2>Tableau de Bord</h2>
                    </div>
                </div>
            </div>
            @foreach ($contrat as $contrats)
                @if ($contrats->date_debut >= $contrats->date_fin)
                    <div class="alert alert-danger" role="alert"> LE CONTRAT DE {{ $contrats->enseignant->nom }}
                        {{ $contrats->enseignant->prenom }} EST A EXPIRATION </div>
                @endif
            @endforeach
            <div class="row column1">
                <div class="col-md-6 col-lg-3">
                    <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                            <div>
                                <i class="fa fa-users yellow_color"></i>
                            </div>
                        </div>
                        <div class="counter_no">
                            <div>
                                <p class="total_no">{{ \App\Models\User::count() }}</p>
                                <p class="head_couter">Utilisateurs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                            <div>
                                <i class="fa fa-smile-o blue1_color"></i>
                            </div>
                        </div>
                        <div class="counter_no">
                            <div>
                                <p class="total_no">{{ App\Models\Eleve::count() }}</p>
                                <p class="head_couter">Elèves</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                            <div>
                                <i class="fa fa-cloud-download green_color"></i>
                            </div>
                        </div>
                        <div class="counter_no">
                            <div>
                                <p class="total_no">{{ App\Models\Salle::count() }}</p>
                                <p class="head_couter">Classes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                            <div>
                                <i class="fa fa-comments-o red_color"></i>
                            </div>
                        </div>
                        <div class="counter_no">
                            <div>
                                <p class="total_no">{{ App\Models\Cycle::count() }}</p>
                                <p class="head_couter">Cycles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row column1 social_media_section">
                <div class="col-md-6 col-lg-3">
                    <div class="full socile_icons fb margin_bottom_30">
                        <div class="social_icon">
                            <i class="fa fa-database"></i>
                        </div>
                        <div class="social_cont">
                            <ul>

                                <li>
                                    <span><strong>{{ App\Models\Enseignant::count() }}</strong></span>
                                    <span>Enseignants</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="full socile_icons tw margin_bottom_30">
                        <div class="social_icon">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="social_cont">
                            <ul>

                                <li>
                                    <span><strong>Sanctions</strong></span>
                                    <span>{{ \App\Models\Sanction::count() }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="full socile_icons linked margin_bottom_30">
                        <div class="social_icon">
                            <i class="fa fa-star-half"></i>
                        </div>
                        <div class="social_cont">
                            <ul>

                                <li>
                                    <span><strong>Congés</strong></span>
                                    <span>{{ App\Models\Conge::count() }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="full socile_icons google_p margin_bottom_30">
                        <div class="social_icon">
                            <i class="fa fa-mortar-board"></i>
                        </div>
                        <div class="social_cont">
                            <ul>

                                <li>
                                    <span><strong>Contrats</strong></span>
                                    <span>{{ App\Models\Contrat::count() }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- graph -->

            <div class="row">
                <!-- invoice section -->
                <div class="col-md-12">
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2><i class="fa fa-calendar" aria-hidden="true"></i> Calendrier</h2>
                            </div>
                        </div>
                        <div class="full padding_infor_info">
                            <div class="invoice_inner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="white_shd full margin_bottom_30">
                                            <div class="full graph_head">
                                                <div class="heading1 margin_0">
                                                    <h2>Calendrier</h2>
                                                </div>
                                            </div>
                                            <div class="full progress_bar_inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="full">
                                                            <div class="ui calendar" id="example14">
                                                                <div class="calendar" tabindex="0">
                                                                    <table
                                                                        class="ui celled center aligned unstackable table seven column day">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7"><span
                                                                                        class="link">September
                                                                                        2022</span><span
                                                                                        class="prev link"><i
                                                                                            class="chevron left icon"></i></span><span
                                                                                        class="next link"><i
                                                                                            class="chevron right icon"></i></span>
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>S</th>
                                                                                <th>M</th>
                                                                                <th>T</th>
                                                                                <th>W</th>
                                                                                <th>T</th>
                                                                                <th>F</th>
                                                                                <th>S</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="link disabled">28</td>
                                                                                <td class="link disabled">29</td>
                                                                                <td class="link disabled">30</td>
                                                                                <td class="link disabled">31</td>
                                                                                <td class="link">1</td>
                                                                                <td class="link">2</td>
                                                                                <td class="link today">3</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="link">4</td>
                                                                                <td class="link">5</td>
                                                                                <td class="link">6</td>
                                                                                <td class="link">7</td>
                                                                                <td class="link">8</td>
                                                                                <td class="link">9</td>
                                                                                <td class="link">10</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="link">11</td>
                                                                                <td class="link">12</td>
                                                                                <td class="link">13</td>
                                                                                <td class="link">14</td>
                                                                                <td class="link">15</td>
                                                                                <td class="link">16</td>
                                                                                <td class="link">17</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="link">18</td>
                                                                                <td class="link">19</td>
                                                                                <td class="link">20</td>
                                                                                <td class="link">21</td>
                                                                                <td class="link">22</td>
                                                                                <td class="link">23</td>
                                                                                <td class="link">24</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="link">25</td>
                                                                                <td class="link">26</td>
                                                                                <td class="link focus">27</td>
                                                                                <td class="link">28</td>
                                                                                <td class="link">29</td>
                                                                                <td class="link">30</td>
                                                                                <td class="link disabled">1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="link disabled">2</td>
                                                                                <td class="link disabled">3</td>
                                                                                <td class="link disabled">4</td>
                                                                                <td class="link disabled">5</td>
                                                                                <td class="link disabled">6</td>
                                                                                <td class="link disabled">7</td>
                                                                                <td class="link disabled">8</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end graph -->


        </div>
        <!-- footer -->
        <div class="container-fluid">
            <div class="footer">
                <p>Copyright © 2022 Designed by NJANKOUO NDAM DAIROU. All rights reserved.<br><br>
                    Distributed By: <a href="">699-07-25-61</a>
                </p>
            </div>
        </div>
    </div>
@endsection
