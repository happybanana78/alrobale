<?php
if (isset($_GET["key"]) && isset($_GET["reset"])) {
    $email = $_GET["key"];
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
<body>
    <div class="container justify-content-center align-items-center mt-5">
        <h2>Inserisci la nuova password</h2>
        <form action="includes/newpass.inc.php" class="form-floating" method="POST">
            <input type="password" class="form-control" id="reset_pwd" placeholder="new password..." name="pwd" required>
            <label for="reset_pwd">Nuova Password</label>
            <input class="d-none" type="text" name="mail" value=<?php echo "'" . $email . "'"; ?>>
            <button class="btn btn-brown btn-lg mt-3" name="submit">Invia</button>
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