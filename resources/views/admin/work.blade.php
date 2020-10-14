@foreach ($data as $task)
    <div class="task-container d-flex">
        <img src="/assets/task-icon.svg" alt="Task Icon">
        <div class="w-100 d-flex justify-content-between align-items-center"> 
            <div class="task-thumbnail d-flex flex-column">
                <h1 class="task-header">{{$task['task_name']}}</h1>
                <p>Assigned To: {{$task['task_assigned_to']}}</p>
            </div>
            <div class="task-thumbnail task-right d-flex flex-column">
                <h1 class="task-header">{{$task['task_is_submitted'] == 0 ? 'Not Submitted' : 'Submitted'}}</h1>
                <p>Assigned Date: {{date("M d, Y", strtotime($task['task_assigned_date']))}}</p>
            </div>
        </div>
    </div>
@endforeach