<!--! [Start] Navigation Menu !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('dashboard') }}" class="b-brand">
                <!-- Logo -->
                <img src="{{ asset('assets/images/logo-full.png') }}" alt="Logo" class="logo logo-lg" />
                <img src="{{ asset('assets/images/logo-abbr.png') }}" alt="Logo" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                
                <!-- Dashboards -->
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('dashboard') }}">CRM</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('analytics') }}">Analytics</a></li>
                    </ul>
                </li>
                
                <!-- Reports -->
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Reports</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('reports.sales') }}">Sales Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('reports.leads') }}">Leads Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('reports.project') }}">Project Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('reports.timesheets') }}">Timesheets Report</a></li>
                    </ul>
                </li>
                
                <!-- Applications -->
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Applications</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('apps.chat') }}">Chat</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('apps.email') }}">Email</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('apps.tasks') }}">Tasks</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('apps.notes') }}">Notes</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('apps.storage') }}">Storage</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('apps.calendar') }}">Calendar</a></li>
                    </ul>
                </li>
                
                <!-- Add more menu items as needed -->
            </ul>
        </div>
    </div>
</nav>
<!--! [End] Navigation Menu !-->
