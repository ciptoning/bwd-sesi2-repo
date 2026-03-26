<!DOCTYPE html>
<html lang="id">
<head>
    <!-- META TAGS: Sangat penting untuk SEO dan Mobile-First -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page MVP untuk produk bisnis digital.">
    
    <title>MVP Bisnis Digital | BWD Sesi 2</title>

    <!-- BOOTSTRAP 5 CDN: Mengimpor "Rak Etalase Dinamis" tanpa perlu menulis CSS manual -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FONT & ICONS: Meningkatkan UI/UX Bisnis -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* CSS KUSTOM MINIMALIS: Praktik CSS Box Model (Margin, Border, Padding) */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        h1, h2, h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        .box-model-demo {
            padding: 30px; /* Jarak dari konten ke dinding kardus (dalam) */
            border: 2px solid #0d6efd; /* Dinding kardus */
            margin-bottom: 20px; /* Jarak antar kardus (luar) */
            border-radius: 12px;
            background-color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box-model-demo:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <!-- SEMANTIC TAG: <nav> memberi tahu Google bahwa ini adalah menu navigasi utama -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-rocket text-primary"></i> Healthylife</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SEMANTIC TAG: <header> sebagai area "Hero/Papan Reklame" utama web -->
    <header class="bg-primary text-white text-center py-4">
        <div class="container py-3">
            <!-- Judul yang lebih ringkas -->
            <h1 class="display-4 fw-bold">Diet Sehat, Lambung Aman.</h1>
            <!-- Deskripsi yang lebih padat -->
            <p class="lead mt-3">Menu rendah karbohidrat lezat untuk dukung produktivitasmu.</p>
            <a href="https://wa.me/6285610575454?text=Halo%20HealthyLife..." class="btn btn-light btn-lg mt-3 fw-bold text-primary" target="_blank">Chat Admin Sekarang</a>
        </div>
    </header>

    <!-- SEMANTIC TAG: <main> membungkus seluruh konten inti/jualan utama -->
    <main>
        
        <!-- SEMANTIC TAG: <section> membagi area web menjadi bagian-bagian logis -->
        <section id="produk" class="container mt-4 mb-5 py-2">
            <div class="text-center mb-5">
                <h2>Layanan Kami</h2>
                <p class="text-muted">Pilihan nutrisi terbaik untuk diet sehat dan manajemen gastritis yang lebih baik.</p>
            </div>

            <!-- BOOTSTRAP GRID (Baris) -->
<div class="row g-4">
    
    <!-- Produk 1 -->
    <article class="col-12 col-md-4">
        <div class="box-model-demo h-100 d-flex flex-column text-center">
            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=400" 
                 class="img-fluid rounded mb-3" 
                 style="height: 200px; object-fit: cover; width: 100%;" 
                 alt="Salad Buah">
            
            <!-- Pembungkus Teks agar Sejajar -->
            <div class="flex-grow-1 d-flex flex-column justify-content-center">
                <h3 class="h4 fw-bold">Salad Buah Premium</h3>
                <p class="text-muted mb-0">Salad buah segar rendah kalori dan aman untuk lambung.</p>
            </div>
        </div>
    </article>

    <!-- Produk 2 -->
    <article class="col-12 col-md-4">
        <div class="box-model-demo h-100 d-flex flex-column text-center">
            <img src="https://images.unsplash.com/photo-1547592166-23ac45744acd?w=400"
                 class="img-fluid rounded mb-3" 
                 style="height: 200px; object-fit: cover; width: 100%;" 
                 alt="Smoothie Bowl">
            
            <div class="flex-grow-1 d-flex flex-column justify-content-center">
                <h3 class="h4 fw-bold">Smoothie Bowl</h3>
                <p class="text-muted mb-0">Smoothie buah asli dengan granola renyah tanpa pemanis.</p>
            </div>
        </div>
    </article>

    <!-- Produk 3 -->
    <article class="col-12 col-md-4">
        <div class="box-model-demo h-100 d-flex flex-column text-center">
            <img src="https://images.unsplash.com/photo-1590301157890-4810ed352733?w=400" 
                 class="img-fluid rounded mb-3" 
                 style="height: 200px; object-fit: cover; width: 100%;" 
                 alt="Catering Mingguan">
            
            <div class="flex-grow-1 d-flex flex-column justify-content-center">
                <h3 class="h4 fw-bold">Catering Mingguan</h3>
                <p class="text-muted mb-0">Paket katering harian rendah karbohidrat diantar ke rumah.</p>
            </div>
        </div>
    </article>

</div>
        </section>

        <!-- SECURE FORM SECTION -->
        <section id="kontak" class="bg-white py-5 border-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="text-center mb-4">
                            <h2>Dapatkan Proposal Gratis</h2>
                        </div>

                        <!-- Form Bisnis: Akan dihubungkan ke PHP/CodeIgniter di pertemuan UAS -->
                        <form onsubmit="handleSubmit(event)" method="POST" class="p-4 border rounded shadow-sm bg-light">
                            
                            <div class="mb-3">
                                <label for="namaLengkap" class="form-label fw-bold">Nama Lengkap</label>
                                <!-- INPUT TEXT BIASA -->
                                <input type="text" class="form-control" id="namaLengkap" name="nama_lengkap" placeholder="Cth: Budi Santoso" required>
                            </div>

                            <div class="mb-3">
                                <label for="emailBisnis" class="form-label fw-bold">Email Bisnis</label>
                                <!-- SECURE INPUT: type="email" memaksa user memakai format @domain.com -->
                                <input type="email" class="form-control" id="emailBisnis" name="email_bisnis" placeholder="budi@perusahaan.com" required>
                                <div class="form-text">Kami tidak akan pernah membagikan email Anda (Anti-Spam).</div>
                            </div>

                            <div class="mb-4">
                                <label for="nomorTelepon" class="form-label fw-bold">Nomor WhatsApp</label>
                                <!-- SECURE INPUT: type="tel" otomatis memunculkan Numpad (angka) di HP -->
                                <input type="tel" class="form-control" id="nomorTelepon" name="nomor_wa" placeholder="6285610575454" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 fw-bold py-2">
                                 Kirim Permintaan <i class="fa-solid fa-paper-plane ms-1"></i>
                                 </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- SEMANTIC TAG: <footer> area penutup yang memberitahu bot ini adalah akhir dokumen -->
    <footer class="bg-dark text-light text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2026 HealthyLife Startup by Apriyani <strong>BWD04 - Sesi 2</strong>.</p>
        </div>
    </footer>

    <!-- BOOTSTRAP JS BUNDLE: Diperlukan untuk interaktivitas komponen seperti Navbar Mobile -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function handleSubmit(event) {
    event.preventDefault();

    alert("Permintaan Terkirim! Kami akan segera menghubungi Anda.");

    // reset form (ini yang bikin kosong lagi)
    event.target.reset();
}
</script>

</body>
</html>