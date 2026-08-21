---
name: Git Conventions and Best Practices
trigger: model decision
description: À appliquer systématiquement lors d'une opération Git (commit, création de branche, pull request) ou de discussions relatives au versioning.
---

# Conventions Git et de Versioning

Ces règles régissent de manière stricte le nommage des branches et des messages de commit pour ce projet. Tu dois les appliquer sans exception lors de toute proposition de versioning.

## 1. Conventions de Commits (Conventional Commits)

**Format strict exigé :** `type(scope): description`

**Règles rédactionnelles :**
- Le titre (description) doit être à l'impératif, en minuscules et sans point final.
- Si les changements sont significatifs, ajoute OBLIGATOIREMENT un corps explicatif (body) séparé du titre par une ligne vide.

**Types autorisés :**
- `feat` : Nouvelle fonctionnalité (ex. `feat(auth): add login with google`).
- `fix` : Correction d'un bogue (ex. `fix(cart): calculate correct tax for discounts`).
- `refactor` : Modification du code qui n'ajoute pas de fonctionnalité et ne corrige pas de bogue (ex. `refactor(db): migrate procedural mysql to pdo`).
- `perf` : Amélioration des performances (ex. `perf(queries): add index on user_email`).
- `style` : Formatage, espaces, points-virgules manquants, sans impact sur la logique.
- `docs` : Mise à jour de la documentation ou des commentaires PHPDoc.
- `test` : Ajout ou correction de tests.
- `chore` : Tâches de maintenance, mise à jour des dépendances, configuration `.gitignore`.

## 2. Conventions de Nommage des Branches

**Format strict exigé :** `type/nom-en-kebab-case`
*Note : Si un ticket existe (Jira, GitHub Issues), intégrer son ID au début (ex. `feat/GH-12-password-reset`).*

**Préfixes standards autorisés :**
- `feat/` (ou `feature/`) : Développement d'une nouvelle fonction (ex. `feat/user-registration`).
- `fix/` (ou `bugfix/`) : Correction d'un bogue en cours de développement (ex. `fix/cart-session-loss`).
- `hotfix/` : Correction urgente déployée directement en production.
- `refactor/` : Refonte ou nettoyage d'un module (ex. `refactor/orders-database`).
- `chore/` : Configuration d'outils, Docker, mise à jour de packages (ex. `chore/setup-phinx`).
