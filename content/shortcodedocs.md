---
title: Documentation Shortcode
---
Cet article concerne principalement les éditeurs du blog.

Ce site est construit avec l'outil [hugo](https://gohugo.io), il est donc possible d'intégrer des pseudo-élements qui intégreront des fonctionnalités complètes au moment de la construction du site (quand vous appuyez sur le bouton "Envoyer les modifications").

Voici une liste des shortcodes disponible pour le site WeRobot.FR:
- helloasso\_fgc2025\_compteur: afficher le compteur de campagne helloasso pour FGC2025
- youtube: utilitaire pour les vidéos youtube, les paramètres disponibles:
    - code : le code identifiant de la vidéo (souvent à la fin de l'url sous cette forme: youtube.com/watch?v=&lt;le code&gt;)
    - src : le lien complet vers la vidéo (récupérera le code automatiquement)
    - iframemode : si vous définissez ce paramètre le youtube s'affichera de manière traditionnelle, dans un élement dans la page sur lequel on peut cliquer pour regarder la vidéo directement dans la page (mais charge des cookies de youtube), sinon si vous ne définissez pas ce paramètre, le youtube s'affichera sous forme de lien vers la vidéo comportant l'image de la miniature. 

## Comment utiliser les shortcodes ? 
### En édition depuis la page admin (recommendé, le mode le plus courant):
```
{{%nom_du_shortcode parametre_avec_valeur="valeur_paramètre" parametre_defini%}}
```
Dans cet exemple:
- `nom_du_shortcode` représente le nom de la shortcode
- `paramètre_avec_valeur` représente la manière d'écrire des paramètres avec valeur (par exemple src="lien", etc.)
- `paramètre_defini` représente la manière d'écrire des paramètres défini ou non (écrivez le nom du paramètre si vous voulez définir le paramètre, ou n'écrivez pas le paramètre si vous ne voulez pas le définir)

### En édition directe (édition directe d'un fichier sur le serveur)
```
{{&lt;nom_du_shortcode parametre_avec_valeur="valeur_paramètre" parametre_defini&gt;}}
```
Dans cet exemple:
- `nom_du_shortcode` représente le nom de la shortcode
- `paramètre_avec_valeur` représente la manière d'écrire des paramètres avec valeur (par exemple src="lien", etc.)
- `paramètre_defini` représente la manière d'écrire des paramètres défini ou non (écrivez le nom du paramètre si vous voulez définir le paramètre, ou n'écrivez pas le paramètre si vous ne voulez pas le définir)
