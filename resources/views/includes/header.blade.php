

<!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
     *********************************************************************************************************************************************************** -->

<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips color-white" data-placement="right"></div>
    </div>
    <!--logo start-->
    <a href="{{url('annuire-projets')}}" class="logo"><b>Annuaire<span>ProjetsDPLI</span></b></a>



    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class="logout" href="{{url('logout')}}">Se déconnecter</a></li>
        </ul>
    </div>

    {{--<div class="dropdown notification-bell pull-right hidden-sm-down">--}}

        {{--<a class="btn btn-secondary dropdown-toggle" href="#" id="notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--<i id="notificationsIcon" class="fa fa-bell" aria-hidden="true"></i>--}}
            {{--<span id="notificationsBadge" class="badge badge-danger">2<i aria-hidden="true"></i></span>--}}
        {{--</a>--}}
        {{--<!-- NOTIFICATIONS -->--}}
        {{--<div class="dropdown-menu notification-dropdown-menu" aria-labelledby="notifications-dropdown">--}}
            {{--<h6 class="dropdown-header">Les Notifications</h6>--}}
            {{--<ul>--}}
                {{--@foreach($request->session()->has('users')->notifications as $notification)--}}
                    {{--<li><a href="#">{{$notification->data['data']}}</a></li>--}}
                {{--<li><a href="#">Notif 1</a></li>--}}
                {{--<li><a href="#">Notif 2</a></li>--}}
                {{--<li><a href="#">Notif 3</a></li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
</header>
