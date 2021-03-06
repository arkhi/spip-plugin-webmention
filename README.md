# Plugin webmention pour Spip

**Ce dépôt est désormais maintenu sur https://framagit.org/arkhi/spip-plugin-webmention.**

([English](README_en.md) | **français**)

Ce projet a pour but d’implémenter [webmention](https://www.w3.org/TR/webmention/) dans [Spip](https://spip.net/).

## État actuel

Le plugin propose ce qui suit.

### Reposts

- l’envoi d’une webmention de type `repost-of` pour chaque article syndiqué publié ;
- un squelette de type `repost-of` ;
- une interface de configuration dans spip pour :
    - filtrer les flux à republier ;
    - définir les valeurs personnalisées à utiliser pour le squelette (nom, URL, avatar) ;
    - un mode debug pour loguer les requêtes et réponses serveur.

![capture d’écran qui représente les champs détaillés précédemment](./doc/img/configuration-reposts_fr.png "configuration des webmentions de type `repost-of`")

## Installation

### Fichier zip sur Github

1. Télécharger le fichier zip de ce dépôt.
1. Décompresser le dans le dossier « plugins » du site Spip.
1. Configurer le plugin depuis l’interface d’administration de Spip (`?exec=configurer_webmention`).

### Avec git

1. Cloner ce dépôt depuis le dossier « plugins » du site Spip :
    ```sh
    git clone https://github.com/arkhi/spip-plugin-webmention webmention
    ```
1. Configurer le plugin depuis l’interface d’administration de Spip (`?exec=configurer_webmention`).

## Futur

Ce projet dépend de librairies qui implémentent webmentions et microformats.

Toute collaboration est la bienvenue !

## Origine

L’usage actuel correspond à ce scénario :

1. Publication de contenu à travers [Tiny Tiny RSS](https://tt-rss.org/).
1. Récupération des items publiés dans le flux de Tiny Tiny RSS au sein de Spip.
1. Affichage des articles publiés sur le site Spip.

Cela correspond à une webmention de type `repost-of`.

## Remerciements

- Le logo vient de https://indieweb.org/File:webmention-logo.svg.
- Merci aux [spipeurs d’IRC](https://kiwiirc.com/client/irc.freenode.net/spip) pour leur assistance.
