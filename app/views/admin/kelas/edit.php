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
                                        <form action="<?= B ?>/kelas/edit/kelas" method="POST">
                                            <input type="hidden" name="id_kelas" value="<?= $data['kelas']['id_kelas'] ?>">
                                            <div class="form-group my-2">
                                                <label for="nama_kelas">Nama Kelas</label>
                                                <input type="text" name="nama_kelas" class="form-control" value="<?= $data['kelas']['nama_kelas'] ?>">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                                                <select name="kompetensi_keahlian" id="kompetensiKeahlian" class="form-control">
                                                    <?php for($x = 0; $x < count($data['komka']); $x++):?>
                                                        <?php if($data['komka'][$x] == $data['kelas']['kompetensi_keahlian']): ?>
                                                                <option value="<?= $data['komka'][$x] ?>" selected><?= $data['komka'][$x] ?></option>
                                                            <?php else: ?>
                                                                <option value="<?= $data['komka'][$x] ?>"><?= $data['komka'][$x] ?></option>
                                                        <?php endif ?>
                                                    <?php endfor ?>
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

    


    