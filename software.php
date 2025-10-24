<?php
$softwareFolder = 'software/';
// Ambil daftar file dari folder 'software' dan hilangkan . dan ..
$files = array_diff(scandir($softwareFolder), array('..', '.'));
$softwareFiles = array_filter($files, function($file) {
    // Filter untuk hanya file dengan ekstensi .rar dan .zip
    return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['rar', 'zip']);
});

// Ambil query pencarian
$search = $_GET['search'] ?? '';
if ($search) {
    // Jika ada pencarian, filter file berdasarkan nama dan ekstensi yang diinginkan
    $softwareFiles = array_filter($softwareFiles, function($file) use ($search) {
        return stripos($file, $search) !== false && in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['rar', 'zip']);
    });
}

// Hitung total jumlah software
$totalSoftware = count($softwareFiles);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software - teknisiPOSprinter</title>
    <link rel="shortcut icon" href="profile.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Membuat header tetap di atas (sticky) */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000; /* Pastikan header berada di atas elemen lain */
        }

        /* Memberikan padding pada konten utama agar tidak tertutup oleh header */
        main {
            padding-top: 120px; /* Menyesuaikan tinggi header tetap */
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">

    <!-- Header -->
    <header class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-8 flex items-center justify-between">
            <!-- Container untuk Logo dan Teks -->
            <div class="flex items-center space-x-4">
                <!-- Logo di kiri -->
                <img src="profile.png" alt="Bengkel Printer" class="h-12 w-12">
                
                <!-- Teks "Bengkel Printer" -->
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-800">teknisiPOSprinter</h1>
            </div>

            <!-- Navbar Menu -->
            <nav class="space-x-6">
                <a href="index.php" class="text-lg text-gray-600 hover:text-indigo-600 transition">Beranda</a>
                <a href="tentang.html" class="text-lg text-gray-600 hover:text-indigo-600 transition">Tentang</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto mt-12 px-6">
        <!-- Search Bar -->
        <div class="mb-6">
            <input type="text" id="search" placeholder="Cari software..." class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-300">
        </div>

        <!-- Menampilkan total jumlah software -->
        <div class="mb-6 text-lg text-gray-800">
            <p>Total Software: <span class="font-semibold"><?= $totalSoftware ?></span></p>
        </div>

        <!-- File List -->
        <div id="file-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($softwareFiles as $file): ?>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <h3 class="font-semibold text-lg mb-3 text-gray-800"><?= htmlspecialchars($file) ?></h3>
                    <a href="<?= $softwareFolder . '/' . urlencode($file) ?>" download class="inline-block bg-teal-500 text-white px-6 py-3 rounded-lg hover:bg-teal-700 transition duration-300">Download</a>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white mt-12 py-6 shadow-inner text-center text-gray-500">
        &copy; 2025 teknisiPOSprinter. All Rights Reserved.
    </footer>

    <script>
        // Pencarian menggunakan AJAX
        $('#search').on('input', function() {
            var searchQuery = $(this).val();

            // Kirim permintaan AJAX saat ada input
            $.ajax({
                url: 'search.php',
                type: 'GET',
                data: { search: searchQuery, category: 'software' },
                success: function(response) {
                    // Perbarui daftar file di halaman dengan hasil pencarian
                    $('#file-list').html(response);
                }
            });
        });
    </script>
</body>
</html>
