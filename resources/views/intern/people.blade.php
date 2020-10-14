@extends('layouts.intern-boilerplate')

@section('content')
<div class="row main-container">
    <div class=" col-sm-4 panel-container">
        <div class="people-panel">
            <h1 class="panel-header">IT Department</h1>
            @if (count($it_interns) > 0)
                @foreach ($it_interns as $intern)
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="panel-user department-intern"><img class="user-pic" src="{{asset($intern->profile_picture)}}" alt="user icon" width="30px"> {{$intern->name}}</p>
                        <span>
                            <i class="people-ellipsis fas fa-ellipsis-v" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/intern/profile/{{$intern->id}}">View Profile</a>
                                @if ($intern->id != Auth::user()->id)
                                    <a id="{{$intern->id}}" class="send-message-button dropdown-item" href="#">Send Message</a>
                                @endif
                            </div>
                        </span>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class=" col-sm-4 panel-container">
        <div class="people-panel">
            <h1 class="panel-header">Animation Department</h1>
            @if (count($animation_interns) > 0)
                @foreach ($animation_interns as $intern)
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="panel-user department-intern"><img class="user-pic" src="{{asset($intern->profile_picture)}}" alt="user icon" width="30px"> {{$intern->name}}</p>
                        <span>
                            <i class="people-ellipsis fas fa-ellipsis-v" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/intern/profile/{{$intern->id}}">View Profile</a>
                                @if ($intern->id != Auth::user()->id)
                                    <a id="{{$intern->id}}" class="send-message-button dropdown-item" href="#">Send Message</a>
                                @endif
                            </div>
                        </span>
                    </div>
                @endforeach       
            @endif
        </div>
    </div>
    <div class=" col-sm-4 panel-container">
        <div class="people-panel">
            <h1 class="panel-header">Writing Department</h1>
            @if (count($writing_interns) > 0)
                @foreach ($writing_interns as $intern)
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="panel-user department-intern"><img class="user-pic" src="{{asset($intern->profile_picture)}}" alt="user icon" width="30px"> {{$intern->name}}</p>
                        <span>
                            <i class="people-ellipsis fas fa-ellipsis-v" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/intern/profile/{{$intern->id}}">View Profile</a>
                                @if ($intern->id != Auth::user()->id)
                                    <a id="{{$intern->id}}" class="send-message-button dropdown-item" href="#">Send Message</a>
                                @endif
                            </div>
                        </span>
                    </div>
                @endforeach           
            @endif
        </div>
    </div>
</div>
@endsection