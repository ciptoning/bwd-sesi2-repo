<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>FashionHub 2026</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header class="banner">
        <h1>FashionHub 2026</h1>
        <p>Belanja Trendy dengan Diskon Otomatis</p>
    </header>

    <main class="container">
        <div class="header-etalase" style="display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
            <h2>Etalase Produk</h2>
            <div id="info-belanja" style="text-align: right;">
                <h4 id="keranjang-info" style="margin:0; color: #007bff;">🛒 0 Item | Rp 0</h4>
                <small id="diskon-info" style="color: #dc3545; font-weight: bold;"></small>
            </div>
        </div>
        
        <button id="muat-data" class="btn-load" style="margin: 20px 0; padding: 10px 20px; cursor: pointer;">
            <i class="fa-solid fa-bolt"></i> Muat Katalog
        </button>

        <div id="produk-list" class="katalog-grid"></div>
    </main>

    <script>
        // Mengambil data dari Controller PHP
        const dataProduk = <?php echo json_encode($dataProduk); ?>;
    </script>
    <script src="<?= base_url('js/script.js') ?>"></script>
</body>
</html>