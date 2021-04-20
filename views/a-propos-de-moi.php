<?php
  $now = time();
  $birthDate = strtotime('2000-02-03');
  $age  = dateDiff($now, $birthDate);
?>

<section id="a-propos-de-moi">
  <h1 class="title">à propos de moi</h1>
  <hr class="separator">
    <article class="paragraph">
         <p>J'ai <?= $age ?> ans, je suis originaire de la région Centre Val de Loire et j'habite
           actuellement en Ile-de-France au sein de la commune de La Forêt Le Roi.
           <br><br>
           Passionné par le fonctionnement des programmes informatiques, j’ai appris les bases
           du C++ et Python que j’ai approfondies de façon autonome depuis plusieurs années.
           J'ai réalisé des choses de plus en plus complexes en fonction de mes connaissances. Puis, j'ai
           poursuivi mes études en BTS Services Informatiques aux Organisations (SIO).
           <br><br>

         C'est en ayant alimenté mon envie naturelle de connaissances en matière de programmation
         que j'ai décidé d'en faire mon métier.

         <br>

         En dehors de ma passion pour l'informatique,
         je joue à un jeu de cartes à collectionner qui s'appelle Yu-Gi-Oh.

         <br>
           Ce jeu de cartes possède énormément de règles assez complexes à appréhender mais parce qu'il existe
           une réelle difficulté dans ce jeu, je m'y suis pris de passion.
         </p>
         <a href="#formation"><button type="button" name="btnNext" class="btnNext">Découvrir mes formations</button></a>

    </article>

    <article class="paragraph">
         <p>
           J'ai intégré une filière générale au lycée et j'ai obtenu mon baccalauréat (qui bénéficiait d'un côté plus informatique)
           avec option Informatique et Sciences du Numérique (ISN) en me spécialisant en sciences de l'ingénieur.

           <br><br>

           J'ai ensuite souhaité poursuivre à la faculté d'Orsay en licence Math-Physique et Informatique afin
           d'obtenir des connaissances plus théoriques en informatique.
           Les cours magistraux ne m'ayant pas réussi, j'ai donc décidé de quitter l'université Paris-Saclay
           à la fin du second semestre.
           J'ai pu intégrer une formation en BTS SIO option
           Solutions Logicielles et Applications Métiers (SLAM) que je prépare
           actuellement au Lycée Parc de Vilgénis à Massy.
         </p>
         <a href="#competences"><button type="button" name="btnNext" class="btnNext">Découvrir mes compétences</button></a>
    </article>

    <h1 class="center">- Mes qualités -</h1>

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
