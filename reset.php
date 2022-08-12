<?php 
if (isset($_POST["submit"])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <title>Password Reset</title>
</head>
<body class="bg-image">
    <div class="container text-center justify-content-center align-items-center mt-5 p-5">
        <h2><strong>Reimposta la password</strong></h2>
        <h4 class="mt-3">inserisci la mail con cui hai effettuato la registrazione ti invieremo una mail con le istruzioni per reimpostare la tua password</h4>
        <form class="form-floating mt-4" action="includes/resetmail.inc.php" method="post">
            <input type="email" class="form-control" id="reset_email" placeholder="email..." name="email" required>
            <label for="reset_email">Email</label>
            <button class="btn btn-brown btn-lg mt-3">Invia</button>
        </form>
    </div>

    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/dce035b76e.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
} else {
    header("location: index.php?error=bad_access");
}
?>