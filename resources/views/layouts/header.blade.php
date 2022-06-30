<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="../assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                            <span>SEM NOME</span>
                            {{-- <a href="{{ route('logout') }}"  class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a> --}}
                            <a  class="dud-logout" title="Logout" href=""
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="feather icon-log-out"></i>
                            </a>
                            <form id="logout-form" action="" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        {{-- <ul class="pro-body">
                            <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                            <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                        </ul> --}}
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
</header>