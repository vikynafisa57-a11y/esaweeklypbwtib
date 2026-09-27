<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Berita | Viky Diana Nafisa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f4eee4;
            color: #38251d;
            font-family: "DM Sans", sans-serif;
        }


        /* NAVBAR */

        .navbar {
            height: 78px;
            padding: 0 8%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background-color: #3a261d;
        }

        .logo {
            font-family: "Playfair Display", serif;
            font-size: 28px;
            font-weight: 600;
            color: #f4eee4;
        }

        .logo span {
            color: #c9a77c;
        }

        .nav-menu {
            display: flex;
            gap: 35px;
        }

        .nav-menu a {
            color: #e9dfd0;
            text-decoration: none;
            font-size: 14px;
            transition: .3s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: #d1ad82;
        }


        /* HEADER */

        .news-header {
            padding: 80px 10% 50px;
            text-align: center;
        }

        .news-header p {
            color: #9b7655;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 4px;
            margin-bottom: 15px;
        }

        .news-header h1 {
            font-family: "Playfair Display", serif;
            font-size: 55px;
            color: #3a261d;
            margin-bottom: 18px;
        }

        .news-header h1 span {
            color: #9b7655;
            font-style: italic;
        }

        .news-header .description {
            max-width: 650px;
            margin: auto;
            color: #756458;
            line-height: 1.8;
            font-size: 15px;
        }


        /* NEWS CONTAINER */

        .news-container {
            max-width: 1100px;
            margin: auto;
            padding: 20px 10% 90px;

            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }


        /* CARD */

        .news-card {
            background-color: #fffaf2;
            border-radius: 10px;
            overflow: hidden;

            box-shadow: 0 10px 30px rgba(58, 38, 29, .08);

            transition: .3s;
        }

        .news-card:hover {
            transform: translateY(-7px);

            box-shadow: 0 18px 35px rgba(58, 38, 29, .13);
        }


        /* IMAGE */

        .news-image {
            height: 200px;

            background-color: #d8c5ad;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 45px;
        }


        .news-content {
            padding: 25px;
        }

        .category {
            color: #9b7655;

            font-size: 11px;
            font-weight: 700;

            letter-spacing: 2px;
        }

        .news-content h2 {
            font-family: "Playfair Display", serif;

            font-size: 23px;

            color: #3a261d;

            margin: 10px 0 12px;

            line-height: 1.3;
        }

        .news-content p {
            color: #756458;

            font-size: 13px;

            line-height: 1.7;

            margin-bottom: 18px;
        }

        .read-more {
            color: #684837;

            text-decoration: none;

            font-size: 13px;
            font-weight: 700;
        }

        .read-more:hover {
            color: #9b7655;
        }


        /* FOOTER */

        footer {
            padding: 35px;

            text-align: center;

            background-color: #2c1d17;

            color: #cfc0b0;
        }

        .footer-logo {
            font-family: "Playfair Display", serif;

            font-size: 24px;

            color: #f4eee4;

            margin-bottom: 10px;
        }

        .footer-logo span {
            color: #c9a77c;
        }

        footer p {
            font-size: 12px;
        }


        /* RESPONSIVE */

        @media (max-width: 850px) {

            .news-container {
                grid-template-columns: 1fr;
                padding-left: 7%;
                padding-right: 7%;
            }

            .news-header h1 {
                font-size: 45px;
            }

        }


        @media (max-width: 500px) {

            .navbar {
                padding: 0 5%;
            }

            .nav-menu {
                gap: 12px;
            }

            .nav-menu a {
                font-size: 12px;
            }

            .news-header h1 {
                font-size: 38px;
            }

        }

    </style>

</head>


