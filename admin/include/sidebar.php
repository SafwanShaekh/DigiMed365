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

                <img src="assets/images\logo.jpg" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="ashboard.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">

                <img src="assets/images\logo.jpg" alt="" height="40">

                <img src="assets/images/logo.png" alt="" height="17">

                <img src="assets/images\logo.jpg" alt="" height="80" class="bg-light">
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
                    <a class="nav-link menu-link" href="dashboard.php">
                        <i class="las la-tachometer-alt"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebardoctors" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebardoctors">
                        <i class="lar la-user"></i> <span data-key="t-apps">Doctors</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebardoctors">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="doctor-specilization.php" class="nav-link" data-key="t-chat"> Doctor Specilization</a>
                            </li>
                            <li class="nav-item">
                                <a href="add-doctors.php" class="nav-link" data-key="t-chat"> Add Doctor </a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-doctors.php" class="nav-link"> <span data-key="t-to-do">Manage
                                        Doctors</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebardepartment" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebardepartment">
                        <i class="lar la-hospital"></i> <span data-key="t-apps">Departments</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebardepartment">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="add-departments.php" class="nav-link" data-key="t-chat"> Add Departments </a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-departments.php" class="nav-link"> <span data-key="t-to-do">Manage
                                Departments</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarlab" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarlab">
                        <i class="las la-flask"></i></i> <span data-key="t-apps">Laboritories</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarlab">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="add-labs.php" class="nav-link" data-key="t-chat">Add Laboritories</a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-labs.php" class="nav-link"> <span data-key="t-to-do">Manage
                                        Laboritories</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="login-users.php">
                        <i class="las la-user-circle"></i> <span>Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="contact.php">
                        <i class="las la-phone"></i> <span>Contact</span>
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