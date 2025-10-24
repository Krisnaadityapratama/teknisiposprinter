# teknisiPOSprinterWeb

Singkat: situs sederhana untuk menyediakan dan mendistribusikan driver, software, dan utility terkait printer POS. Pengguna dapat mencari dan mengunduh paket (.rar/.zip) melalui halaman khusus.

Live: https://teknisiposprinter.site/

Fitur utama
- Halaman beranda dan informasi: [index.php](index.php), [tentang.html](tentang.html)  
- Daftar dan unduh driver: [driver.php](driver.php) — berisi file dari folder [drivers/](drivers/)  
- Daftar dan unduh software: [software.php](software.php) — berisi file dari folder [software/](software/)  
- Daftar dan unduh utility: [utility.php](utility.php) — berisi file dari folder [utility/](utility/)  
- Pencarian dinamis (AJAX): [search.php](search.php)  
- Aset gambar: [img/](img/)

Menjalankan secara lokal
1. Pastikan PHP terpasang.
2. Dari root proyek jalankan:
   ```sh
   php -S localhost:8000
   ```

