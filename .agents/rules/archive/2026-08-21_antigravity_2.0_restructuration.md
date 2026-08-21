# Archive : Migration vers l'Architecture Agentique Antigravity 2.0
Date : 2026-08-21

## Résumé du jalon
Le projet a subi une restructuration majeure de son dossier `.agents` pour se conformer aux standards stricts de Google Antigravity 2.0 (Agent Scaffolding / Workspace Customizations). L'objectif était d'optimiser la consommation de tokens, d'automatiser les processus (mémoire, git) et d'adopter les nouvelles fonctionnalités natives d'Antigravity.

## Changements Majeurs
1. **Suppression de `ACTIVE_TASKS.md`** : Délégation de la gestion des tâches aux Artifacts natifs d'Antigravity.
2. **Optimisation de `AGENTS.md`** : Suppression des `@mentions` coûteuses en tokens.
3. **Mémoire de Projet** : Création de la compétence à divulgation progressive (Skill) `project-memory` pour consulter l'historique à la demande, et création du sous-agent `archivist` pour mettre à jour la mémoire de manière asynchrone et en arrière-plan.
4. **Conventions Git** : Création d'une Workspace Rule `git-conventions.md` pour imposer les Conventional Commits et un nommage standardisé des branches.
5. **JSON Hooks (PreToolUse)** : Mise en place de `hooks.json` déclenchant `scripts/check_commit.php` pour bloquer automatiquement tout commit ne respectant pas les règles Git.
6. **Livraison Continue** : Création de la Skill `git-release` et du sous-agent `pr-reviewer` pour automatiser la livraison et la revue de code sur GitHub.

## Décisions Architecturales
L'approche choisie permet d'éviter l'engorgement du contexte de l'agent principal (Main Agent) en déléguant les tâches spécialisées (mémoire, revues de code) à des sous-agents et en chargeant les instructions spécifiques de manière paresseuse (lazy loading) via les Skills.
