
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | Viky Diana Nafisa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #f4eee4;
            color: #38251d;
            font-family: "DM Sans", sans-serif;
        }


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

            transition: 0.3s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: #d1ad82;
        }

        .hero {
            min-height: calc(100vh - 78px);

            padding: 70px 10%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 60px;

            background-color: #f4eee4;
        }

        .hero-text {
            max-width: 600px;
        }

        .small-title {
            color: #9b7655;

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 4px;

            margin-bottom: 18px;
        }

        .hero-text h1 {
            font-family: "Playfair Display", serif;

            font-size: 68px;
            line-height: 1.1;

            color: #3a261d;

            margin-bottom: 20px;
        }

        .hero-text h1 span {
            color: #9b7655;
            font-style: italic;
        }

        .hero-description {
            max-width: 520px;

            color: #756458;

            font-size: 15px;
            line-height: 1.9;

            margin-bottom: 35px;
        }


        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 13px 24px;

            border-radius: 5px;

            text-decoration: none;

            font-size: 14px;
            font-weight: 600;

            transition: 0.3s;
        }

        .btn-primary {
            background-color: #3a261d;
            color: #fffaf2;
        }

        .btn-primary:hover {
            background-color: #684837;
        }

        .btn-secondary {
            border: 1px solid #9b7655;
            color: #6b4b38;
        }

        .btn-secondary:hover {
            background-color: #3a261d;
            color: #fffaf2;
        }

        .hero-image {
            position: relative;

            width: 380px;
            height: 380px;

            flex-shrink: 0;
        }

        .image-circle {
            width: 330px;
            height: 330px;

            border-radius: 50%;

            overflow: hidden;

            background-color: #d8c5ad;

            border: 10px solid #fffaf2;

            box-shadow:
                0 20px 50px rgba(58, 38, 29, 0.18);

            position: absolute;

            top: 20px;
            left: 20px;

            z-index: 2;
        }

        .image-circle img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;
        }


        .decor {
            position: absolute;

            width: 330px;
            height: 330px;

            border-radius: 50%;

            border: 1px solid #c9a77c;

            top: 45px;
            left: 45px;
        }

   .intro-section {
            padding: 90px 10%;

            background-color: #fffaf2;

            text-align: center;
        }

        .intro-section > p:first-child {
            color: #9b7655;

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 4px;

            margin-bottom: 15px;
        }

        .intro-section h2 {
            font-family: "Playfair Display", serif;

            font-size: 42px;

            color: #3a261d;

            margin-bottom: 20px;
        }

        .intro-section h2 span {
            color: #9b7655;
            font-style: italic;
        }

        .intro-text {
            max-width: 650px;

            margin: auto;

            color: #756458;

            font-size: 15px;

            line-height: 1.9;
        }


        .info-container {
            max-width: 950px;

            margin: 45px auto 0;

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;
        }

        .info-card {
            padding: 30px 25px;

            background-color: #f4eee4;

            border-radius: 8px;

            border: 1px solid #e1d4c4;

            transition: 0.3s;
        }

        .info-card:hover {
            transform: translateY(-5px);

            box-shadow:
                0 15px 30px rgba(58, 38, 29, 0.08);
        }

        .info-card .icon {
            font-size: 25px;

            margin-bottom: 15px;
        }

        .info-card h3 {
            font-family: "Playfair Display", serif;

            color: #3a261d;

            font-size: 21px;

            margin-bottom: 10px;
        }

        .info-card p {
            color: #756458;

            font-size: 13px;

            line-height: 1.7;
        }


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


        @media (max-width: 850px) {

            .hero {
                flex-direction: column-reverse;

                text-align: center;

                padding-top: 60px;
            }

            .hero-text {
                max-width: 700px;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-image {
                width: 340px;
                height: 340px;
            }

            .image-circle {
                width: 290px;
                height: 290px;
            }

            .decor {
                width: 290px;
                height: 290px;
            }

            .info-container {
                grid-template-columns: 1fr;
            }

            .hero-text h1 {
                font-size: 55px;
            }
        }


        @media (max-width: 500px) {

            .navbar {
                padding: 0 5%;
            }

            .nav-menu {
                gap: 15px;
            }

            .hero {
                padding-left: 7%;
                padding-right: 7%;
            }

            .hero-text h1 {
                font-size: 43px;
            }

            .hero-image {
                width: 300px;
                height: 300px;
            }

            .image-circle {
                width: 250px;
                height: 250px;

                left: 10px;
            }

            .decor {
                width: 250px;
                height: 250px;

                left: 30px;
            }

            .intro-section h2 {
                font-size: 35px;
            }
        }

    </style>

</head>


<body>


    <nav class="navbar">

        <nav class="navbar">

    <div class="logo">
        Viky<span>.</span>
    </div>

    <div class="nav-menu">

        <a href="{{ route('home') }}" class="active">
            Home
        </a>

        <a href="{{ route('profile') }}">
            Profile
        </a>

        <a href="{{ route('contact') }}">
            Contact
        </a>

    </div>

</nav>
        </div>

    </nav>


    <section class="hero">


        <div class="hero-text">

            <p class="small-title">
                WELCOME TO MY PORTFOLIO
            </p>


            <h1>
                Hi, I'm <span>Viky.</span>
            </h1>


            <p class="hero-description">

                Mahasiswa Teknologi Informasi yang tertarik
                dengan dunia teknologi, desain, dan pengembangan
                website. Saya senang belajar hal baru dan
                mengembangkan ide menjadi sesuatu yang nyata.

            </p>


            <div class="hero-buttons">

                <a href="profile.blade.php" class="btn btn-primary">
                    About Me →
                </a>

                <a href="contact.blade.php" class="btn btn-secondary">
                    Contact Me
                </a>

            </div>

        </div>



        <div class="hero-image">

            <div class="decor"></div>

            <div class="image-circle">

                <img src="images/Eisa2.jpg" alt="Viky Diana Nafisa">

            </div>

        </div>


    </section>



    <section class="intro-section">

        <p>GET TO KNOW ME</p>


        <h2>
            A little bit about <span>me.</span>
        </h2>


        <p class="intro-text">

            Saya adalah mahasiswa Teknologi Informasi yang
            sedang mengembangkan kemampuan di bidang teknologi
            dan pemrograman. Bagi saya, belajar teknologi bukan
            hanya tentang coding, tetapi juga tentang bagaimana
            menciptakan sesuatu yang bermanfaat dan memiliki
            pengalaman pengguna yang baik.

        </p>


        <div class="info-container">


            <div class="info-card">

                <div class="icon">
                    💻
                </div>

                <h3>
                    Technology
                </h3>

                <p>
                    Tertarik mempelajari pemrograman,
                    website, dan berbagai teknologi baru.
                </p>

            </div>



            <div class="info-card">

                <div class="icon">
                    🎨
                </div>

                <h3>
                    Creativity
                </h3>

                <p>
                    Suka membuat tampilan website yang
                    sederhana, menarik, dan nyaman dilihat.
                </p>

            </div>



            <div class="info-card">

                <div class="icon">
                    🌱
                </div>

                <h3>
                    Learning
                </h3>

                <p>
                    Terus belajar dan mencoba hal baru
                    untuk mengembangkan kemampuan diri.
                </p>

            </div>


        </div>

    </section>



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




