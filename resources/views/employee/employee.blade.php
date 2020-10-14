@extends('layouts.employee-boilerplate')

@section('content')
<nav class="topnav navbar navbar-expand-sm sticky-top">
    <!--Logo-->
    <a class="navbar-brand" href="dashboard.html">
        <img src="/assets/kclogo.png" alt="logo" width="50px">
    </a>
    <!--Links-->
    <ul class="navbar-nav">
        @if ($user->level == 3)
            <li class="nav-item">
                <a class="message nav-link" href="{{route('admin.dash')}}">Enter Admin Mode</a>
            </li>
        @endif
    </ul>
    <!--Profile-->
    <div class="btn-group" style="margin-left: auto;">
        <img class="bell-icon" src="/assets/bell.svg" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="notification dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <div class="notification-header d-flex justify-content-between">
                <h6>Notifications</h6>
                <a id="dismiss" href="#">Dismiss All</a>
            </div>
            <div class="notif-wrapper" id="notifications">
            </div>
        </div>
        <button type="button" class="name btn"><a href="#" class="text-body text-decoration-none">{{$user->name}}</a></button>
        <button type="button" class="btn"><img src="{{$user->profile_picture}}" alt="avatar" width="30px" height="30px" style="border-radius: 50%"></button>
        <div class="dropdown">
            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Edit Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
<!--Side Nav-->
<div class="sidenav">
    <ul class="list-group list-group-flush" style="text-align: center;">
            <a class="list-group-item list-group-item-action text-dark" style="background-color: #D4D4D4;" href="#">Dashboard</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.assign')}}">Assign a work</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.files')}}">Files</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.share')}}">Shared files</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.intern')}}">Interns</a>
            <div class="dropdown dropright">
                <button type="button" class="btn btn-block dropdown-toggle" data-toggle="dropdown">Request for leave</button>
                <div class="dropdown-menu" style="text-align: center;">
                    <a class="dropdown-item" href="#">Sick Leave</a>
                    <a class="dropdown-item" href="#">Vacation Leave</a>
                    <a class="dropdown-item" href="#">Maternity Leave</a>
                    <a class="dropdown-item" href="#">Paternity Leave</a>
                    <a class="dropdown-item" href="#">Parental Leave</a>
                    <a class="dropdown-item" href="#">Bereavement</a>
                    <a class="dropdown-item" href="#">Calamity Leave</a>
                    <a class="dropdown-item" href="#">Rehabilitation Leave</a>
                </div>
            </div>
    </ul>
    <footer class="footer">
        <small>Knowledge Channel Foundation Inc. | © 2020</small>
    </footer>
