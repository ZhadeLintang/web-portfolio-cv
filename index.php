<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($cv['name']) ?> - Portfolio CV</title>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="container nav">
            <h1 class="logo"><?= htmlspecialchars($cv['name']) ?></h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#skills">Skill</a></li>
                    <li><a href="#education">Pendidikan</a></li>
                    <li><a href="#experience">Pengalaman</a></li>
                    <li><a href="#projects">Project</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <p class="small-text">Halo, saya</p>
                <h2><?= htmlspecialchars($cv['name']) ?></h2>
                <h3><?= htmlspecialchars($cv['title']) ?></h3>
                <p><?= htmlspecialchars($cv['summary']) ?></p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn primary">Hubungi Saya</a>
                    <a href="#projects" class="btn secondary">Lihat Project</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="assets/images/seragam.jpeg" alt="Foto Profil">
            </div>
        </div>
    </section>

<!-- About -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">Tentang Saya</h2>

        <div class="about-wrapper">
            <!-- Kiri = Gambar -->
            <div class="about-image">
                <img src="assets/images/hero-zhade.jpeg" alt="Foto Tentang Saya">
            </div>

            <!-- Kanan = Perkenalan -->
            <div class="about-content">
                <h3>Perkenalan</h3>
                
                <div class="about-info">
                    <div><strong>Nama:</strong> <?= htmlspecialchars($cv['name']) ?></div>
                    <div><strong>Hobi:</strong> <?= htmlspecialchars($cv['hobby']) ?></div>
                    <div><strong>Umur:</strong> <?= htmlspecialchars($cv['age']) ?></div>
                    <div><strong>Lahir Tahun:</strong> <?= htmlspecialchars($cv['birth_year']) ?></div>
                </div>

                <p><?= htmlspecialchars($cv['about']) ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Pesan & Kesan -->
<section id="pesan-kesan" class="section">
    <div class="container">
        <h2 class="section-title">Pesan & Kesan</h2>
        <div class="card">
            <p>
                Saya merasa senang dan bangga bisa belajar di bidang Pengembangan Perangkat Lunak dan Gim (PPLG). 
                Dari sini saya belajar banyak hal tentang dunia coding, pembuatan website, logika pemrograman, 
                serta bagaimana membangun project yang menarik dan bermanfaat.
            </p>
            <br>
            <p>
                Kesan saya selama belajar adalah semakin tertarik untuk mendalami dunia web development dan game sederhana berbasis web. 
                Setiap project yang saya kerjakan membuat saya lebih semangat untuk terus berkembang, 
                memperbaiki kesalahan, dan mencoba teknologi baru.
            </p>
            <br>
            <p>
                Pesan saya untuk ke depannya adalah tetap konsisten, terus belajar, jangan mudah menyerah, 
                dan jadikan setiap pengalaman sebagai langkah untuk menjadi developer yang kreatif, profesional, dan sukses.
            </p>
        </div>
    </div>
</section>

    <!-- Skills -->
    <section id="skills" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Skill</h2>
            <div class="skills-grid">
                <?php foreach ($cv['skills'] as $skill): ?>
                    <div class="skill-card"><?= htmlspecialchars($skill) ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Education -->
    <section id="education" class="section">
        <div class="container">
            <h2 class="section-title">Pendidikan</h2>
            <div class="timeline">
                <?php foreach ($cv['education'] as $edu): ?>
                    <div class="timeline-item">
                        <h3><?= htmlspecialchars($edu['school']) ?></h3>
                        <span><?= htmlspecialchars($edu['year']) ?></span>
                        <p><?= htmlspecialchars($edu['major']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section id="experience" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Pengalaman</h2>
            <div class="timeline">
                <?php foreach ($cv['experience'] as $exp): ?>
                    <div class="timeline-item">
                        <h3><?= htmlspecialchars($exp['position']) ?></h3>
                        <span><?= htmlspecialchars($exp['company']) ?> | <?= htmlspecialchars($exp['year']) ?></span>
                        <p><?= htmlspecialchars($exp['description']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title">Project</h2>
            <div class="projects-grid">
                <?php foreach ($cv['projects'] as $project): ?>
                    <div class="project-card">
                        <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['name']) ?>">
                        <div class="project-content">
                            <h3><?= htmlspecialchars($project['name']) ?></h3>
                            <p><?= htmlspecialchars($project['description']) ?></p>
                            <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="project-link">Lihat Project</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<!-- Contact -->
<section id="contact" class="section bg-light">
    <div class="container">
        <h2 class="section-title">Kontak Saya</h2>

        <div class="contact-grid">
            <!-- WhatsApp -->
            <a href="https://wa.me/6285819134959<?= htmlspecialchars($cv['contact']['whatsapp']) ?>" target="_blank" class="contact-card modern">
                <div class="contact-icon whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div class="contact-info">
                    <h3>WhatsApp</h3>
                    <p><?= htmlspecialchars($cv['contact']['whatsapp']) ?></p>
                </div>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/tangling2525?igsh=emdwczh3MDJ5YWdh<?= htmlspecialchars($cv['contact']['instagram']) ?>" target="_blank" class="contact-card modern">
                <div class="contact-icon instagram">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="contact-info">
                    <h3>Instagram</h3>
                    <p>@<?= htmlspecialchars($cv['contact']['instagram']) ?></p>
                </div>
            </a>

            <!-- Email -->
            <a href="mailto:<?= htmlspecialchars($cv['contact']['email']) ?>" class="contact-card modern">
                <div class="contact-icon email">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="contact-info">
                    <h3>Email</h3>
                    <p><?= htmlspecialchars($cv['contact']['email']) ?></p>
                </div>
            </a>

            <!-- GitHub -->
            <a href="<?= htmlspecialchars($cv['contact']['github']) ?>" target="_blank" class="contact-card modern">
                <div class="contact-icon github">
                    <i class="fa-brands fa-github"></i>
                </div>
                <div class="contact-info">
                    <h3>GitHub</h3>
                    <p>Lihat Profile GitHub</p>
                </div>
            </a>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($cv['name']) ?>. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>
