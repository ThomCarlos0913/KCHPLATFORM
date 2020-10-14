<nav class="intern-nav navbar navbar-light navbar-expand-lg">
    <span class="navbar-brand mb-0 h1"><img src="/assets/kch-logo.png" alt="Knowledge Channel Logo" width="160em"></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-list" aria-controls="navigation-list" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-items-center" id="navigation-list"">
        <ul class="navbar-nav">
            <li class="nav-item admin-nav">Administrator Panel</li>
        </ul>
        <ul class="desktop-sidenav navbar-nav ml-auto align-items-center">
            <li class="nav-item">
                <a href="{{route('employee.dashboard')}}" class="exit-panel">Exit Administrator Panel <i class="exit-icon fas fa-long-arrow-alt-right"></i></a>
            </li>
        </ul>
    </div>
</nav>
<ul class="nav nav-tabs admin-nav-tabs">
    <li class="nav-item">
        <a id="dash" class="admin-nav-link nav-link active" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
        <a id="works" class="admin-nav-link nav-link" href="#">Intern Works</a>
    </li>
    <li class="nav-item">
        <a id="create" class="admin-nav-link nav-link" href="#">Create User</a>
    </li>
    <li class="nav-item">
        <a id="reset" class="admin-nav-link nav-link" href="#">Reset Password</a>
    </li>
    <li class="nav-item">
        <a id="reports" class="admin-nav-link nav-link" href="#">User Reports</a>
    </li>  
    <li class="nav-item">
        <a id="user" class="admin-nav-link nav-link" href="#">User Accounts</a>
    </li>  
</ul>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>