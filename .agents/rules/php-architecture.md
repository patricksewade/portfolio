---
trigger: glob
glob: "*.php"
name: Architecture & Outils PHP
---
# Architecture, Design et Outils PHP

- **Design Patterns & Structure Globale** :
  - **MVC & Routeur** : Utiliser un contrôleur frontal (`index.php`) pour router les requêtes. Un Contrôleur = Une Classe, chaque action = Une méthode. Le Contrôleur lie le Modèle (métier) et la Vue (affichage).
  - **Méthodologie Outside-in** : Implémenter en commençant par la Vue, puis le Contrôleur (avec fausses données), affiner le Contrôleur (services), puis terminer par le Modèle. Ne pas optimiser prématurément (KISS/YAGNI).
  - Arborescence professionnelle : `public/`, `src/`, `templates/`. Toujours segmenter le code par "Logique Métier" (Business) vs "Technique".
  - **Principes SOLID** : S (1 classe = 1 concept/raison de changer). O (Extensible via polymorphisme, fermé aux modifications directes). L (Liskov, l'enfant respecte le contrat parent). I (Petites interfaces ultra-précises). D (Inversion de dépendances : injecter des Interfaces via le constructeur, pas des classes concrètes). Loi de Déméter (pas d'appels enchaînés `$a->getB()->getC()`).
  - **Design Patterns (Pragmatiques)** : Utiliser *Factory Method* pour abstraire l'instanciation, *Adapter* pour isoler le code tiers, *Strategy* pour interchanger des algorithmes, *Decorator* pour étendre des comportements sans héritage. **Bannir le pattern Singleton**.
  - Favoriser la **Composition** sur l'héritage.
  - **KISS & Abstraction** : Une duplication assumée vaut mieux qu'une mauvaise abstraction. Attendre 2-3 implémentations réelles avant de créer une interface. Ne pas optimiser avant d'avoir mesuré (ex: Blackfire).
  - **Flux HTTP (PSR-7)** : Interdiction absolue d'utiliser les superglobales (`$_GET`, `$_POST`, `$_SESSION`) ou les fonctions procédurales (`header()`, `echo`) dans la logique. Tout doit passer par un objet immuable `Request` et retourner un objet `Response`.
  - Design Pattern PRG (Post-Redirect-Get) obligatoire pour les formulaires.
- **Espaces de Noms (Namespaces)** :
  - Utiliser `App\` comme racine pour l'application finale. L'arborescence doit refléter exactement les dossiers (PSR-4 via l'autoload Composer).
  - Toujours utiliser le mot-clé `use` en haut de fichier ; ne jamais écrire le chemin complet d'une classe inline.
- **Vues, Layouts et Templates** :
  - Différencier le **Layout** (structure globale avec des "trous") des **Templates** (composants réutilisables).
  - Les variables fournies aux templates doivent être les plus simples possibles (prêtes à l'affichage).
  - Utiliser l'Output Buffering (`ob_start()` et `ob_get_clean()`) pour capturer et injecter les templates dans le layout.
  - Syntaxe alternative obligatoire dans les vues (`<?php foreach(...): ?>`, `endforeach;`, `<?= ?>`).
- **Gestion des Erreurs Globale** : Créer des classes d'exception spécifiques par type d'erreur métier pour un traitement fin. Conserver `catch (Throwable $e)` comme filet de sécurité absolu (à placer en dernier lors de catch successifs).
- **Réseau / cURL** : 
  - Toujours définir `CURLOPT_TIMEOUT` (ex: 5s). 
  - `CURLOPT_SSL_VERIFYPEER` à `false` est toléré UNIQUEMENT en local/dev. Préférer importer un client HTTP léger (`symfony/http-client` ou `guzzle`) plutôt que d'utiliser cURL nu. URL limitées en général à 256 caractères.
  - Toujours utiliser `parse_url()` pour décortiquer une URL plutôt que de créer des regex complexes.
- **Analyse Statique & PHPDoc** :
  - Pas de PHPDoc "perroquet" (qui répète bêtement les types du code PHP natif). 
  - Utiliser la PHPDoc quand elle apporte une information : typage fin des tableaux (ex: `@param int[]`), les exceptions, ou le dictionnaire.
  - Utiliser **PHPStan au Niveau 9** pour une analyse statique maximale, et **PHP CS Fixer** (normes PER-Coding Style). Automatiser via CI/CD (Githooks).
  - Validation du code via des tests automatisés **PHPUnit**.
- **Déploiement** : Lancer `composer install --no-dev --optimize-autoloader` avant de déployer en production.
