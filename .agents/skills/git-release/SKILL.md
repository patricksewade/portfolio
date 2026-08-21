---
name: git-release
description: Compétence à utiliser pour préparer une release. Permet de lire l'historique Git et de générer ou mettre à jour le CHANGELOG.md selon les Conventional Commits.
---

# Git Release & Changelog Skill

Cette compétence doit être utilisée lorsque l'utilisateur demande de préparer une release (tag) ou de générer un changelog.

## Étapes de génération de Release

1. **Vérifier l'état du dépôt** :
   Assure-toi qu'il n'y a pas de modifications non commitées (`git status`).
2. **Trouver le dernier tag** :
   Exécute `git describe --tags --abbrev=0` pour trouver la dernière version. Si aucun tag n'existe, extrais tout l'historique.
3. **Extraire l'historique des commits** :
   Exécute `git log <dernier_tag>..HEAD --oneline` pour récupérer tous les commits depuis la dernière release.
4. **Catégoriser les commits** :
   Trie les commits récupérés par type (selon la convention) :
   - `feat` -> Nouvelles fonctionnalités
   - `fix` -> Corrections de bugs
   - `refactor`, `perf` -> Améliorations techniques
   *(Ignore les `chore`, `docs`, `style` et `test` pour le changelog public).*
5. **Mettre à jour `CHANGELOG.md`** :
   Ajoute une nouvelle section en haut du fichier `CHANGELOG.md` (situé à la racine) avec le numéro de la nouvelle version et la date du jour. Utilise le format Markdown avec des listes à puces.
6. **Préparer la commande de Tag** :
   Retourne à l'utilisateur un résumé et la commande pour créer le tag Git (ex: `git tag -a v1.2.0 -m "Release v1.2.0"`).
