<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/icon-48x48.png')}}">
    @yield('page-style')
 
</head>

<body>

    <div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="{{route('dashboard')}}" class="brand-logo">
                <span class="logo-abbr">A</span>
                <span class="brand-title">Account</span>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>

        <div class="header"> 
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="header-left">
                            <div class="nav-item dropdown search_bar">
                                <!-- <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </a> -->
                                <div class="dropdown-menu">
                                    <form class="form-inline">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end">
                            
                            <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-bell"></i>
                                        <span class="badge badge-primary">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-header">
                                            <h5 class="notification_title">Notifications</h5>
                                        </div>
                                        <ul class="list-unstyled">
                                            @foreach ($notifications as $notification)
                                                <li class="media dropdown-item">
                                                    <span class="text-primary">
                                                        <?php $object = $notification->actions;?>
                                                        @if($object =='update')
                                                            <i class="fas fa-user-edit mr-3"></i>
                                                        @elseif($object == "create")
                                                            <i class="fas fa-user-check mr-3"></i>
                                                        @elseif($object == "delete")
                                                            <i class="fas fa-user-times mr-3"></i>
                                                        @endif
                                                    </span>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <div class="d-flex justify-content-between">
                                                                <h5>{{$notification->objects}} has been {{$notification->actions}}d.</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <a class="all-notification" href="{{route('notiifcation')}}">All Notifications</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('storage/avatars/')}}/{{$user[0]->image}}" alt="">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-profile-header">
                                            <img src="{{ asset('storage/avatars/')}}/{{$user[0]->image}}" alt="">
                                            <span class="avatar-name ml-2">{{$user[0]->name}}</span>
                                        </div>
                                        <a href="{{ route('profile') }}" class="dropdown-item">
                                            <i class="mdi mdi-account"></i>
                                            <span>Profile</span>
                                        </a>
                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="mdi mdi-power"></i>
                                            <span>Logout</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                    <li><a href="{{route('client')}}"><i class="mdi mdi-table"></i><span class="nav-text">Client</span></a></li>
                    <li><a href="{{route('employee')}}"><i class="mdi mdi-table"></i><span class="nav-text">Employee</span></a></li>
                    <li><a href="{{route('notiifcation')}}"><i class="mdi mdi-table"></i><span class="nav-text">Logs</span></a></li>

                      

                    </ul>
                </div>
            </div>
        @yield('content')
        @yield('footer')
    </div>
    @yield('page-script')
</body>
</html>