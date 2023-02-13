<body>
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <a href="index"><img src="site/assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a href="index">Hem</a>
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
  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Våra Kategorier</h2>
          <ol>
            <li>
              <a href="index">Hem</a>
            </li>
            <li>Våra Kategorier</li>
          </ol>
        </div>
      </div>
    </section>
    <section id="category" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container pb-5 mb-sm-1">
        <div class="row">
  <?php $categories = $dbh->prepare("SELECT * FROM categories");
    $categories->execute();
    $index = 0;
    if ($categories->RowCount() > 0) {
        while ($categorie = $categories->fetch()) {
            $index = $index + 1; ?> <div class="col-md-4 col-sm-6">
            <div class="card border-0 mb-grid-gutter">
              <a class="card-img-tiles">
                <div class="main-img">
                  <img src="https://www.bootdey.com/image/340x326/FF8C00/000000">
                </div>
              </a>
              <div class="card-body border mt-n1 py-4 text-center">
                <h2 class="h5 mb-1">Målvakt</h2>
                <span class="d-block mb-3 font-size-xs text-muted"><?= $categorie["title"] ?></span>
                </span>
                <a type="button" data-bs-toggle="modal" data-bs-target="#video-<?= $index ?>" href="#" class="get-started-btn">KOLLA VIDEO</a>
              </div>
            </div>
          </div> 
          <?php } } else { echo "<p>Det finns inga kategorier här!</p>"; } ?>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row"></div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Användbara Länkar</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="index">Hem</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="tjanster">Våra Tjänster</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="team">Våra Kategorier</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontakta Oss</h4>
            <p> Ölmbrovägen 7 <br> Örebro, 71840 <br> Sverige <br>
              <br>
              <strong>Telefonnummer:</strong> +46 73 085 93 29 <br>
              <strong>Email:</strong> prenkuendrit@gmail.com <br>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Om Goalie</h3>
            <p>Vi på Goalie är ett företag som lär ut ungdomar att bli deras bästa version av sig själva framför mmålet.</p>
            <div class="social-links mt-3">
              <a href="#" class="instagram">
                <i class="bx bxl-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright"> &copy; Copyright <strong>
          <span>Goalie</span>
        </strong>. Alla Rättigheter Reserverade </div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a> <?php 
  $categories = $dbh->prepare("SELECT * FROM categories");
  $categories->execute();
  $index = 0;
  if ($categories->RowCount() > 0) {
      while ($categorie = $categories->fetch()) {
          $index = $index + 1; ?> 
  <div class="modal fade" id="video-<?= $index ?>" tabindex="-1" aria-labelledby="videoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <iframe width="466" height="315" src="<?= $categorie["video"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Stäng</button>
        </div>
      </div>
    </div>
  </div> 
  <?php } } else { echo "<p style='margin-left:10px;'>Det finns inga värden här!</p>"; } ?>
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