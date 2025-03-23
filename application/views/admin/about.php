<div class="container mt-4">
    <h2>About Management</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#editAboutModal">Edit About</button>

    <div class="card p-4">
        <!-- About Section -->
        <div class="row align-items-center mb-4">
            <div class="col-md-4 text-center">
                <img src="<?= base_url('uploads/about/' . $about->about_img); ?>" alt="About Image" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <h4>About</h4>
                <p><?= $about->about_desk; ?></p>
            </div>
        </div>

        <!-- Our Story Section -->
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="<?= base_url('uploads/about/' . $about->ourstory_img); ?>" alt="Our Story Image" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <h4>Our Story</h4>
                <p><?= $about->ourstory_desk; ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit About -->
<div class="modal fade" id="editAboutModal" tabindex="-1" aria-labelledby="editAboutLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAboutLabel">Edit About</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/update_about'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>About Image</label>
                        <input type="file" name="about_img" class="form-control">
                        <input type="hidden" name="about_img_lama" value="<?= $about->about_img; ?>">
                    </div>
                    <div class="mb-3">
                        <label>About Description</label>
                        <textarea name="about_desk" class="form-control" required><?= $about->about_desk; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Our Story Image</label>
                        <input type="file" name="ourstory_img" class="form-control">
                        <input type="hidden" name="ourstory_img_lama" value="<?= $about->ourstory_img; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Our Story Description</label>
                        <textarea name="ourstory_desk" class="form-control" required><?= $about->ourstory_desk; ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
