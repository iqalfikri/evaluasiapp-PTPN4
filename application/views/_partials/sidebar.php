<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="<?php echo base_url(); ?>assets/img/logo-ptpn4.png" alt="logo" width="35">

        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/img/logo-ptpn4.png"
                    alt="logo" width="29"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li
                class="<?php echo $this->uri->segment(1) == '' || $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>"><i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php if ($user['role'] == 'administrator') {?>
            <li class="menu-header">Adminsitrator Menu</li>
            <li
                class="dropdown <?php echo $this->uri->segment(1) == 'data_user' || $this->uri->segment(1) == 'input_user'  ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
                    <span>Management User</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(1) == 'adduser' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>adduser">Tambah User Baru</a></li>
                    <li></li>
                    <li class="<?php echo $this->uri->segment(1) == 'listuser' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>listuser">Data User</a></li>
                </ul>
            </li>
            <li
                class="dropdown <?php echo $this->uri->segment(1) == 'datapelatihan' || $this->uri->segment(1) == 'addpelatihan'  ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i>
                    <span>Pelatihan</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(1) == 'addpelatihan' ? 'active' : ''; ?>"><a
                            class="nav-link" href="<?php echo base_url(); ?>addpelatihan">Tambah Pelatihan</a></li>
                    <li></li>
                    <li class="<?php echo $this->uri->segment(1) == 'datapelatihan' ? 'active' : ''; ?>"><a
                            class="nav-link" href="<?php echo base_url(); ?>datapelatihan">Data Pelatihan</a></li>
                </ul>
            </li>
            <li
                class="dropdown <?php echo $this->uri->segment(1) == 'laporanpenilaian' || $this->uri->segment(1) == 'datapenilaian'  ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i>
                    <span>Penilaian</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(1) == 'datapenilaian' ? 'active' : ''; ?>"><a
                            class="nav-link" href="<?php echo base_url("datapenilaian"); ?>">List Data Penilaian</a>
                    </li>
                    <li></li>
                    <li class="<?php echo $this->uri->segment(1) == 'laporanpenilaian' ? 'active' : ''; ?>"><a
                            class="nav-link" href="<?php echo base_url("laporanpenilaian"); ?>">Cetak Laporan</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if ($user['role'] == 'atasan' || $user['role'] == 'administrator') {?>
            <li class="menu-header">Pimpinan Menu</li>
            <li
                class="dropdown <?php echo $this->uri->segment(1) == 'data_user' || $this->uri->segment(1) == 'input_user'  ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
                    <span>Management Staff</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(1) == 'addstuff' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>addstuff">Tambah Staff</a></li>
                    <li></li>
                    <li class="<?php echo $this->uri->segment(1) == 'liststuff' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>liststuff">List Staff</a></li>
                </ul>
            </li>
            <li
                class="dropdown <?php echo $this->uri->segment(1) == 'laporanpenilaian' || $this->uri->segment(1) == 'datapenilaian'  ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i>
                    <span>Penilaian</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(1) == 'addpenilaian' ? 'active' : ''; ?>"><a
                            class="nav-link" href="<?php echo base_url("addpenilaian"); ?>">Tambah Penilaian</a>
                    </li>
                    <li></li>
                    <li class="<?php echo $this->uri->segment(1) == 'listpenilaian' ? 'active' : ''; ?>"><a
                            class="nav-link" href="<?php echo base_url("listpenilaian"); ?>">List Penilaian </a></li>
                </ul>
            </li>
            <?php } ?>
            <!-- <?php if ($user['role'] == 'bawahan' || $user['role'] == 'atasan' || $user['role'] == 'administrator') {?>
            <li class="menu-header">Staff Menu</li>
            <?php } ?> -->
        </ul>
    </aside>
</div>
