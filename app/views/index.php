<body>
    <div class="container">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <h3>SPP SKENSA</h3>
            
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['user']['nama_siswa'] ?></span>
                    <img class="img-profile rounded-circle"
                        src="<?= B ?>/public/assets/img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div> -->
            </li>

        </ul>

        </nav>
        <!-- End of Topbar -->

        <div class="row">
                        <div class="col-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><?= $data['tableTitle'] ?> <?= $_SESSION['user']['nama_siswa'] ?></h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Bayar</th>
                                                    <th>Bulan Dibayar</th>
                                                    <th>Tahun Bayar</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Nama Petugas</th>
                                                    <th>Tahun Ajaran</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Bayar</th>
                                                    <th>Bulan Dibayar</th>
                                                    <th>Tahun Bayar</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Nama Petugas</th>
                                                    <th>Tahun Ajaran</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach($data['transaksi'] as $res):?>
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td><?= $res['tanggal_bayar'] ?></td>
                                                        <td><?= $res['bulan_dibayar'] ?></td>
                                                        <td><?= $res['tahun_dibayar'] ?></td>
                                                        <td><?= $res['nama_siswa'] ?></td>
                                                        <td><?= $res['nama_petugas'] ?></td>
                                                        <td><?= $res['tahun_ajaran'] ?></td>
                                                    </tr>
                                                    <?php $i++ ?>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
    </div>
    
    <?php require_once(__DIR__ . "/admin/partials/modal.php"); ?>
</body>