<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/user">
        <i class=" fas fa-building"></i><span>Usuarios</span>
    </a>
</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/role">
        <i class="fas fa-users"></i><span>Roles</span>
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
        <i class=" fas fa-building"></i><span>Horario</span>
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
