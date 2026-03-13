# Configuration du Mode Maintenance

Ce projet inclut un système de mode maintenance utilisant PHP et MySQL.

## Prérequis

- PHP 7.4+ avec extension PDO MySQL
- MySQL 5.7+ ou MariaDB
- Serveur web (Apache, Nginx, ou PHP built-in server)

## Installation

### 1. Configuration de la base de données

Modifiez le fichier `config.php` avec vos informations de connexion MySQL :

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'votre_utilisateur'); // Remplacez par votre utilisateur MySQL
define('DB_PASS', 'votre_mot_de_passe'); // Remplacez par votre mot de passe MySQL
define('DB_NAME', 'portfolio_db');
```

### 2. Création de la base de données

Accédez à `http://votre-domaine/setup.php` dans votre navigateur pour créer automatiquement la base de données et la table des paramètres.

### 3. Test du système

- Accédez à `http://votre-domaine/index.php` pour voir le site normal
- Accédez à `http://votre-domaine/admin.php` pour gérer le mode maintenance
- Cliquez sur le bouton pour activer/désactiver le mode maintenance
- Quand activé, `index.php` affichera la page de maintenance au lieu du portfolio

## Structure des fichiers

- `config.php` : Configuration de la base de données
- `functions.php` : Fonctions utilitaires pour le mode maintenance
- `setup.php` : Script de création de la base de données
- `index.php` : Page principale avec vérification du mode maintenance
- `maintenance.php` : Page affichée en mode maintenance
- `admin.php` : Interface d'administration pour gérer le mode maintenance

## Sécurité

⚠️ **Important** : Le fichier `admin.php` n'a aucune protection d'authentification. En production, ajoutez un système de login avant d'utiliser ce fichier.

## Utilisation

1. Activez le mode maintenance via `admin.php` avant de faire des mises à jour
2. Les visiteurs verront la page de maintenance au lieu du portfolio
3. Désactivez le mode maintenance une fois les travaux terminés

## Développement local

Si vous utilisez XAMPP, WAMP ou un serveur local similaire :

1. Placez les fichiers dans le dossier `htdocs` (XAMPP) ou `www` (WAMP)
2. Démarrez MySQL et Apache
3. Accédez à `http://localhost/setup.php`

## Support

Pour toute question, contactez : malvoisinranelfils@email.com