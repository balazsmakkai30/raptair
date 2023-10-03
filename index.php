<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raptair - Utazási iroda</title>

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <link rel="stylesheet" href="./adat/css/style.css">
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
        <script src="lekerdezes.js"></script>
</head>

<body id="top">
    <header class="header" data-header>
        <div class="overlay" data-overlay></div>
        <div class="header-top">
            <div class="container">
                <a href="tel:+36205226542" class="helpline-box">
                    <div class="icon-box">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="wrapper">
                        <p class="helpline-title">Elérhetőség:</p>
                        <p class="helpline-number">+36 20-522-6542</p>
                    </div>
                </a>
                <a href="#" class="logo">
                    <img src="./adat/kepek/logo.svg" alt="Raptair logo">
                </a>
                <div class="header-btn-group">
                    <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                        <ion-icon name="menu-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <ul class="social-list">
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>
                </ul>
                <nav class="navbar" data-navbar>
                    <div class="navbar-top">
                        <a href="#" class="logo">
                            <img src="./adat/kepek/logo-blue.svg" alt="Raptair logo">
                        </a>
                        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>
                    </div>
                    <ul class="navbar-list">
                        <li>
                            <a href="#home" class="navbar-link" data-nav-link>Főoldal</a>
                        </li>
                        <li>
                            <a href="#" class="navbar-link" data-nav-link>Rólunk</a>
                        </li>
                        <li>
                            <a href="#destination" class="navbar-link" data-nav-link>Úticélok</a>
                        </li>
                        <li>
                            <a href="#package" class="navbar-link" data-nav-link>Csomagok</a>
                        </li>
                        <li>
                            <a href="#gallery" class="navbar-link" data-nav-link>Galéria</a>
                        </li>
                        <li>
                            <a href="#contact" class="navbar-link" data-nav-link>Kapcsolatfelvétel</a>
                        </li>
                    </ul>
                </nav>
                <button class="btn btn-primary">Foglalj most!</button>
            </div>
        </div>
    </header>

    <main>
        <article>
            <section class="hero" id="home">
                <div class="container">
                    <h2 class="h1 hero-title">Fedezd fel a világot business jetekkel!</h2>
                    <p class="hero-text">
                        Szeld át az eget, privát repülőgépen, utazz éld át a szabadságot!
                    </p>
                    <div class="btn-group">
                        <button class="btn btn-secondary">Foglalok!</button>
                    </div>
                </div>
            </section>

            <section class="tour-search">
    <div class="container">
        <form action="post.php" method="post" class="tour-search-form" onsubmit="return checkDateUnique();">
        <div class="input-wrapper">
    <label for="destination" class="input-label">Úticélok keresése</label>
    <select name="uticel" id="destination" required class="input-field">
        <option value="" disabled selected>Válassz egy úticéltet!</option>
    </select>
</div>
            <div class="input-wrapper">
                <label for="indulas" class="input-label">Indulási dátum</label>
                <input type="date" name="indulas" id="indulas"  required min="<?php echo date('Y-m-d'); ?>" required class="input-field">
            </div>
            <div class="input-wrapper">
                <label for="visszateres" class="input-label">Visszatérési dátum:</label>
                <input type="date" name="visszateres" id="visszateres" required min="<?php echo date('Y-m-d'); ?>"  required class="input-field">
            </div>
            <div class="input-wrapper">
                <label for="foglalo" class="input-label">Név</label>
                <input type="text" name="foglalo" id="foglalo" required
                    placeholder="neved" class="input-field">
            </div>
            <button type="submit" id="submitBtn" class="btn btn-secondary">Lefoglalom</button>
            <?php
    if (!empty($confirmationMessage)) {
        echo '<p style="color: green;">' . $confirmationMessage . '</p>';
    }
    ?>
        </form>
    </div>
</section>

            <section class="popular" id="destination">
                <div class="container">
                    <h2 class="h2 section-title">Népszerű úticélok</h2>
                    <p class="section-text">
