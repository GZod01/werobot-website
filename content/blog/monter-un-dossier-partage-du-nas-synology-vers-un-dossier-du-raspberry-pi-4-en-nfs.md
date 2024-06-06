---
title: "Monter un dossier partagé du NAS Synology vers un dossier du Raspberry PI 4 en NFS"
date: "2024-01-18 01:00:00"
lastupdate: "2024-02-08 15:06:01"
banner: "/proxyPhotos?code=/blog/bob-ross/65b04b1d03f30/50.png"
slug: "monter-un-dossier-partage-du-nas-synology-vers-un-dossier-du-raspberry-pi-4-en-nfs"
description: " 
Le dossier partagé est synchronisé avec Google Drive grâce à l'application Cloud Sync du NAS Synology et permet ainsi de synchroniser Google Drive avec le RPI
"
---
<style>
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
    <tr>
        <td><img src="/proxyPhotos?code=/blog/bob-ross/65b2ca62c795d/50.png" alt="Bob Ross"></td>
    </tr>
</table>

<p><strong>1. Assigner une adresse IP statique au NAS et au routeur (utiliser des baux DHCP statiques avec Livebox)</strong></p>

<ul>
    <li><em><span style="color: #4769A1">xxx.xxx.xxx.xxx </span></em><span>(NAS)</span></li>
    <li><em><span style="color: #4769A1">xxx.xxx.xxx.yyy </span></em><span>(RPI câblé)</span></li>
    <li><em><span style="color: #4769A1">xxx.xxx.xxx.zzz </span></em><span>(RPI sans fil)</span></li>
</ul>

<p><strong>2. Sur l'hôte NAS Synology</strong><br />
    --> Créer le dossier partagé <em><span style="color: #4769A1">DOSSIER</span></em> sur le NAS<br />
    --> Synchroniser le dossier <em><span style="color: #4769A1">DOSSIER</span></em> avec un dossier sur Google Drive en utilisant Cloud Sync<br />
    --> Configurer les autorisations NFS sur le dossier partagé pour le RPI avec accès en lecture/écriture pour les adresses RPI câblées et sans fil<br />
    <strong>3. Sur le RPI client</strong><br />
    Dans l'exemple, utilisateur = <em><span style="color: #4769A1">raspi</span></em><br/>
    --> Mettre à jour la base de données des paquets</p>

<pre>
<code>sudo apt update
</code>
</pre>


<p>--> Mettre à jour le système</p>

<pre>
<code>sudo apt full-upgrade
</code>
</pre>

<p>--> Créer un dossier <span style="color: #4769A1">dossier</span> pour le montage</p>

<pre>
<code>sudo mkdir /home/raspi/dossier
</code>
</pre>

<p>--> Donner tous les droits sur le dossier de montage <em><span style="color: #4769A1">dossier</span></em> et les fichiers du dossier
</p>

<pre>
<code>sudo chmod 777 /home/raspi/dossier
sudo chown raspi:raspi /home/raspi/dossier
</code>
</pre>

<p>--> Créer un dossier <em><span style="color: #4769A1">Scripts</span></em> pour le script de montage</p>

<pre>
<code>sudo mkdir /home/raspi/Scripts
</code>
</pre>

<p>--> Créer le fichier <em><span style="color: #4769A1">montage-dossier.sh</span></em> pour le montage avec Geany
</p>

<pre>
<code>sudo geany
</code>
</pre>

<p>--> Entrer le code dans Geany<br />
    Dans le montage, l'option <em><span style="color: #4769A1">-t</span></em> (type) doit être suivie du protocole utilisé, ici <em><span style="color: #4769A1">nfs</span></em><br/>
    Remplacer <em><span style="color: #4769A1">xxx.xxx.xxx.xxx</span></em> par la valeur correcte
</p>

<pre>
<code>#/bin/bash
sudo mount -t nfs xxx.xxx.xxx.xxx:/volume1/DOSSIER /home/raspi/dossier
</code>
</pre>

<p>--> Enregistrer dans le dossier <em><span style="color: #4769A1">/home/raspi/Scripts</span></em> avec le nom <em><span style="color: #4769A1">montage-dossier.sh</span></em>
</p>

<p>--> Créer le fichier de service <em><span style="color: #4769A1">montage-dossier.service</span></em> pour le montage avec Geany pour l'automatisation du démarrage
</p>

<pre>
<code>sudo geany
</code>
</pre>

<p>--> Entrer le code dans Geany</p>

<pre>
<code>[Unit]
# Description du service : Monter le dossier NAS
Description=Monter le dossier NAS

# Ce service sera démarré après que le réseau soit disponible
After=network-online.target

[Service]
# Commande à exécuter pour démarrer le service : exécuter le script bash pour monter le dossier NAS
ExecStart=/bin/bash /home/frapoi/Scripts/montage-dossier.sh

# Répertoire de travail pour exécuter la commande
WorkingDirectory=/home

# Redémarrer le service en cas d'échec
Restart=on-failure

# Exécuter le service en tant qu'utilisateur 'frapoi'
User=frapoi

[Install]
# Activer ce service au démarrage du système
WantedBy=multi-user.target

</code>
</pre>

<p>--> Enregistrer dans le dossier <em><span style="color: #4769A1">/etc/systemd/system/</span></em> avec le nom <em><span style="color: #4769A1">montage-dossier.service</span></em>
</p>

<p>--> Activer le fichier <em><span style="color: #4769A1">montage-dossier.service</span></em></p>

<pre>
<code>sudo systemctl enable montage-dossier.service
</code>
</pre>

<p>--> Redémarrer le RPI

<pre>
<code>sudo reboot
</code>
</pre>

Le dossier monté apparaît sur le bureau du RPI.<br/>
Le script peut être adapté en fonction du NAS utilisé et donne le principe de base.</p>

    