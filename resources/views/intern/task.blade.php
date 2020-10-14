@extends('layouts.intern-boilerplate')

@section('content')
<div class="row panel-container task-row">
    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
            <div class="col-sm-9">
                <div class="task-panel">
                    <div class="d-flex align-items-start">
                        <img class="task-main-icon" src="/assets/task-icon.svg" alt="Task Icon">
                        <div class="task-details w-100">
                            <h1 class="task-header">{{$task->task_name}}</h1>
                            <p class="task-giver-due">Posted by {{$task->task_assigned_by}} on {{date("M d, Y", strtotime($task->task_date_created))}}</p>
                            <div class="task-grade-due d-flex justify-content-between">
                                @if ($task->task_is_submitted == 1)
                                    <p>{{$task->task_grade}} points</p>
                                    <p>Submitted on {{date("M d, Y", strtotime($task->updated_at))}}</p>
                                @else
                                    <p>Not yet submitted</p>
                                    <p>Due on {{date("M d, Y", strtotime($task->task_due_date))}}</p>
                                @endif
                            </div>
                            <div class="divider-1 w-100"></div>
                            <div class="task-description">
                                <p class="description-header">Task Description</p>
                                <p class="description">{{$task->task_description}}</p>
                            </div>
                            <div class="divider-2 w-100"></div>
                            <div class="w-100 d-flex justify-content-between">
                                <p class="task-assigned-report">Assigned to {{$task->task_assigned_to}}</p>
                                <a href='#' class="report task-assigned-report" data-toggle="modal" data-target="#reportModal">Report Abuse</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="submit-panel d-flex flex-column">
                    <h1 class="panel-header">Your Work</h1>
                    <div class="work">
                        @if ($task->task_is_submitted == 1)
                            <a href="{{route('intern.download', ['name' => explode('/', $task->task_link)[3]])}}">
                                <div class="card">
                                    <div class="card-body">
                                        <span><i class="far fa-file"></i> <span class="file-name">{{explode('/', $task->task_link)[3]}}</span></span>
                                    </div>
                                </div>
                            </a>
                        @else
                            <div class="no-work d-flex flex-column justify-content-center">
                                <i class="no-work-icon far fa-folder-open"></i>
                                <p>No work submitted</p>
                            </div>
                            <form action="{{route('intern.taskupload', ['tid' => $task->task_id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="custom-file">
                                    <input id="file-upload" type="file" name="file" class="custom-file-input" id="chooseFile">
                                    <label id="file-label" class="custom-file-label" for="chooseFile">Select file</label>
                                </div>
                    
                                <button type="submit" name="submit" class="button button-main form-button">
                                    Upload File
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="not-found w-100 d-flex flex-column justify-content-center align-items-center">
            <img src="/assets/not_found.svg" alt="Not Found Icon" width="50%">
            <h1 class="not-found-header">Oops! This task is not in our database...</h1>
        </div>
    @endif
</div>
<script>
    $("#file-upload").on("change", function() {
        $('#file-label').html(this.files[0]['name']);
    });
</script>
@endsection