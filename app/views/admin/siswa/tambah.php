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
                        <div class="container">
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
                                        <form action="<?= B ?>/siswa/tambah/siswa" method="POST">
                                        <input type="hidden" name="role" value="2">
                                            <div class="form-group my-2">
                                                <label for="nisn">NISN</label>
                                                <input type="text" name="nisn" class="form-control">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="username">NIS</label>
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="nama_siswa">Nama Siswa</label>
                                                <input type="text" name="nama_siswa" class="form-control">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="password">Password</label>
                                                <input type="text" name="password" class="form-control">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="alamat">Alamat</label>
                                                <textarea name="alamat" id="" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="telepon">Telepon</label>
                                                <input type="text" name="telepon" class="form-control">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="kelas_id">Kelas</label>
                                                <select name="kelas_id" id="kelasId" class="form-control">
                                                    <?php foreach($data['kelas'] as $kelas):?>
                                                        <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="pembayaran_id">Tahun Ajaran</label>
                                                <select name="pembayaran_id" id="pembayaranId" class="form-control">
                                                    <?php foreach($data['pembayaran'] as $pembayaran):?>
                                                        <option value="<?= $pembayaran['id_pembayaran'] ?>"><?= $pembayaran['tahun_ajaran'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        <button type="submit" class="btn btn-primary my-2">Tambah</button>
                                        </form>
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

    