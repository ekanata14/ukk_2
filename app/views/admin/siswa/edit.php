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
                                    <form action="<?= B ?>/siswa/edit/siswa" method="POST">
                                            <input type="hidden" name="id_siswa" value="<?= $data['siswa']['id_siswa'] ?>">
                                            <input type="hidden" name="pengguna_id" value="<?= $data['siswa']['pengguna_id'] ?>">
                                            <div class="form-group my-2">
                                                <label for="nisn">NISN</label>
                                                <input type="text" name="nisn" class="form-control" value="<?= $data['siswa']['nisn'] ?>">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="username">NIS</label>
                                                <input type="text" name="username" class="form-control" value="<?= $data['siswa']['nis'] ?>">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="nama_siswa">Nama Siswa</label>
                                                <input type="text" name="nama_siswa" class="form-control" value="<?= $data['siswa']['nama_siswa'] ?>">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="password">Password</label>
                                                <input type="text" name="password" class="form-control" value="<?= $data['siswa']['password'] ?>">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="alamat">Alamat</label>
                                                <textarea name="alamat" id="" cols="30" rows="5" class="form-control"><?= $data['siswa']['alamat'] ?></textarea>
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="telepon">Telepon</label>
                                                <input type="text" name="telepon" class="form-control" value="<?= $data['siswa']['telepon'] ?>">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="kelas_id">Kelas</label>
                                                <select name="kelas_id" id="kelasId" class="form-control">
                                                    <?php foreach($data['kelas'] as $kelas):?>
                                                        <?php if($kelas['id_kelas'] == $data['siswa']['kelas_id']): ?>
                                                            <option value="<?= $kelas['id_kelas'] ?>" selected><?= $kelas['nama_kelas'] ?></option>
                                                        <?php else: ?>
                                                            <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="pembayaran_id">Tahun Ajaran</label>
                                                <select name="pembayaran_id" id="pembayaranId" class="form-control">
                                                    <?php foreach($data['pembayaran'] as $pembayaran):?>
                                                        <?php if($pembayaran['id_pembayaran'] == $data['siswa']['pembayaran_id']): ?>
                                                            <option value="<?= $pembayaran['id_pembayaran'] ?>" selected><?= $pembayaran['tahun_ajaran'] ?></option>
                                                        <?php else: ?>
                                                            <option value="<?= $pembayaran['id_pembayaran'] ?>"><?= $pembayaran['tahun_ajaran'] ?></option>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        <button type="submit" class="btn btn-warning my-2">Edit</button>
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

    


    