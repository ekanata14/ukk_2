<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= B ?>/admin/index">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-money-bill-wave"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SPPSKENSA</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item <?= ($data['section'] == 'admin') ? 'active' : '' ?>">
    <a class="nav-link" href="<?= B ?>/admin/index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menus
</div>

<!-- Nav Item - Pengguna Collapse Menu -->
<li class="nav-item <?= ($data['section'] == 'pengguna') ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="<?= B ?>/pengguna/index/pengguna">
        <i class="fas fa-fw fa-user"></i>
        <span>Pengguna</span>
    </a>
</li>

<!-- Nav Item - Petugas Collapse Menu -->
<li class="nav-item <?= ($data['section'] == 'petugas') ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="<?= B ?>/petugas/index/petugas">
        <i class="fas fa-fw fa-users"></i>
        <span>Petugas</span>
    </a>
</li>

<!-- Nav Item - Petugas Collapse Menu -->
<li class="nav-item <?= ($data['section'] == 'siswa') ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="<?= B ?>/siswa/index/siswa">
        <i class="fas fa-fw fa-user-graduate"></i>
        <span>Siswa</span>
    </a>
</li>

<!-- Nav Item - Petugas Collapse Menu -->
<li class="nav-item <?= ($data['section'] == 'kelas') ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="<?= B ?>/kelas/index/kelas">
        <i class="fas fa-fw fa-home"></i>
        <span>Kelas</span>
    </a>
</li>

<!-- Nav Item - Petugas Collapse Menu -->
<li class="nav-item <?= ($data['section'] == 'pembayaran') ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="<?= B ?>/pembayaran/index/pembayaran">
        <i class="fas fa-fw fa-money-bill-wave"></i>
        <span>Pembayaran</span>
    </a>
</li>
<!-- Nav Item - Petugas Collapse Menu -->
<li class="nav-item <?= ($data['section'] == 'transaksi') ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="<?= B ?>/transaksi/index/kelas">
        <i class="fas fa-fw fa-cash-register"></i>
        <span>Entri Pembayaran</span>
    </a>
</li>

<!-- Nav Item - Petugas Collapse Menu -->
<li class="nav-item <?= ($data['section'] == 'riwayat') ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="<?= B ?>/transaksi/history/transaksi">
        <i class="fas fa-fw fa-clock"></i>
        <span>Riwayat Transaksi</span>
    </a>
</li>

<!-- Nav Item - Petugas Collapse Menu -->
<li class="nav-item <?= ($data['section'] == 'laporan') ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="<?= B ?>/transaksi/laporan/transaksi">
        <i class="fas fa-fw fa-exclamation"></i>
        <span>Laporan SPP</span>
    </a>
</li>


</ul>
<!-- End of Sidebar -->