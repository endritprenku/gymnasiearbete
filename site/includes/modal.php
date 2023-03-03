<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <?php User::Login(); ?>
     <form method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Logga in på Goalie</h5>
        </div>
        <div class="modal-body">
        <div class="form-group">
          <label for="usr">Användarnamn</label>
          <input type="text" class="form-control" name="username" placeholder="Skriv in ditt användarnamn" required="required" autofocus="autofocus" class="form-control">
        </div>
        <div class="form-group">
          <label for="pwd">Lösenord</label>
          <input type="password" class="form-control" name="password" placeholder="Skriv in ditt lösenord" required="required" autofocus="autofocus" class="form-control">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="cancel-btn" data-bs-dismiss="modal">GÅ TILLBAKA</button>
          <button type="submit" name="login" class="login-btn">LOGGA IN</button>
        </div>
      </div>
    </form>
    </div>
  </div>