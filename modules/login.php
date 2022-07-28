<!-- login popup -->
<div class="modal fade mt-6" id="login-pop" tabindex="-1" aria-labelledby="login-pop" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="login_form" action="includes/login.inc.php" method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="txt" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="pwd" required>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Chiudi</button>
        <button type="submit" class="btn btn-warning" form="login_form" name="login">Login</button>
      </div>
    </div>
  </div>
</div>