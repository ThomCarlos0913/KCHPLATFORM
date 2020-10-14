<nav class="intern-nav navbar navbar-light navbar-expand-lg">
    <span class="navbar-brand mb-0 h1"><img src="/assets/kch-logo.png" alt="Knowledge Channel Logo" width="160em"></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-list" aria-controls="navigation-list" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-items-center" id="navigation-list"">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a id="dash" class="nav-link {{Route::currentRouteName() == 'intern.dash' ? "active-nav-link" : ""}}" href="/intern/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a id="work" class="nav-link {{Route::currentRouteName() == 'intern.work' ? "active-nav-link" : ""}}" href="/intern/work/all">Your Work</a>
            </li>
            <li class="nav-item">
                <a id="people" class="nav-link {{Route::currentRouteName() == 'intern.people' ? "active-nav-link" : ""}}" href="/intern/people">People</a>
            </li>
            <div class="mobile-sidenav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notifications</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">No new notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a id="profile" class="nav-link {{Route::currentRouteName() == 'intern.profile' ? "active-nav-link" : ""}}" href="/intern/profile/{{$user->id}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a id="setting" class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </div>
        </ul>
        <ul class="desktop-sidenav navbar-nav ml-auto align-items-center">
            <li class="nav-item dropdown">
                <img class="bell-icon" src="/assets/bell.svg" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="notification dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <div class="notification-header d-flex justify-content-between">
                        <h6>Notifications</h6>
                        <a id="dismiss" href="#">Dismiss All</a>
                    </div>
                    <div class="notif-wrapper" id="notifications">
                    </div>
                </div>
            </li>
            <li class="nav-item nav-item-intern">
                <span class="intern">{{$user->name}}</span>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="nav-profile" src="{{asset($user->profile_picture)}}" alt="user image">
                </span>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/intern/profile/{{$user->id}}">Profile</a>
                    <a class="dropdown-item" href="/intern/settings">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>