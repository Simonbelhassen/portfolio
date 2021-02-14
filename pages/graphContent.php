<?php
  if(isset($_GET['page'])) {
    switch($_GET['page']) {
      case "profil":
        include("pages/gauche/cv.html");
        break;
      case "veilleJuridique":
        include("pages/gauche/veilleJuridique.html");
        break;
      case "presentation":
        include("pages/gauche/presentation-bts-sio.html");
        break;
    }
  }
?>
