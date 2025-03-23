<div class="hero">
    <img src="assets/img/kopispasi.jpg"  class="hero-img">
    <div class="hero-content">
        <h1 style="font-size: 3rem; font-weight: bold;text-transform: uppercase;
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
    <div class="contact-info">
        <div class="contact-icon">
            <i class="bi bi-whatsapp"></i>
        </div>
        <div class="contact-text">
            <h5>WHATSAPP</h5>
            <p><a href="https://wa.me/<?= $setting->whatsapp; ?>">+<?= $setting->whatsapp; ?></a> | Barista</p>
        </div>
    </div>
    <div class="contact-info">
        <div class="contact-icon">
            <i class="bi bi-envelope"></i>
        </div>
        <div class="contact-text">
            <h5>E-MAIL</h5>
            <p><a href="mailto:<?= $setting->email; ?>"><?= $setting->email; ?></a></p>
        </div>
    </div>
</div>

        <!-- Formulir Kontak -->
        <div class="col-md-6">
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control border-0 shadow-sm" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control border-0 shadow-sm" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control border-0 shadow-sm" placeholder="Subject" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control border-0 shadow-sm" rows="4" placeholder="Message" required></textarea>
                </div>
                <button class="btn btn-outline-dark w-100 fw-bold" type="submit">SEND MESSAGE</button>
            </form>
        </div>
    </div>
</div>