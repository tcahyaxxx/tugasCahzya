<?php
$host = "mysql-21d1be3d-henkkytc-8bbc.f.aivencloud.com";
$port = 17810;
$user = "avnadmin";
$pass = "AVNS_2xlsldcrdVN4TROv3nR";
$db   = "defaultdb"; 

try {
    // Koneksi pakai PDO
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,   // error -> exception
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // fetch assoc
    ]);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Query ambil data produk
$sql = "SELECT nama_menu, harga, gambar, deskripsi FROM Menu";
$stmt = $pdo->query($sql);
$menu = $stmt ? $stmt->fetchAll() : [];
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">

      <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="css/swiper-bundle.min.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="css/styles.css">

      <title>Responsive coffee website - Bedimcode</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">STARCOFFE</a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li>
                     <a href="#home" class="nav__link">HOME</a>
                  </li>

                  <li>
                     <a href="#popular" class="nav__link">POPULAR</a>
                  </li>

                  <li>
                     <a href="#about" class="nav__link">ABOUT US</a>
                  </li>

                  <li>
                     <a href="#products" class="nav__link">PRODUCTS</a>
                  </li>
                  <li>
                     <a href="#contact" class="nav__link">CONTACT</a>
                  </li>
               </ul>

               <!--close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-large-line"></i>
               </div>
            </div>

            <!-- toggle button -->
             <div class="nav__toggle" id="nav-toggle">
               <i class="ri-apps-2-fill"></i>
             </div>
         </nav>
      </header>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <div class="home__container container grid">
               <h1 class="home__title">COLD COFFEE</h1>

               <div class="home__images">
                  <div class="home__shape"></div>
                     <img src="img/home-splash.png" alt="image" class="home__splash">
                     <img src="img/bean-img.png" alt="image" class="home__bean-2">
                     <img src="img/home-coffee.png" alt="image" class="home__coffee">
                     <img src="img/bean-img.png" alt="image" class="home__bean-1">
                     <img src="img/ice-img.png" alt="image" class="home__ice-1">
                     <img src="img/ice-img.png" alt="image" class="home__ice-2">
                     <img src="img/leaf-img.png" alt="image" class="home__leaf">
                  </div>

                  <img src="img/home-sticker.svg" alt="image" class="home__sticker">

                  <div class="home__data">
                     <p class="home__description">
                        Find delicious hot and cold coffees with the 
                        best varieties, calm the pleasure and enjoy 
                        a good coffee, order now.
                     </p>

                     <a href="#about" class="button">Learn More</a>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== POPULAR ====================-->
         <section class="popular section" id="popular">
            <div class="popular__container container">
               <h2 class="section__title">POPULAR <br> CREATIONS</h2>
               
               <div class="popular__swiper swiper">
                  <div class="swiper-wrapper">
                     <article class="popular__card swiper-slide">
                        <div class="popular__images">
                           <div class="popular__shape"></div>
                           <img src="img/bean-img.png" alt="image" class="popular__bean-1">
                           <img src="img/bean-img.png" alt="image" class="popular__bean-2">
                           <img src="img/popular-coffee-1.png" alt="image" class="popular__coffee">
                        </div>

                        <div class="popular__data">
                           <h2 class="popular__name">VANILLA LATTE</h2>

                           <p class="popular__description">
                              Indulge in the simplicity of our delicious cold brew coffee.
                           </p>

                           <a href="#contact" class="button button-dark">Order now: $19.90</a>
                        </div>
                     </article>

                     <article class="popular__card swiper-slide">
                        <div class="popular__images">
                           <div class="popular__shape"></div>
                           <img src="img/bean-img.png" alt="image" class="popular__bean-1">
                           <img src="img/bean-img.png" alt="image" class="popular__bean-2">
                           <img src="img/popular-coffee-2.png" alt="image" class="popular__coffee">
                        </div>

                        <div class="popular__data">
                           <h2 class="popular__name">CLASSIC COFFEE</h2>

                           <p class="popular__description">
                              Indulge in the simplicity of our delicious cold brew coffee.
                           </p>

                           <a href="#contact" class="button button-dark">Order now: $19.90</a>
                        </div>

                     </article>
                                          
                     <article class="popular__card swiper-slide">
                        <div class="popular__images">
                           <div class="popular__shape"></div>
                           <img src="img/bean-img.png" alt="image" class="popular__bean-1">
                           <img src="img/bean-img.png" alt="image" class="popular__bean-2">
                           <img src="img/popular-coffee-3.png" alt="image" class="popular__coffee">
                        </div>

                        <div class="popular__data">
                           <h2 class="popular__name">MOCHA COFFEE</h2>

                           <p class="popular__description">
                              Indulge in the simplicity of our delicious cold brew coffee.
                           </p>

                           <a href="#contact" class="button button-dark">Order now: $19.90</a>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== ABOUT ====================-->
         <section class="about section" id="about">
            <div class="about__container container grid">
               <div class="about__data">
                  <h2 class="section__title">LEARN MORE <br> ABOUT US</h2>

                  <p class="about__description">
                     Welcome to StarCoffee, where coffee is pure passion. 
                     From bean to cup, we are dedicated to delivering 
                     excellence in every sip. Join us on a journey of 
                     flavor and quality, crafted with love to create the 
                     ultimate coffee experience.
                  </p>

                  <a href="#popular" class="button">The Best Coffees</a>
               </div>

               <div class="about__images">
                  <div class="about__shape"></div>
                  <img src="img/leaf-img.png" alt="image" class="about__leaf-1">
                  <img src="img/leaf-img.png" alt="image" class="about__leaf-2">
                  <img src="img/about-coffee.png" alt="image" class="about__coffee">
               </div>
            </div>
         </section>

         <!--==================== PRODUCTS ====================-->
         <section class="products section" id="products">
    <h2 class="section__title">THE MOST <br> REQUESTED</h2>

    <div class="products__container container grid">
        <?php if (!empty($menu)): ?>
            <?php foreach ($menu as $row): ?>
                <article class="products__card">
                    <div class="products__images">
                        <div class="products__shape"></div>
                        <img src="img/ice-img.png" alt="image" class="products__ice-1">
                        <img src="img/ice-img.png" alt="image" class="products__ice-2">

                        <!-- ambil gambar langsung dari kolom 'gambar' -->
                        <img src="<?= htmlspecialchars($row['gambar']) ?>" 
                             alt="<?= htmlspecialchars($row['nama_menu']) ?>" 
                             class="products__coffee">
                    </div>

                    <div class="products__data">
                        <h3 class="products__name">
                            <?= htmlspecialchars($row['nama_menu']) ?>
                        </h3>
                        <span class="products__price">
                            Rp<?= number_format($row['harga'], 0, ',', '.') ?>
                        </span>
                        <p class="products__desc">
                            <?= htmlspecialchars($row['deskripsi']) ?>
                        </p>
                        <button class="products__bottom">
                            <i class="ri-shopping-bag-3-fill"></i>
                        </button>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada menu tersedia.</p>
        <?php endif; ?>
    </div>
