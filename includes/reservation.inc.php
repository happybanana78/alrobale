<?php

session_start();

require "../vendor/autoload.php";

use alrobale\Email;

if (isset($_POST["reservation"])) {

    $roomType = $_POST["room_type"];
    $roomQty = $_POST["room_quantity"];
    $checkIn = $_POST["check-in_date"];
    $checkOut = $_POST["check-out_date"];
    $breakfast = $_POST["breakfast"];
    $dog = $_POST["dog"];
    $extra = $_POST["customer_extra"];

    if (empty($extra)) {
        $extra = "nessuno";
    }

    $emailSubject = "Prenotazione Agriturismo al Robale";

    $emailBody = "<p>Gentile cliente abbiamo ricevuto con successo la sua prenotazione per la camera / appartamento " . $roomType . " in quantita' " . $roomQty . "</p>
                    <p>Secondo i dati da lei inseriti la sua data di arrivo e': <strong>" . $checkIn . "</strong> e la sua data di check-out e': <strong>" . $checkOut . "</strong>.</p>
                    <p>Come da sua scelta la colazione e': <strong>" . $breakfast . "</strong> e un cane: <strong>" . $dog . "</strong>.</p>
                    <p>I servizi o le necessita' extra da lei richieste sono: <strong>" . $extra . "</strong>, 
                    le faremo sapere riguardo le nostre disponibilita' a riguardo nella mail di risposta.</p>
                    <p>La preghiamo di confermare i dati da lei inseriti e in caso di errori di chiamare il numero: <strong>+39 035 642633</strong>.</p>
                    <p>Nelle prossime 24h ricevera' una mail che confermera' la sua prenotazione.</p>
                    <p>Grazie mille e buona continuazione.<p>
                    <p><strong>Agriturismo al Robale</strong></p>";

    $reservation = new Email("ssl", "ssl0.ovh.net", "465", "info@alrobale.info", "06predicatore", "info@alrobale.info", $emailSubject, $emailBody, $_SESSION["useremail"]);

    $reservation->sendMail();

    header("location: ../index.php?status=success");

} else {
    header("location: ../index.php?error=bad_access");
    exit();
}