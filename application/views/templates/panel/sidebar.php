<style>
  .bg-custom-side {
    background-color: #594545;
  }
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-custom-side">
  <!-- Brand Logo -->
  <a href="<?= base_url('profile') ?>" class="brand-link">
    <img src="<?= base_url() ?>assets/bahan/sipetruk_Transparent.png" alt="Panel Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Panel User</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar bg-custom-side">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>assets/image/profile/user.png" class="objectPicture" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= base_url() ?>" class="d-block">
          <?php if($this->session->userdata("SESS_KANIGARA_ROLEID") == 1): ?>
            <?= 'Administrator' ?> 
          <?php else: ?>
            <?= 'Cabang' ?>
          <?php endif; ?>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!-- tambah class menu-open untuk secara otomatis membuka -->
        <li class="nav-item">
          <a href="<?= base_url() ?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              DASHBOARD
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('panel/unggah') ?>" class="nav-link">
            <i class="nav-icon fas fa-upload"></i>
            <p>Unggah Dokumen</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('panel/laporan') ?>" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Hasil Hitungan
            </p>
          </a>
        </li>

        <!-- <li class="nav-item">
            <a href="<?= base_url('panel/pengaturan') ?>" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li> -->

        <li class="nav-item my-4">
          <a href="<?= base_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Keluar
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>