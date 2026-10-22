# Archive de Jalon — Migration Alwaysdata & CI/CD GitHub Actions

**Date :** 22 Octobre 2026  
**Domaine Officiel :** `https://ep-sewade.fr` (et `https://www.ep-sewade.fr`)  
**Branche cible :** `main`  
**Statut :** ✅ En Production & Automatisé  

---

## 1. Contexte & Objectifs

Ce jalon finalise la mise en production du portfolio sur une infrastructure professionnelle Alwaysdata, remplaçant l'environnement transitoire initial. Il met également en œuvre l'automatisation complète du cycle d'intégration et de déploiement continus (CI/CD).

## 2. Réalisations Techniques

### A. Infrastructure Alwaysdata
- **Environnement d'Exécution** : Linux x86_64, Apache 2.4 (mod_fcgid) avec PHP 8.3.27 (respect de la contrainte projet PHP <= 8.3.27).
- **Isolation Web** : DocumentRoot configuré strictement sur `/home/[USER]/portfolio/public`. Le code source, les fichiers de configuration et les dépendances `vendor` sont situés hors de la racine web.
- **Base de Données** : MariaDB 11.4 avec encodage `utf8mb4`. Migrations versionnées gérées par Doctrine.
- **Certificat SSL / HTTPS** : Let's Encrypt avec redirection permanente HTTP vers HTTPS (301).
- **Accès Serveur** : Accès SSH sécurisé par clé publique Ed25519 (authentification sans mot de passe).

### B. Pipeline CI/CD GitHub Actions (`.github/workflows/deploy.yml`)
Déclenchement automatique à chaque push sur la branche `main` (ou manuellement via `workflow_dispatch`) :
1. **Étape 1 — Assurance Qualité** :
   - Exécution de PHP CS Fixer (`composer cs:check`, standard PER-CS).
   - Analyse statique PHPStan niveau 8 (`composer phpstan`) avec préchauffage du cache dev Symfony.
2. **Étape 2 — Déploiement SSH Automatisé (`appleboy/ssh-action`)** :
   - Récupération des dernières modifications (`git pull origin main`).
   - Installation des dépendances de production (`composer install --no-dev --optimize-autoloader --no-interaction`).
   - Application des migrations Doctrine (`php bin/console doctrine:migrations:migrate --no-interaction`).
   - Compilation et minification des assets Tailwind CSS (`php bin/console tailwind:build --minify`).
   - Compilation de l'AssetMapper (`php bin/console asset-map:compile`).
   - Purge et réchauffage du cache de production (`php bin/console cache:clear --no-debug`).

### C. Sécurité & Données Sensibles
- Configuration de production via `.env.local` sur le serveur (droits `chmod 600`), compilé en `.env.local.php` via `composer dump-env prod`.
- Secrets de déploiement (SSH, identifiants) configurés exclusivement dans les GitHub Actions Secrets.
- Respect absolu de la règle de confidentialité : aucune donnée sensible inscrite dans le dépôt Git ou la mémoire agentique.

---

## 3. Références Associées

- Spécifications complètes d'hébergement : `./.agents/memory/HOSTING.md`
- Architecture globale du projet : `./.agents/memory/ARCHITECTURE.md`
- Release v2.0.0 (Symfony 7.4 LTS) : `./.agents/rules/archive/2026-08-31_release_v2.0.0_symfony_74.md`
