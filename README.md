# ECF Ecoride - Application de Covoiturage

## Description

Ecoride est une application de covoiturage permettant aux utilisateurs de proposer et de participer à des trajets en voiture partagée.

## Prérequis

-   PHP 8.1 ou supérieur
-   Composer
-   MySQL
-   Node.js et NPM

## Installation

1. Cloner le repository

```bash
git clone [URL_DU_REPO]
cd ECF_Ecoride
```

2. Installer les dépendances PHP

```bash
composer install
```

3. Installer les dépendances JavaScript

```bash
npm install
```

4. Copier le fichier d'environnement

```bash
cp .env.example .env
```

5. Configurer la base de données dans le fichier `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecf_ecoride
DB_USERNAME=root
DB_PASSWORD=
```

6. Générer la clé d'application

```bash
php artisan key:generate
```

7. Créer la base de données et exécuter les migrations

```bash
php artisan migrate:fresh
```

8. Lancer le serveur de développement

```bash
php artisan serve
```

9. Dans un autre terminal, lancer le serveur de développement pour les assets

```bash
npm run dev
```

## Structure de la Base de Données

### Tables Principales

-   `users` : Utilisateurs de l'application
-   `marque` : Marques de voitures
-   `voiture` : Véhicules des utilisateurs
-   `covoiturage` : Trajets proposés
-   `option_covoiturage` : Options disponibles pour les covoiturages
-   `avis` : Avis des utilisateurs
-   `role` : Rôles des utilisateurs

### Relations

-   Un utilisateur peut gérer plusieurs voitures (1,n)
-   Une voiture appartient à une marque (1,1)
-   Un covoiturage utilise une voiture (1,1)
-   Un covoiturage peut avoir plusieurs options (0,n)
-   Un utilisateur peut participer à plusieurs covoiturages (0,n)
-   Un utilisateur peut avoir plusieurs rôles (1,n)
-   Un utilisateur peut donner/recevoir plusieurs avis (0,n)

## Fonctionnalités

### Utilisateurs

-   Inscription/Connexion
-   Gestion du profil
-   Attribution de rôles

### Voitures

-   Ajout/Modification/Suppression de voitures
-   Association à une marque
-   Gestion des informations techniques

### Covoiturage

-   Création de trajets
-   Recherche de trajets
-   Réservation de places
-   Gestion des options

### Avis

-   Donner un avis sur un trajet
-   Noter un utilisateur
-   Consulter les avis reçus

## Rôles Disponibles

-   Administrateur
-   Employé
-   Conducteur
-   Passager
-   Conducteur & passager

## Sécurité

-   Authentification Laravel
-   Validation des données
-   Protection CSRF
-   Gestion des permissions par rôle

## Support

Pour toute question ou problème, veuillez créer une issue sur le repository GitHub.
