---
name: project-memory
description: Compétence permettant de consulter l'historique, l'architecture et les leçons apprises du projet pour garantir la continuité du contexte. À utiliser avant de concevoir un plan d'implémentation ou de modifier des fichiers clés.
---

# Project Memory Skill

Utilise cette compétence pour éviter l'amnésie de session et maintenir le contexte du projet sans surcharger ton prompt système.

## Quand utiliser cette compétence
- Avant de concevoir ou proposer un plan d'implémentation (`implementation_plan.md`).
- Avant d'effectuer des changements architecturaux importants.
- Pour prendre connaissance des erreurs passées avant de commencer à coder.

## Comment l'utiliser
Utilise tes outils de lecture de fichiers pour consulter ces documents :
1. Lis le fichier `.agents/memory/ARCHITECTURE.md` pour comprendre l'état technique actuel du projet (conventions, arborescence, BDD, etc.).
2. Lis le fichier `.agents/memory/LESSONS_LEARNED.md` pour éviter de reproduire des erreurs ou anti-patterns.
3. Si l'utilisateur te le demande explicitement, consulte les archives dans `.agents/rules/archive/`.
