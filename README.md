# Projet FoodTruck

Bienvenue dans le projet **FoodTruck**, une application web développée en Symfony pour gérer et suivre les informations d'un food truck. Cette application permet de gérer les menus, les horaires, les lieux, et bien plus encore.

## Sommaire

- [Technologies utilisées](#technologies-utilisées)
- [Pré-requis](#pré-requis)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Fonctionnalités](#fonctionnalités)
- [Contribution](#contribution)
- [Contact](#contact)

## Technologies utilisées

- **PHP** >= 8.1
- **Symfony** 6.x
- **MySQL** pour la base de données
- **Twig** pour le rendu des templates
- **Bootstrap** pour le style de l'interface utilisateur
- **JavaScript** (facultatif) pour les fonctionnalités dynamiques

## Pré-requis

Avant de démarrer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- PHP >= 8.1
- Composer
- Symfony CLI (facultatif)
- Serveur MySQL

## Installation

1. Clonez le dépôt sur votre machine locale :

   ```bash
   git clone https://github.com/votre-utilisateur/foodtruck.git
   cd foodtruck

    Installez les dépendances PHP via Composer :

    bash

composer install

Configurez les variables d'environnement :

    Dupliquez le fichier .env en .env.local

    Modifiez les paramètres de connexion à la base de données dans .env.local :

    makefile

    DATABASE_URL="mysql://user:password@127.0.0.1:3306/nom_de_la_base"

Créez la base de données et exécutez les migrations :

bash

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

(Optionnel) Ajoutez des données de démonstration avec les fixtures :

bash

php bin/console doctrine:fixtures:load

Lancez le serveur de développement :

bash

    symfony server:start

    Accédez à l'application dans votre navigateur : http://localhost:8000

Utilisation

Une fois l'application lancée, vous pouvez :

    Voir les menus proposés par le food truck
    Consulter les horaires et lieux où le food truck sera disponible
    Créer un compte pour ajouter des commentaires ou suggérer des améliorations

Fonctionnalités

    Gestion de menus : Ajout, édition, suppression de plats et menus
    Planning : Suivi des horaires et des lieux de présence
    Commentaires : Permet aux utilisateurs de laisser des avis
    Administration : Gestion des utilisateurs et des contenus pour les administrateurs

Contribution

Les contributions sont les bienvenues ! Pour contribuer :

    Forkez le projet.
    Créez une branche pour votre fonctionnalité (git checkout -b feature/ma-fonctionnalité).
    Commitez vos modifications (git commit -am 'Ajoute une nouvelle fonctionnalité').
    Poussez votre branche (git push origin feature/ma-fonctionnalité).
    Ouvrez une Pull Request.

Contact

Projet créé par Votre Nom. N'hésitez pas à me contacter si vous avez des questions.
