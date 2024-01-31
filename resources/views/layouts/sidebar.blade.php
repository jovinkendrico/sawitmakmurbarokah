  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/AdminLTE/dist/img/AdminLTELogo.png" alt="Anugrah Tuah Barokah Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Anugrah Tuah Barokah</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Master
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.master.karyawan.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Karyawan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.master.blok.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Blok</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.master.armada.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Armada</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.master.pks.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>PKS</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.master.supplier.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Supplier</p>
                </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.transaksi.penjualantbs.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan TBS</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('admin.transaksi.penjualanbrondolan.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penjualan Brondolan</p>
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Cash
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/cashmasuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Cash Masuk
                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="/cashkeluar" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cash Keluar</p>
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                        Transaksi
                        </p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.laporan.transaksi.penjualantbs.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                Penjualan TBS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.laporan.transaksi.penjualanbrondolan.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                Penjualan Brondolan
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/users" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Users</p>
            </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
