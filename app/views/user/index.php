<h1 class="h3 mb-2 text-gray-800"><?= $data['judul']; ?></h1>

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
                        <th>Nama Admin</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($data['users'] as $index => $user) : ?>
                    <tbody>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $user['nama_admin']?></td>
                            <td><?= $user['username']?></td>
                            <td><?= $user['password']?></td>
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