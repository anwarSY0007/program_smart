<h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Periode <?= date('m-y') ?></h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
        <div class="container">
                <a class="btn btn-primary btn-md mb-3 add_siswa" href="#" data-toggle="modal" data-target="#addModal">
                    <i class="fas fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                    Tambah Data Siswa
                </a>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <?php foreach ($data['kriteria'] as $kt) : ?>
                            <th><?= $kt['nama_kriteria'] ?></th>
                            <?php endforeach; ?>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($data['siswa'] as $index => $siswa) : ?>
                    <tbody>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $siswa['nama_siswa'] ?></td>
                            <td><?= $siswa['kelas'] ?></td>
                            <td><?= $siswa['k1'] ?></td>
                            <td><?= $siswa['k2'] ?></td>
                            <td><?= $siswa['k3'] ?></td>
                            <td><?= $siswa['k4'] ?></td>
                            <td><?= $siswa['k5'] ?></td>
                            <td>
                                <a href="#" class="btn btn-warning btn-circle ubh_siswa" data-toggle="modal" data-target="#addModal" data-id_siswa="<?= $siswa['id_siswa']; ?>">
                                <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="<?= BASEURL ?>siswa/hapus/<?= $siswa['id_siswa']; ?>" onclick="return confirm('yakin?')" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>



<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel"> Tambah Data Kriteria</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>siswa/tambah" method="post">
                    <input type="hidden" name="id_siswa" id="id_siswa">
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label" require>Nama Siswa</label>
                        <input type="text" id="nama_siswa" name="nama_siswa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                    <div class="mb-3">
                        <label for="k1" class="form-label">Membaca</label>
                        <input type="number" class="form-control" id="k1" name="k1">
                    </div>
                    <div class="mb-3">
                        <label for="k2" class="form-label">Menulis</label>
                        <input type="number" class="form-control" id="k2" name="k2">
                    </div>
                    <div class="mb-3">
                        <label for="k3" class="form-label">Mewarnai</label>
                        <input type="number" class="form-control" id="k3" name="k3">
                    </div>
                    <div class="mb-3">
                        <label for="k4" class="form-label">Keaktifan</label>
                        <input type="number" class="form-control" id="k4" name="k4">
                    </div>
                    <div class="mb-3">
                        <label for="k5" class="form-label">Perilaku</label>
                        <input type="number" class="form-control" id="k5" name="k5">
                    </div>
                    <button type="submit" class="btn btn-primary tmbl">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>