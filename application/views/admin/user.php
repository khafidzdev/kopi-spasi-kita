<body>
    <div class="container mt-5">
        <h3 class="text-center">User Profile</h3>

        <div class="card shadow-lg p-4">
            <div class="d-flex justify-content-between align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Logo" height="60">
                <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                    <i class="fas fa-edit"></i> Edit
                </button>
            </div>
            <hr>

            <table class="table">
                <tr>
                    <th class="bg-primary text-white">Username</th>
                    <td><?= $admin->username; ?></td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Password</th>
                    <td>********</td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Email</th>
                    <td><?= $admin->email; ?></td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Role</th>
                    <td><?= ucfirst($admin->role); ?></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Modal Edit Profile -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/update_credentials'); ?>" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $admin->username; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kosongkan jika tidak diubah">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $admin->email; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap & FontAwesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