</div>
<!--main-->
<div class="main">main</div>
<div class="dashboard">
    <div class="header navbar-expand-sm">
        <h5>Juan's Work | IT Department</h5>
    </div>
    <div class="row">
        <div class="left navbar-expand-sm col-sm-6.5">
            Assigned Tasks/Works<hr>
        </div>
        <div class="right navbar-expand-sm col-sm-6.5">
            Completed Tasks/Works<hr>
        </div>
    </div>
    <div class="row">
        <!--Assigned Tasks/Works-->
        <div class="left-body col-sm-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#lone">
                    <img src="/assets/task.png" alt="tasks" width="20px" height="20px">
                    Create UI/UX for Intern Panel
                    <div class="dropdown dropleft" style="float: right;">
                        <img class="cursor" data-toggle="dropdown" src="/assets/option.png" alt="options" width="20px" height="20px">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Add file</a>
                            <a class="dropdown-item" href="#">Mark as done</a>
                        </div>
                    </div>
                </li>
                <div id="lone" class="collapse">
                    <div class="card-body" style="color: #666666;">
                        Description
                    </div>
                </div>
                <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#ltwo">
                    <img src="/assets/task.png" alt="tasks" width="20px" height="20px">
                    Create UI/UX for Administrator
                    <div class="dropdown dropleft" style="float: right;">
                        <img class="cursor" data-toggle="dropdown" src="/assets/option.png" alt="options" width="20px" height="20px">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Add file</a>
                            <a class="dropdown-item" href="#">Mark as done</a>
                        </div>
                    </div>
                </li>
                <div id="ltwo" class="collapse">
                    <div class="card-body" style="color: #666666;">
                        Description    
                    </div>
                </div>
                <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#lthree">
                    <img src="/assets/task.png" alt="tasks" width="20px" height="20px">
                    Create UI/UX Design for Interns
                    <div class="dropdown dropleft" style="float: right;">
                        <img class="cursor" data-toggle="dropdown" src="/assets/option.png" alt="options" width="20px" height="20px">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Add file</a>
                            <a class="dropdown-item" href="#">Mark as done</a>
                        </div>
                    </div>
                </li>
                <div id="lthree" class="collapse">
                    <div class="card-body" style="color: #666666;">
                        Description    
                    </div>
                </div>
                <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#lfour">
                    <img src="/assets/task.png" alt="tasks" width="20px" height="20px">
                    Create UI/UX for Admin Panel
                    <div class="dropdown dropleft" style="float: right;">
                        <img class="cursor" data-toggle="dropdown" src="/assets/option.png" alt="options" width="20px" height="20px">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Add file</a>
                            <a class="dropdown-item" href="#">Mark as done</a>
                        </div>
                    </div>
                </li>
                <div id="lfour" class="collapse">
                    <div class="card-body" style="color: #666666;">
                        Description
                    </div>
                </div>
            </ul>
        </div>
        <!--Completed Tasks/Works-->
        <div class="right-body col-sm-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#rone">
                    <img src="/assets/task.png" alt="tasks" width="20px" height="20px">
                    Login UI/UX Design
                    <div class="dropdown dropleft" style="float: right;">
                        <img class="cursor" data-toggle="dropdown" src="/assets/option.png" alt="options" width="20px" height="20px">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View</a>
                            <a class="dropdown-item" href="#">Edit</a>
                        </div>
                    </div>
                </li>
                <div id="rone" class="collapse">
                    <div class="card-body" style="color: #666666;">
                        Done
                    </div>
                </div>
                <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#rtwo">
                    <img src="/assets/task.png" alt="tasks" width="20px" height="20px">
                    Main Web Platform Landing Page
                    <div class="dropdown dropleft" style="float: right;">
                        <img class="cursor" data-toggle="dropdown" src="/assets/option.png" alt="options" width="20px" height="20px">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View</a>
                            <a class="dropdown-item" href="#">Edit</a>
                        </div>
                    </div>
                </li>
                <div id="rtwo" class="collapse">
                    <div class="card-body" style="color: #666666;">
                        Done
                    </div>
                </div>
                <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#rthree">
                    <img src="/assets/task.png" alt="tasks" width="20px" height="20px">
                    Upload Main Laravel Component to Github
                    <div class="dropdown dropleft" style="float: right;">
                        <img class="cursor" data-toggle="dropdown" src="/assets/option.png" alt="options" width="20px" height="20px">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View</a>
                            <a class="dropdown-item" href="#">Edit</a>
                        </div>
                    </div>
                </li>
                <div id="rthree" class="collapse">
                    <div class="card-body" style="color: #666666;">
                        Done  
                    </div>
                </div>
                <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#rfour">
                    <img src="/assets/task.png" alt="tasks" width="20px" height="20px">
                    Connect Landing Page to Backend
                    <div class="dropdown dropleft" style="float: right;">
                        <img class="cursor" data-toggle="dropdown" src="/assets/option.png" alt="options" width="20px" height="20px">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View</a>
                            <a class="dropdown-item" href="#">Edit</a>
                        </div>
                    </div>
                </li>
                <div id="rfour" class="collapse">
                    <div class="card-body" style="color: #666666;">
                        Done
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
@endsection
