---
title: "FTC 2024 -2025 : an omnidirectional rolling base"
date: "2024-10-13T15:52:17+02:00"
lastmod: "2024-10-14T12:08:29+02:00"
lastupdate: "2024-10-14T12:08:29+02:00"
author: "coach.francois"
authors: ["coach.francois"]
facebook_author: "false"
facebook_site: "false"
tags: [""]
categories: [""]
keywords: [""]
description: "Choosing a rolling base with Mecanum wheels "
baneer: "https://werobot.fr/posts/macanum2.jpg"
banner: "https://werobot.fr/posts/macanum2.jpg"
draft: false
---
## Choosing a rolling base with Mecanum wheels

After analyzing the rules of the “Into The Deep” game, Team WeRobot chose a base with Mecanum wheels, enabling the robot to move smoothly in all directions. The small space around the SUBMERSIBLE ZONE and the precision required for depositing SAMPLES or attaching SPECIMENS call for a robot that is precise in its movements. The Software and Hardware divisions get to work straight away.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
    <table>
        <tr>
            <td><img src="https://werobot.fr/posts/macanum 01.jpg" alt=""> <figcaption>Left wheel</figcaption></td>
            <td><img src="https://werobot.fr/posts/macanum 00.jpg" alt=""> <figcaption>Right wheel</figcaption></td>
	</tr>
    </table>
</div>
</center>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/macanum1.jpg" alt="">
</div>
</center>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/macanum2.jpg" alt="">
</div>
</center>
<br><br>

After 4 hours of investment, the Mecanum basic prototype is ready and a draft Java program will be tested next week.

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/macanum3.jpg" alt="">
</div>
</center>
<br>

## Mecanum Wheel Setup and Behavior

Mecanum wheels, when properly set up on a drivetrain, allow for omni-directional movement. Each Mecanum Wheel Set (REV-45-1655) comes with a two right (REV-41-1656) and two left (REV-41-1657) mecanum wheels. This is determined by the direction of the leading edge of the rollers. If the rollers point left it is a left wheel and if they point right it is a right wheel. 

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

Each side of the chassis needs one left and one right wheel. Mecanum Chassis also require four motors for operation.‌

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Macanum_position_roues.png">
</div>
</center>
<br><br>

To know if your Mecanum Wheels are properly configured look from the top down on the drivetrain. Following diagonal lines created from the angle of the rollers should form an "X" as shown above.‌

## Mecanum Wheel Drivetrain Behavior

Running all four wheels in the same direction at the same speed will result in a forward/backward movement, as the longitudinal force vectors add up but the transverse vectors cancel each other out, as shown below.‌

<br><br>
<center>
<div style="width: 100%; max-width: 700px;">
<img src="https://werobot.fr/posts/Mecanum_avant_arriere.png">
</div>
</center>
<br><br>












