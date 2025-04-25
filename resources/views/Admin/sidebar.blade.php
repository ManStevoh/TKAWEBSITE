 <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #38B6FF;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('./')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-external-link-alt"></i>


                </div>
                <div class="sidebar-brand-text mx-3">Go To Website <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/home')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>


                            <!-- New Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProject"
                        aria-expanded="true" aria-controls="collapseProject">
                        <i class="fas fa-fw fa-project-diagram"></i>
                        <span>Projects</span>
                    </a>
                    <div id="collapseProject" class="collapse" aria-labelledby="headingProject" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Project Components:</h6>
                            <a class="collapse-item" href="{{url('post_page')}}">Add Project</a>
                            <a class="collapse-item" href="{{url('/show_post')}}">Projects Overview</a>
                        </div>
                    </div>
                </li>

                           <!-- New Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews"
                        aria-expanded="true" aria-controls="collapseNews">
                        <i class="fas fa-fw fa-newspaper"></i>
                        <span>Blogs</span>
                    </a>
                    <div id="collapseNews" class="collapse" aria-labelledby="headingNews" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">News & Blog Components:</h6>
                            <a class="collapse-item" href="{{url('news_post')}}">Add Blog</a>
                            <a class="collapse-item" href="{{url('/show_news')}}">Blog Archive</a>
                        </div>
                    </div>
                </li>




                           <!-- New Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents"
                        aria-expanded="true" aria-controls="collapseEvents">
                        <i class="fas fa-fw fa-calendar-alt"></i>
                        <span>Events</span>
                    </a>
                    <div id="collapseEvents" class="collapse" aria-labelledby="headingEvents" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Event Components:</h6>
                            <a class="collapse-item" href="{{url('post_events')}}">Upcoming Events</a>
                            <a class="collapse-item" href="{{url('/show_events')}}">Events Overview</a>
                        </div>
                    </div>
                </li>




                               
                             <!-- New Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeam"
                       aria-expanded="true" aria-controls="collapseTeam">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Team</span>
                    </a>
                    <div id="collapseTeam" class="collapse" aria-labelledby="headingTeam" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Team Components:</h6>
                            
                           <a class="collapse-item" href="{{url('add_team')}}">Add Team</a>
                            <a class="collapse-item" href="{{url('/show_team')}}">Team Overview</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Programs</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">programs:</h6>
                        <a class="collapse-item" href="{{url('post_program')}}">post_program</a>
                        <a class="collapse-item" href="{{url('view_program')}}">view_program</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                     <i class="fas fa-fw fa-users"></i>
                    <span>System Users</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom system users:</h6>
                        <a class="collapse-item" href="{{url('user_admin')}}">View system Users</a>
                       
                    </div>
                </div>
            </li>


            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="admin2css/img/tkalogooo.jpeg" alt="good">
                <p class="text-center mb-2"><strong>Developed by:</strong> </p>
                <a class="btn btn-success "style="background-color: #6f42c1;" >Techkidz Africa</a>
            </div>

        </ul>