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
          <label for="usr">Användarnamn:</label>
          <input type="text" name="username" placeholder="Användarnamn" required="required" autofocus="autofocus" class="form-control">
        </div>
        <div class="form-group">
          <label for="pwd">Lösenord:</label>
          <input type="password" name="password" placeholder="Lösenord" required="required" autofocus="autofocus" class="form-control">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Gå Tillbaka</button>
          <button type="submit" name="login" class="btn btn-primary">Logga In</button>
        </div>
      </div>
    </form>
    </div>
  </div>