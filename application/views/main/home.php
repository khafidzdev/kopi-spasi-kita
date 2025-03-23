<!-- Video Background -->
<div class="video-container">   
    <video autoplay loop muted>
        <source src="<?= base_url('assets/img/Satisfying Espresso Workflow ASMR.mp4') ?>" type="video/mp4">
    </video>
    <div class="video-text">
        <h1>We Are Open</h1>
        <p>EAT, TEA, REPEAT</p>
    </div>
</div>

<section id="our-story" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Gambar -->
            <div class="col-lg-6 mb-4 mb-lg-0 position-relative" data-aos="fade-right">
                <img src="<?= base_url('uploads/about/' . $about->ourstory_img) ?>" alt="Our Story" class="img-fluid story-image">
            </div>
            <!-- Teks -->
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="fw-bold section-title">Our Story</h2>
                <p class="text-muted">
                    <?= $about->ourstory_desk; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="testimonials">
    <div class="container">
        <h2 class="testi-title">WHAT OUR CUSTOMER ARE SAYING</h2>
        <div class="testimonials-grid">
            <?php foreach ($testimoni as $t) : ?>
                <div class="testimonial-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <p><?= htmlspecialchars($t->pesan); ?></p>
                    <span>— <?= htmlspecialchars($t->nama); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="steps">
    <div class="container">
        <h2 class="steps-title">Pesan Dalam 3 langkah</h2>
        <ol class="steps-list">
            <li>
                <h3>1. Choose your location</h3>
                <p>Our Jagoans will come to you based on your chosen location</p>
            </li>
            <li>
                <h3>2. Select from coffees or teas</h3>
                <p>Choose your go-to drinks that start at only IDR 8K</p>
            </li>
            <li>
                <h3>3. Easily pay and wait for your Jagoan to arrive</h3>
                <p>Pay with GoPay or OVO and your Jagoan will be there within 15 minutes</p>
            </li>
        </ol>
    </div>
</section>
