<div class="hero">
    <img src="<?php echo base_url('assets/img/kopispasi.jpg'); ?>" class="hero-img">
    <div class="hero-content">
        <h1 style="font-size: 3rem; font-weight: bold; text-transform: uppercase;
         text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);">MENU</h1>
        <hr style="border: 2px solid rgb(0, 0, 0); width: 40%; margin-left: 45%;">
    </div>
</div>
<style>
        .menu-item {
            text-align: center;
            margin-top: 50px;
        }
        .menu-item img {
            width: 250px;
        }
    
    </style>
<?php
$kategori_list = [
    'RAMUAN KOPI',
    'KUMPULAN MOCKTAIL',
    'SNACK',
    'THE ONLY ONE',
    'KLASIK',
    'TRADITIONAL SNACKS ALL VARIAN'
];

$menu_items = $this->db->get('menu')->result();
?>

<div class="container my-5">
    <?php foreach ($kategori_list as $kategori) : ?>
        <section class="my-5">
            <h2 class="fw-bold text-uppercase" ><?= $kategori; ?></h2>
            <hr>
            <div class="row text-center">
                <?php foreach ($menu_items as $item) : ?>
                    <?php if ($item->kategori == $kategori) : ?>
                        <div class="col-md-6">
                            <div class="menu-item" >
                                <img src="<?= base_url('uploads/menu/' . $item->gambar); ?>" alt="<?= $item->nama; ?>" class="img-fluid">
                                <h3 class="fw-bold mt-3"><?= strtoupper($item->nama); ?></h3>
                                <p><?= $item->deskripsi; ?></p>
                                <p class="fw-bold">Rp <?= number_format($item->harga, 0, ',', '.'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>
</div>

