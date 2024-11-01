<h1 class="h3 mb-2 text-gray-800">Hasil Belajar Siswa</h1>

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
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <?php foreach ($data['kriteria'] as $kt) : ?>
                            <th><?= $kt['nama_kriteria'] ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['siswa'] as $index => $siswa) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($siswa['nama_siswa']) ?></td>
                            <td><?= htmlspecialchars($siswa['kelas']) ?></td>
                            <?php foreach ($data['kriteria'] as $i => $kt) : ?>
                                <td><?= htmlspecialchars($siswa['k' . ($i + 1)]) ?></td> <!-- Menggunakan loop untuk kriteria -->
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<h1 class="h3 mb-2 text-gray-800">Hasil UTILITY ALTERNATIVE</h1>

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
                        <th>Nama Siswa</th>
                        <?php foreach ($data['kriteria'] as $kt) : ?>
                            <th><?= $kt['nama_kriteria'] ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['siswaData'] as $siswa) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($siswa['nama_siswa']) ?></td>
                            <?php foreach ($data['kriteria'] as $i => $kt) : ?>
                                <td><?= htmlspecialchars($siswa['k' . ($i + 1)]) ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>