<?php

use alrobale\Slide;

 require_once "vendor/autoload.php" ?>
<?php include_once "modules/header.php" ?>

<!-- home section -->

<section class="bg-land text-light p-5">
  <div class="container">
    <div class="d-md-flex justify-content-lg-between align-items-center">
      <div class='d-none d-md-block w-50'>
        <?php
          $imgPath = "assets/img/alrobale/";
          $slide = new Slide($imgPath);
          $imgCount = count($slide->loopDir());
          for ($i = 0; $i < $imgCount; $i++) {
            echo "<img src='" . $slide->loopDir()[$i] . "' alt='' class='home-slider-item img-fluid w-100 border rounded-4'>";
          }
        ?>
      </div>
      <div class="mt-6 mb-5">
        <h1 class="text-light fs-20 title-shadow">Agriturismo Al Robale</h1><br>
        <h2 class="text-light fs-2 title-shadow">Solo su prenotazione</h2><br>
        <a class="btn btn-brown btn-lg fs-5" href="#footer">Prenota Ora!</a>
      </div>
    </div>
  </div>
</section>

<!-- news letter section -->

<section class="bg-news p-5 text-light">
  <div class="container text-center">
    <div class="d-md-flex justify-content-lg-between align-items-center">
      <h2 class="mb-3 mb-sm-0 me-md-2">Iscriviti alla nostra newsletter</h2>
      <div class="input-group news-input">
        <form action="includes/storeemail.inc.php" method="post" class="d-none">
          <input id="email_input" type="text" name="user_email">
          <button id="email_send_btn" type="submit" name="submit"></button>
        </form>
        <input id="front_email_input" type="text" class="form-control" placeholder="Email...">
        <button class="btn btn-brown btn-lg" type="button" onclick="transferEmailValue(document.getElementById('front_email_input').value)">Iscriviti</button>
      </div>
    </div>
  </div>
</section>

<!-- rooms section -->

<!-- single room desc -->
<div class="modal fade" id="single_room" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Stanza Singola</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="pb-3 border-brown">
          <img class="img-fluid" src="../assets/img/alrobale/camera.JPG">
        </div>
        <h3 class="mt-2">La stanza è provvista di:</h3>
        <ul class="fs-4">
          <li><i class="fa-solid fa-bed"></i>&nbsp; Letto Matrimoniale</li>
          <li><i class="fa-solid fa-wind"></i>&nbsp; Aria Condizionata</li>
          <li><i class="fa-solid fa-bath"></i>&nbsp; Bagno Privato con Doccia</li>
          <li><i class="fa-solid fa-fire-flame-curved"></i>&nbsp; Bollitore</li>
          <li><i class="fa-solid fa-wifi"></i>&nbsp; WiFi</li>
          <li><i class="fa-solid fa-vault"></i>&nbsp; Cassaforte</li>
          <li><i class="fa-solid fa-tv"></i>&nbsp; Televisione</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>

<!-- double room desc -->
<div class="modal fade" id="double_room" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Stanza Doppia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="pb-3 border-brown">
          <img class="img-fluid" src="../assets/img/alrobale/camera.JPG">
        </div>
        <h3 class="mt-2">La stanza è provvista di:</h3>
        <ul class="fs-4">
          <li><i class="fa-solid fa-bed"></i>&nbsp; Letto Matrimoniale</li>
          <li><i class="fa-solid fa-wind"></i>&nbsp; Aria Condizionata</li>
          <li><i class="fa-solid fa-bath"></i>&nbsp; Bagno Privato con Doccia</li>
          <li><i class="fa-solid fa-fire-flame-curved"></i>&nbsp; Bollitore</li>
          <li><i class="fa-solid fa-wifi"></i>&nbsp; WiFi</li>
          <li><i class="fa-solid fa-vault"></i>&nbsp; Cassaforte</li>
          <li><i class="fa-solid fa-tv"></i>&nbsp; Televisione</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>

<!-- apartment room desc -->
<div class="modal fade" id="apartment" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appartamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="pb-3 border-brown">
          <img class="img-fluid" src="../assets/img/alrobale/camera.JPG">
        </div>
        <h3 class="mt-2">La stanza è provvista di:</h3>
        <ul class="fs-4">
          <li><i class="fa-solid fa-bed"></i>&nbsp; Letto Matrimoniale</li>
          <li><i class="fa-solid fa-wind"></i>&nbsp; Aria Condizionata</li>
          <li><i class="fa-solid fa-bath"></i>&nbsp; Bagno Privato con Doccia</li>
          <li><i class="fa-solid fa-fire-flame-curved"></i>&nbsp; Bollitore</li>
          <li><i class="fa-solid fa-wifi"></i>&nbsp; WiFi</li>
          <li><i class="fa-solid fa-vault"></i>&nbsp; Cassaforte</li>
          <li><i class="fa-solid fa-tv"></i>&nbsp; Televisione</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>

