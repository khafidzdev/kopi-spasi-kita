<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>" data-aos="fade-right">
            <img src="<?= base_url('assets/img/kopi(spasi)kita.png'); ?>" class="logo" id="logo"
                 data-light-logo="<?= base_url('assets/img/kopi(spasi)kita.png'); ?>" 
                 data-dark-logo="<?= base_url('assets/img/kopi(spasi)kita hitam.png'); ?>">
        </a>

        <!-- Tombol menu untuk mobile -->
        <button class="menu-toggle d-lg-none" id="menuToggle">
            <span></span><span></span><span></span>
        </button>

        <!-- Menu untuk desktop -->
        <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= site_url('/'); ?>">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('about'); ?>">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('menu'); ?>">MENU</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('contact'); ?>">CONTACT</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('reservasi'); ?>">RESERVASI</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Overlay Menu (Hanya untuk Mobile) -->
<div class="overlay-menu d-lg-none" id="overlayMenu">
    <a href="<?= site_url('/'); ?>">HOME</a>
    <a href="<?= site_url('about'); ?>">ABOUT</a>
    <a href="<?= site_url('menu'); ?>">MENU</a>
    <a href="<?= site_url('contact'); ?>">CONTACT</a>
    <a href="<?= site_url('reservasi'); ?>">RESERVASI</a>
</div>
