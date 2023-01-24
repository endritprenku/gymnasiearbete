<body>
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light">
          <a href="index">
            <span>Målvaktstips</span>
          </a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index"><img src="site/assets/img/logo.png" alt="" class="img-fluid"></a>-->
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
            <a class="active" href="team">Vårt Team</a>
          </li>
          <?php
          if (isset($_SESSION['id']))
          {
              echo '<li class="dropdown"><a href="">Mitt Konto</a>
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
          <h2>Vårt Team</h2>
          <ol>
            <li>
              <a href="index">Hem</a>
            </li>
            <li>Vårt Team</li>
          </ol>
        </div>
      </div>
    </section>
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="row">
        <?php
					$stmt = $dbh->prepare("SELECT * FROM employees");
					$stmt->execute();
					if (!$stmt->RowCount() == 0)
					{
						while($employees = $stmt->fetch())
						{
							echo'<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="https://www.informatique-mania.com/wp-content/uploads/2021/04/foto-sin-rostro-de-facebook-780x470.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/'.filter($employees["instagram"]).'/">
                    <i class="bi bi-instagram"></i>
                  </a>
                </div>
              </div>
              <div class="member-info">
                <h4>'.filter($employees["full_name"]).'</h4>
                <span>'.filter($employees["role"]).'</span>
                <p>'.filter($employees["role_description"]).'</p>
              </div>
            </div>
          </div>';
						}
					}
					else
					{
						echo 'There is no employees';
					}
				?>
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
                <a href="team">Vårt Team</a>
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
            <h3>Om Målvaktstips</h3>
            <p>Vi på Målvaktstips är ett företag som lär ut ungdomar att bli deras bästa version av sig själva framför mmålet.</p>
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
          <span>Målvaktstips</span>
        </strong>. Alla Rättigheter Reserverade </div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>
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