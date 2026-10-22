# Portfolio Project

Un portfolio web full-stack, moderne et sécurisé, développé avec **Symfony 7.4 LTS** et **PHP 8.3**. Le frontend est conçu selon une approche "Mobile-First" avec **Tailwind CSS**.

🌐 **Site en production** : [https://ep-sewade.fr](https://ep-sewade.fr)

---

## 🛠️ Stack Technique

- **Backend** : PHP 8.3 (stricte conformité <= 8.3.27), Symfony 7.4 LTS
- **Frontend** : Twig, Tailwind CSS (Design System Mobile-First)
- **Base de données** : MariaDB 11.4 / MySQL 8
- **ORM** : Doctrine (DBAL/ORM) & Doctrine Migrations
- **Qualité & Analyse Statique** : PHPStan (Niveau 8), PHP CS Fixer (PER-CS & Symfony)
- **CI/CD & Hébergement** : GitHub Actions, Alwaysdata (SSH, Apache, Let's Encrypt)

---

## 📂 Architecture du Projet

L'arborescence suit rigoureusement les standards Symfony :

- `/public` : Point d'entrée de l'application (`index.php`) et Document Root sécurisé.
- `/src/Controller` : Contrôleurs de l'application (ex. `HomeController`, `ContactController`, `AdminProjectController`).
- `/src/Entity` & `/src/Repository` : Entités Doctrine ORM et couches d'accès aux données.
- `/src/Security` : Authentification et contrôle d'accès sécurisé.
- `/templates` : Vues et composants d'interface Twig.

---

## 🔐 Fonctionnalités & Sécurité

- **Back-Office d'Administration** : Gestion complète des projets et suivi des messages de contact.
- **Authentification Robuste** : Gestion des mots de passe avec `UserPasswordHasherInterface` et hachage sécurisé.
- **Protection contre les Vulnérabilités** :
  - Tokens CSRF stricts pour les formulaires et actions unitaires.
  - Échappement contextuel automatique (XSS) via Twig.
  - Isolation du Document Root (`/public`) pour protéger les sources et variables d'environnement.
- **Design Adaptatif & Accessibilité** : Interface 100% responsive optimisée mobile (WCAG compliant).

---

## 🔄 Intégration & Déploiement Continus (CI/CD)

Le projet intègre un pipeline **GitHub Actions** (`.github/workflows/deploy.yml`) exécuté à chaque `git push` sur `main` :

1. **Quality Gate** :
   - Vérification du style de code via `composer cs:check` (PER-CS).
   - Analyse statique stricte via `composer phpstan` (Niveau 8, 0 erreur tolérée).
2. **Déploiement Automatisé en Production** :
   - Connexion SSH chiffrée vers Alwaysdata.
   - Synchronisation du code via Git (`git pull`).
   - Installation optimisée des dépendances (`composer install --no-dev --optimize-autoloader`).
   - Exécution des migrations de schéma Doctrine (`doctrine:migrations:migrate`).
   - Compilation et minification des assets Tailwind CSS et AssetMapper.
   - Régénération et warmup du cache de production.

---

## 🚀 Installation en local

1. **Cloner le dépôt** :
   ```bash
   git clone https://github.com/patricksewade/portfolio.git
   cd portfolio
   ```
2. **Installer les dépendances PHP** :
   ```bash
   composer install
   ```
3. **Configuration de l'environnement** :
   - Dupliquez le fichier `.env.example` en `.env.local` :
     ```bash
     cp .env.example .env.local
     ```
   - Adaptez la variable `DATABASE_URL` avec vos identifiants locaux.
4. **Création de la base et exécution des migrations** :
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```
5. **Démarrer le serveur local** :
   ```bash
   symfony server:start
   ```

---

## 🧪 Qualité du Code & Outils

- **Vérifier la conformité du code (PER-CS)** :
  ```bash
  composer cs:check
  ```
- **Formater et corriger automatiquement le code** :
  ```bash
  composer cs:fix
  ```
- **Lancer l'analyse statique stricte (Niveau 8)** :
  ```bash
  composer phpstan
  ```
