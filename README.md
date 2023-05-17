# Cours de Programmation Web - ENSEIRB-MATMECA - 2021/2022

## Informations générales

Ce cours est une introduction à la programmation web. Il est destiné aux étudiants de première année de l'ENSEIRB-MATMECA. Il est composé de 4 parties :

- HTML
- CSS
- PHP
- SQL

## Objectif du site

L'objectif de ce site est de fournir des ressources aux étudiants pour les aider à réaliser les exercices et les projets du cours. De plus, il permet de montrer aux étudiants comment réaliser un site web en utilisant les technologies vues dans le cours.

En effet, après chaque cours, le site est mis à jour avec les nouvelles notions vues en cours. Ainsi, les étudiants peuvent voir comment utiliser ces nouvelles notions dans un site web.

## Comment utiliser le site

Pour coller au plus près avec les notions vue en cours, le site est réalisé en HTML, CSS, PHP et SQL. Il est donc nécessaire d'avoir un serveur web local pour pouvoir le faire fonctionner.

### En local

#### En utilisant Docker

Pour utiliser le site en local, il est possible d'utiliser Docker. Pour cela, il faut installer Docker sur votre machine. Ensuite, il faut lancer la commande suivante :

```bash
docker build -t cours-web .
```

Cette commande va créer une image Docker contenant le site. Ensuite, il faut lancer la commande suivante :

```bash
docker run -d -p 8080:80 cours-web
```

Cette commande va lancer un conteneur Docker contenant le site. Le site est alors accessible à l'adresse suivante :

```bash
http://localhost:8080
```

#### En clonant le dépôt

Pour utiliser le site en local, il est possible de cloner le dépôt. Pour cela, il faut installer un serveur web local (par exemple Apache). Ensuite, il faut cloner le dépôt dans le dossier racine du serveur web local. Le site est alors accessible à l'adresse suivante :

```bash
http://localhost/cours-web
```

### En ligne

Le site est également disponible en ligne à l'adresse suivante :

```bash
...
```

## Auteur

Ce site a été réalisé par [Rohan Fossé](https://rohanfosse.com). 