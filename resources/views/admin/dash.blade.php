<div class="panel">
    <div class="admin-banner d-flex justify-content-between align-items-end">
        <div class="banner-info h-100 d-flex flex-column justify-content-between">
            <div>
                <h1 class="banner-department">Hi There, Cardo Dalisay!</h1>
                <h2 class="banner-bactch">Administrator Dashboard</h2>
            </div>
            <div>
                <h3 class="banner-information"><span>Current number of interns: </span><span class="info">{{$numInterns}}</span></h3>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <img class="banner-img" src="/assets/admin-banner.svg" alt="Administrator Welcome Image" width="70%"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 panel-container left-panel">
            <div class="sub-panel">
                <h1 class="panel-header">Number of Interns</h1>
                <ul class="panel-list-stats">
                    <li class="stat-item d-flex justify-content-between">
                        <span>IT Department</span>
                        <span>{{$numIT}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>Animation Department</span>
                        <span>{{$numAnimation}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>Writing Department</span>
                        <span>{{$numWriting}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>Transmedia Department</span>
                        <span>{{$numTransmedia}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>Marketing Department Department</span>
                        <span>{{$numMarketing}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>HR, Admin, Finance</span>
                        <span>{{$numHR}}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-5 panel-container">
            <div class="sub-panel">
                <h1 class="panel-header">Works Finished</h1>
                <ul class="panel-list-stats">
                    <li class="stat-item d-flex justify-content-between">
                        <span>IT Department</span>
                        <span>{{$finishedIT}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>Animation Department</span>
                        <span>{{$finishedAnimation}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>Writing Department</span>
                        <span>{{$finishedWriting}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>Transmedia Department</span>
                        <span>{{$finishedTransmedia}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>Marketing Department</span>
                        <span>{{$finishedMarketing}}</span>
                    </li>
                    <li class="stat-item d-flex justify-content-between">
                        <span>HR, Admin, Finance</span>
                        <span>{{$finishedHR}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>