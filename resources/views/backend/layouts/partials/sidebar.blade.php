<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            
        </div>
        <div class="sidebar-brand-text mx-3">Alumni Forums</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ auth()->user()->role->name }} Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>



 <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Alumni </span>
        </a>
       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Profile Modules:</h6>
                <a class="collapse-item" href="{{ route('profiles.index') }}">Profile</a>
                 <a class="collapse-item" href="{{ route('users.index') }}">User List</a>
            </div>
        </div>
    </li>

   
   
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>
 <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>News & Events</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">News & Events Modules:</h6>
                <a class="collapse-item" href="{{ route('reports.index')}}">Campus News</a>                <!-- <a class="collapse-item" href="{{ route('categories.index')}}">Categories</a>

<a class="collapse-item" href="{{ route('sub-categories.index')}}">Sub Categories</a> -->
                <a class="collapse-item" href="{{ route('events.index')}}">Events</a>
<!--                 <a class="collapse-item" href="{{ route('tags.index') }}">Tags</a>
 -->
            </div>
        </div>
    </li>

<!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('blogs.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Blog</span></a>
    </li>



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Career</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              
                <a class="collapse-item" href="{{ route('jobs.index')}}">Job List</a>
         <!-- <a class="collapse-item" href="{{ route('jobcategories.index')}}">Job Category</a>
                  <a class="collapse-item" href="{{ route('job-subcategories.index')}}">Job Category</a>
 -->

            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('garos.index')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Garo Cummunity</span></a>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
