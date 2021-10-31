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
           <br><br>
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
  <!--<h1 class="center">- Mes qualités - </h1>
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
          <img src="https://lh3.googleusercontent.com/proxy/WSZt9gfJ5-Ug6NLbc3U97uvOaLnaunXPs6F-VusT75P3mBmblHEog6nxCQS9eX2vUPFR09OgVFhyDM0fjxagsCsPHXvmbOv-NsgOzDFQlQ" alt="L&amp;#39;autoformation : autonomie et autonomisation" jsname="HiaYvf" jsaction="load:XAeZkd;" class="n3VNCb" data-noaft="1" style="width: 250px; height: 250px; border-radius:inherit; margin-block-start: -25px;">
        </div>

        <div class="content">
          <h2>Curieux</h2>
          <br><br>
          <img src="https://medias.cerveauetpsycho.fr/api/v1/images/view/5dd3c4eb3e454601467e9e26/wide_1300/image.jpg" alt="https://medias.cerveauetpsycho.fr/api/v1/images/view/5dd3c4eb3e454601467e9e26/wide_1300/image.jpg" jsname="HiaYvf" jsaction="load:XAeZkd;" class="n3VNCb" data-noaft="1" style="width: 250px; height: 250px; border-radius:inherit; margin-block-start: -25px;">
        </div>
    </div>-->
</section>
