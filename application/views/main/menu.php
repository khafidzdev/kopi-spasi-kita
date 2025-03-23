<div class="hero">
    <img src="<?php echo base_url('assets/img/kopispasi.jpg'); ?>" class="hero-img">
    <div class="hero-content">
        <h1 style="font-size: 3rem; font-weight: bold; text-transform: uppercase;
         text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);">MENU</h1>
        <hr style="border: 2px solid rgb(0, 0, 0); width: 40%; margin-left: 45%;">
    </div>
</div>

<div class="container my-5">
    <div class="menu-tabs">
        <a href="#foodMenu" class="tabs" id="foodLink">Food</a> |
        <a href="#drinkMenu" class="tabs" id="drinkLink">Drink</a>
    </div>

    <!-- Food Section -->
    <div id="foodMenu" class="mt-5">
        <h3 class="fw-bold">Food</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
            <?php if (!empty($food_menu)): ?>
                <?php foreach ($food_menu as $food): ?>
                    <div class="col d-flex align-items-center">
                        <img src="<?php echo base_url('uploads/menu/' . $food->gambar); ?>" class="menu-img" alt="<?= $food->nama; ?>">
                        <div class="menu-text">
                            <h5 class="fw-bold"><?= $food->nama; ?></h5>
                            <p class="text-danger fw-bold">Rp <?= number_format($food->harga, 0, ',', '.'); ?></p>
                            <p><?= $food->deskripsi; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Menu makanan belum tersedia.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Drink Section -->
    <div id="drinkMenu" class="mt-5">
        <h3 class="fw-bold">Drink</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
            <?php if (!empty($drink_menu)): ?>
                <?php foreach ($drink_menu as $drink): ?>
                    <div class="col d-flex align-items-center">
                        <img src="<?php echo base_url('uploads/menu/' . $drink->gambar); ?>" class="menu-img" alt="<?= $drink->nama; ?>">
                        <div class="menu-text">
                            <h5 class="fw-bold"><?= $drink->nama; ?></h5>
                            <p class="text-danger fw-bold">Rp <?= number_format($drink->harga, 0, ',', '.'); ?></p>
                            <p><?= $drink->deskripsi; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Menu minuman belum tersedia.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
