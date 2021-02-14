<?php include("public/head.html"); ?>

<div class="container">

  <div class="loader" id="loader" style="display:none;">

  </div>

  <div class="menu" id="hamburger" onclick="switchMenu()">
    <img src="public/img/menu/menu.png" alt="Hamburger menu">
  </div>
  <div class="gauche" id="gauche">
    <?php include("public/menu.html"); ?>
    <?php include("pages/graphContent.php"); ?>
    <?php include("pages/footer.html") ?>
    <div class="fullScreen" onclick="fullScreen()" id="fS">
      <img src="public/img/menu/run.png" alt="Afficher le site au format développeur">
    </div>
  </div>

  <div class="droite" itemscope itemtype="https://schema.org/Person" id="droite"
  style="position: absolute;left: 100%;">
    <?php include("pages/textContent.php") ?>
  </div>
</div>

<?php include("public/footer.html"); ?>
