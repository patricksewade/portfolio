# Jalon : Migration complète vers OOP MVC — 2026-08-21

## Contexte
Le portfolio PHP procédural a été entièrement migré vers une architecture **OOP MVC stricte** (PHP 8.3 max, PSR-4 via Composer).

## Résultats
- **18/18 classes** chargées avec succès via l'autoloader PSR-4.
- Namespace `App\` mappé sur `./src/` via `composer.json`.
- `public/index.php` réécrit : bootstrap, injection manuelle de dépendances, dispatch via `Router`.

## Couches créées dans `src/`

| Couche | Classes | Rôle |
|---|---|---|
| `Config/` | `EnvLoader`, `Database` | Env + Factory PDO |
| `Http/` | `Request`, `Response` | Encapsulation HTTP |
| `Core/` | `Router`, `ViewRenderer` | Dispatch + rendu |
| `Model/` | `Project`, `Message`, `Admin` | readonly final class |
| `Repository/` | `ProjectRepository`, `MessageRepository`, `AdminRepository` | Accès PDO |
| `Service/` | `SecurityService`, `SmtpMailer` | CSRF, XSS, Email |
| `Controller/` | `HomeController`, `AuthController`, `ContactController`, `AdminController` | Actions MVC |

## Anti-patterns éliminés
- ❌ Singleton procédural `static $pdo = null` → ✅ Factory `Database::createConnection()`
- ❌ `$pdo->query()` non préparé → ✅ `$pdo->prepare()` partout
- ❌ `header()` + `exit` en logique → ✅ `Response::redirect()` + `Response->send()`
- ❌ Superglobales en logique → ✅ `Request::fromGlobals()` seul point d'accès
- ❌ Fonctions globales `e()`, `require_admin()` → ✅ méthodes de classe (`SecurityService::escape()`)

## À faire (nettoyage)
- Supprimer le dossier `/includes` (legacy, plus utilisé) lors d'un prochain nettoyage.
- Les templates `/templates` sont inchangés — variables toujours injectées via `extract()` dans `ViewRenderer`.
