<!-- Bad Access Error -->
<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "bad_access") {
?>

<div id="alert_cs_bad_access" class="alert-bg hide" onclick="closeAlertBadAccess()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Accesso Negato!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_bad_access.js"></script>

<?php
    }
?>

<!-- Wrong Password Error -->
<?php
    if ($_GET["error"] == "wrong_password") {
?>

<div id="alert_cs_wrong_password" class="alert-bg hide" onclick="closeAlertWrongPassword()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Password Errata!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_wrong_password.js"></script>

<?php
    }
?>

<!-- Invalid Username Error -->
<?php
    if ($_GET["error"] == "invalid_username") {
?>

<div id="alert_cs_invalid_username" class="alert-bg hide" onclick="closeAlertInvalidUsername()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Username non valido!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_invalid_username.js"></script>

<?php
    }
?>

<!-- Invalid Email Error -->
<?php
    if ($_GET["error"] == "invalid_email") {
?>

<div id="alert_cs_wrong_password" class="alert-bg hide" onclick="closeAlertWrongPassword()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Password Errata!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_wrong_password.js"></script>

<?php
    }
?>

<!-- Empty Input Error -->
<?php
    if ($_GET["error"] == "wrong_password") {
?>

<div id="alert_cs_invalid_email" class="alert-bg hide" onclick="closeAlertInvalidEmail()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Email non Valida!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_invalid_email.js"></script>

<?php
    }
?>

<!-- User Already Exists Error -->
<?php
    if ($_GET["error"] == "user_already_exists") {
?>

<div id="alert_cs_user_already_exists" class="alert-bg hide" onclick="closeAlertUserAlreadyExists()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>L'utente esiste già!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_user_already_exists.js"></script>

<?php
    }
?>

<!-- Stmt Failed Error -->
<?php
    if ($_GET["error"] == "stmt_failed") {
?>

<div id="alert_cs_stmt_failed" class="alert-bg hide" onclick="closeAlertStmtFailed()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Database Error!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_stmt_failed.js"></script>

<?php
    }
?>

<!-- Something Went Wrong Error -->
<?php
    if ($_GET["error"] == "something_went_wrong") {
?>

<div id="alert_cs_something_went_wrong" class="alert-bg hide" onclick="closeAlertSomethingWentWrong()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Qualcosa è andato storto!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_something_went_wrong.js"></script>

<?php
    }
?>

<!-- User Not Found Error -->
<?php
    if ($_GET["error"] == "user_not_found") {
?>

<div id="alert_cs_user_not_found" class="alert-bg hide" onclick="closeAlertUserNotFound()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Utente Non Trovato!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_user_not_found.js"></script>

<?php
    }
}
if (isset($_GET["status"])) {
    //reset email success
    if ($_GET["status"] == "reset_email_success") {
?>

<div id="alert_cs_reset_email_success" class="alert-bg hide" onclick="closeAlertResetEmailSuccess()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Email Inviata con successo!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_reset_email_success.js"></script>

<?php
    }
    //registration success
    if ($_GET["status"] == "registration_success") {
?>

<div id="alert_cs_registration_success" class="alert-bg hide" onclick="closeAlertRegistrationSuccess()">
  <div class="alert-body fs-1 text-center px-3">
    <div class="row align-items-center mt-5">
      <div class="col">
        <p>Registrazione effettuata con successo!</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/alert_registration_success.js"></script>

<?php
    }
}  
?>