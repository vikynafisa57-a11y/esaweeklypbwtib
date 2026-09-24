
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact | Viky Diana Nafisa</title>

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


.contact {
    min-height: 700px;
    padding: 90px 10%;
    background-color: #f4eee4;
}

.contact-heading {
    max-width: 700px;
    margin: 0 auto 60px;
    text-align: center;
}

.contact-heading > p:first-child {
    color: #9b7655;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 4px;
    margin-bottom: 15px;
}

.contact-heading h1 {
    font-family: "Playfair Display", serif;
    font-size: 58px;
    color: #3a261d;
    margin-bottom: 20px;
}

.contact-heading h1 span {
    color: #9b7655;
    font-style: italic;
}

.intro {
    color: #756458;
    line-height: 1.8;
    font-size: 15px;
}


.contact-container {
    max-width: 1050px;
    margin: auto;
    display: grid;
    grid-template-columns: 0.9fr 1.1fr;
    gap: 30px;
}


.contact-info {
    background-color: #3a261d;
    padding: 45px;
    border-radius: 10px;
    color: #f8f0e5;
}

.contact-info h2,
.contact-form h2 {
    font-family: "Playfair Display", serif;
    font-size: 28px;
    margin-bottom: 12px;
}

.info-text {
    color: #d5c5b4;
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 35px;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-bottom: 25px;
}

.icon {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #654735;
    border-radius: 50%;
    font-size: 18px;
}

.contact-item span {
    color: #bfa486;
    font-size: 12px;
}

.contact-item p {
    margin-top: 4px;
    font-size: 14px;
    color: #f5eee5;
}

/* SOCIAL MEDIA */
.social {
    margin-top: 45px;
    padding-top: 25px;
    border-top: 1px solid #604638;
}

.social > p {
    color: #bfa486;
    font-size: 12px;
    margin-bottom: 15px;
}

.social-links {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
}

.social-links a {
    color: #f5eee5;
    text-decoration: none;
    font-size: 13px;
    transition: 0.3s;
}

.social-links a:hover {
    color: #c9a77c;
}


.contact-form {
    background-color: #fffaf2;
    padding: 45px;
    border-radius: 10px;
    box-shadow: 0 15px 40px rgba(58, 38, 29, 0.08);
}

.contact-form h2 {
    color: #3a261d;
    margin-bottom: 30px;
}

.input-group {
    margin-bottom: 22px;
}

.input-group label {
    display: block;
    color: #5b4639;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 8px;
}

.input-group input,
.input-group textarea {
    width: 100%;
    padding: 14px 15px;
    border: 1px solid #d9cbbb;
    border-radius: 5px;
    background-color: #f9f3ea;
    color: #3a261d;
    font-family: "DM Sans", sans-serif;
    font-size: 14px;
    outline: none;
    transition: 0.3s;
}

.input-group input:focus,
.input-group textarea:focus {
    border-color: #9b7655;
    background-color: white;
}

.input-group textarea {
    resize: vertical;
}

.contact-form button {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 5px;
    background-color: #3a261d;
    color: #fffaf2;
    font-family: "DM Sans", sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.contact-form button span {
    margin-left: 10px;
    font-size: 18px;
}

.contact-form button:hover {
    background-color: #684837;
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


@media (max-width: 800px) {
    .contact {
        padding: 70px 7%;
    }

    .contact-heading h1 {
        font-size: 45px;
    }

    .contact-container {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 500px) {
    .navbar {
        padding: 0 5%;
    }

    .nav-menu {
        gap: 15px;
    }

    .contact-info,
    .contact-form {
        padding: 30px;
    }

    .contact-heading h1 {
        font-size: 38px;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
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

        <a href="{{ route('contact') }}" class="active">
            Contact
        </a>

    </div>

</nav>
</nav>



<main class="contact">

    <div class="contact-heading">
        <p>GET IN TOUCH</p>

        <h1>Let's <span>Connect.</span></h1>

        <p class="intro">
            Punya pertanyaan, ingin berdiskusi, atau sekadar ingin menyapa?
            Jangan ragu untuk menghubungi saya.
        </p>
    </div>


    <div class="contact-container">

        <!-- CONTACT INFORMATION -->
        <div class="contact-info">

            <h2>Contact Information</h2>

            <p class="info-text">
                Kamu bisa menghubungi saya melalui informasi di bawah ini.
            </p>


            <div class="contact-item">
                <div class="icon">✉</div>

                <div>
                    <span>Email</span>
                    <p>vikydiana@email.com</p>
                </div>
            </div>


            <div class="contact-item">
                <div class="icon">☎</div>

                <div>
                    <span>Phone</span>
                    <p>08xxxxxxxxxx</p>
                </div>
            </div>


            <div class="contact-item">
                <div class="icon">📍</div>

                <div>
                    <span>Location</span>
                    <p>Semarang, Indonesia</p>
                </div>
            </div>


            <!-- SOCIAL MEDIA -->
            <div class="social">

                <p>FIND ME ON</p>

                <div class="social-links">

                    <a href="https://www.instagram.com/bydydyy?stkn=dmY1ZWFjYnBxNnox"
                       target="_blank">
                        Instagram
                    </a>

                    <a href="https://github.com/vikynafisa57-a11y"
                       target="_blank">
                        GitHub
                    </a>

                    <a href="https://www.linkedin.com/in/diana-nafisa-941932374?utm_source=share_via&utm_content=profile&utm_medium=member_android"
                       target="_blank">
                        LinkedIn
                    </a>

                </div>

            </div>

        </div>


        <!-- FORM -->
        <div class="contact-form">

            <h2>Send Me a Message</h2>

            <form>

                <div class="input-group">
                    <label for="name">Your Name</label>

                    <input
                        type="text"
                        id="name"
                        placeholder="Masukkan nama kamu">
                </div>


                <div class="input-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        placeholder="Masukkan email kamu">
                </div>


                <div class="input-group">
                    <label for="message">Message</label>

                    <textarea
                        id="message"
                        rows="5"
                        placeholder="Tulis pesan kamu..."></textarea>
                </div>


                <button type="submit">
                    Send Message <span>→</span>
                </button>

            </form>

        </div>

    </div>

</main>


<!-- FOOTER -->
<footer>

    <div class="footer-logo">
        Viky<span>.</span>
    </div>

    <p>© 2026 Viky Diana Nafisa</p>

</footer>

</body>
</html>