</section>
         <!--==================== CONTACT ====================-->
         <section class="contact section" id="contact">
            <h2 class="section__title">CONTAC US</h2>

            <div class="contact__container container grid">
               <div class="contact__info grid">
                  <div>
                     <h3 class="contact__title">Write Us</h3>

                     <div class="contact__title">
                        <a href="https://api.whatsapp.com/send?phone=6281932950241&text=Hello, more information!" trget="_blank" class="contact__sosial-link">
                           <i class="ri-whatsapp-fill"></i>
                        </a>

                         <a href="https://m.me/bedimcode" trget="_blank" class="contact__sosial-link">
                           <i class="ri-messenger-fill"></i>
                        </a>

                         <a href="https://t.me/telegram" trget="_blank" class="contact__sosial-link">
                           <i class="ri-telegram-2-fill"></i>
                        </a>
                     </div>
                  </div>

                  <div>
                     <h3 class="contact__title">Location</h3>

                     <address class="contact__addess">
                        Lima - Sun City - Peru <br>
                        Av. Moon #4321
                     </address>

                     <a href="https://maps.app.goo.gl/MAmMDxUBFXBSUzLH7" class="contact__map">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>View On Map</span>
                     </a>
                  </div>
               </div>

               <div class="contact__info grid">
                  <div>
                     <h3 class="contact__title">Delivery</h3>

                     <address class="contact__address">
                        +00-987-7654-321 <br>
                        +11-012345
                     </address>
                  </div>

                  <div>
                     <h3 class="contact__title">Attention</h3>

                     <address class="contact__address">
                        Monday - Saturday <br> 
                        9AM - 10PM
                     </address>
                  </div>
               </div>

               <div class="contact__images">
                  <div class="contact__shape"></div>
                  <img src="img/contact-delivery.png" alt="image" class="contact__delivery">
               </div>
            </div>
         </section>
      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <h3 class="footer__social">social</h3>

               <div class="footer__social">
                  <a href="https://www.facebook.com/" target="_blank " class="footer__social-link">
                     <i class="ri-facebook-circle-fill"></i>
                  </a>
                  <a href="https://www.instagram.com/2hnky_" target="_blank " class="footer__social-link">
                     <i class="ri-instagram-fill"></i>
                  </a>
                  <a href="https://twitter.com/" target="_blank " class="footer__social-link">
                     <i class="ri-twitter-x-fill"></i>
                   </a>
               </div>
            </div>

            <div>
               <h3 class="footer__social">Payment Methods</h3>

               <div class="footer__pay">
                  <img src="img/footer-card-1.png" alt="image" class="footer__pay-card">
                  <img src="img/footer-card-2.png" alt="image" class="footer__pay-card">
                  <img src="img/footer-card-3.png" alt="image" class="footer__pay-card">
                  <img src="img/footer-card-4.png" alt="image" class="footer__pay-card">
               </div>
            </div>

            <div>
               <h3 class="footer__social">Subscribe For Discounts</h3>

               <form action="" class="footer__form">
                  <input type="email" placeholder="Email" class="footer__input">
                  <button type="submit" class="footer__button button">Subscribe</button>
               </form>
            </div>
         </div>

         <span class="footer__copy">
            &#169; All Rights Reserved By Cahzya_
         </span>
      </footer>

      <!--========== SCROLL UP ==========-->
      <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>

      <!--=============== SCROLLREVEAL ===============-->
      <script src="js/scrollreveal.min.js"></script>

      <!--=============== SWIPER JS ===============-->
      <script src="js/swiper-bundle.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="js/main.js"></script>
   </body>
</html>