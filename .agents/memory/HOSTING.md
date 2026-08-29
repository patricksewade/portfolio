# Spécifications de l'Hébergement de Production

Ce document consigne l'ensemble des informations techniques relatives à l'environnement de production. Tout agent intervenant sur le déploiement ou la configuration de l'infrastructure doit s'y référer.

## 1. Informations Générales
- **Hébergeur** : Byet.host (Offre Free Hosting)
- **URL Publique** : `https://ep-sewade.fast-page.org`
- **Document Root** : `[SERVER_ABSOLUTE_PATH]/ep-sewade.fast-page.org/htdocs`
- **Quotas** : 5 GB de stockage, 80 000 Inodes maximum, 50 000 Hits journaliers.

## 2. Environnement PHP
- **Version PHP** : 8.3.27 (Compatible avec la contrainte stricte du projet PHP <= 8.3.27 et Symfony 7.4).
- **Limites** : `memory_limit` = 512M, `max_file_size` = 20MB, `max_execution_time` = 60s.
- **Extensions actives** : cURL, Fsocket functions, GD Library, Ioncube & Zend, Mod_rewrite.
- **Désactivé** : ImageMagick.

## 3. Base de Données
- **Moteur** : MariaDB 11.4.12
- **Hôte** : `[DB_HOST]` (Port 3306)
- **Utilisateur** : `[DB_USERNAME]`
- **Accès** : Restreint à l'environnement local du serveur. Pas d'accès externe possible. Gestion manuelle via phpMyAdmin depuis le cPanel.

## 4. Accès FTP (Déploiement)
- **Hôte FTP** : `ftpupload.net` (ou `ftp.byethost6.com`), Port 21
- **Utilisateur FTP** : `[FTP_USERNAME]`
- **Dossier cible** : `/ep-sewade.fast-page.org/`
- **Contrainte** : Aucun accès SSH/CLI. Déploiement exclusivement via transfert FTP.

## 5. Contraintes Techniques & Solutions Implémentées

### A. Document Root (`/htdocs`) vs Symfony (`/public`)
Le serveur impose de servir les fichiers depuis `htdocs/`. Symfony requiert que le point d'entrée soit `public/` pour protéger le code source.
**Stratégie de déploiement** : Le code du projet (`src`, `config`, `.env.local`, `vendor`) doit idéalement être placé un niveau au-dessus (`ep-sewade.fast-page.org/`), tandis que le contenu de `/public` est placé dans `htdocs/`. Le fichier `htdocs/index.php` devra être adapté pour modifier le chemin du `vendor/autoload.php`.
*Alternative si blocage serveur* : Tout uploader dans `htdocs/` avec un `.htaccess` drastique redirigeant vers `public/` et bloquant l'accès aux dossiers sensibles.

### B. Envoi d'Emails (Symfony Mailer)
L'offre gratuite bloque la fonction `mail()` et les comptes emails locaux.
**Stratégie** : Utilisation obligatoire d'un service tiers via le `MAILER_DSN` dans `.env.local`. Puisque `cURL` et `fsockopen` sont activés, l'envoi via des API HTTP (ex: Mailjet, Resend) ou des connexions SMTP externes (ex: Gmail App Password, Brevo) fonctionnera parfaitement.

### C. Build & Déploiement sans SSH
Impossible de lancer les commandes Symfony ou Composer sur le serveur.
**Stratégie** :
1. Exécuter en local : `composer install --no-dev --optimize-autoloader`
2. Vider le cache de production en local : `php bin/console cache:clear --env=prod`
3. Compiler les assets en local (si AssetMapper/Webpack est utilisé).
4. Uploader l'ensemble des fichiers préparés via FTP (hors dossiers `var/cache/dev`, `.git`, `.agents`).
5. Les migrations de BDD (`doctrine:migrations:migrate`) ne pouvant être exécutées, le schéma de base de données doit être exporté en SQL depuis l'environnement local et importé manuellement via phpMyAdmin en production.

### D. Tâches asynchrones & Logs
- **Cron Jobs** : Désactivés par l'hébergeur. Si des tâches planifiées sont requises à l'avenir, elles devront être déclenchées par un service web externe (ex: cron-job.org).
- **Logs** : Les logs Apache d'erreur ne sont pas accessibles. Le débogage s'effectuera via les logs applicatifs de Symfony téléchargés depuis `var/log/prod.log`.
