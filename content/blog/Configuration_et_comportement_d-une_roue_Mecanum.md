---
title: "Configuration et comportement d'une roue Mecanum"
date: "2024-10-14T08:05:32+02:00"
lastmod: "2024-10-14T14:23:34+02:00"
lastupdate: "2024-10-14T14:23:34+02:00"
author: "coach.francois"
authors: ["coach.francois"]
facebook_author: "false"
facebook_site: "false"
tags: [""]
categories: [""]
keywords: [""]
description: "Les roues Mecanum permettent un mouvement omnidirectionnel de la base roulante du robot"
baneer: "false"
banner: "false"
draft: false
---
## Les roues Mecanum permettent un mouvement omnidirectionnel de la base roulante du robot

Chaque jeu de roues Mecanum ([REV-45-1655](https://www.revrobotics.com/rev-45-1655/)) est livré avec deux roues Mecanum droite ([REV-41-1656](https://www.revrobotics.com/content/docs/REV-41-1657-DR.pdf)) et deux roues Mecanum gauche ([REV-41-1657](https://www.revrobotics.com/content/docs/REV-41-1656-DR.pdf)). Ceci est déterminé par la direction du bord d'attaque des rouleaux. Si les rouleaux sont orientés vers la gauche, il s'agit d'une roue gauche et s'ils sont orientés vers la droite, il s'agit d'une roue droite.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
    <table>
        <tr>
            <td><img src="https://werobot.fr/posts/Mecanum_left.png"></td>
            <td><img src="https://werobot.fr/posts/Mecanum_right.png"></td>
	</tr>
    </table>
</div>
</center>
<br><br>

Chaque côté du châssis a besoin d'une roue gauche et d'une roue droite. Les châssis Mecanum ont également besoin de quatre moteurs pour fonctionner.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Macanum_position_roues.png">
</div>
</center>
<br><br>

Pour savoir si vos roues Mecanum sont correctement configurées, regardez de haut en bas sur la chaîne cinématique. Les lignes diagonales créées par l'angle des galets doivent former un « X » comme indiqué ci-dessus.

## Comportement de la transmission des roues Mecanum

Le fait de faire tourner les quatre roues dans la même direction à la même vitesse entraîne un mouvement avant/arrière, car les vecteurs de force longitudinaux s'additionnent mais les vecteurs transversaux s'annulent, comme le montre le schéma ci-dessous.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Mecanum_avant_arriere.png">
</div>
</center>
<br><br>

Lorsque les deux roues d'un côté se déplacent dans une direction tandis que l'autre côté se déplace dans la direction opposée, il en résulte une rotation autour de l'axe vertical central de la transmission, comme illustré ci-dessous.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Mecanum_rotations.png">
</div>
</center>
<br><br>

Lorsque les roues du mécanisme droit tournent dans une direction tandis que les roues du mécanisme gauche tournent dans la direction opposée, on obtient un mouvement latéral.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Mecanum_gauche_droite.png">
</div>
</center>
<br><br>

L'utilisation des concepts ci-dessus en tandem, en faisant varier la puissance du moteur pour chaque type de roue, permet au groupe motopropulseur de se déplacer selon des vecteurs angulaires différents.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Mecanum_lateral_avant_arriere.png">
</div>
</center>








