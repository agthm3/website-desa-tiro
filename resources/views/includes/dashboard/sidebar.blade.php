  <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-light navbar-light">
          <a href="index.html" class="navbar-brand mx-4 mb-3">
              <h5 class="text-primary">
                  <i class="fa fa-hashtag me-2"></i>ADMIN BONTO TIRO
              </h5>
          </a>
          <div class="d-flex align-items-center ms-4 mb-4">
              <div class="position-relative">
                  <img class="rounded-circle" src="{{ asset('admin/img/user.jpg') }}" alt=""
                      style="width: 40px; height: 40px" />
                  <div
                      class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                  </div>
              </div>
              <div class="ms-3">
                  <h6 class="mb-0">Jhon Doe</h6>
                  <span>Admin</span>
              </div>
          </div>
          <div class="navbar-nav w-100">
              <a href="{{ route('dashboard.index') }}"
                  class="nav-item nav-link  {{ session('active_button') == 'dashboard' ? 'active' : '' }}"><i
                      class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

              <div class="nav-item dropdown  {{ session('active_button') == 'layanan' ? 'active' : '' }}">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                          class="fa fa-laptop me-2"></i>Layanan
                      Desa</a>
                  <div class="dropdown-menu bg-transparent border-0">
                      <a href="profil-desa-index.html" class="dropdown-item">Profil Desa</a>
                      <a href="pemerintah-index.html" class="dropdown-item">Pemerintah Desa</a>
                      <a href="maintenance.html" class="dropdown-item">Persuratan</a>
                      <a href="maintenance.html" class="dropdown-item">Pengaduan</a>
                  </div>
              </div>

              <a href="{{ route('dashboard.news.index') }}"
                  class="nav-item nav-link  {{ session('active_button') == 'news' ? 'active' : '' }}"><i
                      class="fa fa-keyboard me-2"></i>Berita</a>
              <a href="{{ route('dashboard.announcement.index') }}"
                  class="nav-item nav-link  {{ session('active_button') == 'announcement' ? 'active' : '' }}"><i
                      class="fa fa-keyboard me-2"></i>Pengumuman</a>
              <a href="{{ route('dashboard.destination.index') }}"
                  class="nav-item nav-link  {{ session('active_button') == 'destination' ? 'active' : '' }}"><i
                      class="fa fa-keyboard me-2"></i>Destinasi</a>
          </div>
      </nav>
  </div>
