<div class="hero">
<img src="<?= base_url('assets/img/kopispasi.jpg'); ?>" class="hero-img">
<div class="hero-content">
        <h1 style="font-size: 3rem; font-weight: bold; text-transform: uppercase;
         text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);">CONTACT</h1>
        <hr style="border: 2px solid rgb(0, 0, 0); width: 10%; margin-left: 45%;">
        <p>Making great coffee accessible and affordable, one neighborhood at a time.</p>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <div class="contact-info">
                <div class="contact-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div class="contact-text" style="margin-left: 15px;">
                    <h5>ALAMAT</h5>
                    <p><?= $setting->alamat; ?></p>
                </div>
            </div>
                        <div class="contact-info" >
                <?= $setting->maps; ?>
            </div>
        </div>

        <div class="col-md-6 mt-5">
            <form method="post" action="<?= base_url('contact'); ?>">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" name="nama" class="form-control border-0 shadow-sm" placeholder="Nama Anda" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" name="email" class="form-control border-0 shadow-sm" placeholder="Email Anda" required>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" name="subject" class="form-control border-0 shadow-sm" placeholder="Subjek" required>
                </div>
                <div class="mb-3">
                    <textarea name="message" class="form-control border-0 shadow-sm" rows="4" placeholder="Pesan" required></textarea>
                </div>
                <button class="btn btn-outline-dark w-100 fw-bold" type="submit">SEND MESSAGE</button>
            </form>
        </div>
    </div>
</div>
