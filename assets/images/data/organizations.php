<?php
$organizations = [
    ['jenis' => 'Internal', 'nama' => 'Organisasi Internal 1', 'deskripsi' => 'Deskripsi Organisasi Internal 1'],
    ['jenis' => 'Eksternal', 'nama' => 'Organisasi Eksternal 1', 'deskripsi' => 'Deskripsi Organisasi Eksternal 1'],
    // ... (Organisasi lainnya) ...
];

foreach ($organizations as $org) {
    echo '<div class="bg-white p-6 rounded-lg shadow-lg text-left">';
    echo '<h3 class="text-xl font-bold text-gray-800">' . $org['nama'] . ' (' . $org['jenis'] . ')</h3>';
    echo '<p class="text-gray-600 mt-2">' . $org['deskripsi'] . '</p>';
    echo '</div>';
}
?>