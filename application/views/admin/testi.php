

<div class="container-fluid">
    <h2>Testimoni</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addTestiModal"><i class="fas fa-plus-circle"></i>
    Tambah Testimoni</button>
    <table class="table table-bordered"
           data-toggle="table"
           data-pagination="true"
           data-search="true"
           data-page-size="5">
        <thead>
            <tr>
            <th data-sortable="true">No</th>

                <th data-sortable="true">Nama</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            

            <?php  $no = 1; foreach ($testimoni as $t) : ?>
                <tr>
                <td><?= $no++; ?></td>

    <td><?= $t->nama; ?></td>
    <td><?= $t->pesan; ?></td>
    <td>
        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editTestiModal<?= $t->id; ?>"><i class="fas fa-edit"></i>Edit</button>

        <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $t->id; ?>)"><i class="fas fa-trash"></i>
        Hapus</button>
    </td>
</tr>

                <div class="modal fade" id="editTestiModal<?= $t->id; ?>" tabindex="-1" aria-labelledby="editTestiLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editTestiLabel">Edit Testimoni</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?= base_url('admin/edit_testi'); ?>" method="post">
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
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="modal fade" id="addTestiModal" tabindex="-1" aria-labelledby="addTestiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTestiLabel">Tambah Testimoni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/tambah_testi'); ?>" method="post">
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
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
            window.location.href = "<?= base_url('admin/hapus_testi/'); ?>" + id;
        }
    });
}
</script>

