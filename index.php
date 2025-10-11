<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teknisiPOSprinter</title>
    <link rel="shortcut icon" href="profile.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>
<body class="bg-gray-50 font-sans antialiased">

    <!-- Header -->
    <header class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-8 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img src="profile.png" alt="Bengkel Printer" class="h-12 w-12">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-800">teknisiPOSprinter</h1>
            </div>
            <nav class="space-x-6">
                <a href="index.php" class="text-lg text-gray-700 hover:text-blue-700 transition">Beranda</a>
                <a href="tentang.html" class="text-lg text-gray-700 hover:text-blue-700 transition">Tentang</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-gray-800 to-blue-900 text-white py-24">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold mb-4">Selamat datang di teknisiPOSprinter</h2>
            <p class="text-lg mb-6">Kami menyediakan berbagai layanan mulai dari instalasi hingga pemeliharaan printer dan perangkat keras lainnya. kami tidak menjual produk fisik hanya melayani instalasi software, konsultasi, dan dukungan teknis. kami juga melayani training pemakaian software dan beberapa jenis unit printer. harga sesuai dengan kebutuhan dan jenis layanan yang diberikan.</p>

            <div class="flex justify-center space-x-6 mb-12">
                <a href="driver.php" class="px-8 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-600">Driver</a>
                <a href="software.php" class="px-8 py-3 bg-teal-600 text-white rounded-lg shadow-md hover:bg-teal-700 transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-teal-600">Software</a>
                <a href="utility.php" class="px-8 py-3 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-600">Utility</a>
            </div>

            <!-- Produk yang Dijual -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="img/bartender-ultralite.png" alt="Produk 1" class="h-50 w-full object-cover mx-auto mb-4">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Bartender UltraLite</h4>
                    <p class="text-gray-600 mb-4">
                    Bartender UltraLite adalah software desain label yang mudah digunakan untuk mencetak barcode, QR code, dan label produk. Cocok untuk bisnis kecil hingga menengah, Bartender UltraLite mendukung berbagai printer label dan memudahkan pembuatan label profesional dengan fitur template siap pakai, integrasi database sederhana, serta antarmuka yang intuitif.
                    </p>
                    <p class="text-gray-600 mb-4 font-bold">
                        harga sudah termasuk instalasi dan training pemakaian.
                    </p>
                    <span class="text-lg font-semibold text-blue-700">Rp 150.000</span>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="img/nicelabel.jpg" alt="Produk 2" class="h-50 w-full object-cover mx-auto mb-4">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Nicelabel 10 Designer</h4>
                    <p class="text-gray-600 mb-4">
                        Nicelabel 10 Designer adalah software label printing profesional yang mendukung berbagai jenis printer label, termasuk thermal dan inkjet. Dengan fitur desain label yang lengkap, integrasi database, serta kemampuan otomatisasi cetak, Nicelabel 10 memudahkan pembuatan label barcode, QR code, dan label produk secara efisien untuk kebutuhan bisnis kecil hingga enterprise.
                    </p>
                    <p class="text-gray-600 mb-4 font-bold">
                        harga sudah termasuk instalasi dan training pemakaian.
                    </p>
                    <span class="text-lg font-semibold text-blue-700">Rp 250.000</span>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="img/Zdesigner.jpg" alt="Produk 3" class="h-50 w-full object-cover mx-auto mb-4">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Zebra Designer 3</h4>
                    <p class="text-gray-600 mb-4">
                        Zebra Designer 3 adalah software desain label yang dirancang khusus untuk printer Zebra. Dengan antarmuka yang intuitif dan fitur-fitur canggih, Zebra Designer 3 memudahkan pengguna dalam membuat label barcode, QR code, dan label produk lainnya. Cocok untuk berbagai industri, software ini mendukung berbagai format dan ukuran label, serta integrasi dengan database untuk otomatisasi cetak.
                    </p>
                    <p class="text-gray-600 mb-4 font-bold">
                        harga sudah termasuk instalasi dan training pemakaian.
                    </p>
                    <span class="text-lg font-semibold text-blue-700">Rp 200.000</span>
                </div>
            </div>

            <!-- Slider Produk Baru -->
            <!-- <div class="bg-white p-8 rounded-lg shadow-md mb-12">
                <h3 class="text-2xl font-extrabold text-gray-800 mb-6">Produk Baru</h3>
                <div class="swiper-container overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="img/9164729461_138587975979047_1758466838179.png" alt="Produk Baru 1" class="h-64 w-full object-cover rounded-lg mb-4">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Produk Baru 1</h4>
                            <p class="text-gray-600 mb-4">Deskripsi singkat tentang produk baru ini.</p>
                            <span class="text-lg font-semibold text-blue-700">Rp 4.000.000</span>
                        </div>
                        <div class="swiper-slide">
                            <img src="img/9164729461_138587975979047_1758466838179.png" alt="Produk Baru 2" class="h-64 w-full object-cover rounded-lg mb-4">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Produk Baru 2</h4>
                            <p class="text-gray-600 mb-4">Deskripsi singkat tentang produk baru ini.</p>
                            <span class="text-lg font-semibold text-blue-700">Rp 5.500.000</span>
                        </div>
                        <div class="swiper-slide">
                            <img src="img/9164729461_138587975979047_1758466838179.png" alt="Produk Baru 3" class="h-64 w-full object-cover rounded-lg mb-4">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Produk Baru 3</h4>
                            <p class="text-gray-600 mb-4">Deskripsi singkat tentang produk baru ini.</p>
                            <span class="text-lg font-semibold text-blue-700">Rp 6.000.000</span>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Training Pemakaian Unit -->
            <div class="bg-white p-8 rounded-lg shadow-md mb-12">
                <h3 class="text-2xl font-extrabold text-gray-800 mb-6">Instalasi dan Training Pemakaian</h3>
                <p class="text-lg text-gray-600 mb-4">Kami juga menyediakan layanan training pemakaian software barcode dan training bergabagai unit printer barcode untuk memastikan Anda dapat menggunakan produk kami dengan optimal. Training ini mencakup instalasi, setting dan training penggunaan serta pemeliharaan produk.</p>
                <span class="text-lg font-semibold text-blue-700">Harga: Rp 50.000 per sesi maximal 30 menit</span>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md mb-12">
                <h3 class="text-2xl font-extrabold text-gray-800 mb-6">Dapatkan Pembelian dikami</h3>
                <p class="text-lg text-gray-600 mb-4">Dengan melakukan pembelian di tempat kami, Anda akan mendapatkan berbagai keuntungan, antara lain:</p>
                <ul class="list-disc list-inside text-lg text-gray-600 mb-4">
                    <li>Diskon khusus untuk pembelian berikutnya</li>
                    <li>Support teknis gratis selama 1 tahun</li>
                    <li>Instalasi gratis secara remote</li>
                    <li>Garansi produk sesuai ketentuan</li>
                    <li>Training pemakaian produk secara gratis</li>
                    <li>Prioritas layanan pelanggan</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Kontak Section (WhatsApp dan Email) -->
    <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-2xl font-extrabold text-gray-800 mb-6">Hubungi Kami</h3>
            <p class="text-lg text-gray-600 mb-4">Jika Anda memiliki pertanyaan atau kendala, jangan ragu untuk menghubungi kami melalui:</p>
            <div class="space-y-4">
                <!-- <div class="flex items-center justify-center space-x-4">
                    <a href="mailto:support@bengkelprinter.com" class="text-indigo-600 hover:text-indigo-700 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16M4 4l8 8m-8 0l8-8m8 8v12H4V12h16z"/>
                        </svg>
                        <span>Email: support@bengkelprinter.com</span>
                    </a>
                </div> -->
                <div class="flex items-center justify-center space-x-4">
                    <a href="https://wa.me/6289675013000" target="_blank" class="text-green-600 hover:text-green-700 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9v10l7-3 7 3V9L10 6l-7 3zm0 0V4l7 3 7-3v5l-7 3z"/>
                        </svg>
                        <span>WhatsApp: +6289675013000</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white mt-12 py-6 shadow-inner text-center text-gray-500">
        &copy; 2025 teknisiPOSprinter. All Rights Reserved.
    </footer>

    <script>
        // Inisialisasi Swiper (Slider)
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }
            }
        });
    </script>

</body>
</html>