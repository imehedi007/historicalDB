<!--**********************************
            Nav header start
        ***********************************-->
<div class="nav-header">
    <div class="brand-logo">
        <a href="index.html">
            <b class="logo-abbr"><img src="../../assets/backend/images/logo.png" alt=""> </b>
            <span class="logo-compact"><img src="../assets/backend/images/logo-compact.png" alt=""></span>
            <span class="brand-title">
                <img src="../../assets/backend/images/logo-text.png" alt="">
            </span>
        </a>
    </div>
</div>
<!--**********************************
            Nav header end
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
            <div class="input-group icons">
                <div class="drop-down animated flipInX d-md-none">
                </div>
            </div>
        </div>
        <div class="header-right">
            <li class="icons dropdown">
                <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                    <span class="activity active"></span>
                    <img src="../../assets/backend/images/user/1.png" height="40" width="40" alt="">
                </div>
                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="../../assets/backend/app-profile.html"><i class="icon-user"></i>
                                    <span>Profile</span></a>
                            </li>
                            <hr class="my-2">
                            <li><a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <i class="icon-key"></i>
                                    <span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
            </li>
            </ul>
        </div>
    </div>
</div>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

<!--**********************************
            Sidebar start
        ***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Author Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="../dashboard/dashboard.php">Home</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>

            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Homepage</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="../../assets/backend/layout-blank.html">Banner</a></li>
                    <li><a href="../../assets/backend/layout-one-column.html">Sidebar</a></li>
                    <li><a href="../../assets/backend/layout-two-column.html">Social Links</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Categories</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="../categories/categories.php">All Categories</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Elements</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">All elements</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->
