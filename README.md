# Cours de Programmation Web - ENSEIRB-MATMECA - 2021/2022

## Vue d'ensemble

Ce cours offre une initiation à la programmation web et est conçu pour les étudiants de première année à l'ENSEIRB-MATMECA. Le programme du cours comprend quatre modules principaux :

- HTML
- CSS
- PHP
- SQL

## Objectifs du cours

Ce cours vise à fournir des ressources pédagogiques aux étudiants pour les assister dans la réalisation des exercices et des projets liés au cours. Par ailleurs, il offre un aperçu pratique de la création d'un site web en utilisant les technologies abordées lors des cours.

Après chaque session, le site est actualisé avec les nouvelles notions abordées. Cela permet aux étudiants de voir comment ces nouvelles notions peuvent être mises en œuvre dans un contexte de développement web.

## Guide d'utilisation du site

Le site a été développé en utilisant les technologies HTML, CSS, PHP et SQL pour rester en phase avec les modules du cours. Pour pouvoir accéder au site, il est nécessaire de disposer d'un serveur web local.

### Utilisation locale

#### Utilisation via Docker

Pour exécuter le site localement, Docker peut être utilisé. Après avoir installé Docker sur votre machine, exécutez la commande suivante :

```bash
docker build -t cours-web .
```

Cette commande va créer une image Docker qui contient le site. Par la suite, vous pouvez lancer le site en utilisant la commande :

```bash
docker run -d -p 8080:80 cours-web
```

Cette commande va démarrer un conteneur Docker qui héberge le site. Vous pouvez ensuite accéder au site à l'adresse suivante :

```bash
http://localhost:8080
```

#### Utilisation par clonage du dépôt

Une autre option pour exécuter le site localement est de cloner le dépôt. Pour ce faire, vous aurez besoin d'installer un serveur web local (par exemple, Apache). Ensuite, clonez le dépôt dans le répertoire racine du serveur web local. Vous pouvez alors accéder au site à l'adresse suivante :

```bash
http://localhost/cours-web
```

### Accès en ligne

Le site est également accessible en ligne à l'adresse suivante :

```bash
[Insérez l'URL ici]
```

## Auteur

Ce site a été développé par [Rohan Fossé](https://rohanfosse.com).
