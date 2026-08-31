# Portfolio Project

Un portfolio web full-stack, moderne et sécurisé, développé avec **Symfony 7.4 LTS** et **PHP 8.3+**. Le frontend est conçu selon une approche "Mobile-First" avec **Tailwind CSS**.

## 🛠️ Stack Technique

- **Backend** : PHP 8.3 (min), Symfony 7.4 LTS
- **Frontend** : Twig, Tailwind CSS (Mobile-First)
- **Base de données** : MySQL 8 / MariaDB 11.4
- **ORM** : Doctrine (DBAL/ORM)
- **Serveur web local** : WAMP (Apache) / Symfony CLI

## 📂 Architecture du Projet

L'arborescence suit les standards Symfony :

- `/public` : Point d'entrée de l'application (`index.php`) et assets publics (images, CSS, JS).
- `/src/Controller` : Contrôleurs de l'application (ex. `ProjectController`, `AdminProjectController`).
- `/src/Entity` & `/src/Repository` : Modèles de données et logique d'accès à la BDD via Doctrine ORM.
- `/src/Security` : Logique d'authentification personnalisée.
- `/templates` : Vues de l'application au format Twig.

## 🔐 Fonctionnalités & Sécurité

- **Panel d'Administration** : Gestion complète des projets et consultation des messages reçus.
- **Authentification Sécurisée** : Basée sur le composant Security de Symfony (hachage des mots de passe, protection des routes).
- **Protection contre les Vulnérabilités** :
  - Protection CSRF (formulaires natifs et tokens manuels pour les actions unitaires).
  - Échappement automatique (XSS) via Twig.
- **Design Adaptatif** : L'interface utilisateur est entièrement responsive, avec une attention particulière portée à l'expérience sur mobile et à l'accessibilité (WCAG).

## 🚀 Installation en local

1. **Cloner le dépôt** (ou se positionner sur la branche souhaitée).
2. **Installer les dépendances PHP** :
   ```bash
   composer install
   ```
3. **Configuration de l'environnement** :
   - Dupliquez le fichier `.env` en `.env.local`.
   - Modifiez la variable `DATABASE_URL` avec vos informations de connexion MySQL.
4. **Création de la base de données et exécution des migrations** :
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```
5. **Lancer le serveur de développement** :
   ```bash
   symfony server:start
   ```
