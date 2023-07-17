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
        <i class=" fas fa-building"></i><span>Roles</span>
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
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/horario">
        <i class="fas fa-building"></i><span>Horario</span>
    </a>
    <ul class="submenu">
        <li>
            <a href="/horario/lunes">Lunes</a>
        </li>
        <li>
            <a href="/horario/martes">Martes</a>
        </li>
        <li>
            <a href="/horario/miercoles">Miércoles</a>
        </li>
        <!-- Agrega más elementos de menú según tus necesidades -->
    </ul>
</li>
