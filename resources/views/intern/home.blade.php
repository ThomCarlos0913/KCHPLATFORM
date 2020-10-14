@extends('layouts.intern-boilerplate')

@section('content')
<div class="banner d-flex justify-content-between align-items-end">
    <div class="banner-info h-100 d-flex flex-column justify-content-between">
        <div>
            <h1 class="banner-department">{{$user->department}}</h1>
            <h2 class="banner-bactch">KCH Intern 2020</h2>
        </div>
        <div>
            <h3 class="banner-information"><span>Supervisor: </span><span class="info">Charles Kevin Crisostomo</span></h3>
            <h3 class="banner-information"><span>Total Hours: </span><span class="info">240Hrs</span></h3>
        </div>
    </div>
    <div class="banner-img">
        <img src="/assets/it-dept.svg" alt="IT Department Banner Image" width="90%"/>
    </div>
</div>
<div class="row panel-container">
    <div class="col-sm-7 panel-column">
        <div class="dashboard-panel work-panel">
            <h1 class="panel-header">Tasks / Works Assigned</h1>
            @if (count($tasks) == 0)
                <div class="no-data h-100 d-flex flex-column justify-content-center align-items-center">
                    <img src="/assets/no-data.svg" alt="No Data Available" width="300px">
                    <p>You currently have no task.</p>
                </div>
            @else
                @foreach ($tasks as $task)
                    <div class="task-container d-flex">
                        <img src="/assets/task-icon.svg" alt="Task Icon">
                        <div class="w-100 d-flex justify-content-between align-items-center"> 
                            <div class="task-thumbnail d-flex flex-column">
                                <h1 class="task-header">{{$task->task_name}}</h1>
                                <p>{{date("M d, Y", strtotime($task->task_date_created))}}</p>
                            </div>
                            <span>
                                <img class="task-ellipsis" src="/assets/ellipsis.svg" alt="ellipsis" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/intern/task/{{$task->task_id}}">View Task</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reportModal">Report Abuse</a>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Report Abuse</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <a href="#" id="Task-{{$task->task_assigned_by}}-{{$user->name}}" class="button button-report">Spam</a>
                                    <a href="#" id="Task-{{$task->task_assigned_by}}-{{$user->name}}" class="button button-report">Sexually Explicit</a>
                                    <a href="#" id="Task-{{$task->task_assigned_by}}-{{$user->name}}" class="button button-report">Violent or Dangerous</a>
                                    <a href="#" id="Task-{{$task->task_assigned_by}}-{{$user->name}}" class="button button-report">Hate speech, Harassment, or Bullying</a>
                                    <a href="#" id="Task-{{$task->task_assigned_by}}-{{$user->name}}" class="button button-report">Personal and Confidential Information</a>
                                    <a href="#" id="Task-{{$task->task_assigned_by}}-{{$user->name}}" class="button button-report">Copyright / Legal Violation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="col-sm-5 panel-column">
        <div class="dashboard-panel">
            <h1 class="panel-header">Application Stream</h1>
            @if (count($stream) > 0)
                @foreach ($stream as $entry)
                    <div class="entry">
                        <p class="message">{{$entry->stream_message}}</p>
                        <p class="date">{{date('d M y, h:i a', strtotime($entry->created_at))}}</p>
                    </div>
                @endforeach
            @else
                <div class="no-data h-100 d-flex flex-column justify-content-center align-items-center">
                    <img src="/assets/no-data.svg" alt="No Data Available" width="300px">
                    <p>Application stream is currently empty</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection