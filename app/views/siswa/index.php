<h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Periode <?= date('m-y') ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>Wali Murid</th>
                        <th>No tlp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($data['siswa'] as $index => $siswa) : ?>
                    <tbody>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $siswa['nis'] ?></td>
                            <td><?= $siswa['nama'] ?></td>
                            <td><?= $siswa['alamat'] ?></td>
                            <td><?= $siswa['kelas'] ?></td>
                            <td><?= $siswa['wali_murid'] ?></td>
                            <td><?= $siswa['nomor_hp'] ?></td>
                            <td>
                                <a href="#" class="btn btn-warning btn-circle">
                                <i class="fa-regular fa-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle">
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