---
title: "To start a Python script at boot time on a Raspberry Pi 4 using a systemd service"
date: "2024-02-07 15:00:00"
lastupdate: "2024-02-08 18:43:04"
banner: "/proxyPhotos?code=/blog/bob-ross/65c4d9e70ec91/50.png"
slug: "to-start-a-python-script-at-boot-time-on-a-raspberry-pi-4-using-a-systemd-service"
description: " 
The systemd method is now the new standard for managing services and automatically executing scripts
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
        <td><img alt="Bob Ross" src="/proxyPhotos?code=/blog/bob-ross/65c4cde2be4c4/50.png" /></td>
    </tr>
</table>

<p>The systemd method allows advanced control of the system. It can be customized to ensure that the script only starts
    when certain conditions are met. The Python script is executed here within an automated launch service at the boot
    of the RPI.<br /><br />
<p><strong>1 - The Python Script</strong></p>
    The open-url.py script opens the URL of our robotics club in Firefox.<br />
    --> Update the package database &nbsp;
</p>

<pre>
<code>sudo apt update
</code>
</pre>

<p>--> Update the system</p>

<pre>
<code>sudo apt full-upgrade
</code>
</pre>

<p>--> Create a folder <span style="color:#4769A1;">Scripts</span> to save the Python script &nbsp;
</p>

<pre>
<code>sudo mkdir /home/raspi/Scripts
</code>
</pre>

<p>--> Create the file <em><span style="color: #4769A1">open_url.py</span></em> for editing with Geany
</p>

<pre>
<code>sudo geany
</code>
</pre>

<p>--> Enter the code in Geany</p>

<pre>
<code>#!/usr/bin/python3
# Defines the path of the Python interpreter to use for executing the script

import subprocess
# Imports the subprocess module, which allows executing system commands from Python

url = &quot;https://werobot.fr&quot;
# Defines a variable containing the URL of the web page to open

firefox_command = [&quot;firefox&quot;, url]
# Creates a list containing the command to execute to open Firefox with the specified URL

subprocess.run(firefox_command)
# Executes the command specified in firefox_command using the subprocess module
# This launches Firefox and opens the specified web page
</code>
</pre>

<p>--> Save it in the folder <em><span style="color: #4769A1">/home/raspi/Scripts</span></em> with the name
    <em><span style="color: #4769A1">open-url.py</span></em></p><br />

<p><strong>2 - The systemd Service</strong></p>

<p>Location of service files in the directory tree:<br />
    --> Services provided in downloaded packages go into <span
        style="color:#4769A1;"><em>usr/lib/systemd</em></span><br />
    --> User-created services go into <span
        style="color:#4769A1;">etc/systemd/system</span> (such as the python script <span
        style="color:#4769A1;">open-url.py</span>)</p>

<p>--> Create the service file <em><span style="color: #4769A1">open-url.service</span></em> with Geany
    for automating the <span style="color:#4769A1;">open-ulr py</span> script at startup</p>

<pre>
<code>sudo geany
</code>
</pre>

<p>--> Enter the code in Geany</p>

<pre>
<code>[Unit]
# Description of the service
Description=Opens a URL in the default browser

# This service will be started after the system is completely booted
After=multi-user.target

# This service requires network connection to be available
Wants=network-online.target

[Service]
# The service is executed when all system tasks are complete and it has become idle
Type=idle

# Command to execute to start the service
ExecStart=/home/frapoi/Scripts/open-url.py

# Restart the service in case of failure
Restart=on-failure

# Run the service as user 'frapoi'
User=frapoi

# Set the DISPLAY environment variable to indicate which screen to use
Environment=DISPLAY=:0

# Redirect standard output to a log file
StandardOutput=/var/log/open-url.log

# Redirect errors to a log file
StandardError=/var/log/open-url.error.log

[Install]
# Enable this service at system startup
WantedBy=multi-user.target
</code>
</pre>

<p>--> Save it in the folder <em><span style="color: #4769A1">/etc/systemd/system/</span></em> with the name
    <em><span style="color: #4769A1">open-url.service</span></em></p>

<p>--> Enable the file <em><span style="color: #4769A1">open-url.service</span></em></p>

<pre>
<code>sudo systemctl enable open-url.service
</code>
</pre>

<p>--> Reboot the RPI</p>

<pre>
<code>sudo reboot
</code>
</pre>

<p>The homepage of our site <a href="http://werobot.fr" target="_blank"><em><span style="color:#4769A1;">http://werobot.fr</span></em></a> opens in Firefox.<br />
The script can be adapted to automate the launch of any Python scripts and provides the basic principle.</p>
    