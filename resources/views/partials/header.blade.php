<!--! [Start] Header !-->
<header class="nxl-header">
    <div class="header-wrapper">
        <!--! [Start] Header Left !-->
        <div class="header-left d-flex align-items-center gap-4">
            <!-- Navigation Toggle -->
            <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            
            <!-- Search -->
            <div class="nxl-navigation-search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search..." />
                    <i class="feather-search"></i>
                </div>
            </div>
        </div>
        <!--! [End] Header Left !-->
        
        <!--! [Start] Header Right !-->
        <div class="header-right ms-auto">
            <div class="d-flex align-items-center">
                <!-- Notifications -->
                <div class="dropdown nxl-h-item">
                    <a class="nxl-head-link me-3" data-bs-toggle="dropdown" href="javascript:void(0);" role="button" data-bs-auto-close="outside">
                        <i class="feather-bell"></i>
                        <span class="badge bg-danger nxl-h-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown">
                        <div class="d-flex justify-content-between align-items-center notifications-head">
                            <h6 class="fw-bold text-dark mb-0">Notifications</h6>
                            <a href="javascript:void(0);" class="fs-11 text-success text-end ms-auto">
                                Mark all as read
                            </a>
                        </div>
                        <!-- Add notification items here -->
                    </div>
                </div>
                
                <!-- User Profile -->
                <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                        <img src="{{ asset('assets/images/avatar/1.jpg') }}" alt="user-image" class="img-fluid user-avtar me-0" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown">
                        <div class="d-flex align-items-center h-100 p-3">
                            <img src="{{ asset('assets/images/avatar/1.jpg') }}" class="img-fluid rounded-circle me-3" alt="user" width="50">
                            <div>
                                <h6 class="text-dark mb-0">{{ Auth::user()->name ?? 'Guest User' }}</h6>
                                <small class="text-muted">{{ Auth::user()->email ?? 'guest@example.com' }}</small>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-user"></i>
                            <span>Profile</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-settings"></i>
                            <span>Settings</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="feather-log-out"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--! [End] Header Right !-->
    </div>
</header>
<!--! [End] Header !-->
