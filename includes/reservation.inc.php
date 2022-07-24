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

    $emailSubject = "Prenotazione Agriturismo al Robale";

    $emailBody = "<strong>Gentile cliente abbiamo ricevuto con successo la sua prenotazione per la camera / appartamento " . $roomType . " in quantità " . $roomQty . "
                    in data " . $checkIn . " con check-out il " . $checkOut . ". Servizion colazione: " . $breakfast . ", presenza di un cane: " . $dog . " ,
                    servizi o necessità extra richieste: " . $extra . ". La preghiamo di confermare i dati da lei inseriti e in caso di errori di chiamare il numero:
                    035 642633. Nelle prossime 24h riceverà una mail che confermerà la sua prenotazione. Grazie mille e buona continuazione. Agriturismo al Robale</strong>";

    $reservation = new Email("ssl", "ssl0.ovh.net", "465", "info@alrobale.info", "06predicatore", "info@alrobale.info", $emailSubject, $emailBody, $_SESSION["useremail"]);

    $reservation->sendMail();

    header("location: ../index.php?status=success");

} else {
    header("location: ../index.php?error=bad_access");
    exit();
}