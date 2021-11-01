<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route("dashboard") }}" class="brand-link">
      <img src="{{ publicUrl('/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ publicUrl('/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->     
          
          <!-- Dashboard Menu Start -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link @if(Request::is('/')) active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- Dashboard Menu End -->
          
          <!-- Setting Menu Start -->
          <li class="nav-item">
            <a href="{{ route('settings.form') }}" class="nav-link @if(Request::is('settings/*')) active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Setting  
              </p>
            </a>
          </li>
          <!-- Setting Menu End -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>