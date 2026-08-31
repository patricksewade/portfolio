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

## 6. Évolution & Roadmap
- **Release Actuelle — v2.0.0 (Symfony 7.4 LTS)** : Branche `main` consolidée et poussée sur `origin` avec l'historique complet des tags `v1.0.0`, `v1.1.0` et `v2.0.0`. Regroupe le framework Symfony 7.4 LTS, la refonte UI/UX mobile-first Tailwind CSS, la conformité RGPD/mentions légales et le durcissement sécurité.
- **Archives de Jalons** : Release v2.0.0 (`./.agents/rules/archive/2026-08-31_release_v2.0.0_symfony_74.md`), Fin de migration Symfony (`./.agents/rules/archive/2026-08-28_migration_symfony_74_achevee.md`), et Release v1.1.0 MVC custom (`./.agents/rules/archive/2026-08-27_release_v1.1.0_custom_mvc.md`).

## 7. Architecture Agentique (Antigravity 2.0)
- **Personnalisation & Outils** : Workspace Rules, Skills, Subagents, Hooks (standards Antigravity).
- **Mémoire & Documentation** : Compétence `project-memory` + sous-agent `archivist` pour mises à jour en arrière-plan.
## 8. Déploiement & Hébergement
- **Environnement Cible** : Hébergement Byet.host (Offre Free Hosting, PHP 8.3.27, MariaDB 11.4).
- **Contraintes** : Déploiement FTP (pas de SSH/CLI), limitation d'envoi d'emails (utilisation de SMTP externe obligatoire), document root restreint à `/htdocs`.
- **Documentation Détaillée** : Pour la configuration du déploiement ou l'adaptation du code à la production, voir le fichier dédié `./.agents/memory/HOSTING.md`.
