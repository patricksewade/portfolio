# Architecture Actuelle

## 1. Paradigme & Standards
- PHP 8.3 procédural pur (Aucune POO excepté PDO).
- Approche MVC procédural (Routing centralisé, Contrôleurs sans vue, DAL sans requêtes dans les contrôleurs).
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

## 5. API Externes
- Envoi d'emails : Utilisation stricte des `Fsocket functions` PHP (`stream_socket_client`) pour dialoguer avec un serveur SMTP (Brevo en prod, Mailtrap en local). Aucune librairie Composer.

## 6. Évolutions Prévues
- V1 : MVC Procédural.
- V2 : Refactoring complet vers la Programmation Orientée Objet (POO).
- V3 : Migration vers le framework Symfony.
