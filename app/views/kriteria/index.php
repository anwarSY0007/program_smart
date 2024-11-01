<h1 class="h3 mb-2 text-gray-800"><?= $data['judul']; ?></h1>
<div class="row">
    <?php Flasher::flash(); ?>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Periode <?= date('m-y') ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="container">
                <a class="btn btn-primary btn-md mb-3 add_kriteria" href="#" data-toggle="modal" data-target="#addModal">
                    <i class="fas fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                    Tambah Kriteria
                </a>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kriteria</th>
                        <th>Bobot</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($data['kriteria'] as $index => $kriteria) : ?>
                    <tbody>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $kriteria['nama_kriteria'] ?></td>
                            <td><?= $kriteria['bobot'] ?></td>
                            <td>
                                <a href="#" class="btn btn-warning btn-circle ubh_kriteria" data-toggle="modal" data-target="#addModal" data-id_kriteria="<?= $kriteria['id_kriteria']; ?>">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="<?= BASEURL ?>/kriteria/hapus/<?= $kriteria['id_kriteria']; ?>" onclick="return confirm('yakin?')" class="btn btn-danger btn-circle">
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



<!-- Logout Modal-->
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
                <form action="<?= BASEURL ?>kriteria/add" method="post">
                    <input type="hidden" name="id_kriteria" id="id_kriteria">
                    <div class="mb-3">
                        <label for="kriteria" class="form-label" require>Nama Kriteria</label>
                        <input type="text" id="kriteria" name="kriteria" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="bobot" class="form-label">Bobot Kriteria</label>
                        <input type="number" class="form-control" id="bobot" name="bobot">
                    </div>

                    <button type="submit" class="btn btn-primary tmbl">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>