<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item mt-4">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="nav-icon icon-speedometer"></i> @lang('custom.dashboard')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('companies.index') }}">
                    <i class="nav-icon icon-notebook"></i>  @lang('custom.companies')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employees.index') }}">
                    <i class="nav-icon icon-people"></i> @lang('custom.employees')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logs.index') }}">
                    <i class="nav-icon icon-doc"></i> @lang('custom.log')
                </a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
