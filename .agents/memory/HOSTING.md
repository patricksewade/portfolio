# Spécifications de l'Hébergement de Production

Ce document consigne l'ensemble des informations techniques relatives à l'environnement de production. Tout agent intervenant sur le déploiement ou la configuration de l'infrastructure doit s'y référer.

## 1. Informations Générales
- **Hébergeur** : Alwaysdata
- **URL Publique** : `https://ep-sewade.fr` (et `https://www.ep-sewade.fr`)
- **Document Root** : `/home/[USER]/portfolio/public`
- **Architecture** : Linux x86_64, Apache 2.4 (mod_fcgid), PHP-FPM / CLI.
- **SSL / HTTPS** : Certificat Let's Encrypt automatique avec redirection forcée HTTP -> HTTPS (301).

## 2. Environnement PHP
- **Version PHP** : Branche 8.3 (actuellement **8.3.36**, patchée contre la vulnérabilité critique PHP2Shell CVE-2026-109618/19).
- **Gestionnaire** : Multi-PHP Alwaysdata configuré sur la branche générique `8.3` pour bénéficier automatiquement des patchs de sécurité mineurs.
- **Composer** : Version 2.9+ (utilisant nativement PHP 8.3).

## 3. Base de Données
- **Moteur** : MariaDB 11.4 (11.4.13-MariaDB)
- **Hôte** : `[DB_HOST]` (Port 3306)
- **Base** : `[DB_NAME]`
- **Utilisateur** : `[DB_USERNAME]`
- **Encodage** : `utf8mb4`
- **Gestion du schéma** : Migrations Doctrine CLI (`php bin/console doctrine:migrations:migrate --no-interaction`).

## 4. Accès & Passerelle SSH
- **Hôte SSH** : `[SSH_HOST]` (Port 22)
- **Utilisateur SSH** : `[SSH_USER]`
- **Authentification** : Clé publique Ed25519 (authentification sans mot de passe).

## 5. Stratégie de Déploiement & Pipeline CI/CD

### A. Document Root (`/public`)
Le serveur web Apache pointe strictement sur `/home/[USER]/portfolio/public`.
Le code source (`src`, `config`, `.env`, `.env.local`, `vendor`) est isolé en amont et totalement inaccessible depuis le web.

### B. Gestion des Variables d'Environnement (Production)
- `.env.local` est créé sur le serveur (droits `chmod 600`, non-versionné) contenant :
  - `APP_ENV=prod`
  - `APP_SECRET=[RANDOM_32_BYTES_HEX]`
  - `DATABASE_URL="mysql://[DB_USER]:[DB_PASSWORD]@[DB_HOST]:3306/[DB_NAME]?serverVersion=11.4.13-MariaDB&charset=utf8mb4"`
  - `MAILER_DSN`, `MAILER_FROM`, `MAILER_TO`
- Exécution de `composer dump-env prod` générant `.env.local.php` pour des performances maximales.

### C. Pipeline CI/CD GitHub Actions
Workflow automatisé dans `.github/workflows/deploy.yml` déclenché à chaque push sur `main` :
1. **Quality Assurance** : Exécution de `composer cs:check` (PER-CS) et `composer phpstan` (Niveau 8).
2. **Déploiement SSH (appleboy/ssh-action)** :
   - `git pull origin main`
   - `composer install --no-dev --optimize-autoloader --no-interaction`
   - `php bin/console doctrine:migrations:migrate --no-interaction`
   - `php bin/console tailwind:build --minify`
   - `php bin/console asset-map:compile`
   - `php bin/console cache:clear --no-debug`

### D. Médias & Uploads
Les uploads utilisateurs (`public/uploads/projects/`) sont exclus de Git (`.gitignore`) et persistent directement sur le volume disque du serveur.