<!-- reservation form -->
<div class="modal fade" id="reservation_popup" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Prenotazione Camere</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="reservation_form" class="fs-5" action="includes/reservation.inc.php" method="post">
          <label>Tipo Camera / Appartmento:*</label>
          <select class="form-select" name="room_type" required>
            <option value="Camera Singola">Camera Singola</option>
            <option value="Camera Doppia">Camera Doppia</option>
            <option value="Appartamento">Appartamento</option>
          </select>
          <label>Quantità:*</label>
          <select class="form-select" name="room_quantity" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <label>Giorno di arrivo:*</label>
          <input type="date" class="form-control" name="check-in_date" required>
          <label>Giorno di partenza:*</label>
          <input type="date" class="form-control" name="check-out_date" required>
          <label>Vuoi la colazione?*</label>
          <p><input type="radio" class="form-check-label" value="richiesta" name="breakfast" checked required>Si</p>
          <p><input type="radio" class="form-check-label" value="non richiesta" name="breakfast" required>No</p>
          <label>Porti un cane?*</label>
          <p><input type="radio" class="form-check-label" value="sara' presente" name="dog" checked required>Si</p>
          <p><input type="radio" class="form-check-label" value="non sara' presente" name="dog" required>No</p>
          <label>Hai necessità extra? (optional)</label>
          <textarea cols="30" rows="10" class="form-control" style="resize: none;" name="customer_extra"></textarea>
        </form>
        <br>
        <p class="fs-4 fw-bold text-center">Una volta inviata la prenotazione, 
          riceverai dai noi una mail non appena l'avremo confermata.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="submit" class="btn btn-brown" name="reservation" form="reservation_form">Invia Prenotazione</button>
      </div>
    </div>
  </div>
</div>

<section id="rooms" class="bg-rooms p-5 text-dark">
  <div class="container text-center">
    <div class="row align-items-center border-brown border-brown-top py-4">
      <div class="col-md">
      <img src="../assets/img/single.png" alt="" class="w-25" role="button" data-bs-toggle="modal" data-bs-target="#single_room">
      </div>
      <div class="col-md">
        <h2>Stanza Singola</h2>
      </div>
      <div class="col-md">
        <h2>da 110€ a 130€</h2>
      </div>
      <div class="col-md">
        <?php
          if (isset($_SESSION["userid"])) { ?>
            <button class="btn btn-brown btn-lg" data-bs-toggle="modal" data-bs-target="#reservation_popup">Prenota</button>
        <?php } else { ?>
          <button class="btn btn-brown btn-lg" data-bs-toggle="popover" data-bs-title="Attenzione!" data-bs-content="Devi eseguire il login per usare questa funzione.">Prenota</button>
        <?php } ?>
      </div>
    </div>
    <div class="row align-items-center border-brown py-4">
      <div class="col-md">
        <img src="../assets/img/double.png" alt="" class="w-25" role="button" data-bs-toggle="modal" data-bs-target="#double_room">
      </div>
      <div class="col-md">
        <h2>Stanza Doppia</h2>
      </div>
      <div class="col-md">
        <h2>da 120€ a 160€</h2>
      </div>
      <div class="col-md">
        <?php
          if (isset($_SESSION["userid"])) { ?>
            <button class="btn btn-brown btn-lg" data-bs-toggle="modal" data-bs-target="#reservation_popup">Prenota</button>
        <?php } else { ?>
          <button class="btn btn-brown btn-lg" data-bs-toggle="popover" data-bs-title="Attenzione!" data-bs-content="Devi eseguire il login per usare questa funzione.">Prenota</button>
        <?php } ?>
      </div>
    </div>
    <div class="row align-items-center border-brown py-4">
      <div class="col-md">
        <img src="../assets/img/home.png" alt="" class="w-25" role="button" data-bs-toggle="modal" data-bs-target="#apartment">
      </div>
      <div class="col-md">
        <h2>Appartamento</h2>
      </div>
      <div class="col-md">
        <h2>280€</h2>
      </div>
      <div class="col-md">
        <?php
          if (isset($_SESSION["userid"])) { ?>
            <button class="btn btn-brown btn-lg" data-bs-toggle="modal" data-bs-target="#reservation_popup">Prenota</button>
        <?php } else { ?>
          <button class="btn btn-brown btn-lg" data-bs-toggle="popover" data-bs-title="Attenzione!" data-bs-content="Devi eseguire il login per usare questa funzione.">Prenota</button>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<!-- Where / Map Section -->

<section id="where" class="bg-map text-light p-5">
  <div class="container align-items-center">
    <div class="row">
      <div class="col-md lead text-center text-md-start">
          <p>Agriturismo Al Robale</p>
          <p>Via Cabinetti, 02</p>
          <p>Almenno San Bartolomeo 24030 (BG)</p>
      </div>
      <div class="col-md">
        <div id='map'></div>
      </div>
    </div>
  </div>
</section>

<?php include_once "modules/footer.php" ?>