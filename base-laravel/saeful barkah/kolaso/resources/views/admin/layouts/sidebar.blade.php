<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo text-center">
        <h5 class="logo-text">Genetic Wear</h5>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN MENU</li>
        <li class="{{ Request::is('admin/dashboard') ? 'active' : ' '}}">
            <a href="{{ url('admin/dashboard') }}" class="waves-effect">
                <i class="icon-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/portofolio') ? 'active' : ' '}}">
            <a href="{{ url('admin/portofolio') }}" class="waves-effect">
                <i class="icon-home"></i>
                <span>Portofolio</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/profile') ? 'active' : ' '}}">
            <a href="{{ url('admin/profile') }}" class="waves-effect">
                <i class="icon-home"></i>
                <span>Profile Website</span>
            </a>
        </li>
    </ul>

</div>
