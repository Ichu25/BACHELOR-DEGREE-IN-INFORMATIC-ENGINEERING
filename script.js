document.addEventListener('DOMContentLoaded', function() {
    const semesterButtons = document.querySelectorAll('.semester-btn');
    const semesterDetail = document.createElement('div');
    semesterDetail.id = 'semester-detail';
    semesterDetail.classList.add('mt-6', 'text-gray-700', 'text-lg', 'text-center', 'px-4');
    document.getElementById('semester').appendChild(semesterDetail);

    const semesterData = {
        1: 'Detail Semester 1: Pengenalan dasar-dasar pemrograman. Mempelajari bahasa pemrograman dasar seperti Python.',
        2: 'Detail Semester 2: Mempelajari struktur data dan algoritma. Fokus pada implementasi algoritma dasar.',
        3: 'Detail Semester 3: Pengembangan aplikasi web dasar. Membuat website sederhana dengan HTML, CSS, dan JavaScript.',
        4: 'Detail Semester 4: Fokus pada pengembangan mobile. Membuat aplikasi mobile sederhana dengan React Native.',
        5: 'Detail Semester 5: Mempelajari tentang database. Membuat dan mengelola database dengan MySQL.',
        6: 'Detail Semester 6: Pengenalan tentang Artificial Intelligence. Mempelajari konsep dasar machine learning.',
        7: 'Detail Semester 7: Memulai proyek akhir. Merancang dan mengembangkan proyek aplikasi web.',
        8: 'Detail Semester 8: Menyelesaikan proyek akhir dan lulus. Presentasi proyek dan evaluasi akhir.'
    };

    semesterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const semesterNumber = this.textContent.trim();
            semesterDetail.textContent = semesterData[semesterNumber] || 'Detail semester tidak tersedia.';

            semesterButtons.forEach(btn => btn.classList.remove('bg-blue-700'));
            this.classList.add('bg-blue-700');
        });
    });

    // Responsivitas untuk menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.querySelector('nav');
    menuToggle.addEventListener('click', function() {
        navMenu.classList.toggle('hidden');
    });
});
