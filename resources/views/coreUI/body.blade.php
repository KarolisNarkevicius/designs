<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        Project
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav ml-auto">
    </ul>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav ps ps--active-y">
            <ul class="nav">

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-list"></i>Menu 1</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="nav-icon icon-list"></i> Item 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="nav-icon icon-list"></i> Item 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="nav-icon icon-list"></i> Item 3
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
            </div>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">


        <div style="padding-top: 20px" class="container-fluid">

            @include('coreUI.index')
            @include('coreUI.edit')

        </div>


    </main>


</div>
</body>