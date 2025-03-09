<?php
$awards = [
    ['nama' => 'Penghargaan 1', 'deskripsi' => 'Deskripsi Penghargaan 1'],
    ['nama' => 'Penghargaan 2', 'deskripsi' => 'Deskripsi Penghargaan 2'],
    // ... (Penghargaan lainnya) ...
];

foreach ($awards as $award) {
    echo '<div class="bg-white p-6 rounded-lg shadow-lg text-left">';
    echo '<h3 class="text-xl font-bold text-gray-800">' . $award['nama'] . '</h3>';
    echo '<p class="text-gray-600 mt-2">' . $award['deskripsi'] . '</p>';
    echo '</div>';
}
?>