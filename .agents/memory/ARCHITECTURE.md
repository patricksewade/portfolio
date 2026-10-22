# Architecture Actuelle

## 1. Paradigme & Standards
- PHP 8.3 max — Symfony 7.4 LTS (Full-stack Framework).
- Autoloading **PSR-4** via Composer : namespace `App\` → `src/`.
- Respect des standards Symfony : Injection de dépendances via Autowiring/Autoconfiguration.
- Fichier `.env` standard géré par Symfony Dotenv.
- **Frontend / UX** : Design System Mobile-First avec Tailwind CSS (menus Overlay sur mobile, Breakpoints `lg` pour le desktop, manipulation de l'ordre visuel via utilitaires de flux).

## 2. Arborescence & Couches (Symfony)
- `/public` : Point d'entrée unique `index.php`, assets.
- `/src/Entity` & `/src/Repository` : Entités Doctrine ORM (attributs PHP 8) et accès aux données.
- `/src/Controller` : Contrôleurs Symfony (ex: `ProjectController`, `AdminProjectController`, `SecurityController`).
- `/src/Security` : Authentification via Symfony Security (FormLogin, Authenticator customisé, Guard).
- `/templates` : Vues Twig (`base.html.twig`, `home.html.twig`). Restaurées et nettoyées (UTF-8, layout Tailwind CDN, fonts Google, aucun HTML redondant).

## 3. Base de Données & ORM
- MySQL 8 / MariaDB 11.4 via Doctrine DBAL/ORM.
- Tables : `admin`, `project`, `message` (mappées depuis les entités).
- Migrations générées par DoctrineMigrationsBundle.

## 4. Sécurité & Authentification
- XSS : Échappement automatique par Twig.
- CSRF : Protection native Symfony Forms et générateurs de tokens.
- Auth : `UserPasswordHasherInterface` et composant Security de Symfony.
- Cookies de session gérés par le framework. Messages Flash via `addFlash()`.

## 5. Librairies & Services
- Emails : Composant Symfony Mailer.
- Uploads : Gestion d'upload (à documenter, par défaut Symfony Forms + contraintes).
- Tests : WebTestCase et Panther pour les tests fonctionnels.
- Qualité : PHP CS Fixer (`friendsofphp/php-cs-fixer`, scripts `cs:check`/`cs:fix`) et PHPStan niveau 8 (`phpstan/phpstan`, script `phpstan` via `phpstan.dist.neon`, vérifications de types natives et `treatPhpDocTypesAsCertain: false`).

## 6. Évolution & Roadmap
- **Release Actuelle — v2.0.0 (Symfony 7.4 LTS)** : Branche `main` consolidée, incluant la documentation exhaustive du projet (`README.md`), et poussée sur `origin` avec l'historique complet des tags `v1.0.0`, `v1.1.0` et `v2.0.0`. Regroupe le framework Symfony 7.4 LTS, la refonte UI/UX mobile-first Tailwind CSS, la conformité RGPD/mentions légales et le durcissement sécurité.
- **Qualité de Code & Outillage** : Intégration de PHP CS Fixer (PER-CS) et PHPStan (Niveau 8). Typage strict sur les entités Doctrine, contrôles natifs et casts sur données Symfony.
- **Mise en Production & Pipeline CI/CD** : Déploiement sur Alwaysdata (`https://ep-sewade.fr`) avec pipeline GitHub Actions (`.github/workflows/deploy.yml`) automatisant validation qualité (PHPStan L8, PHP CS Fixer) et déploiement SSH.
- **Archives de Jalons** : Migration Alwaysdata & CI/CD (`./.agents/rules/archive/2026-10-22_migration_alwaysdata_ci_cd.md`), Release v2.0.0 (`./.agents/rules/archive/2026-08-31_release_v2.0.0_symfony_74.md`), Fin de migration Symfony (`./.agents/rules/archive/2026-08-28_migration_symfony_74_achevee.md`), Release v1.1.0 MVC custom (`./.agents/rules/archive/2026-08-27_release_v1.1.0_custom_mvc.md`).

## 7. Architecture Agentique (Antigravity 2.0)
- **Personnalisation & Outils** : Workspace Rules, Skills, Subagents, Hooks (standards Antigravity).
- **Mémoire & Documentation** : Compétence `project-memory` + sous-agent `archivist` pour mises à jour en arrière-plan. Le `README.md` racine est généré dynamiquement depuis ces fichiers de mémoire.

## 8. Déploiement & Hébergement
- **Environnement Cible** : Hébergement Alwaysdata (domaine officiel `https://ep-sewade.fr`, PHP 8.3.27, MariaDB 11.4, Apache 2.4 mod_fcgid).
- **Document Root & Isolation** : Pointage strict sur `/public`, code source, vendor et configuration isolés hors de la racine web.
- **Automatisation & CI/CD** : Pipeline GitHub Actions (`.github/workflows/deploy.yml`) avec contrôle qualité préalable (PHPStan niveau 8, PHP CS Fixer) et déploiement SSH automatique sur push `main`.
- **Documentation Détaillée** : Pour les spécifications d'infrastructure, secrets et variables d'environnement, voir le fichier dédié `./.agents/memory/HOSTING.md`.
