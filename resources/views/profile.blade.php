<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile | Viky Diana Nafisa</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <nav class="navbar">

    <div class="logo">
        Viky<span>.</span>
    </div>

    <div class="nav-menu">

        <a href="{{ route('home') }}">
            Home
        </a>

        <a href="{{ route('profile') }}" class="active">
            Profile
        </a>

        <a href="{{ route('contact') }}">
            Contact
        </a>

    </div>

</nav>


    <main>

        <section class="profile">

            <!-- FOTO -->
            <div class="profile-image">

                <div class="image-circle">
                    <img src="images/Eisa2.jpg" alt="Foto Viky Diana Nafisa">
                </div>

                <div class="image-decoration"></div>

            </div>


            <div class="profile-content">

                <p class="small-title">
                    HELLO, I'M
                </p>

                <h1>
                    Viky Diana<br>
                    <span>Nafisa.</span>
                </h1>

                <p class="description">
                    Mahasiswa Teknologi Informasi yang sedang belajar,
                    berkembang, dan mengeksplorasi dunia teknologi.
                    Saya tertarik dengan pemrograman, website,
                    dan berbagai hal baru di dunia digital.
                </p>

                <a href="#about" class="button">
                    About Me
                    <span>↓</span>
                </a>

            </div>

        </section>


       
        <section class="about" id="about">

            <div class="section-heading">
                <p>GET TO KNOW ME</p>
                <h2>About Me</h2>
            </div>


            <div class="about-content">

                <div class="about-text">

                    <p>
                        Halo! Saya Viky Diana Nafisa, mahasiswa
                        Program Studi Teknologi Informasi.
                        Saya memiliki ketertarikan terhadap teknologi
                        dan senang mempelajari hal-hal baru.
                    </p>

                    <p>
                        Saat ini saya sedang mengembangkan kemampuan
                        dalam pemrograman dan pembuatan website.
                        Bagi saya, proses belajar bukan hanya tentang
                        hasil, tetapi juga tentang pengalaman dan
                        proses untuk menjadi lebih baik.
                    </p>

                </div>


              
                <div class="biodata">

                    <div class="bio-item">
                        <span>Nama</span>
                        <strong>Viky Diana Nafisa</strong>
                    </div>

                    <div class="bio-item">
                        <span>Program Studi</span>
                        <strong>Teknologi Informasi</strong>
                    </div>

                    <div class="bio-item">
                        <span>Universitas</span>
                        <strong>Universitas Muhammadiyah Semarang</strong>
                    </div>

                    <div class="bio-item">
                        <span>Semester</span>
                        <strong>3</strong>
                    </div>

                    <div class="bio-item">
                        <span>Asal Sekolah</span>
                        <strong>SMK TKJ</strong>
                    </div>

                    <div class="bio-item">
                        <span>Interest</span>
                        <strong>Web Development</strong>
                    </div>

                </div>

            </div>

        </section>


        <section class="skills">

            <div class="section-heading">
                <p>WHAT I'M LEARNING</p>
                <h2>My Skills</h2>
            </div>


            <div class="skill-container">

                <div class="skill-card">
                    <div class="skill-number">01</div>
                    <h3>HTML</h3>
                    <p>
                        Membuat struktur dan tampilan dasar
                        sebuah website.
                    </p>
                </div>

                <div class="skill-card">
                    <div class="skill-number">02</div>
                    <h3>CSS</h3>
                    <p>
                        Mendesain tampilan website agar lebih
                        menarik dan responsif.
                    </p>
                </div>

                <div class="skill-card">
                    <div class="skill-number">03</div>
                    <h3>PHP</h3>
                    <p>
                        Mempelajari pengembangan website
                        menggunakan pemrograman server-side.
                    </p>
                </div>

                <div class="skill-card">
                    <div class="skill-number">04</div>
                    <h3>Java</h3>
                    <p>
                        Mempelajari konsep pemrograman
                        berorientasi objek.
                    </p>
                </div>

            </div>

        </section>

    </main>


   
    <footer>

        <div class="footer-logo">
            Viky<span>.</span>
        </div>

        <p>
            © 2026 Viky Diana Nafisa
        </p>

    </footer>


    <script src="js/profile.js"></script>

</body>
</html>

