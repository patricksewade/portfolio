# Architecture Actuelle

## 1. Paradigme & Standards
- PHP 8.3.27 maximum (POO pure sans framework).
- Architecture MVC stricte orientée objet.
- Respect des principes SOLID.
- Fichier `.env` pour la configuration, parsé nativement sans librairie.

## 2. Arborescence Stricte & Design System
- `/public` : Point d'entrée unique (`index.php`), `.htaccess`, assets.
- `/config` : Constantes globales, `env_loader.php` (lecture du `.env`), `db_connection.php`.
- `/includes` : `router.php`, `/controllers`, `/dal`, `/utils` (sécurité, SMTP).
- `/templates` : Front-office géré en mode **One-Page** via `home.php`. Utilisation de TailwindCSS en mode "Premium" (effets de verre, ombres, icônes SVG intégrées).
- `/templates/components` : `ui_components.php` (fonctions d'affichage PHP pour centraliser le code UI répétitif).

## 3. Base de Données & Migrations
- MySQL 8 / MariaDB 11.4 via PDO.
- Tables : `admin`, `projects`, `messages`.
- Pas d'ORM. Requêtes SQL préparées obligatoires.

## 4. Sécurité & Authentification
- Sécurité XSS : Fonction globale `e()` (htmlspecialchars avec `ENT_QUOTES | ENT_SUBSTITUTE`).
- Sécurité CSRF : Jeton généré et validé manuellement (via `hash_equals`).
- Mots de passe hachés via `password_hash()`.
- Cookies de session sécurisés (HTTPOnly, Secure, SameSite=Strict).
- Sécurité des secrets : Le fichier `.env` contenant les clés et mots de passe doit être strictement ignoré de Git.

## 5. API Externes
- Envoi d'emails : Utilisation stricte des `Fsocket functions` PHP (`stream_socket_client`) pour dialoguer avec un serveur SMTP (Brevo en prod, Mailtrap en local). Aucune librairie Composer.

## 6. Évolutions Prévues
- V1 : MVC Orienté Objet pur (sans framework).
- V2 : Migration vers le framework Symfony.

## 7. Architecture Agentique (Antigravity 2.0)
- **Personnalisation & Outils** : Migration vers les standards Antigravity (Workspace Rules, Skills, Subagents, Hooks).
- **Gestion des Tâches** : Suppression de `ACTIVE_TASKS.md` (remplacé par les Artifacts natifs Antigravity) et optimisation de `AGENTS.md` (suppression des `@mentions` coûteuses).
- **Mémoire & Documentation** : Compétence `project-memory` (historique à la demande) et sous-agent `archivist` pour les mises à jour en arrière-plan.
- **Règles & Workflow Git** : Règle d'espace de travail `git-conventions.md` (Conventional Commits) bloquée par un hook (`PreToolUse` via `hooks.json` et `check_commit.php`). Compétence `git-release` couplée au sous-agent `pr-reviewer` pour l'automatisation CI/CD locale.
