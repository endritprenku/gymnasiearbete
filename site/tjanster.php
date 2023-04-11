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
                <li><a type="button" data-bs-toggle="modal" data-bs-target="#logoutModal" href="#">Logga Ut</a></li>
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
          <h2>Våra Tjänster <i class="fa fa-shopping-cart" aria-hidden="true"></i></h2>
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
                <p class="card-text">Vårt uppdrag är att utbilda och utveckla målvakterna på vårt lag. Detta inkluderar att förbättra deras tekniska färdigheter, taktiska förståelse, fysiska kondition och mentala styrka. Vi jobbar för att hjälpa målvakterna att förbättra sina prestationer och spela på sin högsta nivå möjligt. Vårt mål är att stärka deras förtroende och självkänsla och att hjälpa dem att bli en stark och pålitlig del av laget.</p>
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
                <img src="https://www.gp.se/image/policy:1.88666414:1674922611/4hB7txsV_XrWXg3KDCYGj2Lkta4.jpg?f=Regular&w=960&$p$f$w=783ee96" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#">Vår Plan</a>
                </h5>
                <p class="card-text">Vår plan som målvaktstränare är att genomföra en omfattande och anpassningsbar träningsplan för varje målvakt på laget. Planen kommer att inkludera övningar som fokuserar på att förbättra deras tekniska färdigheter, taktiska förståelse, fysiska kondition och mentala styrka. Vi kommer också att fokusera på individuell coaching för att identifiera och förbättra varje målvakts unika styrkor och svagheter. Vi kommer att hålla regelbundna möten med varje målvakt för att följa upp deras framsteg och justera träningsplanen efter deras behov. Vår plan är att skapa en miljö där målvakterna kan utvecklas och förbättra sig kontinuerligt för att uppnå sitt fulla potential och hjälpa laget att nå sina mål.</p>
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
                <p class="card-text">Vår vision som målvaktstränare är att skapa en kultur där varje målvakt på laget har potentialen att bli en av de bästa i sin liga. Vi strävar efter att utveckla varje målvakt individuellt, genom att fokusera på deras unika styrkor och utmaningar. Vi vill att varje målvakt ska ha självförtroende, ha höga förväntningar på sig själva och lita på sin förmåga att prestera på högsta nivå. Vår vision är att ha ett målvaktslag som är en stark och pålitlig del av hela laget och som kan spela på högsta nivå och nå de högsta framgångarna tillsammans.</p>
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
                  <a href="#">För Individen</a>
                </h5>
                <p class="card-text">Vår empati som målvaktstränare innebär att vi förstår och tar hänsyn till de individuella behoven och känslorna hos varje målvakt på laget. Vi är medvetna om att det kan vara svårt att hantera press och motgångar på positionen som målvakt och att varje målvakt har en unik personlighet och bakgrund. Vi är lyhörda för varje målvakts behov och strävar efter att skapa en trygg och stödjande miljö där de kan känna sig bekväma att uttrycka sina känslor och problem. Vi använder vår empati för att coacha varje målvakt individuellt och hjälpa dem att övervinna eventuella hinder som hindrar dem från att uppnå sin fulla potential.</p>
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
          <p>Goalie är stolta över att erbjuda våra kunder högkvalitativa produkter och tjänster till konkurrenskraftiga priser.</p>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-4 box">
            <h3>Gratis</h3>
            <h4>0 SEK <span>per månad</span>
            </h4>
            <ul>
              <li>
                <i class="bx bx-check"></i> Tutorials
              </li>
              <li>
                <i class="bx bx-check"></i> Utveckling
              </li>
              <li class="na">
                <i class="bx bx-x"></i>
                <span>Personlig coaching</span>
              </li>
              <li class="na">
                <i class="bx bx-x"></i>
                <span>Uppdaterar kontinuerligt</span>
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
                <i class="bx bx-check"></i> Tutorials
              </li>
              <li>
                <i class="bx bx-check"></i> Utveckling
              </li>
              <li>
                <i class="bx bx-check"></i> Personlig coaching
              </li>
              <li>
                <i class="bx bx-check"></i> Uppdaterar kontinuerligt
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
                <i class="bx bx-check"></i> Tutorials
              </li>
              <li>
                <i class="bx bx-check"></i> Utveckling
              </li>
              <li>
                <i class="bx bx-check"></i> Personlig coaching
              </li>
              <li>
                <i class="bx bx-check"></i> Uppdaterar kontinuerligt
              </li>
            </ul>
            <a href="#" class="get-started-btn">KÖP</a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
  $pages = array('includes/footer.php', 'includes/backtotop.php', 'includes/login.php', 'includes/logout.php', 'includes/javascriptlinks.php');
    foreach ($pages as $page) {
      include_once $page;
    }
	?>
</body>
</html>