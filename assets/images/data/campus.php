<?php
$campus = [
    ['nama' => 'Nama Kampus', 'lokasi' => 'Lokasi Kampus', 'deskripsi' => 'Deskripsi Kampus', 'gambar' => 'assets/images/campus.jpg'],
];

foreach ($campus as $camp) {
    echo '<div class="bg-white p-6 rounded-lg shadow-lg text-left">';
    echo '<img src="' . $camp['gambar'] . '" alt="' . $camp['nama'] . '" class="rounded-lg mb-4 h-48 w-full object-cover">';
    echo '<h3 class="text-xl font-bold text-gray-800">' . $camp['nama'] . '</h3>';
    echo '<p class="text-gray-600 mt-2">' . $camp['lokasi'] . '</p>';
    echo '<p class="text-gray-600 mt-2">' . $camp['deskripsi'] . '</p>';
    echo '</div>';
}
?>