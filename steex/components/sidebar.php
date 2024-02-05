<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="./assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="./assets/images/logo-dark.png" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="./assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="./assets/images/logo-light.png" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
<li class="nav-item">
    <a class="nav-link menu-link collapsed" href="#sidebarDashboardsCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboardsCategory">
        <i class="ph-gauge"></i> <span data-key="t-dashboards">Category</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarDashboardsCategory">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="../Category/Addcategory.php" class="nav-link" data-key="t-analytics"> View Category </a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link menu-link collapsed" href="#sidebarDashboardsStaff" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboardsStaff">
        <i class="ph-gauge"></i> <span data-key="t-dashboards">Staff</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarDashboardsStaff">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="../staff/addstaff.php" class="nav-link" data-key="t-analytics">View Staff</a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link menu-link collapsed" href="#sidebarDashboardsLedger" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboardsLedger">
        <i class="ph-gauge"></i> <span data-key="t-dashboards">Ledger</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarDashboardsLedger">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="../ledger/addledger.php" class="nav-link" data-key="t-analytics">View Ledger</a>
            </li>
        </ul>
    </div>
</li>



                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>