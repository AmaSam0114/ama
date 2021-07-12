<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"/>

        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">    

        <script src="{{asset('js/main.js')}}"></script>


    </head>
    <body>

        @guest
        <section class="fluid-container px-3">
            <div class="row">
                <main class="col-sm-12">
                    @yield('content')
                </main>
            </div>
        </section>
        @else
        <section class="fluid-container">
            <div class="row">
                <aside class="col-sm-2 sidebar">
                    <div class="profile-section">
                        <div class="profile-wrapper">
                            <div class="display-picture">
                                <img class="img-thumbnail" alt="Image Of user" src="{{ asset('images/user-01.jpg')}}"/>
                            </div>
                            <div class="name-tag text-center h4 mb-0">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="user-role">
                                <p class="lead text-center">{{ ucfirst(Auth::user()->role) }}</p>
                            </div>

                        </div>
                    </div>
                    <div class="nav-side-menu">


                        <div class="menu-list">
                            <ul id="menu-content" class="menu-content collapse out">
                                <li class="{{ routeParent('home')? 'active' : '' }}">
                                    <i class="fa fa-dashboard fa-lg"></i>
                                    <a href="{{route('home')}}">Dashboard</a>
                                </li>

                                <li  data-toggle="collapse" data-target="#products" class="collapsed {{ routeParent('notification')? 'active' : ''}}">
                                    <i class="fa fa-bell fa-lg"></i> <a href="#">Notifications<span class="arrow"></span></a>
                                </li>
                                <ul class="sub-menu collapse {{ routeParent('notification')? 'show' : ''}}" id="products">
                                    <li class="{{routeChild('notification.read')? 'active': ''}}"><i class="fa fa-envelope-open-o" aria-hidden="true"></i><a href="{{route("notification.read")}}">Read</a></li>
                                    <li class="{{routeChild('notification')? 'active': ''}}"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="{{route('notification')}}">Unread</a></li>

                                </ul>


                                <li data-toggle="collapse" data-target="#service" class="collapsed {{routeParent('job') || routeParent('cycle') ? 'active' : ''}}">
                                    <i class="fa fa-archive fa-lg"></i> <a href="#">Jobs<span class="arrow"></span></a>
                                </li>  
                                <ul class="sub-menu collapse {{routeParent('job') || routeParent('cycle')? 'show' : ''}}" id="service">
                                    <li class="{{routeChild('job.listing')? 'active': ''}}"><i class="fa fa-list-alt" aria-hidden="true"></i><a href="{{route('job.listing')}}">Job Listing</a></li>
                                    @role(['manager'])
                                    <li class="{{routeChild('job.create')? 'active': ''}}"><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="{{route('job.create')}}">Job Create</a></li>
                                    @endrole
                                    <li class="{{routeChild('job.calender')? 'active': ''}}"><i class="fa fa-calendar" aria-hidden="true"></i><a href="{{route('job.calender')}}">Job Calender</a></li>
                                </ul>

                                @role(['manager', 'supervisor'])
                                <li data-toggle="collapse" data-target="#new" class="collapsed {{routeParent('employee')? 'active' : ''}}">
                                    <i class="fa fa-users fa-lg"></i>    <a href="#">Employees <span class="arrow"></span></a>
                                </li>
                                <ul class="sub-menu collapse {{routeParent('employee')? 'show' : ''}}" id="new">
                                    <li class="{{routeChild('employee.listing')?'active' : ''}}"><i class="fa fa-list-alt" aria-hidden="true"></i><a href="{{route('employee.listing')}}">Employee Listing</a></li>
                                    <li class="{{routeChild('employee.create')?'active' : ''}}"><i class="fa fa-user-plus" aria-hidden="true"></i><a href="{{route('employee.create')}}">Employee Create</a></li>
                                    <li class="{{routeChild('employee.attendance')?'active' : ''}}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><a href="{{route('employee.attendance')}}"> Attendance</a></li>
                                </ul>
                                @endrole

                                @role(['manager'])
                                <li data-toggle="collapse" data-target="#emp" class="collapsed {{routeParent('client')?'active':''}}">
                                    <i class="fa fa-user-circle-o fa-lg"></i>
                                    <a href="#">Clients<span class="arrow"></span>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse {{routeParent('client')?'show':''}}" id="emp">
                                    <li class="{{routeChild('client.listing')?'active': ''}}"><i class="fa fa-list-alt" aria-hidden="true"></i><a href="{{route('client.listing')}}">Client Listing</a></li>
                                    <li class="{{routeChild('client.create')?'active': ''}}"><i class="fa fa-user-plus" aria-hidden="true"></i><a href="{{route('client.create')}}">Client Create</a></li>
                                    <li class="{{routeChild('client.invoice')?'active': ''}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i><a href="{{route('client.invoice')}}">Invoices</a></li>
                                </ul>


                                <li data-toggle="collapse" data-target="#report" class="collapsed {{routeParent('report')?'active':''}}">
                                    <i class="fa fa-pie-chart fa-lg"></i> 
                                    <a href="#">Reports<span class="arrow"></span>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse {{routeParent('report')?'show':''}}" id="report">
                                    <li><i class="fa fa-bar-chart" aria-hidden="true"></i><a href="{{route('report.view')}}">Annual Job Periods Report</a></li>
                                    <li><i class="fa fa-bar-chart" aria-hidden="true"></i><a href="{{route('report.view')}}">Annual Service Report</a></li>
                                    <li><i class="fa fa-bar-chart" aria-hidden="true"></i><a href="{{route('report.view')}}">Annual Employee Proformance</a></li>
                                </ul>
                                @endrole
                                @role(['client'])
                                <li class="{{ routeParent('contact')? 'active' : '' }}">
                                   <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    <a href="{{route('contact')}}">Contact Green Lanka</a>
                                </li>
                                @endrole
                            </ul>
                        </div>
                    </div>
                </aside>
                <main class="col-sm-10 py-5">
                    @yield('content')
                </main>
            </div>
        </section>
        @yield('modal')
        @endguest
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.25/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>



        <script>
function initMap() {
    // The location of Uluru
    const uluru = {lat: 6.96974205624532, lng: 79.91337891053709};
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("gl-map"), {
        zoom: 10,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}

jQuery(document).ready(function () {
    jQuery('.gl-datatable').DataTable();




});
        </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHQJdGUtlDMkfgqW_zx9LdInC26KltGlQ&callback=initMap">
        </script>
    </body>
</html>
