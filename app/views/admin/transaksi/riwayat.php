<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once(__DIR__ . "/../partials/sidebar.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                        
                <!-- Topbar -->
                <?php require_once(__DIR__ . "/../partials/topbar.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="<?= B ?>/transaksi/laporan/transaksi" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Buat Laporan</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Topbar -->
                        <?php require_once(__DIR__ . "/../partials/card.php"); ?>
                        <div class="container-fluid">
                            <!-- <a href="<?= B ?>/kelas/tambahPage" class="btn btn-primary mb-3">Tambah Kelas <i class="fas fa-plus"></i></a> -->
                            <?php Flasher::flash() ?>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><?= $data['tableTitle'] ?></h6>
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

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require_once(__DIR__ . "/../partials/footer.php"); ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require_once(__DIR__ . "/../partials/modal.php"); ?>

    