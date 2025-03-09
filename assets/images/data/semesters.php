<?php
$semesters = [
    ['semester' => 1, 'deskripsi' => 'Deskripsi Semester 1'],
    ['semester' => 2, 'deskripsi' => 'Deskripsi Semester 2'],
    // ... (Semester 3-8) ...
];

foreach ($semesters as $semester) {
    echo '<button class="bg-blue-500 text-white px-4 py-2 rounded-md">' . $semester['semester'] . '</button>';
}
?>