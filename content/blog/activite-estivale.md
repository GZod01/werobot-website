---
title: "Activité estivale"
date: "2019-08-05 23:08:46"
lastupdate: "2019-08-05 23:08:46"
banner: "/proxyPhotos?code=/blog/bob-ross/5d48815ab4448/50.jpg"
slug: "activite-estivale"
description: " 
Mohamed et Matthieu ont été extrêmement motivés et actifs pendant le mois de juillet.
"
---
Mohamed et Matthieu ont été extrêmement motivés et actifs pendant le mois de juillet.
Notre objectif était la conception d'un robot autonome pour participer aux Trophées de Robotique 2019-2020.
Nous souhaitions concevoir un robot capable de se repérer sur la table de jeu et de se rendre à un point précis. De plus nous souhaitions que ce robot soit modulable de façon à pouvoir simplement lui ajouter les fonctionnalité qui le rendront utile à la compétition dont ne nous connaissons pas encore les régles.
Après un premier brouillon de modélisation, nous avons imprimé les pièces nécessaires à la fabrication de la base mécanique puis assemblé le robot :

<div class="image-mosaic">
  <img src="/proxyPhotos?code=/blog/bob-ross/5d48816023b1b/50.jpg" />
  <img src="/proxyPhotos?code=/blog/bob-ross/5d48810450b2e/50.jpg" />
  <img src="/proxyPhotos?code=/blog/bob-ross/5d48810172895/50.jpg" />
  <img src="/proxyPhotos?code=/blog/bob-ross/5d4881242e9ee/50.jpg" />
  <img src="/proxyPhotos?code=/blog/bob-ross/5d48814559d8d/50.jpg" />
  <img src="/proxyPhotos?code=/blog/bob-ross/5d4881315d0df/50.jpg" />
</div>

Il restait alors à s'atteler à la programmation :

1. Comprendre comment récupérer les informations provenant des encodeurs.
2. Réussir à en déduire les coordonnées du robot.
3. Utiliser ces informations pour donner les ordres adequats aux moteurs pour atteindre un objectif fixé à l'avance.

La partie théorique a été faite en commun :

<div class="flex flex-wrap">
  <img src="/proxyPhotos?code=/blog/bob-ross/5d48815ab4448/50.jpg" />
  <img src="/proxyPhotos?code=/blog/bob-ross/5d48b59b6747e/50.jpg" />
</div>
<div class="flex flex-wrap mt-1"> 
  <img src="/proxyPhotos?code=/blog/bob-ross/5d48815e32ff4/50.jpg" style="width: auto !important; height: 60vh;" />
  <img src="/proxyPhotos?code=/blog/bob-ross/5d488162e9f8f/50.jpg" style="width: auto !important; height: 60vh;" />
</div>


A l'issue de cette ultime séance de début juillet, Mohamed et Matthieu ont emmené le prototype chez et ont continué à travailler dessus.

Voici leurs essais :

1. Un ordre sous forme de coordonnées est donné au robot et celui-ci s'y rend.

<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/1IQdwylobmM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

2. Un chemin est donné au robot sous forme d'une liste de coordonnées et il s'y rend successivement.

<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Fr7YTmzHqTs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

3. Connaissant la position des obstacles, un chemin a été pré-déterminé et fourni au robot.
Il le parcourt entièrement : aller et retour.
On constate dans la vidéo qu'il est parfois nécessaire de pousser le robot car le parquet glissant et non plan l'empêche d'avancer.
On peut remarquer que, malgré ces perturbations, le robot sait toujours où il est et où il va.

<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/qbwBA8CfAfs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

Forts de leur succès, ils ont commencé à réfléchir à la suite. Mohamed a programmé une ébauche de programme permettant à un robot de déterminer lui-même son chemin pour se rendre d'un point à un autre en connaissant les obstacles existants sur le parcours.

<img src="/proxyPhotos?code=/blog/bob-ross/5d4881644bb9c/50.jpg">


Puis, lors de notre dernière rencontre début août, nous avons procédé à un brainstorming pour le design final du robot que les jeunes ont modélisé.

(Merci d'être patients pour le chargement ci-dessous, c'est probablement un peu long mais ça vaut le coup d'oeil !)

<iframe src="https://myhub.autodesk360.com/ue2afab22/shares/public/SH56a43QTfd62c1cd968c260ba012798be9f?mode=embed" width="800" height="600" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"  frameborder="0"></iframe>

C'est un travail époustouflant qu'ils ont accompli en assez peu de temps.
    