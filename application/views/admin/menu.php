<div class="container-fluid">
    <h2>Menu</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fas fa-plus-circle"></i>
    Tambah Menu</button>
    <table class="table table-bordered"
           data-toggle="table"
           data-pagination="true"
           data-search="true"
           data-page-size="5">
        <thead>
            <tr>
                <th data-sortable="true">No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($menu as $m) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><img src="<?= base_url('uploads/menu/' . $m->gambar) ?>" width="50"></td>
                    <td><?= $m->nama ?></td>
                    <td><?= $m->kategori ?></td>
                    <td><?= $m->deskripsi ?></td>
                    <td>Rp <?= number_format($m->harga, 0, ',', '.') ?></td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $m->id; ?>"><i class="fas fa-edit"></i>Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $m->id; ?>)"><i class="fas fa-trash"></i>
                        Hapus</button>
                    </td>
                </tr>

                <div class="modal fade" id="modalEdit<?= $m->id; ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/menu') ?>">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id" value="<?= $m->id; ?>">
                                <input type="hidden" name="gambar_lama" value="<?= $m->gambar; ?>">
                                <div class="modal-body">
                                    <label>Nama Menu:</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $m->nama; ?>" required>
                                    <label>Kategori:</label>
                                    <select name="kategori" class="form-control">
    <option value="RAMUAN KOPI" <?= ($m->kategori == 'RAMUAN KOPI') ? 'selected' : ''; ?>>RAMUAN KOPI</option>
    <option value="KUMPULAN MOCKTAIL" <?= ($m->kategori == 'KUMPULAN MOCKTAIL') ? 'selected' : ''; ?>>KUMPULAN MOCKTAIL</option>
    <option value="SNACK" <?= ($m->kategori == 'SNACK') ? 'selected' : ''; ?>>SNACK</option>
    <option value="THE ONLY ONE" <?= ($m->kategori == 'THE ONLY ONE') ? 'selected' : ''; ?>>THE ONLY ONE</option>
    <option value="KLASIK" <?= ($m->kategori == 'KLASIK') ? 'selected' : ''; ?>>KLASIK</option>
    <option value="TRADITIONAL SNACKS ALL VARIAN" <?= ($m->kategori == 'TRADITIONAL SNACKS ALL VARIAN') ? 'selected' : ''; ?>>TRADITIONAL SNACKS ALL VARIAN</option>
</select>

                                    <label>Deskripsi:</label>
                                    <textarea name="deskripsi" class="form-control"> <?= $m->deskripsi; ?> </textarea>
                                    <label>Harga:</label>
                                    <input type="number" name="harga" class="form-control" value="<?= $m->harga; ?>" required>
                                    <label>Gambar:</label>
                                    <input type="file" name="gambar" class="form-control">
                                    <br>
                                    <img src="<?= base_url('uploads/menu/' . $m->gambar); ?>" width="100">
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

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/menu') ?>">
                <input type="hidden" name="action" value="tambah">
                <div class="modal-body">
                    <label>Nama Menu:</label>
                    <input type="text" name="nama" class="form-control" >
                    <label>Kategori:</label>
                    <select name="kategori" class="form-control">
    <option value="RAMUAN KOPI" <?= ($m->kategori == 'RAMUAN KOPI') ? 'selected' : ''; ?>>RAMUAN KOPI</option>
    <option value="KUMPULAN MOCKTAIL" <?= ($m->kategori == 'KUMPULAN MOCKTAIL') ? 'selected' : ''; ?>>KUMPULAN MOCKTAIL</option>
    <option value="SNACK" <?= ($m->kategori == 'SNACK') ? 'selected' : ''; ?>>SNACK</option>
    <option value="THE ONLY ONE" <?= ($m->kategori == 'THE ONLY ONE') ? 'selected' : ''; ?>>THE ONLY ONE</option>
    <option value="KLASIK" <?= ($m->kategori == 'KLASIK') ? 'selected' : ''; ?>>KLASIK</option>
    <option value="TRADITIONAL SNACKS ALL VARIAN" <?= ($m->kategori == 'TRADITIONAL SNACKS ALL VARIAN') ? 'selected' : ''; ?>>TRADITIONAL SNACKS ALL VARIAN</option>
</select>
                    <label>Deskripsi:</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                    <label>Harga:</label>
                    <input type="number" name="harga" class="form-control" 
                    <label>Gambar:</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
            let formData = new FormData();
            formData.append("id", id);

            fetch("<?= base_url('admin/delete_menu') ?>", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: "Dihapus!",
                        text: "Menu berhasil dihapus.",
                        icon: "success",
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => location.reload());
                } else {
                    Swal.fire("Gagal!", "Terjadi kesalahan saat menghapus.", "error");
                }
            })
            .catch(() => Swal.fire("Gagal!", "Terjadi kesalahan koneksi.", "error"));
        }
    });
}

</script>