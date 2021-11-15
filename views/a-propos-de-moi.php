<?php
  $now = time();
  $birthDate = strtotime('2002-06-26');
  $age  = dateDiff($now, $birthDate);
?>

<section id="a-propos-de-moi">
<br><br>
<h1 class="title">À propos de moi</h1>
  <hr class="separator">
      <article class="paragraph">
          <p>J'ai <?= $age ?> ans, je suis originaire de Sarcelles, 
           dans le département du Val-d'Oise en région Île-de-France. 
           <br><br>
           Passionné par le développement de site web, j’en ai appris les bases il y a plusieurs années, 
           bases que je compte consolider durant mes différentes années d'études et de formation.
           <br><br>
           J'ai intégré une filière technologique au lycée ORT de Villiers Le Bel 
           et j'ai obtenu mon baccalauréat STMG metion bien
           avec comme option Systèmes d'Information et de Gestion (SIG) 
           <br><br>
           Durant mon BTS SIO option SLAM, j'ai dûe réaliser des projets de plus en plus complexes grâce a mes connaissances
           et j'ai eu l'occasion d'apprendre de plus en plus de language.
           <br><br><br>
          </p>
          <a href="#formation"><button type="button" name="btnNext" class="btnNext">Découvrir mes formations</button></a>
       </article>
     <article class="paragraph">
        <p>
          C'est en ayant alimenté mon envie naturelle de connaissances en la matière que j'ai décidé d'en faire mon métier.
           <br><br>
           Durant mon BTS SIO option SLAM, j'ai dûe réaliser des projets de plus en plus complexes grâce a mes connaissances
           et j'ai eu l'occasion d'apprendre de plus en plus de language.
           <br><br>
           J'ai ensuite poursuivi une formation en BTS SIO option
           Solutions Logicielles et Applications Métiers (SLAM) 
           que je prépare actuellement au Lycée ORT Daniel Mayer a Montreuil afin
           d'obtenir des connaissances plus théoriques en informatique.
           <br><br>
           Je désire par la suite poursuivre mes études en bachelor 
           d'informatique afin de devenir dévellopeur full stack.
           <br><br>
         </p> 
         <a href="#competences"><button type="button" name="btnNext" class="btnNext">Découvrir mes compétences</button></a>
     </article>
     <br><br><br>
</section>
