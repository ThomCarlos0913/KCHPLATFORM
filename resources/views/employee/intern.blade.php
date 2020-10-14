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
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.dashboard')}}"">Dashboard</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.assign')}}"">Assign a work</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.files')}}"">Files</a>
            <a class="list-group-item list-group-item-action text-dark" href="{{route('employee.share')}}"">Shared files</a>
            <a class="list-group-item list-group-item-action text-dark" style="background-color: #D4D4D4;" href="#">Interns</a>
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
<div class="dashboard assign-dash">
    <!--Nav Tabs-->
    <ul class="intern-tabs nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active text-body" data-toggle="tab" href="#tab1">My Interns</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-body" data-toggle="tab" href="#tab2">Grade Interns Task/Work</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-body" data-toggle="tab" href="#tab3">Interns</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-body" data-toggle="tab" href="#tab4">Add Interns</a>
          </li>
    </ul>
    <!--Tab Panel-->
    <div class="tab-content">
        <!--My Interns-->
        <div id="tab1" class="container tab-pane active"><br>
          <h3>{{Auth::user()->department}} | {{Auth::user()->name}}</h3><hr><br>
          <div class="list-group list-group-flush">
                @foreach ($users as $user)
                    <a href="#" class="list-group-item list-group-item-action">
                        <img src="/assets/male user.png" alt="avatar" width="40px">
                        {{$user->name}}
                    </a>
                @endforeach
          </div>
        </div>
        <!--Grades Tab-->
        <div id="tab2" class="container tab-pane fade"><br><br><br>
            <ul class="list-group list-group-flush">
                @foreach ($users as $user)
                    <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse_{{$user->id}}">
                        <img src="/assets/male user.png" alt="avatar" width="40px">
                        {{$user->name}}
                    </li>
                    <div id="collapse_{{$user->id}}" class="collapse">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach ($tasks as $task)
                                    @if ($task->intern_id == $user->id && $task->task_is_submitted == 1)
                                        <li class="list-group-item list-group-item-action">
                                            <img src="/assets/task.png" alt="task" width="40px">
                                            {{$task->task_name}} | Submitted on: {{date("M d, Y", strtotime($task->task_submitted_date))}} | 
                                            <a href="{{route('employee.download', ['name' => explode('/', $task->task_link)[3]])}}">
                                                <img src="/assets/attach.png" alt="attach" width="30px" data-toggle="tooltip" title="view" class="cursor">
                                            </a>
                                            @if ($task->task_grade == 0)
                                                <form class="form-inline float-right" action="{{route('employee.gradeWork', ['tid'=>$task->task_id])}}" method="POST">
                                                    @csrf
                                                    <input name="grade" id="grade"></input>
                                                    <button type="submit" class="btn">Done</button>
                                                </form>
                                            @else
                                                <span class="float-right">Given Grade: {{$task->task_grade}}</span>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
        <!--Interns Tab-->
        <div id="tab3" class="container tab-pane fade"><br><br>
            <ul class="list-group list-group-flush">
                @foreach ($departments as $department)
                    <li class="list-group-item list-group-item-action" data-target="#collapse_{{$department[2]}}" data-toggle="collapse">
                        <h5 style="color: #DD5523;">{{$department[0]}}</h5>
                    </li>
                    <div id="collapse_{{$department[2]}}" class="collapse">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action">
                                    <h5 style="color: #DD5523;"> Interns</h5>
                                </li>
                                <ul class="list-group list-group-flush">
                                    @if (count($department[1]) > 0)
                                        @foreach ($department[1] as $intern)
                                            <li class="list-group-item list-group-item-action">{{$intern->name}}</li>
                                        @endforeach
                                    @else
                                        <li class="list-group-item list-group-item-action">No Interns</li>
                                    @endif
                                </ul>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
        <!--Add Interns-->
        <div id="tab4" class="container tab-pane fade">
            <div class="row">
                <div class="col-sm-6" style="margin-bottom: 10px; padding-top: 20px">
                    @if (session()->has('message'))
                        <div class="alert alert-primary">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form action="{{route('employee.createIntern')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="firstname">Name:</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="dept">Assign to Department</label>
                            <select class="form-control form-control-sm" name="department" id="department">
                                <option selected disabled hidden>Select</option>
                                <option>IT Department</option>
                                <option>Animation Department</option>
                                <option>Writing Department</option>
                                <option>TransmediaTV Department</option>
                                <option>Marketing Department</option>
                                <option>HR, Admin, Finance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="school">School:</label>
                            <input type="text" class="form-control form-control-sm" id="school" name="school">
                        </div>
                        <div class="form-group">
                            <label for="school">Course:</label>
                            <input type="text" class="form-control form-control-sm" id="school" name="course">
                        </div>
                        <div class="form-group">
                            <label for="school">Year Level:</label>
                            <input type="text" class="form-control form-control-sm" id="school" name="level">
                        </div>
                        <div class="form-group">
                            <label for="school">Start Date:</label>
                            <input class="form-control form-control-sm" type="date" id="date" name="start">
                        </div>
                        <div class="form-group">
                            <label for="school">End Date:</label>
                            <input class="form-control form-control-sm" type="date" id="date" name="end">
                        </div>
                        <button type="submit" class="btn" style="background-color: #F7DA4A;">Add</button>
                    </form>
                </div>
                <div class="col-sm-6"><br>
                    <img src="/assets/desk.png" alt="logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
