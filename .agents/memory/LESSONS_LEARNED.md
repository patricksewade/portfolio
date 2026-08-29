# Registre d'Apprentissage & Anti-Patterns

_Ce fichier consigne les erreurs passées de l'IA pour éviter leur répétition._
**RÈGLE ABSOLUE : Maximum 15 puces. Si dépassement, synthétiser ou archiver.**

## Erreurs de Code / Logique à ne plus reproduire
- **Configuration & Secrets** : Ne jamais proposer un fichier `env.php` pour la configuration secrète. Le fichier `.env` reste la norme absolue et est parsé avec `Config\EnvLoader`. Ne jamais commiter `.env` (purger l'historique complet avec BFG en cas de fuite).
- **Scripts d'installation** : Ne pas placer les scripts d'installation en dehors du `Document Root` (`/public`) sous peine de 404. Les placer dans `/public` temporairement puis les supprimer de façon sécurisée.
- **UI/UX & Accessibilité** : Conserver l'alignement à gauche pour les blocs de texte/formulaires même si le conteneur est centré. Éviter orange/jaune vif (`#f59d21`) sur fond blanc (ratio < 3:1 WCAG, utiliser `#d97706`). Éviter Bento-style avec marges négatives sans CSS Grid.
- **UI/UX Dashboards Admin** : Ne jamais écraser une table de données complexe dans une colonne restreinte. Privilégier un layout pleine largeur avec indicateurs clés (KPIs) en haut.
- **OOP MVC — Isolation & Flux HTTP** : Factory PDO injectée dans les Repositories (pas de singleton PDO). Superglobales encapsulées dans `Request` immutable. `Response->send()` est l'unique point de sortie (`echo`/`header()` bannis des contrôleurs).
- **OOP MVC — Rétrocompatibilité Vues** : Ajouter `toArray()` sur les entités et utiliser des polyfills procéduraux (`e()`, `is_admin()`) dans `src/helpers.php` pour découpler les vues sans réécriture massive.
- **Rendu des Chemins & URLs** : Stocker uniquement le chemin relatif en BDD (ex: `uploads/projects/image.jpg`) et préfixer par `BASE_URL` dans les vues/composants.
- **Cycle de vie des Fichiers & Orphelins** : Lors du remplacement d'une image ou de la suppression d'un projet, supprimer physiquement le fichier sur disque avec `unlink()` pour éviter l'accumulation de fichiers orphelins.
- **Gestion des Erreurs d'Upload & Flash messages** : Encapsuler l'upload d'images dans un `try/catch (\Exception $e)` côté contrôleur pour intercepter les rejets (taille > 2 Mo, formats invalides) et afficher des messages d'erreur clairs via les flash messages.
- **Sécurité CSRF sur Actions Sensibles** : Ne jamais omettre la génération et la propagation du token CSRF (`SecurityService::generateCsrfToken()`) dans les formulaires d'actions unitaires (suppression de messages, de projets, etc.).
- **Dynamisation & Accessibilité Frontend** : Ne jamais coder en dur des métriques dynamiques (ex: compteur de projets) dans les vues alors qu'un repository existe. Systématiser l'accessibilité (`aria-required="true"`, `rel="noopener noreferrer"`) sur les formulaires et liens externes.
- **Vérification Routage (Symfony)** : Toujours s'assurer du nom exact des routes (via `php bin/console debug:router`) avant de les injecter dans les templates Twig pour éviter les erreurs 500.
- **Templates Twig & Migration** : Lors de la conversion des anciennes vues vers Twig, supprimer systématiquement toute balise `<?php ... ?>` résiduelle, imposer l'encodage `UTF-8` (éviter l'UTF-16LE généré par certains outils Windows qui casse le parsing), et respecter la casse exacte (camelCase) pour les accès aux propriétés d'objets DTO, en veillant à l'initialisation des flags d'état (ex: `isEdit`).

## Pièges de l'Environnement (WAMP / Windows)
- **Manipulation de Fichiers (Encodage)** : Sous PowerShell (`Get-Content`/`Set-Content`) ou via scripts Python sans forcer l'encodage `UTF-8`, les caractères accentués sont corrompus. Pour migrer ou modifier des fichiers en masse, la solution la plus fiable est de réécrire les fichiers de zéro (outil `write_to_file`) ou d'utiliser un script PHP dédié (`file_get_contents`/`file_put_contents` gérant nativement mieux l'UTF-8 sur ce système). Toujours supprimer les scripts temporaires et dossiers résiduels après la migration.
