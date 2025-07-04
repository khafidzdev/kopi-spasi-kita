     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">kopi<span style="color: orangered;">(spasi)</span>kita</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/menu'); ?>">
        <i class="fas fa-utensils"></i>
        <span>Menu</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/about'); ?>">
        <i class="fas fa-info-circle"></i>
        <span>About</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/testi'); ?>">
        <i class="fas fa-comments"></i> 
        <span>Testimoni</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/setting'); ?>">
        <i class="fas fa-cog"></i>
        <span>Setting</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/team'); ?>">
        <i class="fas fa-users"></i>
        <span>Team</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/contact'); ?>">
        <i class="fas  fa-envelope"></i> 
        <span>Contact</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/user'); ?>">
    <i class="fas fa-user"></i>
    <span>User</span>
    </a>
</li>




<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
