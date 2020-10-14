@extends('layouts.intern-boilerplate')

@section('content')
<div class="work-panel">
    <div class="header d-flex justify-content-between align-items-end">
        <h1 class="panel-header">{{explode(' ', $user->name)[0]}}'s Tasks</h1>
    </div>
    <div class="filter d-flex justify-content-between">
        <div>
            <span class="other-work" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Change Filter <i class="filter-icon fas fa-caret-down"></i></span>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/intern/work/all">All</a>
                <a class="dropdown-item" href="/intern/work/submitted">Submitted</a>
                <a class="dropdown-item" href="/intern/work/unfinished">Unfinished</a>
                <a class="dropdown-item" href="/intern/work/due">Due</a>
            </div>
        </div>
        <span>Current Filter: {{$filter}}</span>
    </div>
    @if (count($tasks) > 0)
        <div class="all-task d-flex flex-column justify-content-between">
            <div>
                @foreach ($tasks as $task)
                    <div class="task-container d-flex">
                        <img src="/assets/task-icon.svg" alt="alternate task icon">
                        <div class="task-detail w-100 d-flex justify-content-between align-items-center">
                            <div>
                                <p>{{$task->task_name}}</p>
                                @if ($task->task_is_submitted)
                                    <small class="mobile_due_submitted">Submitted on {{date("M d, Y", strtotime($task->task_due_date))}}</small>
                                @else
                                    <small class="mobile_due_submitted">Due on {{date("M d, Y", strtotime($task->task_due_date))}}</small>
                                @endif
                            </div>
                            <div>
                                @if ($task->task_is_submitted)
                                    <small class="due_submitted">Submitted on {{date("M d, Y", strtotime($task->task_due_date))}}</small>
                                    <span>
                                        <img class="task-ellipsis" src="/assets/ellipsis.svg" alt="ellipsis" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="/intern/task/{{$task->task_id}}">View Task</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reportModal">Report Abuse</a>
                                        </div>
                                    </span>
                                @else
                                    <small class="due_submitted">Due on {{date("M d, Y", strtotime($task->task_due_date))}}</small>
                                    <span>
                                        <img class="task-ellipsis" src="/assets/ellipsis.svg" alt="ellipsis" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="/intern/task/{{$task->task_id}}">View Task</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reportModal">Report Abuse</a>
                                        </div>
                                    </span>
                                @endif
                            </div>
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
            </div>
            <div class="pagination">
                {{$tasks->links()}}
            </div>
        </div>
    @else
        <div class="no-task h-100 d-flex flex-column align-items-center justify-content-center">
            <img src="/assets/empty.svg" alt="No Task available" width="300px">
            <p>Woah, this list is empty</p>
        </div>
    @endif
</div>
@endsection