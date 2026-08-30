---
trigger: always
name: Règles Globales du Projet
---

# Directives de Développement

- **Contrainte de Version PHP** : La version maximale supportée par le projet est strictement **PHP 8.3.27**. Il est formellement interdit d'utiliser des syntaxes ou fonctionnalités exclusives à PHP 8.4+ (ex: *Property Hooks*, *Asymmetric Visibility*, `array_find()`, etc.).
- L'historique et l'architecture du projet ne sont plus chargés automatiquement. Avant de proposer un plan d'implémentation ou de modifier l'architecture, tu DOIS utiliser ta compétence (Skill) `project-memory` pour lire l'état actuel du projet. Il est impératif de ne pas répéter les erreurs consignées dans les leçons apprises.
- Si tu as besoin d'un historique technique très ancien, et seulement si on te le demande, réfère-toi au dossier `.agents/rules/archive/`.
- **Déploiement & Hébergement** : Avant toute intervention liée au déploiement en production, à la configuration serveur (Apache/Nginx) ou à l'adaptation de Symfony pour l'hébergeur, tu DOIS lire le fichier `.agents/memory/HOSTING.md`.

# Hygiène et Sécurité du Dépôt (Nettoyage Obligatoire)

- **RÈGLE DE CONFIDENTIALITÉ ABSOLUE** : Il est formellement interdit d'inscrire ou de conserver des données sensibles (emails personnels, identifiants, mots de passe, clés d'API, hôtes FTP/MySQL, chemins physiques absolus) dans les fichiers versionnés du projet, **en particulier dans les documents du dossier `.agents/`**. Utilise systématiquement des balises génériques (ex: `[EMAIL_PERSONNEL]`, `[FTP_USERNAME]`). Ces données réelles ne doivent exister QUE dans les fichiers `.env` locaux non-versionnés.
- Tu es autorisé à créer des fichiers temporaires (ex: `test.php`, `debug.json`, `dump.php`) uniquement pour valider tes hypothèses techniques en cours de tâche.
- RÈGLE ABSOLUE : Dès que ton test est validé et que le code final est intégré, tu DOIS impérativement supprimer de toi-même tous les fichiers de test que tu as générés.
- Il est strictement interdit de laisser subsister un fichier de debug ou de test dans l'arborescence avant de clôturer ton intervention.

# Protocole de Mémoire (Ne pas outrepasser)

- L'historique des conversations ne doit jamais polluer le contexte.
- Lorsqu'une tâche est validée et terminée, n'invente pas de résumé dans le chat.
- À la fin de chaque tâche majeure validée, utilise l'outil `invoke_subagent` pour invoquer le sous-agent `archivist`. Il se chargera en arrière-plan de mettre à jour la mémoire du projet sans polluer le contexte de notre conversation.

# Accès Base de Données (MCP)
