---
name: commit_memory
description: Workflow pour mettre à jour l'architecture, le backlog et archiver les tâches.
---

# Étapes de mise à jour de la mémoire

1. **Analyse silencieuse** : Identifie les fichiers modifiés et l'état d'avancement de la tâche.
2. **Lecture du contexte** : Consulte `@.agents/memory/ARCHITECTURE.md` et `@.agents/memory/ACTIVE_TASKS.md`.
3. **Mise à jour du Backlog & Apprentissage (LIMITES ET AJOUTS)** :
   - **Tâche achevée** : Bascule la tâche vers la section "Terminé".
   - **Tâche inachevée** : Si la session s'arrête avant la fin, place (ou laisse) la tâche dans "En Cours" en ajoutant une sous-puce expliquant ce qu'il reste à faire.
   - **Découverte** : Si de la dette technique est découverte, ajoute-la dans "À Faire".
   - **Auto-critique** : Si tu as fait une erreur de raisonnement ou de code durant cette tâche, ou si l'utilisateur a dû te corriger, ajoute OBLIGATOIREMENT une puce dans `@.agents/memory/LESSONS_LEARNED.md` décrivant l'erreur et la bonne approche.
   - **RÈGLE ABSOLUE** : `ACTIVE_TASKS.md` (Max 15 tâches) et `LESSONS_LEARNED.md` (Max 15 puces). Purge, condense ou archive si les limites sont atteintes.
4. **Mise à jour de l'Architecture (LIMITES STRUCTURELLES)** :
   - Si la modification est une évolution, propose une mise à jour de `@.agents/memory/ARCHITECTURE.md`.
   - **RÈGLE ABSOLUE** : Le fichier ne doit JAMAIS dépasser **8 puces (items) par section principale**.
   - En cas de dépassement, condense l'existant ou archive une section entière.
5. **Archivage et Portabilité (Liens Relatifs)** :
   - Si un module est achevé, crée un NOUVEAU fichier d'archive (ex: `2026-07-31_nom_du_module.md`) dans `@.agents/rules/archive/`.
   - **RÈGLE ABSOLUE** : Les liens vers ces archives DOIVENT être strictement relatifs (ex: `./.agents/rules/archive/fichier.md`). L'utilisation de chemins absolus locaux (ex: `C:/wamp64/...`) est formellement interdite.
6. **Clôture** : Génère un Artifact (Diff) pour ma validation finale. Ne génère aucun texte superflu.
