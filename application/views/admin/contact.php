<div class="container-fluid">
    <h2>Contact</h2>
    <table class="table mt-3"
           data-toggle="table"
           data-pagination="true"
           data-search="true"
           data-page-size="5">
        <thead>
            <tr>
                <th data-sortable="true">No</th>
                <th data-sortable="true">Nama</th>
                <th>Email</th>
                <th>Subjek</th>
                <th>Pesan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($contacts as $c): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $c->nama; ?></td>
                <td><?= $c->email; ?></td>
                <td><?= $c->subject; ?></td>
                <td><?= $c->message; ?></td>
                <td><?= $c->status; ?></td>
                <td>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#statusModal<?= $c->id; ?>">Ubah Status</button>
                    <button class="btn btn-sm btn-danger" onclick="confirmDelete(<?= $c->id; ?>)"><i class="fas fa-trash"></i>
                    Hapus</button>
                </td>
            </tr>
            <div class="modal fade" id="statusModal<?= $c->id; ?>" tabindex="-1">
                <div class="modal-dialog">
                    <form method="post" action="<?= base_url('admin/update_status'); ?>">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ubah Status</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?= $c->id; ?>">
                                <select name="status" class="form-control">
                                    <option value="Pending" <?= ($c->status == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                                    <option value="Dibaca" <?= ($c->status == 'Dibaca') ? 'selected' : ''; ?>>Dibaca</option>
                                    <option value="Ditanggapi" <?= ($c->status == 'Ditanggapi') ? 'selected' : ''; ?>>Ditanggapi</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
        </tbody>
    </table>
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
            window.location.href = "<?= base_url('admin/delete/'); ?>" + id;
        }
    });
}
</script>