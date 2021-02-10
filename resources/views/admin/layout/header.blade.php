  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary bg-light elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="navbar-brand text-info p-3 brand-link text-center">
      	<img src="{{asset('/user/logo/raranewlogo.png')}}" class="img-fluid" width="200" height="150"/>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin.index')}}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Booking List
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>
                Destination
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('destination.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('destination.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add more</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>
                Packages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('package.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('package.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add more</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('review.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Reviews
              </p>
            </a>
          </li>
          <!-- @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
