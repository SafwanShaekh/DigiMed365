<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="dashboard.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.png" alt="" height="80"/>

                <img src="assets/images/logo.png" alt="" height="80">

                <img src="assets/images\logo.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="dashboard.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">

                <img src="assets/images/logo.png" alt="" height="80">

            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu"></span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard.php" 
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>                            
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="manage-patients.php" 
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="lar la-user"></i> <span data-key="t-apps">Manage Patients</span>           
                    </a>                            
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="patients.php" 
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span data-key="t-dashboards">Chat with Patients</span>
                    </a>                            
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="files.php   " 
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span data-key="t-dashboards">Files</span>
                    </a>                            
                </li>

                <!-- end Dashboard Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->