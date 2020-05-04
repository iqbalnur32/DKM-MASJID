
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/adminlte/dist/logo2.png" alt="AdminLTE Logo" class="brand-image img-circle"
           style="opacity: .8">
      <span class="brand-text font-weight-light">DKM <b>MASJID</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $_SESSION['username'] }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>     
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings Masjid
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/setting-masjid') }}" class="nav-link ">
                  <i class="far  nav-icon"></i>
                  <p>Setting</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>
                    Agenda Masjid
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/agenda') }}" class="nav-link">
                      <i class="far nav-icon"></i>
                      <p style="font-size: 14px;">Tambah Agenda</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/agenda/view') }}" class="nav-link">
                      <i class="far nav-icon"></i>
                      <p style="font-size: 14px;">Lihat Agenda</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/dkm') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>DKM Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/berkas') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>Berkas Masjid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/fasilitas') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>Fasilitas Masjid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Jamaah
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/jamaah') }}" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Data Jamaah</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/tabungan') }}" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Tabungan Jamaah</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/absensi') }}" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Jamaah Sholat Harian</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Qurban</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Keuagan & Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/coa') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>COA Akun</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/pemasukan') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/pengeluaran') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>
                    Kotak Amal & Yatim
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/kotak-amal') }}" class="nav-link">
                      <i class="far nav-icon"></i>
                      <p style="font-size: 14px;">Kotak Amal</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/kotak-amal-yatim') }}" class="nav-link">
                      <i class="far nav-icon"></i>
                      <p style="font-size: 14px;">Kotak Yatim & Piatu</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
              <li class="nav-item">
                <a href="{{ url('admin/reporting') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/general-reporting') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>General Report</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Yatim & Piatu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/yatim-piatu') }}" class="nav-link">
                  <i class="far  nav-icon"> </i>
                  <p>Yatim & Piatu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/duafa') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>Duafa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Zakat & Sadaqah
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/zakat-infaq') }}" class="nav-link">
                  <i class="far  nav-icon"> </i>
                  <p>Zakat & Infaq</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/sadaqah') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>Sadaqah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Donatur
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/management-donatur') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>Management Donatur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/donatur') }}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>Donatur & Absensi Donatur</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>