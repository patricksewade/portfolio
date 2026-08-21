---
trigger: glob
glob: "*.php"
name: Sécurité PHP
---
# Règles de Sécurité PHP

- **XSS & Affichage** : Toujours filtrer les données utilisateur à l'affichage : `htmlspecialchars($var, ENT_QUOTES, 'UTF-8')`. (Pour les URLs, utiliser `&amp;` au lieu de `&`).
- **CSRF** : Générer `bin2hex(random_bytes(32))`, vérifier obligatoirement avec `hash_equals($tokenSession, $tokenPost)` et non `===`.
- **Formulaires & Entrées** : Action destructrice = POST exclusif (`if ($_SERVER['REQUEST_METHOD'] === 'POST')`). Valider avec `filter_var`, `filter_input`, `empty`.
- **Mots de passe & Crypto** : Hachage avec `password_hash` (`Argon2id`). Authentification = message générique "Identifiants incorrects". Toujours utiliser `hash_equals` pour comparer mots de passe, hash ou tokens (empêche Timing Attack).
- **Sessions** : 
  - Démarrage sécurisé : `if (session_status() === PHP_SESSION_NONE) { session_start(); }`
  - Protection fixation : `session_regenerate_id(true)` après connexion.
  - Nettoyage total : `session_destroy(); $_SESSION = [];`
  - Messages Flash : Sous-tableau dédié `$_SESSION['flash']`.
- **Cookies** : Remplir tous les paramètres de `setcookie()`, activer `HttpOnly` à `true` et `secure` à `true`.
- **Upload de Fichiers** : 
  - Whitelist d'extensions (rejet strict du reste).
  - Ne jamais croire `$_FILES['name']` (renommer via `uniqid()`) ni `$_FILES['type']` (utiliser `finfo`).
  - Création dynamique de dossier (`is_dir`, `mkdir`).
- **Production** : 
  - Aucun `var_dump()` ou `dd()` dans le code de production. 
  - Pas de `echo $e->getMessage();` en production (fuite d'infos, utiliser un message générique).
  - Variables d'environnement : Fichier `.env.example` dans le dépôt. `safeLoad()` de `vlucas/phpdotenv`.
