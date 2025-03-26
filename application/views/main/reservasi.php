<div class="hero">
    <img src="<?= base_url('assets/img/kopispasi.jpg'); ?>" class="hero-img">
    <div class="hero-content">
        <h1 style="font-size: 3rem; font-weight: bold; text-transform: uppercase;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);">RESERVASI</h1>
        <hr style="border: 2px solid rgb(0, 0, 0); width: 10%; margin-left: 45%;">
        <p>Making great coffee accessible and affordable, one neighborhood at a time.</p>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <form id="whatsappForm">
                <div class="mb-3">
                    <input type="text" id="name" class="form-control border-0 shadow-sm" placeholder="Nama Anda" required>
                </div>
                <div class="mb-3">
                    <input type="email" id="email" class="form-control border-0 shadow-sm" placeholder="No Hp" required>
                </div>
                <div class="mb-3">
                    <select id="reservationType" class="form-control border-0 shadow-sm" required>
                        <option value="" disabled selected>-- Pilih Jenis Reservasi --</option>
                        <option value="Bisnis">Bisnis</option>
                        <option value="Personal">Personal</option>
                        <option value="Event">Event</option>
                    </select>
                </div>
                <div class="mb-3">
                    <textarea id="message" class="form-control border-0 shadow-sm" rows="4" placeholder="Pesan" required></textarea>
                </div>
                <div class="mb-3">
                    <input type="date" id="date" class="form-control border-0 shadow-sm" required>
                </div>
                <div class="mb-3">
                    <input type="time" id="time" class="form-control border-0 shadow-sm" required>
                </div>
                <button type="button" class="btn btn-outline-dark w-100 fw-bold" onclick="sendWhatsApp()">SEND RESERVASI</button>
            </form>
        </div>
        <div class="col-md-4 mt-5">
            <div class="contact-info">
                <div class="contact-icon">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <div class="contact-text">
                    <h5>WHATSAPP</h5>
                    <p><a href="https://wa.me/<?= $setting->whatsapp; ?>">+<?= $setting->whatsapp; ?></a> | Barista</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function sendWhatsApp() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var reservationType = document.getElementById("reservationType").value;
        var message = document.getElementById("message").value;
        var date = document.getElementById("date").value;
        var time = document.getElementById("time").value;
        if (!name || !email || !reservationType || !message || !date || !time) {
            alert("Mohon isi semua data sebelum mengirim reservasi.");
            return;
        }
        var text = `Halo Admin Kopi(spasi)Kita! Saya ingin reservasi.\n\n` +
                   `📝 Nama: ${name}\n📧 Email: ${email}\n🛎️ Jenis Reservasi: ${reservationType}\n📅 Tanggal: ${date}\n🕑 Jam: ${time}\n📩 Pesan: ${message}`;
        var phoneNumber = "62895378168939";
        var whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(text)}`;
        window.open(whatsappURL, "_blank");
    }
</script>
