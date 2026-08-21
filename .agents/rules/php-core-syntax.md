---
trigger: glob
glob: "*.php"
name: Syntaxe et Cœur PHP
---
# Standards de Syntaxe PHP (8.3.27 max)

> **AVERTISSEMENT STRICT** : Ce projet est limité à **PHP 8.3.27**. Certaines fonctionnalités de PHP 8.4+ ou 8.5+ sont mentionnées ci-dessous à titre de culture générale, mais **NE DOIVENT ABSOLUMENT PAS ÊTRE UTILISÉES** par l'IA.

- **Typage Strict & Types Personnalisés** : `declare(strict_types=1);` obligatoire. Créer et utiliser des types personnalisés (Classes) pour encapsuler les données et profiter du typage, plutôt que d'utiliser des tableaux génériques. Typer tous les arguments, retours (`void`, `never`), et types annulables (`?Type`).
- **Langue & Nommage (Règle d'Or)** : 
  - **Code source** (Variables, Classes, Méthodes) : 100% en **Anglais**.
  - **Documentation** (Commentaires & PHPDoc) : En **Français** pour l'explication des règles métier.
  - **Interface utilisateur** (HTML, erreurs UI) : En **Français**.
  - **Format** : `camelCase` pour variables. Verbes pour les méthodes. Pluriel/Singulier pour les boucles (`$users as $user`).
- **Constantes** : `true`, `false`, `null` toujours en minuscules.
- **Opérateurs** : Espaces avant et après (`$total = $prix + 5;`). Comparaison stricte `===` et `!==` (interdiction de `==`).
- **Programmation Orientée Objet (POO)** :
  - **Encapsulation** : Propriétés en `private` ou `protected`. Utiliser systématiquement la Promotion de Propriétés. *(Note : La visibilité asymétrique `public private(set)` de PHP 8.4 est notée pour la théorie, mais **INTERDITE** ici en raison de la limite PHP 8.3).*
  - **Immutabilité** : Privilégier les classes `readonly`. *(Note : La syntaxe `clone with (...)` de PHP 8.5 est **INTERDITE**. Utiliser un clonage classique avec modification).*
  - **Héritage & Classes** : Classes `final` par défaut. Appeler `parent::__construct()` si le parent est construit. L'attribut `#[\Override]` est OBLIGATOIRE lors de la surcharge (parent ou interface).
  - **Méthodes Magiques & Attributs** : `__invoke()` réservé aux "Single Action Controllers". `#[\NoDiscard]` obligatoire sur les méthodes pures. `implements \Stringable` requis si `__toString()` est implémenté. `__serialize()` requis si l'objet contient des ressources ou secrets.
  - **Contexte Statique** : Utiliser `static::` plutôt que `self::` pour le chaînage de méthodes (`return $this;`) pour préserver l'héritage.
- **Fonctionnalités Modernes** : 
  - Préférer `match` à `switch`.
  - Coalescence nulle `??` (`$_POST['email'] ?? ''`).
  - `DateTimeImmutable` exclusivement (jamais `DateTime`).
- **Chaînes & Tableaux** : 
  - Guillemets simples pour texte brut, doubles pour l'interpolation.
  - Toujours mettre une virgule finale dans les tableaux.
  - Fonctions `mb_` obligatoires (`mb_strlen`, etc.).
  - `in_array()` avec `true` en 3ème paramètre.
  - `array_filter($tab)` sans callback pour nettoyer les valeurs vides.
- **Fonctions Anonymes & Callbacks** :
  - Distinguer les flèches courtes `fn() =>` pour les expressions simples, et les closures classiques `function () use ($var) {}` pour la logique multiligne.
- **JSON et API** :
  - Utiliser `json_encode($data, JSON_THROW_ON_ERROR)` et `json_decode($json, true, 512, JSON_THROW_ON_ERROR)` pour capturer les erreurs de formatage via `Exception` plutôt que des échecs silencieux.
- **Bonnes Pratiques Générales** :
  - Pas de balise `?>` finale dans les fichiers 100% PHP.
  - `require_once __DIR__ . '/...';` pour les inclusions. Autoloader uniquement au point d'entrée.
  - *Fail Fast* : Valider les données au début des fonctions, lancer des `Exception` si invalides.
