     <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

            <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600" style="background-color:black">
                <div class="mdl-layout__header-row" >
                    <span class="mdl-layout-title" style="color:">Welcome {{ Auth::user()->first_name }}</span>
                    <div class="mdl-layout-spacer"></div>

                    <span class="mdl-layout-title change"><a class=" nav-link text-secondary h6" href="{{ route('logout') }}">{{ __('Log Out') }}</a></span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                     @csrf
                  </form>
                </div>
            </header>

            <div class="demo-drawer mdl-layout__drawer logo-header-background-color">
                <header class="demo-drawer-header">
                    <span>  <a href="staff-home.html" class="nav-link text-center" style="color:white;">CAMPUS INCIDENT SYSTEM</a></span>
                </header>

                <nav class="demo-navigation mdl-navigation sidebar-nav-background">
                    <ul id="navmenu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Applications</a><span class="darrow">&#9660;</span>
                            <ul class="sub1">
                                <li><a href="all_applications.html">All</a></li>
                                <li><a href="pending_applications.html">Pending</a></li>
                                <li><a href="#">Approved</a></li>
                                <li><a href="#">Rejected</a></li>
                            </ul>
                        </li>
                          <li><a href="#">Reports</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </nav>
            </div>