---
title: "Our work on our robotic cup 2019 robots"
date: "2019-02-15 14:10:36"
lastupdate: "2019-04-06 13:58:19"
banner: "/proxyPhotos?code=/blog/bob-ross/5c654b5f2ec4e/50.jpg"
slug: "our-work-on-our-robotic-cup-2019-robots"
description: " 
The french robotic cup 2019 (tdr 2019) and we are moving slowly but surely to our goal, the two teams work on two distincts goals.
"
---
The french robotic cup 2019 (tdr 2019) and we are moving slowly but surely to our goal, the two teams work on two distincts goals: make the main robot and the secondary autonomus robot.

At the beginning of this year we now have a replica at the right scale of the game board. However, we only have half of the plateau due to lack of space, but that still suits us. As said in a previous article, this allows us to really realize the mechanics of the game in real life.

![](/proxyPhotos?code=/blog/bob-ross/5c654b6f91c08/50.jpg)

Assembly of the stage in progress with Mohamed and François...

In particular, we have made progress on the articulated arm of the main robot, which will be in charge of interacting with the game board and the pucks. As shown in this tweet video we use several servo motors managed by a raspberry pi with the [python pypot library](https://github.com/poppy-project/pypot). The various servo motors are connected by parts designed by us and printed in 3D. (We are improving on that side)

<center>

<blockquote class="twitter-tweet"><p lang="fr" dir="ltr">Ah nous les atomes !! Enfin !<a href="https://twitter.com/hashtag/TDR2019?src=hash&amp;ref_src=twsrc%5Etfw">#TDR2019</a> <a href="https://twitter.com/hashtag/TR2019?src=hash&amp;ref_src=twsrc%5Etfw">#TR2019</a> <a href="https://twitter.com/hashtag/cdr2019?src=hash&amp;ref_src=twsrc%5Etfw">#cdr2019</a> <a href="https://twitter.com/hashtag/omgrobots?src=hash&amp;ref_src=twsrc%5Etfw">#omgrobots</a> <a href="https://t.co/QacuYBqCoA">pic.twitter.com/QacuYBqCoA</a></p>&mdash; We Robot (@werobot_FR) <a href="https://twitter.com/werobot_FR/status/1094730073725460481?ref_src=twsrc%5Etfw">February 10, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</center>

This will allow us to record movements in advance and achieve a wide range of movements. We think we have an interesting system here and we will continue to test its capabilities afterwards.

![](/proxyPhotos?code=/blog/bob-ross/5c56bace48ad9/50.jpg)
The main robot in place on the platform.

In parallel, the other team composed of Matthieu and Antoine is working on the autonomous robot with the realization of an inertial navigation system. We have designed two prototypes and each one is working on its own system on its own. We both use a gyroscope and an optical mouse mounted on a structure that includes an arduino to manage the engines and a raspberry pi that centralizes information and controls everything.

![](/proxyPhotos?code=/blog/bob-ross/5c654b5f2ec4e/50.jpg)
Construction of the two prototypes, from left to right: Antoine, Matthieu

We have also long since finished the electron built in a very simple way from lego components and which will be activated by infrared control from the autonomous robot.

![](/proxyPhotos?code=/blog/bob-ross/5c654b3b6800c/50.jpg)

![](/proxyPhotos?code=/blog/bob-ross/5c654b29cc8ed/50.jpg)

!#gallery(
	/proxyPhotos?code=/blog/bob-ross/5c654b29cc8ed/50.jpg,
	/proxyPhotos?code=/blog/bob-ross/5c654b29cc8ed/50.jpg
)#!
    