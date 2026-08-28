# Architecture Actuelle

## 1. Paradigme & Standards
- PHP 8.3 max — Symfony 7.4 LTS (Full-stack Framework).
- Autoloading **PSR-4** via Composer : namespace `App\` → `src/`.
- Respect des standards Symfony : Injection de dépendances via Autowiring/Autoconfiguration.
- Fichier `.env` standard géré par Symfony Dotenv.

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
- **Migration Symfony 7.4 LTS — ✅ ACCOMPLIE (Jalons 1 à 6)** : Bootstrapping, Modèles/Doctrine, Sécurité, Contrôleurs CRUD Projets, Twig avec base (templates restaurés depuis v1.1.0 et corrigés), Mailer, et tests fonctionnels basiques.
- L'ancienne version custom MVC (Release v1.1.0) a été archivée dans `./.agents/rules/archive/2026-08-27_release_v1.1.0_custom_mvc.md`. La fin de la migration est détaillée dans `./.agents/rules/archive/2026-08-28_migration_symfony_74_achevee.md`.

## 7. Architecture Agentique (Antigravity 2.0)
- **Personnalisation & Outils** : Workspace Rules, Skills, Subagents, Hooks (standards Antigravity).
- **Mémoire & Documentation** : Compétence `project-memory` + sous-agent `archivist` pour mises à jour en arrière-plan.
- **Workflow Git** : Règle `git-conventions.md` (Conventional Commits) + hook `check_commit.php` + skill `git-release` + sous-agent `pr-reviewer`.
