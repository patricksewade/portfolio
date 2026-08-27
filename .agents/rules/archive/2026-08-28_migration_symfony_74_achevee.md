# Archive : Fin de la Migration Symfony 7.4 LTS (Jalons 1 à 6)

**Date d'archivage :** 2026-08-28

Cette archive marque l'achèvement complet de la migration du projet d'un framework MVC "maison" (PHP 8.3) vers le framework robuste **Symfony 7.4 LTS**.

## Jalons Accomplis
1. **Bootstrapping Symfony** : Initialisation du projet avec Symfony Flex, mise en place des répertoires standards.
2. **Modèles & Doctrine ORM** : Migration des anciennes entités (`Project`, `Message`, `Admin`) vers Doctrine. Génération des migrations et paramétrage de l'accès aux données.
3. **Sécurité (Guard/FormLogin)** : Implémentation du composant Security de Symfony. Création d'un système d'authentification pour les administrateurs avec le hasher de mots de passe de Symfony.
4. **Contrôleurs (CRUD Projets)** : Remplacement complet de l'ancien `AdminProjectController` et des autres contrôleurs par des contrôleurs Symfony natifs tirant parti de l'injection de dépendances, de l'Autowiring et du Routeur de Symfony.
5. **Twig & Vues** : Intégration de Twig. Un **script customisé** a été utilisé pour faciliter la conversion des anciens templates PHP bruts (avec `helpers.php`) vers la syntaxe Twig (implémentation de `base.html.twig`, des blocks, et auto-échappement).
6. **Mailer & Tests Fonctionnels** : 
   - Migration de `SmtpMailer` custom vers Symfony Mailer.
   - Mise en place des premiers tests fonctionnels basiques (Panther / WebTestCase) pour garantir la non-régression.

## Impacts Architecturaux
- **Fin du "Do It Yourself"** : L'infrastructure bas-niveau (`Router`, `ViewRenderer`, PDO manuel, classes `Request`/`Response` custom) est remplacée par les composants de la fondation Symfony.
- **ORM** : Plus de requêtes SQL écrites manuellement via PDO. Doctrine gère désormais les mappings et les relations.
- **Sécurité et XSS** : Twig gère automatiquement l'échappement, éliminant le besoin d'appels répétitifs à la méthode custom `e()`. La protection CSRF est déléguée aux formulaires Symfony.

La branche de migration a atteint la maturité nécessaire et le projet entre dans une nouvelle phase d'évolution stabilisée sur l'écosystème Symfony.
