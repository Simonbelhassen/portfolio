<?php
  $now = time();
  $birthDate = strtotime('2002-06-26');
  $age  = dateDiff($now, $birthDate);
?>

<section id="a-propos-de-moi">
  <h1 class="title">à propos de moi</h1>
  <hr class="separator">
    <article class="paragraph">
          <p>J'ai <?= $age ?> ans, je suis originaire de Sarcelles, dans le département du Val-d'Oise en région Île-de-France. 
           <br><br>
           Passionné par le développement de site web, j’en ai appris les bases il y a plusieurs années, bases que j’ai approfondi durant mon BTS Services Informatiques aux Organisations (SIO) option SLAM.
           <br><br>
           Durant mon BTS SIO option SLAM, j'ai dûe réaliser des projets de plus en plus complexes grâce a mes connaissances.
           <br><br>
           Je désire par la suite poursuivre mes études en bachelor d'informatique afin de devenir devellopeur full stack.
           <br><br>
           C'est en ayant alimenté mon envie naturelle de connaissances en la matière que j'ai décidé d'en faire mon métier.
           <br><br>
          </p>
         <a href="#formation"><button type="button" name="btnNext" class="btnNext">Découvrir mes formations</button></a>
        </article>
        <article class="paragraph">
        <p>
           J'ai intégré une filière technologique au lycée et j'ai obtenu mon baccalauréat STMG metion bien
           avec option Systèmes d'Information et de Gestion (SIG) 
           <br><br>
           J'ai ensuite souhaité poursuivre à la faculté d'Orsay en licence Math-Physique et Informatique afin
           d'obtenir des connaissances plus théoriques en informatique.
           <br><br>
           Les cours magistraux ne m'ayant pas réussi, j'ai donc décidé de quitter l'université Paris-Saclay
           à la fin du second semestre.
           <br><br>
           J'ai pu intégrer une formation en BTS SIO option
           Solutions Logicielles et Applications Métiers (SLAM) que je prépare
           actuellement au Lycée Parc de Vilgénis à Massy.
           <br><br><br><br><br>
         </p>
         <a href="#competences"><button type="button" name="btnNext" class="btnNext">Découvrir mes compétences</button></a>
     </article>

  <h1 class="center">- Mes qualités - </h1>
    <br>

    <div class="qualites">
        <div class="content">
          <h2>Aidant</h2>
          <br><br>
          <img src="/public/img/help.svg" alt="Help">
        </div>

        <div class="content">
          <h2>Autonome</h2>
          <br><br>
          <img src="/public/img/route.svg" alt="Help">
        </div>

        <div class="content">
          <h2>Curieux</h2>
          <br><br>
          <img src="/public/img/question.svg" alt="Help">
        </div>
    </div>
</section>