<body>


    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="logo">
            Viky<span>.</span>
        </div>

        <div class="nav-menu">

            <a href="{{ route('home') }}">
                Home
            </a>

            <a href="{{ route('profile') }}">
                Profile
            </a>

            <a href="{{ route('berita') }}" class="active">
                Berita
            </a>

            <a href="{{ route('contact') }}">
                Contact
            </a>

        </div>

    </nav>


    <!-- HEADER -->

    <section class="news-header">

        <p>LATEST INFORMATION</p>

        <h1>
            Berita & <span>Artikel.</span>
        </h1>

        <p class="description">

            Temukan berbagai informasi dan artikel menarik
            seputar teknologi, pendidikan, dan perkembangan
            dunia digital.

        </p>

    </section>


    <!-- NEWS -->

    <section class="news-container">


        <!-- BERITA 1 -->

        <article class="news-card">

            <div class="news-image">
                💻
            </div>

            <div class="news-content">

                <span class="category">
                    TEKNOLOGI
                </span>

                <h2>
                    Perkembangan Teknologi di Era Digital
                </h2>

                <p>
                    Teknologi terus berkembang dan memberikan
                    berbagai perubahan dalam kehidupan sehari-hari,
                    termasuk dalam bidang pendidikan dan pekerjaan.
                </p>

                <a href="#" class="read-more">
                    Baca Selengkapnya →
                </a>

            </div>

        </article>


        <!-- BERITA 2 -->

        <article class="news-card">

            <div class="news-image">
                🎓
            </div>

            <div class="news-content">

                <span class="category">
                    PENDIDIKAN
                </span>

                <h2>
                    Pentingnya Skill Digital bagi Mahasiswa
                </h2>

                <p>
                    Kemampuan digital menjadi salah satu hal
                    penting yang dapat membantu mahasiswa
                    mempersiapkan diri menghadapi dunia kerja.
                </p>

                <a href="#" class="read-more">
                    Baca Selengkapnya →
                </a>

            </div>

        </article>


        <!-- BERITA 3 -->

        <article class="news-card">

            <div class="news-image">
                🌐
            </div>

            <div class="news-content">

                <span class="category">
                    DIGITAL
                </span>

                <h2>
                    Mengenal Dunia Pengembangan Website
                </h2>

                <p>
                    Website menjadi salah satu media digital
                    yang banyak digunakan untuk menyampaikan
                    informasi dan membangun berbagai layanan.
                </p>

                <a href="#" class="read-more">
                    Baca Selengkapnya →
                </a>

            </div>

        </article>


        <!-- BERITA 4 -->

        <article class="news-card">

            <div class="news-image">
                🤖
            </div>

            <div class="news-content">

                <span class="category">
                    AI
                </span>

                <h2>
                    Artificial Intelligence dalam Kehidupan
                </h2>

                <p>
                    Kecerdasan buatan semakin banyak digunakan
                    untuk membantu manusia menyelesaikan berbagai
                    pekerjaan dan kebutuhan.
                </p>

                <a href="#" class="read-more">
                    Baca Selengkapnya →
                </a>

            </div>

        </article>


        <!-- BERITA 5 -->

        <article class="news-card">

            <div class="news-image">
                🔐
            </div>

            <div class="news-content">

                <span class="category">
                    KEAMANAN
                </span>

                <h2>
                    Pentingnya Keamanan Data Digital
                </h2>

                <p>
                    Menjaga keamanan data menjadi semakin penting
                    seiring meningkatnya penggunaan layanan digital
                    dalam kehidupan sehari-hari.
                </p>

                <a href="#" class="read-more">
                    Baca Selengkapnya →
                </a>

            </div>

        </article>


        <!-- BERITA 6 -->

        <article class="news-card">

            <div class="news-image">
                🚀
            </div>

            <div class="news-content">

                <span class="category">
                    INOVASI
                </span>

                <h2>
                    Inovasi Teknologi untuk Masa Depan
                </h2>

                <p>
                    Berbagai inovasi teknologi terus dikembangkan
                    untuk menciptakan solusi yang dapat membantu
                    kehidupan manusia.
                </p>

                <a href="#" class="read-more">
                    Baca Selengkapnya →
                </a>

            </div>

        </article>


    </section>


    <!-- FOOTER -->

    <footer>

        <div class="footer-logo">
            Viky<span>.</span>
        </div>

        <p>
            © 2026 Viky Diana Nafisa
        </p>

    </footer>


</body>

</html>
```
