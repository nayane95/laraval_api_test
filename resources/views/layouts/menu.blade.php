<li class="nav-item {{ Request::is('employees*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('employees.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Employees</span>
    </a>
</li>
