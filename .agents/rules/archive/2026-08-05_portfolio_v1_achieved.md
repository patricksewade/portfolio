# Archive : Portfolio V1 (MVC Procédural) achevé

**Date d'achèvement :** 05 Août 2026

## Résumé du développement
La première version du portfolio a été intégralement développée en PHP 8.3 procédural, sans utiliser de framework ni d'ORM, en respectant une architecture MVC stricte.

## Caractéristiques clés :
- **Routage :** Front-Controller `index.php` avec `router.php` (gestion des 404/405/500).
- **DAL :** Fichiers séparés (`projects_dal.php`, etc.) avec PDO et requêtes préparées.
- **Sécurité :** 
  - Prévention XSS (fonction `e()`).
  - Prévention CSRF manuelle (jetons de session).
  - Protection des accès admin via `require_admin()`.
  - Mot de passe administrateur haché.
- **Interface :** Tailwind CSS (CDN) avec composants PHP réutilisables.
- **Mailing :** SMTP natif via `stream_socket_client` sans librairie tierce.

## Conclusion
Le code est prêt pour le déploiement en production sur Byethost. 
Le script d'installation a été supprimé avec succès.
La base architecturale est posée et assainie en prévision de la future transition vers la V2 (POO).
