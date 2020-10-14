<div class="panel">
    <div class="sub-panel users-sub-panel">
        <h1 class="panel-header">All User Accounts</h1>
        <div class="row">
            <div class="col-sm-6">
                <h2 class="panel-header2">Employee Accounts</h2>
                <div class="user-header d-flex justify-content-between">
                    <p>Name</p>
                    <p>System Generated Password</p>
                </div>
                <div class="user-list">
                    <ul class="panel-list-stats">
                        @foreach ($employees as $employee)
                            <li class="stat-item d-flex justify-content-between">
                                <span>{{$employee->name}}</span>
                                <span>{{$employee->generated_password}}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <h2 class="panel-header2">Intern Accounts</h2>
                <div class="user-header d-flex justify-content-between">
                    <p>Name</p>
                    <p>System Generated Password</p>
                </div>
                <div class="user-list">
                    <ul class="panel-list-stats">
                        @foreach ($users as $user)
                            <li class="stat-item d-flex justify-content-between">
                                <span>{{$user->name}}</span>
                                <span>{{$user->generated_password}}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>