Válassz népszerű ajánlataink közül!                    </p>
                    <ul class="popular-list">
                        <li>
                            <div class="popular-card">
                                <figure class="card-img">
                                    <img src="./adat/kepek/popular-1.jpg" alt="San miguel, italy" loading="lazy">
                                </figure>
                                <div class="card-content">
                                    <div class="card-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <p class="card-subtitle">
                                        <a href="#">Olaszország</a>
                                    </p>
                                    <h3 class="h3 card-title">
                                        <a href="#">San miguel</a>
                                    </h3>
                                    <p class="card-text">
                                    </p>
                                </div>
                            </div>
                        </li>
                        <!-- Add other list items as needed -->
                    </ul>
                </div>
            </section>

            <section class="package" id="package">
                <div class="container">
                    <p class="section-subtitle">Népszerű csomagok</p>
                    <p class="section-text">
                    </p>
                    <ul class="package-list">
                        <li>
                            <div class="package-card">
                                <figure class="card-banner">
                                    <img src="./adat/kepek/packege-1.jpg" alt="Élj át egy hétvégét a tengerparton!"
                                        loading="lazy">
                                </figure>
                                <div class="card-content">
                                    <h3 class="h3 card-title">Élj át egy hetet a tengerparton!</h3>
                                    <p class="card-text">
                                    </p>
                                    <ul class="card-meta-list">
                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="time"></ion-icon>
                                                <p class="text">7 nap</p>
                                            </div>
                                        </li>
                                        <!-- Add other meta items as needed -->
                                    </ul>
                                </div>
                                <div class="card-price">
                                    <div class="wrapper">
                                        <p class="reviews">(25 visszajelzés)</p>
                                        <div class="card-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </div>
                                    <p class="price">
                                        1.000.000 Ft
                                        <span>/ fő </span>
                                    </p>
                                    <button class="btn btn-secondary">Lefoglalom</button>
                                </div>
                            </div>
                        </li>
                        <!-- Add other list items as needed -->
                    </ul>
                </div>
            </section>

            <section class="gallery" id="gallery">
                <div class="container">
                    <p class="section-subtitle">Galéria</p>
                    <h2 class="h2 section-title">Fotók ügyfeleinktől</h2>
                    <p class="section-text">

                    </p>
                    <ul class="gallery-list">
                        <li class="gallery-item">
                            <figure class="gallery-image">
                                <img src="./adat/kepek/gallery-1.jpg" alt="Gallery image">
                            </figure>
                        </li>
                        <!-- Add other gallery items as needed -->
                    </ul>
                </div>
            </section>

        </article>
    </main>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-brand">
                    <a href="#" class="logo">
                        <img src="./adat/kepek/logo.svg" alt="Raptair logo">
                    </a>
                    <p class="footer-text">
            
                    </p>
                </div>
                <div class="footer-contact">
                    <h4 class="contact-title">Kapcsolatfelvétel</h4>
                    <p class="contact-text">
                        Vedd fel velünk a kapcsolatot!
                    </p>
                    <ul>
                        <li class="contact-item">
                            <ion-icon name="call-outline"></ion-icon>
                            <a href="tel:+36205226542" class="contact-link">+36 20-522-6542</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    &copy; 2023 <a href="">Raptair</a>. Minden jog fenntartva.
                </p>
                <ul class="footer-bottom-list">
                    <li>
                        <a href="#" class="footer-bottom-link">Adatkezelési nyilatkozat</a>
                    </li>
                    <li>
                        <a href="#" class="footer-bottom-link">ÁSZF</a>
                    </li>
                    <li>
                        <a href="#" class="footer-bottom-link">FAQ</a>
                    </li>
                    <li>
                      <a href="#" class="footer-bottom-link">Admin</a>
                  </li>
                </ul>
            </div>
        </div>
    </footer>

    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>

    <script src="./adat/js/script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
