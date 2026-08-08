# Registre d'Apprentissage & Anti-Patterns

_Ce fichier consigne les erreurs passées de l'IA pour éviter leur répétition._
**RÈGLE ABSOLUE : Maximum 15 puces. Si dépassement, synthétiser ou archiver.**

## Erreurs de Code / Logique à ne plus reproduire
- Ne jamais proposer un fichier `env.php` pour la configuration secrète. Le fichier `.env` reste la norme absolue et peut être parsé avec `parse_ini_file()`.
- **Scripts d'installation** : Ne pas placer les scripts d'installation (devant être exécutés via le navigateur) en dehors du `Document Root` (ex: `/public`), car ils renverront une erreur 404 dans une architecture sécurisée stricte. Il faut les placer dans `/public` temporairement puis les détruire de façon sécurisée.
- UI/UX : Conserver systématiquement l'alignement à gauche pour les blocs de texte ou formulaires afin de préserver la ligne directrice de lecture naturelle, même si le conteneur principal est centré (ne pas forcer le `text-center` ou `justify-center` partout).

## Pièges de l'Environnement (WAMP / Windows)
