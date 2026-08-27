# Architecture Actuelle

## 1. Paradigme & Standards
- PHP 8.3 max — OOP pure, architecture **MVC stricte sans framework**.
- Autoloading **PSR-4** via Composer : namespace `App\` → `src/`.
- Respect des principes SOLID ; injection manuelle de dépendances dans `public/index.php`.
- Fichier `.env` parsé par `Config\EnvLoader` (classe statique, sans librairie).

## 2. Arborescence & Couches MVC
- `/public` : Point d'entrée unique `index.php` (bootstrap + injection + dispatch), `.htaccess`, assets.
- `/src/Core, Http & Config` : Infrastructures techniques (`Router`, `ViewRenderer`, `Request`, `Response`, `EnvLoader`, `Database`). `src/helpers.php` contient les polyfills procéduraux (`e()`, `is_admin()`).
- `/src/Model & Repository` : Entités POO strictes (avec `toArray()` pour compatibilité vues) et accès aux données via PDO injecté.
- `/src/Service` : Logique transverse (`SecurityService` statique, `SmtpMailer` OOP).
- `/src/Controller` : Actions métier retournant via `Response->send()`. `HomeController` injecte les compteurs et données dynamiques depuis les repositories. `AdminController` prépare les KPIs du dashboard et injecte les tokens CSRF. `AdminProjectController` gère l'administration dynamique des projets (CRUD complet, pattern PRG, cycle de vie upload, messages flash).
- `/templates` : Vues PHP modulaires (TailwindCSS "Premium" sombre). Header enrichi (liens sociaux, CTA CV), composant 'Back to Top' interactif (Vanilla JS) dans le footer, page mentions légales restructurée, formulaires avec indicateurs d'accessibilité.

## 3. Base de Données & Accès aux Données
- MySQL 8 / MariaDB 11.4 via PDO.
- Tables : `admin`, `projects`, `messages`. Les données des projets sont entièrement dynamiques (plus de données en dur dans le code).
- Pas d'ORM. `prepare()` obligatoire partout (plus de `$pdo->query()` non préparé).

## 4. Sécurité & Authentification
- XSS : `SecurityService::escape()` (méthode statique, accessible depuis les vues).
- CSRF : `SecurityService::generateCsrfToken()` / `verifyCsrfToken()` via `hash_equals` — propagation systématique des tokens dans tous les formulaires d'actions (suppression, modification).
- Auth : `Admin::verifyPassword()` encapsule `password_verify()` ; `__serialize()` empêche la fuite du hash.
- Cookies de session : HTTPOnly, Secure, SameSite=Strict.
- Messages Flash : Notifications éphémères (succès, erreurs de validation/upload) transmises via session et nettoyées après affichage.
- Secrets : `.env` jamais commité (purge historique Git si fuite accidentelle).

## 5. Librairies & API Externes
- Emails : `SmtpMailer` (OOP) wrappant `smtp_socket.php` via `stream_socket_client`. Brevo en prod, Mailtrap en local.
- Uploads : `samayo/bulletproof` (via Composer), taille max configurée à 2 Mo avec validation MIME. Cycle de vie complet : gestion des erreurs par `Exception` attrapée dans le contrôleur et suppression physique systématique des fichiers via `unlink()` lors du remplacement ou de la suppression d'un projet.

## 6. Évolution & Roadmap
- **V1 OOP MVC — ✅ ACCOMPLIE** : Migration complète vers une architecture POO stricte PSR-4. Le legacy procédural (`/includes`) a été totalement supprimé.
- **Améliorations UI/UX & Dynamisation — ✅ ACCOMPLIE** : Jalon `feat/portfolio-enhancements` (dynamisation compteur projets, header enrichi avec réseaux sociaux et CV, mentions légales premium, Back to Top interactif).
- **V2** : Migration vers Symfony envisagée.

## 7. Architecture Agentique (Antigravity 2.0)
- **Personnalisation & Outils** : Workspace Rules, Skills, Subagents, Hooks (standards Antigravity).
- **Mémoire & Documentation** : Compétence `project-memory` + sous-agent `archivist` pour mises à jour en arrière-plan.
- **Workflow Git** : Règle `git-conventions.md` (Conventional Commits) + hook `check_commit.php` + skill `git-release` + sous-agent `pr-reviewer`.
