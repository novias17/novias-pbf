<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url("assets/")?>dist/img/atma.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Atma Luhur</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url("assets/")?>dist/img/456.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">NOVIAS RIZKY</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php
               $active_menu = $this->uri->segment(1); 
            $menu_group = ['siswa', 'mapel', 'jadwal', 'cetak_jadwal'];
            $is_menu_open = (in_array($active_menu, $menu_group));
          ?>

          <li class="nav-item has-treeview <?php echo ($is_menu_open) ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?php echo ($is_menu_open) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                MENU
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('siswa');?>" class="nav-link <?php echo ($active_menu == 'siswa') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SISWA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('tempat_prakerin');?>" class="nav-link <?php echo ($active_menu == 'tempat_prakerin') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TEMPAT PRAKERIN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('jadwal_prakerin');?>" class="nav-link <?php echo ($active_menu == 'jadwal_prakerin') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>JADWAL PRAKERIN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('laporan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CETAK LAPORAN JADWAL</p>
                </a>
              </li>
              
          <li class="nav-item">
            <a href="<?php echo base_url('login/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
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