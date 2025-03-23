<!-- Footer -->
<footer class="footer py-5">
    <div class="container text-center">
        <div class="row">
            <!-- Logo & Lokasi -->
            <div class="col-md-4 mb-4">
                <a class="footer-brand">
                    <img src="<?= base_url('assets/img/kopi(spasi)kita hitam.png'); ?>" alt="Warung Spasi Logo" class="me-2" width="150">
                </a>
                <p class="text-uppercase"><?= strtoupper($setting->alamat); ?></p>
            </div>

            <!-- Jam Operasional -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold text-warning">HOURS</h5>
                <p>𝙉𝙞𝙠𝙢𝙖𝙩 𝙏𝙖𝙣𝙥𝙖 𝙎𝙮𝙖𝙧𝙖𝙩 <br> 
                    <strong>𝙎𝙀𝙏𝙄𝘼𝙋 𝙃𝘼𝙍𝙄 • 17.00 - 01.00</strong>
                </p>
            </div>

            <!-- Kontak & Media Sosial -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold text-warning">CONTACT</h5>


                <div class="social-icons mt-3">
                    <a href="<?= $setting->facebook; ?>" target="_blank" class="social-link" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="<?= $setting->instagram; ?>" target="_blank" class="social-link" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="<?= $setting->twitter; ?>" target="_blank" class="social-link" title="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="<?= $setting->youtube; ?>" target="_blank" class="social-link" title="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-4">
            <p class="text-light small">&copy; <?= date('Y'); ?> Warung Spasi. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- Custom Styling -->
<style>
    .contact-info {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }


    .contact-text p {
        margin: 0;
        font-size: 14px;
    }

    .social-icons a {
        display: inline-block;
        font-size: 24px;
        margin: 0 10px;
        color: gray;
        transition: transform 0.3s, color 0.3s;
    }

    .social-icons a:hover {
        color: #fcb040;
        transform: scale(1.2);
    }

  
</style>
