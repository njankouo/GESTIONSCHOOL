<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <img class="logo_icon img-responsive" src="{{ asset('images/logo/lion.png') }}" />
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img">
                    <img class="img-responsive" src="{{ asset('images/logo/lion.png') }}" />
                </div>
                <div class="user_info">
                    <h6 class="ellipsis">{{ Auth()->user()->nom ?? '' }}
                    </h6>
                    <p><span class="online_animation"></span> {{ Auth()->user()->role->libelle ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{ route('home') }}"><i class="fa fa-dashboard yellow_color"></i> <span>Tableau de
                        bord</span></a>
                {{-- <ul class="collapse list-unstyled" id="dashboard">
                    <li>
                        <a href="dashboard.html">> <span>Default Dashboard</span></a>
                    </li>
                    <li>
                        <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                    </li>
                </ul> --}}
            </li>
            <li><a href="{{ route('utilisateurs') }}"><i class="fa fa-users orange_color"></i>
                    <span>Utilisateurs</span></a>
            </li>
            <li>
                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-diamond purple_color"></i> <span>Inscription</span></a>
                <ul class="collapse list-unstyled" id="element">
                    <li><a href="{{ route('eleve') }}"><i class="fa fa-sort"></i> <span>Liste des ??l??ves</span></a></li>
                    {{-- <li><a href="media_gallery.html"><i class="fa fa-sort"></i> <span>Liste des ??l??ves
                                Inscrits</span></a></li> --}}
                    {{-- <li><a href="icons.html">> <span>Icons</span></a></li>
                    <li><a href="invoice.html">> <span>Invoice</span></a></li> --}}
                </ul>
            </li>
            <li><a href="{{ route('conge.index') }}"><i class="fa fa-table purple_color2"></i> <span>Cong??s</span></a>
            </li>
            <li>
                <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-object-group blue2_color"></i> <span>Cours</span></a>
                <ul class="collapse list-unstyled" id="apps">
                    <li><a href="{{ route('cours.liste') }}"><i class="fa fa-sort"></i> <span>Liste des Cours</span></a>
                    </li>
                    {{-- <li><a href="calendar.html"><i class="fa fa-sort"></i> <span>Calendar</span></a></li>
                    <li><a href="media_gallery.html"><i class="fa fa-sort"></i> <span>Media Gallery</span></a></li> --}}
                </ul>
            </li>
            <li><a href="{{ route('enseignant') }}"><i class="fa fa-briefcase blue1_color"></i> <span>Enseignants
                    </span></a></li>
            <li>
                <a href="{{ route('salle') }}"class="hover">
                    <i class="fa fa-institution red_color"></i> <span>Classes</span></a>
            </li>

            <li class="active">
                <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-clone yellow_color"></i> <span>Mati??res
                    </span></a>
                <ul class="collapse list-unstyled" id="additional_page">
                    <li>
                        <a href="{{ route('groupe') }}"><i class="fa fa-sort"></i><span>Groupe Mati??res</span></a>
                    </li>
                    <li>
                        <a href="{{ route('list.matiere') }}"><i class="fa fa-sort"></i> <span>Liste
                                Mati??res</span></a>
                    </li>
                    <li>
                        <a href="{{ route('add.matieres') }}"><i class="fa fa-sort"></i><span>Classe
                                Mati??res</span></a>
                    </li>

                </ul>
            </li>
            <li><a href="{{ route('annee') }}"><i class="fa fa-table purple_color2"></i> <span>Ann??e
                        Scolaire</span></a>
            </li>
            <li><a href="{{ route('contrat.index') }}"><i class="fa fa-pencil-square-o"></i> <span>Contrats</span></a>
            </li>
            <li><a href="{{ route('index.examen') }}"><i class="fa fa-pencil green_color"></i> <span>Examens</span></a>
            </li>
            <li><a readonly><i class="fa fa-map purple_color2"></i> <span>Notes</span></a></li>
            <li><a href="{{ route('sanction.index') }}"><i class="fa fa-bar-chart-o green_color"></i>
                    <span>Sanctions</span></a></li>
            <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a>
            </li>
        </ul>
    </div>
</nav>
