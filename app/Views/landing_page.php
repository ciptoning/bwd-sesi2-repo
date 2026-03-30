<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VogueVibe - Koleksi Fashion Modern & Minimalis.">
    <title>VogueVibe | Koleksi Eksklusif 2026</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #fff; color: #333; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; letter-spacing: 1px; }
        .bg-fashion-primary { background-color: #f8d7da; color: #5c3d40; }
        
        .btn-fashion { 
            background-color: #333; color: white; border-radius: 0; 
            padding: 12px 30px; transition: 0.3s; border: none;
        }
        .btn-fashion:hover { background-color: #555; color: #fff; }

        .fashion-card {
            padding: 20px; border: 1px solid #eee; margin-bottom: 25px;
            background-color: #fff; transition: all 0.4s ease; text-align: center;
        }
        .fashion-card:hover {
            border-color: #f8d7da; box-shadow: 0 15px 30px rgba(0,0,0,0.05);
            transform: translateY(-10px);
        }

        .icon-circle {
            width: 80px; height: 80px; background: #fdf2f2; border-radius: 50%;
            display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">VOGUE<span class="text-danger">VIBE</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#koleksi">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#newsletter">Newsletter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-fashion-primary text-center py-5">
        <div class="container py-5">
            <h1 class="display-3">Elevate Your Daily Style</h1>
            <p class="lead mb-4 text-secondary">Koleksi ramah lingkungan dengan desain timeless untuk tampilan percaya diri.</p>
            <a href="#katalog" class="btn btn-fashion fw-bold text-uppercase">
                Lihat Katalog <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </header>

    <main>
        <section id="katalog" class="container my-5 py-5">
            <div class="text-center mb-5">
                <h2 class="display-5">Koleksi Terlaris</h2>
                <p class="text-muted">Pilih gaya yang sesuai dengan karaktermu</p>
            </div>
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 shadow-sm fashion-card">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Dress">
                        <div class="card-body">
                            <h5 class="card-title h6 fw-bold">Urban Summer Dress</h5>
                            <p class="card-text text-danger fw-bold">Rp 349.000</p>
                            <button class="btn btn-outline-dark btn-sm w-100">Detail Produk</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 shadow-sm fashion-card">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Outerwear">
                        <div class="card-body">
                            <h5 class="card-title h6 fw-bold">Minimalist Cardigan</h5>
                            <p class="card-text text-danger fw-bold">Rp 299.000</p>
                            <button class="btn btn-outline-dark btn-sm w-100">Detail Produk</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 shadow-sm fashion-card">
                        <img src="https://images.unsplash.com/photo-1543076447-215ad9ba6923?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Jacket">
                        <div class="card-body">
                            <h5 class="card-title h6 fw-bold">Classic Denim Jacket</h5>
                            <p class="card-text text-danger fw-bold">Rp 450.000</p>
                            <button class="btn btn-outline-dark btn-sm w-100">Detail Produk</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 shadow-sm fashion-card">
                        <img src="https://images.unsplash.com/photo-1434389677669-e08b4cac3105?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="White Shirt">
                        <div class="card-body">
                            <h5 class="card-title h6 fw-bold">Signature White Shirt</h5>
                            <p class="card-text text-danger fw-bold">Rp 199.000</p>
                            <button class="btn btn-outline-dark btn-sm w-100">Detail Produk</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="koleksi" class="container my-5 py-5 border-top">
            <div class="text-center mb-5">
                <span class="text-muted text-uppercase small ls-2">Curated Style</span>
                <h2 class="mt-2">Kenapa Memilih Kami?</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="fashion-card">
                        <div class="icon-circle text-danger"><i class="fa-solid fa-gem fa-2x"></i></div>
                        <h3>Premium Quality</h3>
                        <p class="text-muted">Bahan pilihan yang nyaman di kulit dan tahan lama.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fashion-card">
                        <div class="icon-circle text-danger"><i class="fa-solid fa-truck-fast fa-2x"></i></div>
                        <h3>Fast Delivery</h3>
                        <p class="text-muted">Pengiriman kilat dengan proteksi kemasan yang aman.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fashion-card">
                        <div class="icon-circle text-danger"><i class="fa-solid fa-leaf fa-2x"></i></div>
                        <h3>Eco-Friendly</h3>
                        <p class="text-muted">Proses produksi ramah lingkungan dan rendah emisi.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="newsletter" class="bg-light py-5">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3">Dapatkan Diskon 15%</h2>
                        <p class="text-muted mb-4">Daftarkan email Anda untuk update koleksi terbaru.</p>
                        
                        <div id="newsletterSuccess" class="alert alert-success d-none">
                            Terima kasih! Cek email Anda untuk kode vouchernya.
                        </div>
                        <form id="newsletterForm" class="input-group mb-3">
                            <input type="email" id="userEmail" class="form-control border-0 py-3" placeholder="Alamat Email Anda" required>
                            <button class="btn btn-fashion px-4" type="submit">Join Now</button>
                        </form>
                        <small class="text-muted"><i class="fa-solid fa-lock me-1"></i> Data Anda aman bersama kami.</small>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-5">
        <div class="container">
            <h3 class="mb-4">VOGUEVIBE</h3>
            <div class="mb-4">
                <a href="#" class="text-white mx-3"><i class="fa-brands fa-instagram fa-lg"></i></a>
                <a href="#" class="text-white mx-3"><i class="fa-brands fa-tiktok fa-lg"></i></a>
                <a href="#" class="text-white mx-3"><i class="fa-brands fa-whatsapp fa-lg"></i></a>
            </div>
            <p class="mb-0 text-secondary small">&copy; 2026 VogueVibe Boutique by Vivi Rahmadian. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // SCRIPT AGAR TOMBOL JOIN NOW TIDAK ERROR
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah halaman refresh
            const email = document.getElementById('userEmail').value;
            
            if(email) {
                // Sembunyikan form dan tampilkan pesan sukses
                this.classList.add('d-none');
                document.getElementById('newsletterSuccess').classList.remove('d-none');
            }
        });
    </script>
</body>
</html>