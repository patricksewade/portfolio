# Registre d'Apprentissage & Anti-Patterns

_Ce fichier consigne les erreurs passées de l'IA pour éviter leur répétition._
**RÈGLE ABSOLUE : Maximum 15 puces. Si dépassement, synthétiser ou archiver.**

## Erreurs de Code / Logique à ne plus reproduire
- Ne jamais proposer un fichier `env.php` pour la configuration secrète. Le fichier `.env` reste la norme absolue et peut être parsé avec `parse_ini_file()`.
- **Scripts d'installation** : Ne pas placer les scripts d'installation en dehors du `Document Root` (`/public`), ils renverront une erreur 404. Les placer dans `/public` temporairement puis les supprimer de façon sécurisée.
- UI/UX : Conserver l'alignement à gauche pour les blocs de texte/formulaires même si le conteneur est centré (ne pas forcer `text-center`/`justify-center` partout).
- **Accessibilité (A11Y)** : Éviter orange/jaune vif (`#f59d21`) sur fond blanc (ratio < 3:1, invalide WCAG). Assombrir la teinte (ex: `#d97706`) pour valider les normes tout en gardant l'éclat.
- **Mise en Page** : Éviter le "Bento-style" avec marges négatives sans CSS Grid robuste. Privilégier des grilles claires ou `flex-col`.
- **Sécurité Git / Secrets** : `.env` jamais commité. En cas de fuite, `git rm --cached` ne suffit pas — purger l'historique complet (BFG Repo-Cleaner ou `git filter-branch`).
- **OOP MVC — Singleton PDO banni** : Ne jamais utiliser le pattern `static $pdo = null` (singleton procédural). Utiliser une **factory** (`Database::createConnection()`) et injecter le PDO via le constructeur des Repository.
- **OOP MVC — Superglobales interdites en logique** : `$_GET`, `$_POST`, `$_SERVER`, `$_SESSION` ne doivent être accédés que dans `Request::fromGlobals()`. Toute logique métier ou contrôleur doit recevoir un objet `Request` immutable.
- **OOP MVC — `echo`/`header()` hors Response** : Aucun contrôleur ni service ne doit appeler `echo` ou `header()` directement. Tout passe par `Response->send()` (seul point de sortie HTTP).
- **Compatibilité des Vues lors d'une Migration OOP** : Pour éviter de réécrire toutes les vues (qui attendent des tableaux/fonctions), ajouter une méthode `toArray()` sur les entités et créer des polyfills procéduraux (ex: `e()`, `is_admin()`) dans `src/helpers.php` qui délèguent aux nouveaux services statiques.

## Pièges de l'Environnement (WAMP / Windows)
- **Génération Markdown via PowerShell** : `Set-Content` avec `here-strings` en guillemets doubles (`@"`) interprète les backticks (`) comme échappements. Utiliser des `here-strings` à guillemets simples (`@'`) ou l'outil `write_to_file`.
