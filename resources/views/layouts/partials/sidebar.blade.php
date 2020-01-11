<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item mt-4">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('companies.index') }}">
                    <i class="nav-icon icon-drop"></i> Companies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employees.index') }}">
                    <i class="nav-icon icon-people"></i> Employees</a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
