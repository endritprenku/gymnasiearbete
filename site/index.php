<body>
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <a href="index"><img src="site/assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a class="active " href="index">Hem</a>
          </li>
          <li>
            <a href="tjanster">Våra Tjänster</a>
          </li>
          <li>
            <a href="team">Vårt Team</a>
          </li>
          <?php
          if (isset($_SESSION['id']))
          {
              echo '<li class="dropdown"><a href="#">Mitt Konto</a>
              <ul>
                <li><a href="kategorier">Våra Kategorier</a></li>
                <li><a href="loggaut">Logga Ut</a></li>
              </ul>
            </li>';
          } else {
              echo '<li>
              <a type="button" data-bs-toggle="modal" data-bs-target="#loginModal" href="#">Logga In</a>
            </li>';
          }
				?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Varför oss?</span>
          </h2>
          <p class="animate__animated animate__fadeInUp">Få professionell målvaktsträning från erfarna tränare med en proven track record.</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Varför oss?</h2>
          <p class="animate__animated animate__fadeInUp">Bli en elite-målvakt med vår specialiserade träning och personliga coaching.</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Varför oss?</h2>
          <p class="animate__animated animate__fadeInUp">Ta ditt spel till nästa nivå med vår avancerade taktiska utbildning och videoanalys.</p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section>
  <main id="main">
    <section class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
                <i class="bx bx-money"></i>
              </div>
              <h4 class="title">
                <a href="">Låga konstnader</a>
              </h4>
              <p class="description">Vår tjänst är billig eftersom vi har valt att använda tekniska lösningar som gör det möjligt för oss att hålla våra kostnader låga. Vi har också valt att inte ha några onödiga kostnader, såsom dyra kontorslokaler eller höga personalrelaterade kostnader. Vi har också valt att erbjuda vår tjänst online, vilket gör det möjligt för oss att nå en bredare publik utan de kostnader som är förknippade med att ha en fysisk plats. Detta gör det möjligt för oss att erbjuda vår tjänst till ett mycket konkurrenskraftigt pris.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon">
                <i class="bx bx-tachometer"></i>
              </div>
              <h4 class="title">
                <a href="">Effektivt</a>
              </h4>
              <p class="description">Vår målvaktsträning är effektiv på flera sätt. För det första har våra tränare bred erfarenhet och kunskap om positionen, vilket innebär att de kan ge professionell och specifik träning för målvakter på alla nivåer. Dessutom har de en proven track record med att hjälpa spelare att utvecklas och nå sina mål.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon">
                <i class="bx bx-time"></i>
              </div>
              <h4 class="title">
                <a href="">24/7</a>
              </h4>
              <p class="description">Vår tjänst är tillgänglig dygnet runt, alla dagar i veckan. Det betyder att du kan använda den när som helst, sju dagar i veckan, dygnet runt, utan avbrott eller begränsningar.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon">
                <i class="bx bx-football"></i>
              </div>
              <h4 class="title">
                <a href="">Målvaktsträning</a>
              </h4>
              <p class="description">Vår tjänst är speciellt anpassad för att möta behoven hos målvakter i alla nivåer. Det innebär att det är ett utmärkt verktyg för både nybörjare och erfarna målvakter som vill förbättra sin prestation. Tjänsten innehåller träningsmaterial, videor med professionella målvakter, personliga råd och möjlighet att få feedback på ens prestationer. Den är utvecklad tillsammans med professionella målvakter och tränare för att erbjuda den bästa möjliga supporten för målvakter.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="features">
      <div class="container">
        <div class="section-title">
          <h2>Vilken funktion fyller vi?</h2>
          <p>Vår tjänst är speciellt anpassad för att möta behoven hos målvakter i alla nivåer. Det innebär att det är ett utmärkt verktyg för både nybörjare och erfarna målvakter som vill förbättra sin prestation. Tjänsten innehåller träningsmaterial, videor med professionella målvakter, personliga råd och möjlighet att få feedback på ens prestationer. Den är utvecklad tillsammans med professionella målvakter och tränare för att erbjuda den bästa möjliga supporten för målvakter.</p>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img style="margin-top: 50px" src="site/assets/img/goalkeeper-silhouette-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Effektiv Träning</h3>
            <p class="fst-italic"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <ul>
              <li>
                <i class="bi bi-two"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </li>
              <li>
                <i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
              </li>
            </ul>
          </div>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="site/assets/img/Goalkeeper.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Lärorik Träning</h3>
            <p class="fst-italic"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <p> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
  $pages = array('includes/footer.php', 'includes/backtotop.php', 'includes/modal.php');
    foreach ($pages as $page) {
      include_once $page;
    }
	?>
  <script src="site/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="site/assets/vendor/aos/aos.js"></script>
  <script src="site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="site/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="site/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="site/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="site/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="site/assets/vendor/php-email-form/validate.js"></script>
  <script src="site/assets/js/main.js"></script>
</body>
</html>