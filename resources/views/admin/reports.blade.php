<div class="panel">
    <div class="sub-panel form-sub-panel">
        <h1 class="panel-header">User Reports</h1>
        <div class="report-list">
            @if (count($reports) > 0)
                @foreach ($reports as $report)
                    <div class="task-container d-flex">
                        <img src="/assets/alert-icon.svg" alt="Task Icon">
                        <div class="w-100 d-flex justify-content-between align-items-center"> 
                            <div class="task-thumbnail d-flex flex-column">
                                <h1 class="task-header">{{$report->report_name}}</h1>
                                <h2 class="task-header2">Reported Account: {{$report->reported_account}}</h2>
                            </div>
                            <div class="task-thumbnail task-right d-flex flex-column">
                                <h1 class="task-header">Reported By: {{$report->reporter_account}}</h1>
                                <h2 class="task-header2">Reported Date: {{date("M d, Y", strtotime($report->created_at))}}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="empty-list d-flex flex-column align-items-center">
                    <img class="empty-box" src="/assets/empty-alert.svg" alt="">
                    <p>There are currently no reports to be shown</p>
                </div>
            @endif
        </div>
    </div>
</div>