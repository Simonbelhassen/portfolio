<?php
  if(isset($_GET['page'])) {
    switch($_GET['page']) {
      case "profil":
        include("pages/droite/cv.html");
        break;
      case "veilleJuridique":
        include("pages/droite/veilleJuridique.html");
        break;
      case "presentation":
        include("pages/droite/default.html");
        break;
      default:
        header('Location: index.php?page=profil');
        break;
    }
  } else {
    header('Location: index.php?page=profil');
  }
?>
