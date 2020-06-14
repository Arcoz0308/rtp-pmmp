## rtp-pmmp
One random tp plugin for pmmp 

## features
- [x] you can config the max and min teleport zone 
- [x] you can chose two world where the random tp are alow 
## command 
| name | description |
| --- | --- |
| `/rtp` |  teleport you to one random place |

 # config
 ```yml
 
---
#RANDOM TP FAIT PAR ARCLEGRANDROI
#random tp make by arclegrandroi

#mondes ou on peux utiliser le rtp
#worlds where you can teleport
world1: "test"
world2: "Minage"

#les positions max et Min
#maximum and minimum positions who you can teleport

xmin: 1000
xmax: 1000
ymin: 70
ymax: 80
zmin: 1000
zmax: 1000

#message de teleportation , {x} = position x, {y} = position y, {z} = position x
#message of teleport , {x} = position x , {7} = position y, {z} = position x
teleportation: "you are teleport to position : {x}, {y}, {z}"

#quand quelqu'un utilise la commande dans un mauvais monde
#when one player made this command in a bad world
bad_world: "you can't use this command in this world"

#msg quand on utilise la commande depuis la console
#message when you run this command with console
in-game: "this command is must runing in game"
...
```

enjoy
