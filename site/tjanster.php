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
            <a class="active" href="tjanster">Våra Tjänster</a>
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
          <h2>Våra Tjänster</h2>
          <ol>
            <li>
              <a href="index">Hem</a>
            </li>
            <li>Våra Tjänster</li>
          </ol>
        </div>
      </div>
    </section>
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
    <section class="service-details">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="https://kaptivasportsacademy.com/wp-content/uploads/2018/10/goalie-ksa.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Vårt Uppdrag</a>
                </h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <div class="read-more">
                  <a href="#">
                    <i class="bi bi-arrow-right"></i> Läs Mer </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="https://kaptivasportsacademy.com/wp-content/uploads/2018/10/goalie-ksa.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Vår Plan</a>
                </h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                <div class="read-more">
                  <a href="#">
                    <i class="bi bi-arrow-right"></i> Läs Mer </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="https://ca-times.brightspotcdn.com/dims4/default/32dfa6b/2147483647/strip/true/crop/2048x1363+0+0/resize/1486x989!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F12%2F5e%2F0b9aa8e437aa52d5d0f70b949d1c%2Fla-sci-sn-goalies-gamblers-fallacy-20140731-002" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Vår Vision</a>
                </h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                <div class="read-more">
                  <a href="#">
                    <i class="bi bi-arrow-right"></i> Läs Mer </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="https://netstorage-sportsbrief.akamaized.net/images/7fa7a74a3c6d8d9b.jpg?imwidth=900" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Vår Empati</a>
                </h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut</p>
                <div class="read-more">
                  <a href="#">
                    <i class="bi bi-arrow-right"></i> Läs Mer </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pricing section-bg" data-aos="fade-up">
      <div class="container">
        <div class="section-title">
          <h2>Priser</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-4 box">
            <h3>Gratis</h3>
            <h4>0 SEK <span>per månad</span>
            </h4>
            <ul>
              <li>
                <i class="bx bx-check"></i> Quam adipiscing vitae proin
              </li>
              <li>
                <i class="bx bx-check"></i> Nec feugiat nisl pretium
              </li>
              <li>
                <i class="bx bx-check"></i> Nulla at volutpat diam uteera
              </li>
              <li class="na">
                <i class="bx bx-x"></i>
                <span>Pharetra massa massa ultricies</span>
              </li>
              <li class="na">
                <i class="bx bx-x"></i>
                <span>Massa ultricies mi quis hendrerit</span>
              </li>
            </ul>
            <a href="#" class="get-started-btn">KÖP</a>
          </div>
          <div class="col-lg-4 box featured">
            <h3>Smart</h3>
            <h4>300 SEK <span>per månad</span>
            </h4>
            <ul>
              <li>
                <i class="bx bx-check"></i> Quam adipiscing vitae proin
              </li>
              <li>
                <i class="bx bx-check"></i> Nec feugiat nisl pretium
              </li>
              <li>
                <i class="bx bx-check"></i> Nulla at volutpat diam uteera
              </li>
              <li>
                <i class="bx bx-check"></i> Pharetra massa massa ultricies
              </li>
              <li>
                <i class="bx bx-check"></i> Massa ultricies mi quis hendrerit
              </li>
            </ul>
            <a href="#" class="get-started-btn">KÖP</a>
          </div>
          <div class="col-lg-4 box">
            <h3>X-TRA Smart</h3>
            <h4>900 SEK <span>per månad</span>
            </h4>
            <ul>
              <li>
                <i class="bx bx-check"></i> Quam adipiscing vitae proin
              </li>
              <li>
                <i class="bx bx-check"></i> Nec feugiat nisl pretium
              </li>
              <li>
                <i class="bx bx-check"></i> Nulla at volutpat diam uteera
              </li>
              <li>
                <i class="bx bx-check"></i> Pharetra massa massa ultricies
              </li>
              <li>
                <i class="bx bx-check"></i> Massa ultricies mi quis hendrerit
              </li>
            </ul>
            <a href="#" class="get-started-btn">KÖP</a>
          </div>
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
            <h3>Om Goalie</h3>
            <p>Vi på Goalie är ett företag som lär ut ungdomar att bli deras bästa version av sig själva framför målet.</p>
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