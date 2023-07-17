<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">

        <li class="menu-header">Dashboard</li>
        <li class="dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                <li class=active><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
            </ul>
        </li>

        <li class="menu-header">Starter</li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Layout</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
        </li>
        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
                <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
                <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
                <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
                <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
                <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
                <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
                <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
                <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
                <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
                <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
                <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
                <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
                <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
                <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
                <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
                <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
                <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
            </ul>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>
</aside>










<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/user">
        <i class="fas fa-users"></i></i><span>Usuarios</span>
    </a>
</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/role">
        <i class="fas fa-restroom"></i><span>Roles</span>
    </a>
</li>
{{-- <li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/proveedors">
        <i class=" fas fa-building"></i><span>Proveedor</span>
    </a>
</li> --}}
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/personal">
        <i class="fas fa-user-friends"></i><span>Personal</span>
    </a>
</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/horario">
        <i class="fas fa-user-clock"></i><span>Horario</span>
    </a>
</li>

{{--  Haz un nuevo menu, que tenga submenu   --}}
{{-- <li class="side-menus">
    <a class="nav-link">
        <i class="fas fa-user-friends"></i><span>Personal</span>
    </a>
    <ul class="submenu">
        <li>
            <a href="">Gestionar Personal</a>
        </li>
        <li>
            <a href="/horario">Gestionar Horario</a>
        </li>
        <li>
            <a href="">Miércoles</a>
        </li>
    </ul>
</li> --}}


{{-- <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded=""
        aria-controls="basic-ui">
        <i class="fas fa-users"></i>
        <span class="menu-title">Personal</span>
        <i class="fas fa-caret-down"></i>
    </a>
    <div class="collapse " id="basic-ui">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/personal') }}">Gestionar Personal</a>
                <i class="fas fa-user-alt"></i>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
            </li>
        </ul>
    </div>
</li> --}}
