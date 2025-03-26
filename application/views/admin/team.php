<div class="container-fluid">
    <h2>Tim</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal"><i class="fas fa-plus-circle"></i>
    Tambah Anggota</button>
    <table class="table mt-3"
           data-toggle="table"
           data-pagination="true"
           data-search="true"
           data-page-size="5">
        <thead>
            <tr>
                <th data-sortable="true">No</th>
                <th data-sortable="true">Nama</th>
                <th>Peran</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($team as $t) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $t->nama; ?></td>
                <td><?= $t->peran; ?></td>
                <td><img src="<?= base_url('uploads/team/' . $t->gambar); ?>" width="100"></td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $t->id; ?>"><i class="fas fa-edit"></i>Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $t->id; ?>)"><i class="fas fa-trash"></i>
                    Hapus</button>
                    </td>
            </tr>
            <div class="modal fade" id="editModal<?= $t->id; ?>">
                <div class="modal-dialog">
                    <form action="<?= base_url('admin/update_team'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Anggota Tim</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?= $t->id; ?>">

                                <label>Nama</label>
                                <input type="text" name="nama" value="<?= $t->nama; ?>" class="form-control" required>

                                <label>Peran</label>
                                <input type="text" name="peran" value="<?= $t->peran; ?>" class="form-control" required>

                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                                <br>
                                <img src="<?= base_url('uploads/team/' . $t->gambar); ?>" width="100">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Modal Tambah -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <form action="<?= base_url('admin/tambah_team'); ?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Anggota Tim</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                    <label>Peran</label>
                    <input type="text" name="peran" class="form-control" required>
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

                </div>
            </div>
        </form>
    </div>
</div>
<script>
function confirmDelete(id) {
    Swal.fire({
        title: "Yakin ingin menghapus?",
        text: "Data yang dihapus tidak bisa dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Ya, Hapus!",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?= base_url('admin/hapus_team/'); ?>" + id;
        }
    });
}
</script>