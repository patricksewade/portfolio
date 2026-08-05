---
trigger: always
name: Règles Globales du Projet
---

# Directives de Développement

- Avant de proposer un plan d'implémentation ou de coder, tu DOIS lire l'état actuel de l'architecture dans le fichier `@.agents/memory/ARCHITECTURE.md` ET tes propres leçons apprises dans `@.agents/memory/LESSONS_LEARNED.md`. Il est impératif de ne pas répéter les erreurs consignées dans ce dernier.
- Si tu as besoin d'un historique technique très ancien, et seulement si on te le demande, réfère-toi au dossier `@.agents/rules/archive/`.

# Hygiène et Sécurité du Dépôt (Nettoyage Obligatoire)

- Tu es autorisé à créer des fichiers temporaires (ex: `test.php`, `debug.json`, `dump.php`) uniquement pour valider tes hypothèses techniques en cours de tâche.
- RÈGLE ABSOLUE : Dès que ton test est validé et que le code final est intégré, tu DOIS impérativement supprimer de toi-même tous les fichiers de test que tu as générés.
- Il est strictement interdit de laisser subsister un fichier de debug ou de test dans l'arborescence avant de clôturer ton intervention.

# Protocole de Mémoire (Ne pas outrepasser)

- L'historique des conversations ne doit jamais polluer le contexte.
- Lorsqu'une tâche est validée et terminée, n'invente pas de résumé dans le chat.
- À la fin de chaque tâche validée, utilise exclusivement le workflow `/commit_memory` pour mettre à jour la documentation du projet.

# Accès Base de Données (MCP)
