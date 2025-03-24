<!-- Hero Section -->
<div class="hero">
    <img src="<?= base_url('assets/img/kopispasi.jpg'); ?>" class="hero-img">
    <div class="hero-content">
        <h1 style="font-size: 3rem; font-weight: bold; text-transform: uppercase;
        text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);">ABOUT</h1>
        <hr style="border: 2px solid rgb(0, 0, 0); width: 10%; margin-left: 45%;">
    </div>
</div>

<div class="content">
    <p style="font-size: 1.3rem;">
    <?= $about->about_desk; ?>
    </p>
 
    <img src="<?= base_url('uploads/about/' . $about->about_img); ?>" class="img-fluid" style="width: 500px; height: 300px;">
</div>

<section class="team-section">
    <h2 class="team-title">MEET OUR TEAM</h2>
    <p class="team-subtitle">Get to know the people you’ll be working with</p>

    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($team as $t) : ?>
                <div class="col-md-2 col-6 text-center team-member">
                    <img src="<?= base_url('uploads/team/' . $t->gambar); ?>" alt="<?= $t->nama; ?>" width="100">
                    <h5 class="team-name mt-2"><?= $t->nama; ?></h5>
                    <p class="team-role text-muted"><?= $t->peran; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


