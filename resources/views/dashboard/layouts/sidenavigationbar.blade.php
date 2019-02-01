@section('sidenavigationbar')

    <nav id="sidebar">
        <div class="sidebar-header">
          <h3>Dashboard</h3>
          <strong><i class="fas fa-tachometer-alt"></i></strong>
        </div>
    
        <ul class="list-unstyled components">
          <li>
            <a href="{{ route('dashboard') }}">
              <i class="fas fa-tachometer-alt"></i>
              Home
            </a>
          </li>
          <li>
            <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
              <i class="fas fa-sliders-h"></i>
              Settings
            </a>
            <ul class="collapse list-unstyled" id="settingsSubmenu">
              <li>
                <a href="{{ route('settingsGeneral') }}">General Settings</a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>

@endsection