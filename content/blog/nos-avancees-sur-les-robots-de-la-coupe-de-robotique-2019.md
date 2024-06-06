---
title: "Nos avancées sur les robots de la coupe de robotique 2019"
date: "2019-02-14 15:06:21"
lastupdate: "2019-02-14 15:10:26"
banner: "/proxyPhotos?code=/blog/bob-ross/5c654b5f2ec4e/75.jpg"
slug: "nos-avancees-sur-les-robots-de-la-coupe-de-robotique-2019"
description: " 
La coupe de la robotique 2019 (tdr2019) arrive très vite et nous avançons lentement mais sûrement vers notre but, deux équipes travaillent sur deux buts distincts

"
---
La coupe de la robotique 2019 (tdr2019) arrive très vite et nous avançons lentement mais sûrement vers notre but, deux équipes travaillent sur deux buts distincts : faire le robot filoguidé et travailler sur le robot autonome.

En ce début d’année nous avons maintenant à disposition une réplique à la bonne échelle du plateau de jeu. Cependant nous n’avons que la moitié du plateau par manque de place mais cela nous convient tout de même. Comme dit dans un article précédent cela nous permet de vraiment réaliser la mécanique du jeu dans la vrai vie.

![](/proxyPhotos?code=/blog/bob-ross/5c654b6f91c08/50.jpg)

Montage du plateau en cours avec Mohamed et François...

Nous avons notamment avancé sur le bras articulé du robot principal qui sera en charge d’interagir avec le plateau de jeu et les palets. Comme montré dans cette vidéo tweeté nous utilisons plusieurs servo moteurs géré par un raspberry pi avec la librairie [python pypot](https://github.com/poppy-project/pypot). Les différents servo moteurs sont relié par des pièces designé par nos soin et imprimée en 3D. (Nous sommes en train de nous améliorer sur ce côté là)

<center>
<blockquote class="twitter-tweet"><p lang="fr" dir="ltr">Ah nous les atomes !! Enfin !<a href="https://twitter.com/hashtag/TDR2019?src=hash&amp;ref_src=twsrc%5Etfw">#TDR2019</a> <a href="https://twitter.com/hashtag/TR2019?src=hash&amp;ref_src=twsrc%5Etfw">#TR2019</a> <a href="https://twitter.com/hashtag/cdr2019?src=hash&amp;ref_src=twsrc%5Etfw">#cdr2019</a> <a href="https://twitter.com/hashtag/omgrobots?src=hash&amp;ref_src=twsrc%5Etfw">#omgrobots</a> <a href="https://t.co/QacuYBqCoA">pic.twitter.com/QacuYBqCoA</a></p>&mdash; We Robot (@werobot_FR) <a href="https://twitter.com/werobot_FR/status/1094730073725460481?ref_src=twsrc%5Etfw">February 10, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</center>

Cela nous permettra d’enregistrer des mouvements par avance et de réaliser tout une gamme de mouvement. Nous pensons tenir ici un système intéressant et nous allons continuer à tester ses capacités par la suite.

![](/proxyPhotos?code=/blog/bob-ross/5c56bace48ad9/50.jpg)
Le robot principal en place sur le plateau

En parallèle, l’autre équipe composée de Matthieu et d’Antoine travaille sur le robot autonome avec la réalisation d’un système de navigation inertiel. Nous avons conçu deux prototype et chacun travaille sur son propre système de son côté. Nous utilisons tous les deux un gyroscope et une souris optique monté sur une structure comprenant un arduino pour gérer les moteurs et un raspberry pi qui centralise l’information et contrôle le tout.

![](/proxyPhotos?code=/blog/bob-ross/5c654b5f2ec4e/50.jpg)
Contruction des deux prototype, de gauche à droite : Antoine, Matthieu

Nous avons aussi depuis longtemps terminé l’électron construit de façon très simple à partir de composants legos et qui sera activé par commande infrarouge depuis le robot autonome.

![](/proxyPhotos?code=/blog/bob-ross/5c654b3b6800c/50.jpg)


![](/proxyPhotos?code=/blog/bob-ross/5c654b29cc8ed/50.jpg)
    