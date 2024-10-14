---
title: "Mecanum Wheel Setup and Behavior"
date: "2024-10-13T06:24:45+02:00"
lastmod: "2024-10-14T16:20:18+02:00"
lastupdate: "2024-10-14T16:20:18+02:00"
author: "coach.francois"
authors: ["coach.francois"]
facebook_author: "false"
facebook_site: "false"
tags: [""]
categories: [""]
keywords: [""]
description: "Mecanum wheels allow omnidirectional movement of the robot's rolling base"
baneer: "https://werobot.fr/posts/Mecanum_blog.png"
banner: "https://werobot.fr/posts/Mecanum_blog.png"
draft: false
---
## Mecanum wheels allow omnidirectional movement of the robot's rolling base

Each set of Mecanum wheels ([REV-45-1655](https://www.revrobotics.com/rev-45-1655/)) is supplied with two right-hand Mecanum wheels ([REV-41-1656](https://www.revrobotics.com/content/docs/REV-41-1657-DR.pdf)) and two left-hand Mecanum wheels ([REV-41-1657](https://www.revrobotics.com/content/docs/REV-41-1656-DR.pdf)). This is determined by the direction of the leading edge of the rollers. If the rollers face left, it's a left-hand wheel, and if they face right, it's a right-hand wheel.

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

Each side of the chassis needs one left and one right wheel. Mecanum chassis also require four motors to operate.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Macanum_position_roues.png">
</div>
</center>
<br><br>

To check that your Mecanum wheels are correctly configured, look up and down the drive train. The diagonal lines created by the angle of the rollers should form an “X” as shown above.

## Mecanum wheel transmission behavior

Turning all four wheels in the same direction at the same speed results in forward/reverse motion, as longitudinal force vectors add up but transverse vectors cancel out, as shown in the diagram below.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Mecanum_avant_arriere.png">
</div>
</center>
<br><br>
When both wheels on one side move in one direction while the other side moves in the opposite direction, the result is rotation around the transmission's central vertical axis, as illustrated below.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Mecanum_rotations.png">
</div>
</center>
<br><br>

When the wheels on the right-hand mechanism turn in one direction, while the wheels on the left-hand mechanism turn in the opposite direction, the result is lateral movement.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Mecanum_gauche_droite.png">
</div>
</center>
<br><br>

Using the above concepts in tandem, by varying the motor power for each type of wheel, enables the powertrain to move along different angular vectors.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Mecanum_lateral_avant_arriere.png">
</div>
</center>



