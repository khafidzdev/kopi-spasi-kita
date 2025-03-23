<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Testimoni</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</head>
<body>
<div class="container mt-5">
    <h2>Manajemen Testimoni</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addTestiModal">Tambah Testimoni</button>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testimoni as $t) : ?>
                <tr>
                    <td><?= $t->nama; ?></td>
                    <td><?= $t->pesan; ?></td>
                    <td>
                        <button class="btn btn-warning btn-sm" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editTestiModal<?= $t->id; ?>">Edit</button>
                        <a href="<?= base_url('admin/delete_testi/' . $t->id); ?>" 
                           class="btn btn-danger btn-sm" 
                           onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <div class="modal fade" id="editTestiModal<?= $t->id; ?>" tabindex="-1" aria-labelledby="editTestiLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editTestiLabel">Edit Testimoni</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?= base_url('admin/update_testi'); ?>" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="<?= $t->id; ?>">
                                    <div class="mb-3">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?= $t->nama; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Pesan</label>
                                        <textarea name="pesan" class="form-control" required><?= $t->pesan; ?></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="addTestiModal" tabindex="-1" aria-labelledby="addTestiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTestiLabel">Tambah Testimoni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/add_testi'); ?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Pesan</label>
                        <textarea name="pesan" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
