  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Klinik Sehat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex align-items-center">
        <div class="image">
          <img src="{{ asset('adminlte/dist/img/user.webp') }}" class="img-circle elevation-2 picture" alt="User Profile Picture">
        </div>
        <div class="info">
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->username }}</a>
          </div>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-header">MAIN MENU</li> --}}
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">MASTER DATA</li>
          <li class="nav-item">
            <a href="{{ route('wilayah_pasien.index') }}" class="nav-link {{ request()->is('wilayah_pasien') ||
                                                                             request()->is('wilayah_pasien/create') ||
                                                                             request()->is('wilayah_pasien/*/edit') ||
                                                                             request()->is('wilayah_pasien/*/show')
                                                                             ? 'active' : '' }}">
              <i class="nav-icon fas fa-location-dot"></i>
              <p>
                Data Wilayah Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('tindakan.index') }}" class="nav-link {{ request()->is('tindakan') ||
                                                                       request()->is('tindakan/create') ||
                                                                       request()->is('tindakan/*/edit') ||
                                                                       request()->is('tindakan/*/show')
                                                                       ? 'active' : '' }}">
              <i class="nav-icon fas fa-hospital"></i>
              <p>
                Data Tindakan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('obat.index') }}" class="nav-link {{ request()->is('obat') ||
                                                                   request()->is('obat/create') ||
                                                                   request()->is('obat/*/edit') ||
                                                                   request()->is('obat/*/show')
                                                                   ? 'active' : '' }}">
              <i class="nav-icon fas fa-kit-medical"></i>
              <p>
                Data Obat
              </p>
            </a>
          </li>
          @if(Auth::user()->role->id == '1')
          <li class="nav-item">
            <a href="{{ route('pegawai.index') }}" class="nav-link {{ request()->is('pegawai') ||
                                                                      request()->is('pegawai/create') ||
                                                                      request()->is('pegawai/*/edit') ||
                                                                      request()->is('pegawai/*/show')
                                                                      ? 'active' : '' }}">
              <i class="nav-icon fas fa-building-user"></i>
              <p>
                Data Pegawai Klinik
              </p>
            </a>
          </li>
          @endif
          <li class="nav-header">TRANSAKSI PASIEN</li>
          <li class="nav-item">
            <a href="{{ route('pelayanan.index') }}" class="nav-link {{ request()->is('pelayanan') ||
                                                                        request()->is('pelayanan/create') ||
                                                                        request()->is('pelayanan/*/edit') ||
                                                                        request()->is('pelayanan/*/show')
                                                                        ? 'active' : '' }}">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Pelayanan Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pemberian_obat.index') }}" class="nav-link {{ request()->is('pemberian_obat') ||
                                                                             request()->is('pemberian_obat/create') ||
                                                                             request()->is('pemberian_obat/*/edit') ||
                                                                             request()->is('pemberian_obat/*/show')
                                                                             ? 'active' : '' }}">
              <i class="nav-icon fas fa-pills"></i>
              <p>
                Pemberian Obat
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->