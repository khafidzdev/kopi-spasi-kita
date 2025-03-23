
<body>
    <div class="container mt-4">
        <h2>Pengaturan Sosial Media & Kontak</h2>
        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit Setting</button>
        
        <table class="table mt-3">
            <tr><th>Instagram</th><td><?= $setting->instagram; ?></td></tr>
            <tr><th>Facebook</th><td><?= $setting->facebook; ?></td></tr>
            <tr><th>Twitter</th><td><?= $setting->twitter; ?></td></tr>
            <tr><th>YouTube</th><td><?= $setting->youtube; ?></td></tr>
            <tr><th>Maps</th><td><?= $setting->maps; ?></td></tr>
            <tr><th>Alamat</th><td><?= $setting->alamat; ?></td></tr>
            <tr><th>WhatsApp</th><td><?= $setting->whatsapp; ?></td></tr>
            <tr><th>Email</th><td><?= $setting->email; ?></td></tr>
        </table>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Setting</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="<?= base_url('admin/setting'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" name="instagram" class="form-control" value="<?= $setting->instagram; ?>">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" class="form-control" value="<?= $setting->facebook; ?>">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" class="form-control" value="<?= $setting->twitter; ?>">
                        </div>
                        <div class="form-group">
                            <label>YouTube</label>
                            <input type="text" name="youtube" class="form-control" value="<?= $setting->youtube; ?>">
                        </div>
                        <div class="form-group">
                            <label>Maps</label>
                            <textarea name="maps" class="form-control"><?= $setting->maps; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control"><?= $setting->alamat; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>WhatsApp</label>
                            <input type="text" name="whatsapp" class="form-control" value="<?= $setting->whatsapp; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $setting->email; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


