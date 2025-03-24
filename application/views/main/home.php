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
                <h3>1. Pergi Ke kopi<span style="color:orangered;">(spasi)</span>kita</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur quasi </p>
            </li>
            <li>
                <h3>2. Pilih Menu Favorit anda</h3>
                <p>omnis ut dolores eum numquam illum quidem cumque!.</p>
            </li>
            <li>
                <h3>3. Nikmati Nikmatnya Tanpa Syarat</h3>
                <p> Sapiente accusamus ipsa doloribus voluptatum vel obcaecati unde ullam quos architecto in.</p>
            </li>
        </ol>
    </div>
</section>
