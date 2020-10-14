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
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.dashboard')}}">Dashboard</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.assign')}}">Assign a work</a>
            <a class="list-group-item list-group-item-action text-dark" style="background-color: #D4D4D4;" href="#">Files</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.share')}}">Shared files</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.intern')}}"">Interns</a>
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
        <h5>Files</h5>
    </div>
    <div class="container">
        <img src="/assets/uc.png" alt="under construction" class="mx-auto d-block" style="width: 400px;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 50%;"></div>
        </div>
        <br>
        <h5 class="text-dark" style="text-align: center;">UNDER CONSTRUCTION</h5>
    </div>
</div>
@endsection
