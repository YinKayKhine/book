<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo"><b>Admin</b>LTE</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                                   document.getElementById('logout-form').submit();">
                                                      {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                    </form>
                              </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>