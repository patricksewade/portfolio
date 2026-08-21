---
trigger: glob
glob: "*.php"
name: Base de Données & PDO
---
# Règles Base de Données et SQL (PDO)

- **Connexion** : Un seul fichier `db_connect.php`. Forcer l'encodage `utf8mb4` dans le DSN. Interclassement `utf8mb4_unicode_ci` et moteur `InnoDB`.
- **Configuration** : Activer explicitement les exceptions : `[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]`. Affichage d'erreur technique via `print_r($pdo->errorInfo())` si besoin.
- **Sécurité & Requêtes** : 
  - Bannir `query()`. Utiliser SYSTÉMATIQUEMENT `prepare()`. Préférer les **marqueurs nommés** (`:email`) aux marqueurs anonymes (`?`) pour une meilleure lisibilité.
  - Spécifier `PDO::PARAM_INT` en 3ème paramètre de `bindValue()` pour les entiers (ID, LIMIT).
- **Extraction** : Utiliser `fetchAll()` au lieu du vieux `while($row = fetch())`.
- **Performances** : Ne jamais rapatrier de données pour compter avec `count()`. Toujours utiliser le SQL `SELECT COUNT(id)`.
- **Conventions SQL** : Mots-clés et fonctions SQL en MAJUSCULES (`SELECT`, `INSERT`, `COUNT()`). Ne pas récupérer d'autres champs non groupés lors de l'utilisation d'une agrégation.
- **Architecture Base** :
  - **Nommage** : Les bases de données, tables et champs DOIVENT être nommés en **Anglais** avec des termes clairs.
  - Colonne de hash de mots de passe en `VARCHAR(255)` minimum.
  - Sauvegardes automatisées (Dump) en production.
