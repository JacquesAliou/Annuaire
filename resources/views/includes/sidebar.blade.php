

<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
     *********************************************************************************************************************************************************** -->

<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <h5 class="centered">{{Session::get('nom')}}</h5>
            <h6 class="centered color-lightgrey">[ Profil : {{Session::get('profil')}} ]</h6>
            <br/>
            <li>
                <a class="{{ Request::is('accueil') ? 'active' : '' }}" href="{{url('accueil')}}">
                    <i class="fa fa-home"></i>
                    <span>Accueil</span>
                </a>
            </li>
            <li>
                <a class="{{ Request::is('rechercher-projet') ? 'active' : '' }}{{ Request::is('modifier-projet/*') ? 'active' : '' }}" href="{{url('rechercher-projet')}}">
                    <i class="fa fa-search"></i>
                    <span>Rechercher des projets</span>
                </a>
            </li>
            <li>
                <a class="{{ Request::is('ajouter-projet') ? 'active' : '' }}" href="{{url('ajouter-projet')}}">
                    <i class="fa fa-plus-square"></i>
                    <span>Ajouter des projets</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Consulter les stats</span>
                </a>
            </li>
            @if (Session::get('profil') == "admin")
                <li>
                    <a href="#">
                        <i class="fa fa-download"></i>
                        <span>Exporter les données</span>
                    </a>
                </li>
            @endif
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
