---
title: "Démarrer un script python au moment du boot d'un Raspberry Pi  4 avec un service systemd"
date: "2024-02-07 17:00:00"
lastupdate: "2024-02-08 18:42:44"
banner: "/proxyPhotos?code=/blog/bob-ross/65c4d9e70ec91/50.png"
slug: "demarrer-un-script-python-au-moment-du-boot-d-un-raspberry-pi-4-avec-un-service-systemd"
description: " 
La méthode sytemd est le aujourd'hui le nouveau standard pour la gestion des services et pour l'exécution automatique de scripts
"
---
<style type="text/css">
    pre {
        display: flex;
        color: #4769A1;
        background-color: #DFEDFA;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow-x: auto;
        font-family: monospace;
    }

    code {
        line-height: normal;
    }
</style>
<table>
    <tbody>
        <tr>
            <td><img alt="Bob Ross" src="/proxyPhotos?code=/blog/bob-ross/65c4cde2be4c4/50.png" /></td>
        </tr>
    </tbody>
</table>

<p>La méthode systemd permet un contrôle avancé du système. Elle peut être personnalisée pour garantir que le script ne démarre que lorsque certaines conditions sont remplies. Le script Python est exécuté ici dans un service de lancement automatique au démarrage sur le RPI.</p><br />
    <p><strong>1 - Le Script Python</strong></p>
    <p>Le script open-url.py ouvre l'URL de notre club de robotique dans Firefox.<br />
    --> Mettre à jour la base de données des paquets &nbsp;
    </p>

<pre>
<code>sudo apt update
</code>
</pre>

<p>--> Mettre à jour le système</p>

<pre>
<code>sudo apt full-upgrade
</code>
</pre>

<p>--> Créer un dossier <span style="color:#4769A1;">Scripts</span> pour sauvegarder le script Python &nbsp;
</p>

<pre>
<code>sudo mkdir /home/raspi/Scripts
</code>
</pre>

<p>--> Créer le fichier <em><span style="color: #4769A1">open_url.py</span></em> pour l'éditer avec Geany
</p>

<pre>
<code>sudo geany
</code>
</pre>

<p>--> Entrer le code dans Geany</p>

<pre>
<code>#!/usr/bin/python3
# Définit le chemin de l'interpréteur Python à utiliser pour exécuter le script

import subprocess
# Importe le module subprocess, qui permet d'exécuter des commandes système depuis Python

url = "https://werobot.fr"
# Définit une variable contenant l'URL de la page web à ouvrir

firefox_command = ["firefox", url]
# Crée une liste contenant la commande à exécuter pour ouvrir Firefox avec l'URL spécifiée

subprocess.run(firefox_command)
# Exécute la commande spécifiée dans firefox_command en utilisant le module subprocess
# Cela lance Firefox et ouvre la page web spécifiée
</code>
</pre>

<p>--> Enregistrez-le dans le dossier <em><span style="color: #4769A1">/home/raspi/Scripts</span></em> avec le nom
    <em><span style="color: #4769A1">open-url.py</span></em></p><br />

<p><strong>2 - Le Service systemd</strong></p>

<p>Emplacement des fichiers de service dans l'arborescence des répertoires :<br />
    --> Les services fournis dans les paquets téléchargés vont dans <span
        style="color:#4769A1;"><em>usr/lib/systemd</em></span><br />
    --> Les services créés par l'utilisateur vont dans <span
        style="color:#4769A1;">etc/systemd/system</span> (comme le script python <span
        style="color:#4769A1;">open-url.py</span>)</p>

<p>--> Créer le fichier de service <em><span style="color: #4769A1">open-url.service</span></em> avec Geany
    pour automatiser le script <span style="color:#4769A1;">open-url py</span> au démarrage</p>

<pre>
<code>sudo geany
</code>
</pre>

<p>--> Entrer le code dans Geany</p>

<pre>
<code>[Unit]
# Description du service
Description=Ouvre une URL dans le navigateur par défaut

# Ce service sera démarré après le démarrage complet du système
After=multi-user.target

# Ce service nécessite une connexion réseau disponible
Wants=network-online.target

[Service]
# Le service est exécuté lorsque toutes les tâches système sont terminées et qu'il est devenu inactif
Type=idle

# Commande à exécuter pour démarrer le service
ExecStart=/home/frapoi/Scripts/open-url.py

# Redémarrer le service en cas d'échec
Restart=on-failure

# Exécuter le service en tant qu'utilisateur 'frapoi'
User=frapoi

# Définir la variable d'environnement DISPLAY pour indiquer quel écran utiliser
Environment=DISPLAY=:0

# Rediriger la sortie standard vers un fichier journal
StandardOutput=/var/log/open-url.log

# Rediriger les erreurs vers un fichier journal
StandardError=/var/log/open-url.error.log

[Install]
# Activer ce service au démarrage du système
WantedBy=multi-user.target
</code>
</pre>

<p>--> Enregistrez-le dans le dossier <em><span style="color: #4769A1">/etc/systemd/system/</span></em> avec le nom
    <em><span style="color: #4769A1">open-url.service</span></em></p>

<p>--> Activer le fichier <em><span style="color: #4769A1">open-url.service</span></em></p>

<pre>
<code>sudo systemctl enable open-url.service
</code>
</pre>

<p>--> Redémarrez le RPI</p>

<pre>
<code>sudo reboot
</code>
</pre>

<p>La page d'accueil de notre site <a href="http://werobot.fr" target="_blank"><em><span style="color:#4769A1;">http://werobot.fr</span></em></a> s'ouvre dans Firefox.<br />
    Le script peut être adapté pour automatiser le lancement de n'importe quels scripts Python et fournit le principe de base.</p>

    