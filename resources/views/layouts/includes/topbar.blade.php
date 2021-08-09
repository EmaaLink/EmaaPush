<div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index-2.html" class="logo">
                        <img class="flgo" src="assets/images/logoc.png" alt="Logo">
                </a>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Page title -->
                    <ul class="nav navbar-nav list-inline navbar-left">
                        <li class="list-inline-item">
                            <button class="button-menu-mobile open-left">
                                <i class="ti-layout-grid2"></i>
                            </button>
                        </li>
                        <li class="list-inline-item">
                            <h4 class="page-title">Dashboard</h4>
                        </li>
                    </ul>
                    <nav class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="hide-phone">
                                <form class="app-search">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="mdi mdi-bell-outline"></i>
                                                <div class="noti-dot">
                                                    <span class="pulse"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>
                            <li class="dropdown dropslide">
                                <a class="nav-link" href="index-2.html#" id="navbarDropdownProfile" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/images/profile.jpg" alt="user-img"
                                        class="rounded-circle img-thumbnail img-responsive">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="index-2.html#"><i class="mdi mdi-account"></i>
                                        Profile</a>
                                    <a class="dropdown-item" href="index-2.html#"><i class="mdi mdi-settings"></i>
                                        Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <form id="form_logout" method="POST" action="{{route('logout')}}">
                                            @csrf
                                         <a onclick="document.getElementById('form_logout').submit();" class="dropdown-item"
                                         ><i class="mdi mdi-power"></i> Logout</a>

                                    </form>
                                   
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>