# Registre d'Apprentissage & Anti-Patterns

_Ce fichier consigne les erreurs passées de l'IA pour éviter leur répétition._
**RÈGLE ABSOLUE : Maximum 15 puces. Si dépassement, synthétiser ou archiver.**

## Erreurs de Code / Logique à ne plus reproduire
- Ne jamais proposer un fichier `env.php` pour la configuration secrète, même dans un projet 100% procédural sans framework. Le fichier `.env` reste la norme absolue. Pour l'utiliser sans Composer, il faut le parser avec une fonction native (comme `parse_ini_file()`).

## Pièges de l'Environnement (WAMP / Windows)
