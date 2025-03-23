<div class="container mt-4">
    <h2 class="mb-3">Manajemen Menu</h2>

    <!-- Tombol Tambah -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Menu</button>

    <!-- Alert Notifikasi -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success'); ?> </div>
    <?php endif; ?>

    <!-- Tabel Menu -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
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
                        <button class="btn btn-warning btn-sm btn-edit" 
                                data-id="<?= $m->id ?>" 
                                data-nama="<?= $m->nama ?>" 
                                data-kategori="<?= $m->kategori ?>" 
                                data-deskripsi="<?= $m->deskripsi ?>" 
                                data-harga="<?= $m->harga ?>" 
                                data-gambar="<?= $m->gambar ?>"
                                data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>

                        <button class="btn btn-danger btn-sm btn-hapus" 
                                data-id="<?= $m->id ?>" 
                                data-nama="<?= $m->nama ?>" 
                                data-bs-toggle="modal" data-bs-target="#modalHapus">Hapus</button>
                    </td>
                </tr>
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
                    <input type="text" name="nama" class="form-control" required>
                    <label>Kategori:</label>
                    <select name="kategori" class="form-control">
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                    <label>Deskripsi:</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                    <label>Harga:</label>
                    <input type="number" name="harga" class="form-control" required>
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

<!-- Modal Edit (Hanya Satu Modal) -->
<div class="modal fade" id="modalEdit" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/menu') ?>">
                <input type="hidden" name="action" value="update">
                <input type="hidden" id="edit-id" name="id">
                <input type="hidden" id="edit-gambar-lama" name="gambar_lama">
                <div class="modal-body">
                    <label>Nama Menu:</label>
                    <input type="text" id="edit-nama" name="nama" class="form-control" required>
                    <label>Kategori:</label>
                    <select id="edit-kategori" name="kategori" class="form-control">
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                    <label>Deskripsi:</label>
                    <textarea id="edit-deskripsi" name="deskripsi" class="form-control"></textarea>
                    <label>Harga:</label>
                    <input type="number" id="edit-harga" name="harga" class="form-control" required>
                    <label>Gambar:</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus (Hanya Satu Modal) -->
<div class="modal fade" id="modalHapus" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" action="<?= base_url('admin/menu') ?>">
                <input type="hidden" name="action" value="hapus">
                <input type="hidden" id="hapus-id" name="id">
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus menu <b id="hapus-nama"></b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".btn-edit").forEach(btn => {
        btn.addEventListener("click", function() {
            document.getElementById("edit-id").value = this.dataset.id;
            document.getElementById("edit-nama").value = this.dataset.nama;
            document.getElementById("edit-kategori").value = this.dataset.kategori;
            document.getElementById("edit-deskripsi").value = this.dataset.deskripsi;
            document.getElementById("edit-harga").value = this.dataset.harga;
            document.getElementById("edit-gambar-lama").value = this.dataset.gambar;
        });
    });

    document.querySelectorAll(".btn-hapus").forEach(btn => {
        btn.addEventListener("click", function() {
            document.getElementById("hapus-id").value = this.dataset.id;
            document.getElementById("hapus-nama").textContent = this.dataset.nama;
        });
    });
});
</script>
