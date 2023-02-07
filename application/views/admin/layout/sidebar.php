<?php
$id = $this->session->userdata('id');
$user = $this->user_model->detail($id);
$meta = $this->meta_model->get_meta();
?>

<!-- Query Menu -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url('admin/dashboard'); ?>" class="brand-link">

    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block"><?php echo $user->name; ?></a>
      </div>
    </div>



    <!-- Sidebar Menu -->

    <?php if ($user->role_id == 1) : ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/company" class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Perusahaan
              </p>
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
                <a href="<?php echo base_url(); ?>admin/provinsi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Provinsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/kota" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kota</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Data Pengguna
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-ninja"></i>
              <p>
                Akun
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/profile'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/profile/update'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/profile/password'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Password</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/meta'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile Situs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/meta/logo'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo Situs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/meta/favicon'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Favicon</p>
                </a>
              </li>


            </ul>
          </li>
      </nav>
    <?php elseif ($user->role_id == 2) : ?>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/company" class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Perusahaan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-ninja"></i>
              <p>
                Akun
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/profile'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/profile/update'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/profile/password'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Password</p>
                </a>
              </li>

            </ul>
          </li>


      </nav>
    <?php else : ?>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/company" class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Perusahaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-ninja"></i>
              <p>
                Akun
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/profile'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/profile/update'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/profile/password'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Password</p>
                </a>
              </li>

            </ul>
          </li>


      </nav>

    <?php endif; ?>


    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?php echo $title; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>"> Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/' . $this->uri->segment(2)) ?>">
                <?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))) ?>
              </a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->




  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">