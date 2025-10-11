<?php
$driversFolder = 'drivers/';
$files = array_diff(scandir($driversFolder), array('..', '.'));
$driverFiles = array_filter($files, function($file) {
    return pathinfo($file, PATHINFO_EXTENSION) === 'rar';
});

// Ambil query pencarian
$search = $_GET['search'] ?? '';

// Jika ada pencarian, filter file
if ($search) {
    $driverFiles = array_filter($driverFiles, function($file) use ($search) {
        return stripos($file, $search) !== false;
    });
}

// Tampilkan hasil pencarian
foreach ($driverFiles as $file) {
    echo '<div class="bg-white p-5 rounded-lg shadow-sm hover:shadow-md transition transform hover:-translate-y-1">';
    echo '<h3 class="font-semibold text-lg mb-2 text-gray-800">' . htmlspecialchars($file) . '</h3>';
    echo '<a href="' . $driversFolder . '/' . urlencode($file) . '" download class="inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Download</a>';
    echo '</div>';
}
?>
