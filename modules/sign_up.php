<!-- sign up popup -->
<div class="modal fade mt-6" id="signup-pop" tabindex="-1" aria-labelledby="signup-pop" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrazione</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="submit_form" action="includes/signup.inc.php" method="post">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Cognome</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="user_email">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="txt" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="user_pwd">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Chiudi</button>
        <button type="submit" class="btn btn-brown" form="submit_form" name="signup">Registrati</button>
      </div>
    </div>
  </div>
</div>