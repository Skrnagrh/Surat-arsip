<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->

        <a class="sidebar-brand d-flex align-items-center justify-content-center my-3" href="/dashboard">
            <div class="sidebar-brand-icon">
                <img src="/logo/PT-Samudra-marine-Indonesia.png" alt="logo" width="50%">
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"  href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <li class="nav-item">
            <a  class="nav-link {{ Request::is('dashboard/masuk*') ? 'active' : '' }}" href="/dashboard/masuk" >
                <i class="bi bi-envelope-fill"></i> 
                <span>Surat Masuk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/keluar*') ? 'active' : '' }}" href="/dashboard/keluar">
                <i class="bi bi-envelope-open-fill"></i> 
                <span>Surat Keluar</span>
            </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        @can('admin')
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/semua*') ? 'active' : '' }}" href="/dashboard/semua">
                <i class="bi bi-envelope-paper-fill"></i>
                <span>Semua Arsip</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/datapetugas*') ? 'active' : '' }}" href="/dashboard/datapetugas">
                <i class="bi bi-person-fill "></i>
                <span>Data Petugas</span>
            </a>
        </li>
        @endcan
         <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

    <!-- End of Sidebar -->