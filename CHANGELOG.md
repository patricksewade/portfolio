# Changelog

Toutes les modifications notables apportées à ce projet sont documentées dans ce fichier.
Le format est basé sur [Keep a Changelog](https://keepachangelog.com/fr/1.0.0/) et respecte [Semantic Versioning](https://semver.org/lang/fr/).

## [1.1.0] - 2026-08-27

### Ajouté (Features)
- **Gestion dynamique des projets (Admin)** : Module d'administration complet (CRUD) permettant d'ajouter, modifier et supprimer des projets directement depuis l'interface d'administration.
- **Upload sécurisé d'images** : Intégration de `samayo/bulletproof` pour la gestion des images de projet (validation MIME, limitation à 2 Mo et suppression physique des orphelins).
- **Navigation & Réseaux sociaux** : Liens directs vers LinkedIn et GitHub intégrés dans l'en-tête (Header) ainsi qu'un bouton d'action premium pour le téléchargement direct du CV.
- **Composant 'Back to Top'** : Bouton de retour en haut de page interactif avec défilement fluide et animations d'apparition au scroll.
- **Mentions légales premium** : Restructuration complète de la page des mentions légales au design dark glassmorphism.
- **Accessibilité & Formulaires** : Ajout systématique des marqueurs de champs obligatoires et des attributs `aria-required="true"`.

### Refactorisation (Refactoring & Architecture)
- **Architecture OOP MVC stricte** : Migration complète du code procédural vers une architecture Orientée Objet conforme PSR-4 (classes immuables `readonly`, namespace `App\`, conteneur / bootstrap propre).
- **Sécurité renforcée** : Encapsulation des requêtes/réponses HTTP (`Request`/`Response`), protection CSRF systématique sur toutes les actions critiques, sécurisation XSS via `SecurityService`.
- **Compteur de projets dynamique** : Remplacement des compteurs statiques par des données calculées en temps réel via le `ProjectRepository`.

## [1.0.0] - 2026-08-21

### Ajouté
- **Portfolio One-Page Initial** : Architecture MVC initiale avec Front-Controller `index.php` et routeur personnalisé.
- **Design System & TailwindCSS** : Interface One-Page responsive avec thème sombre, composants UI réutilisables et mise en page optimisée.
- **Espace d'Administration & Messagerie** : Tableau de bord administrateur avec consultation des messages reçus via le formulaire de contact.
- **Envoi d'e-mails sécurisé** : Module SMTP natif via `stream_socket_client` (compatible Brevo et Mailtrap).
- **Sécurité de base** : Protection CSRF, hachage sécurisé des mots de passe admin et filtrage XSS.
- **Environnement Agentique** : Mise en place d'Antigravity 2.0 avec mémoire persistante, compétences et conventions Git.
