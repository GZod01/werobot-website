---
title: "Mount a Synology NAS shared folder to a Raspberry PI 4 folder with NFS"
date: "2024-01-18 10:00:00"
lastupdate: "2024-02-08 15:05:35"
banner: "/proxyPhotos?code=/blog/bob-ross/65b04b1d03f30/50.png"
slug: "mount-a-synology-nas-shared-folder-to-a-raspberry-pi-4-folder-with-nfs"
description: " 
The shared folder is synchronized with Google Drive using the Cloud Sync application of the Synology NAS and thus allows Google Drive to be synchronized with the RPI
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

<p><strong>1. Assign a static IP address to the NAS and the router (use static DHCP leases with Livebox)</strong></p>

<ul>
    <li><em><span style="color: #4769A1">xxx.xxx.xxx.xxx </span></em><span>(NAS)</span></li>
    <li><em><span style="color: #4769A1">xxx.xxx.xxx.yyy </span></em><span>(Wired RPI)</span></li>
    <li><em><span style="color: #4769A1">xxx.xxx.xxx.zzz </span></em><span>(Wireless RPI)</span></li>
</ul>

<p><strong>2. On the Synology NAS host</strong><br />
    --> Create the shared folder <em><span style="color: #4769A1">FOLDER</span></em> on the NAS<br />
    --> Sync the <em><span style="color: #4769A1">FOLDER</span></em> folder with a folder on Google Drive using Cloud Sync<br />
    --> Set NFS permissions on the shared folder for the RPI with read/write access for wired and wireless RPI addresses<br />
    <br />
    <strong>3. On the client RPI</strong><br />
    In the example, user = <em><span style="color: #4769A1">raspi</span></em><br />
    --> Update the package database
</p>

<pre>
<code>sudo apt update
</code>
</pre>

<p>--> Upgrade the system</p>

<pre>
<code>sudo apt full-upgrade
</code>
</pre>

<p>--> Create a <span style="color: #4769A1">folder</span> directory for mounting</p>

<pre>
<code>sudo mkdir /home/raspi/folder
</code>
</pre>

<p>--> Granting all rights on the mounting <em><span style="color: #4769A1">folder</span></em> and the files of the folder.</p>

<pre>
<code>sudo chmod -R 777 /home/raspi/dossier
sudo chown -R raspi:raspi /home/raspi/dossier
</code>
</pre>

<p>--> Create a <em><span style="color: #4769A1">Scripts</span></em> folder for the mounting script</p>

<pre>
<code>sudo mkdir /home/raspi/Scripts
</code>
</pre>

<p>--> Create the <em><span style="color: #4769A1">mount-folder.sh</span></em> file for mounting with Geany
</p>

<pre>
<code>sudo geany
</code>
</pre>

<p>--> Enter the code into Geany<br />
    In the mount, the <em><span style="color: #4769A1">-t </span></em> (type) option should be followed by the used protocol, here <em><span style="color: #4769A1">nfs</span></em><br/>
    Replace <em><span style="color: #4769A1">xxx.xxx.xxx.xxx</span></em> with the correct value
</p>

<pre>
<code>#/bin/bash
sudo mount -t nfs xxx.xxx.xxx.xxx:/volume1/FOLDER /home/raspi/folder
</code>
</pre>

<p>--> Save in the <em><span style="color: #4769A1">/home/raspi/Scripts</span></em> directory with the name <em><span style="color: #4769A1">mount-folder.sh</span></em>
</p>

<p>--> Create the service file <em><span style="color: #4769A1">mount-folder.service</span></em> for mounting with Geany for startup automation
</p>

<pre>
<code>sudo geany
</code>
</pre>

<p>--> Enter the code into Geany</p>

<pre>
<code>[Unit]
# Description of service: Mount NAS folder
Description=Mount NAS folder

# This service will start after the network is available
After=network-online.target

[Service]
# Command to execute to start the service: execute the bash script to mount the NAS folder
ExecStart=/bin/bash /home/frapoi/Scripts/mount-folder.sh

# Working directory to execute the command
WorkingDirectory=/home

# Restart the service on failure
Restart=on-failure

# Run the service as user 'frapoi'
User=frapoi

[Install]
# Enable this service on system startup
WantedBy=multi-user.target

</code>
</pre>

<p>--> Save in the <em><span style="color: #4769A1">/etc/systemd/system/</span></em> directory with the name <em><span style="color: #4769A1">mount-folder.service</span></em>
</p>

<p>--> Enable the <em><span style="color: #4769A1">mount-folder.service</span></em> file</p>

<pre>
<code>sudo systemctl enable mount-folder.service
</code>
</pre>

<p>--> Reboot the RPI

<pre>
<code>sudo reboot
</code>
</pre>

The mounted folder appears on the RPI desktop.<br/>
The script can be adapted depending on the NAS used and provides the basic principle.
</p>

    