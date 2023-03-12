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
              echo '<li class="dropdown"><a href="#" class="active">Mitt Konto</a>
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
          <h2>Våra Kategorier <i class="fa fa-folder" aria-hidden="true"></i></h2>
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
                  <img src="<?= $categorie["image"] ?>">
                </div>
              </a>
              <div class="card-body border mt-n1 py-4 text-center">
                <h2 class="h5 mb-1">Målvakt</h2>
                <span class="d-block mb-3 font-size-xs text-muted"><?= $categorie["title"] ?></span>
                </span>
                <a type="button" onclick="displayIframe<?= $index ?>()" data-bs-toggle="modal" data-bs-target="#video-<?= $index ?>" href="#" class="get-started-btn">KOLLA VIDEO</a>
              </div>
            </div>
          </div> 
          <?php } } else { echo "<p>Det finns inga kategorier här!</p>"; } ?>
        </div>
      </div>
    </section>
  </main>
  <?php
  $pages = array('includes/footer.php', 'includes/backtotop.php', 'includes/modal.php', 'includes/logout.php');
    foreach ($pages as $page) {
      include_once $page;
    }
	?>
  
  <?php 
  $categories = $dbh->prepare("SELECT * FROM categories");
  $categories->execute();
  $index = 0;
  if ($categories->RowCount() > 0) {
      while ($categorie = $categories->fetch()) {
          $index = $index + 1; ?> 
  <div class="modal fade" id="video-<?= $index ?>" tabindex="-1" aria-labelledby="videoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <?php User::Login(); ?>
     <form method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel"><?= $categorie["title"] ?> <i class="fa fa-video-camera" aria-hidden="true"></i></h5>
        </div>
        <div style="margin:0" id="modal-body<?= $index ?>" class="modal-body"></div>
        <div class="modal-footer">
          <button type="button" class="cancel-btn" data-bs-dismiss="modal">GÅ TILLBAKA</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  <script>
    function displayIframe<?= $index ?>() {
        document.getElementById("modal-body<?= $index ?>").innerHTML = '<iframe style="border-radius: 5px;" width="466" height="315" src="<?= $categorie["video"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
  </script>
  <?php } } ?>
  <?php
		include_once 'includes/javascriptlinks.php';
	?>
</body>
</html>