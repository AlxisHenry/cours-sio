# Introduction

<img src="src/screen_intro.png" alt="Introduction Docker">

# Quels sont les limites de Docker ?

Contrairement à des VMS, vous n'avez pas la possibiltié de répartir les ressources systèmes comme vous le souhaitait (RAM, CPU, etc...).
Par rapport à de la virtualisation, les containers Docker dépendent énormément de la machine hôte.

# Pourquoi utilise-t-on Docker ?

Pour conteneriser des applications. Déployer, tester des applications dans un processus de développement ou de production.

# Définitions

**Images** - Le système de fichiers et la configuration de notre application utilisés pour créer des conteneurs. Pour en savoir plus sur une image Docker, exécutez docker image inspect alpine.

**Conteneurs** - Exécution d'instances d'images Docker - les conteneurs exécutent les applications réelles. Un conteneur inclut une application et toutes ses dépendances. Il partage le noyau avec d'autres conteneurs et
s'exécute comme un processus isolé dans l'espace utilisateur du système d'exploitation hôte.

**Docker daemon** - Service d'arrière-plan s'exécutant sur l'hôte qui gère la construction, l'exécution et la distribution des conteneurs Docker.

**Client Docker** - L'outil de ligne de commande qui permet à l'utilisateur d'interagir avec le démon Docker.

**Docker Store** - est, entre autres, un registre d'images Docker. Vous pouvez considérer le registre comme un répertoire de toutes les images Docker disponibles

# *Commandes*

## Lancer un container avec l'image hello-world.

```bash
$ sudo docker run hello-world

Hello from Docker!
This message shows that your installation appears to be working correctly.

To generate this message, Docker took the following steps:
 1. The Docker client contacted the Docker daemon.
 2. The Docker daemon pulled the "hello-world" image from the Docker Hub.
    (amd64)
 3. The Docker daemon created a new container from that image which runs the
    executable that produces the output you are currently reading.
 4. The Docker daemon streamed that output to the Docker client, which sent it
    to your terminal.

...
```
*On peut mettre à jour l'image, avec la commande suivante :*

```bash
sudo docker pull hello-world
```

## Lancer un container avec l'image ubuntu et ouvrir un shell bash.

```bash
$ sudo docker run -it ubuntu bash

Unable to find image 'ubuntu:latest' locally
latest: Pulling from library/ubuntu
e96e057aae67: Already exists
Digest: sha256:4b1d0c4a2d2aaf63b37111f34eb9fa89fa1bf53dd6e4ca954d47caebca4005c2
Status: Downloaded newer image for ubuntu:latest
root@dd5fb27bfd46:/# ls
bin  boot  dev  etc  home  lib  lib32  lib64  libx32  media  mnt  opt  proc  root  run  sbin  srv  sys  tmp  usr  var
root@dd5fb27bfd46:/#
```

## Exécuter un conteneur

```bash
# Execute without sudo
docker run -it ubuntu
# Execute with sudo
sudo !! / sudo docker run -it ubuntu
```

<img src="src/itupdate.png">

## Gérer les containers

- Entrer dans le shell d'un container ` docker exec -it {62681cdc60b2} /bin/bash`

- Lister les containers actifs : `docker ps`

- Lister tous les containers : `docker ps {-a|--all}`

- Voir le dernier container créé : `docker ps -l`

- Gestion de l'état :

   - Lancer le container : `docker start {62681cdc60b2} | ubuntu`

   - Stopper le container : `docker stop {62681cdc60b2} | ubuntu`

   - Supprimer le container : `docker rm {62681cdc60b2} | ubuntu`

- Attribuer un nom à la création : 

```
$ docker run --name hello hello-world

$ docker ps -a
CONTAINER ID   IMAGE         COMMAND        CREATED              STATUS                      PORTS     NAMES
0888fa1f72e1   hello-world   "/hello"       26 seconds ago       Exited (0) 26 seconds ago             hello

$ docker rm hello
hello
```

- Commit les changements effectués sur un container

```bash
$ docker container commit -m "Ajout de composer" -a "Alexis" f4a492cf0718 ubuntu/composer
sha256:924cc6ba65be972cb687c8da7d48dcf260a986d3656d7bfdc80e1bed21bad1f6

$ docker images
REPOSITORY                  TAG       IMAGE ID       CREATED          SIZE
ubuntu/composer             latest    924cc6ba65be   2 seconds ago    263MB
repository/new_image_name   latest    9a7e62239a67   17 seconds ago   263MB
sail-8.1/app                latest    b9d44fbba774   15 hours ago     769MB
docker/getting-started      latest    e5be50c31cb9   2 days ago       29.8MB
ubuntu                      latest    a8780b506fa4   3 weeks ago      77.8MB
mysql/mysql-server          8.0       3f3946d5572f   6 weeks ago      517MB
hello-world                 latest    feb5d9fea6a5   14 months ago    13.3kB
```

- Transmettre des images Docker vers un référentiel Docker

```bash
$ sudo docker login -u alxshenry
[sudo] password for alexis:
Password:
WARNING! Your password will be stored unencrypted in /root/.docker/config.json.
Configure a credential helper to remove this warning. See
https://docs.docker.com/engine/reference/commandline/login/#credentials-store

Login Succeeded

Logging in with your password grants your terminal complete access to your account.
For better security, log in with a limited-privilege personal access token. Learn more at https://docs.docker.com/go/access-tokens/
```

```bash
$ docker container commit -m "Ajout de composer" -a "Alexis" f4a492cf0718 alxshenry/ubuntu-composer
sha256:0ffb18497ca9c8869fadff3d3ff069ba7a07428c07deb57e8641b49a6abbe540

$ docker push alxshenry/ubuntu-composer
Using default tag: latest
The push refers to repository [docker.io/alxshenry/ubuntu-composer]
70e20414aa6d: Pushed
f4a670ac65b6: Pushed
latest: digest: sha256:28985882c6b194e6641ee154187ce5c047acbf77a757a340e05e36c6d026b791 size: 741
```