<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Welcome <?= $this->session->userdata('username'); ?></h1>

    <!-- Card Tanggal dan Waktu -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-info shadow h-1000 py-2" >
                <div class="card-body">
                    <div class="row no-gutters ">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Tanggal & Waktu</div>
                            <div id="dateTime" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            <p class="text-muted mb-3">kopi(spasi)kita</p>
                                            <a class="btn btn-md btn-success" target="_blank"
                                                href="<?php echo base_url(); ?>">Preview
                                                Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Menu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_menu; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-utensils fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Testimoni</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_testimoni; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Tim</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_tim; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Pesan Kontak</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pesan; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateDateTime() {
        const hariIndo = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const bulanIndo = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni", 
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        let now = new Date();
        let hari = hariIndo[now.getDay()];
        let tanggal = now.getDate();
        let bulan = bulanIndo[now.getMonth()];
        let tahun = now.getFullYear();
        let jam = now.getHours().toString().padStart(2, "0");
        let menit = now.getMinutes().toString().padStart(2, "0");
        let detik = now.getSeconds().toString().padStart(2, "0");

        let dateTimeString = `${hari}, ${tanggal} ${bulan} ${tahun} | ${jam}:${menit}:${detik}`;
        document.getElementById("dateTime").innerText = dateTimeString;
    }

    setInterval(updateDateTime, 1000);
    updateDateTime();
</script>
