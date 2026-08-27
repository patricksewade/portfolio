# Archive Jalon : Améliorations UI/UX & Dynamisation (feat/portfolio-enhancements)

**Date :** 22 août 2026  
**Branche :** `feat/portfolio-enhancements`  
**Statut :** Validé et intégré

---

## 1. Objectifs du Jalon

Ce jalon finalise une série d'optimisations d'ergonomie, d'accessibilité et de dynamisation des données sur le frontend public du portfolio, tout en consolidant les standards UI/UX "Dark / Glassmorphism" sous TailwindCSS.

---

## 2. Modifications Réalisées

### A. Hero Section Accueil
- **Inversion de l'ordre des icônes sociales** : Positionnement de LinkedIn en premier suivi de GitHub pour aligner la hiérarchie professionnelle.

### B. Navigation Principale (Header)
- **Réseaux sociaux & Téléchargement CV** : Intégration directe des liens LinkedIn et GitHub ainsi que d'un bouton d'action premium "CV" permettant le téléchargement immédiat du curriculum vitae avec `target="_blank"` et `rel="noopener noreferrer"`.
- **Adaptabilité responsive** : Déclinaison soignée pour les affichages desktop et mobile (drawer / menu burger).

### C. Dynamisation des Projets
- **Compteur de projets dynamique** : Remplacement de la valeur statique sur la page d'accueil par un comptage réel issu de la base de données via `ProjectRepository` et transmis par `HomeController`.

### D. Refonte de la Page Mentions Légales
- **Design Glassmorphism Premium** : Structuration en cartes avec bordures subtiles (`border-slate-800`), typographie soignée et organisation claire des sections (Éditeur, Hébergement, Propriété intellectuelle, Données personnelles).

### E. Formulaire de Contact & Accessibilité
- **Indication élégante des champs requis** : Marquage visuel clair des champs obligatoires sans surcharger l'interface, complété par les attributs d'accessibilité (`aria-required="true"`).

### F. Footer & Navigation Interactive
- **Bouton 'Back to Top'** : Composant flottant interactif avec apparition progressive au scroll, micro-animations au survol et défilement fluide (`window.scrollTo({ top: 0, behavior: 'smooth' })`).

---

## 3. Fichiers & Composants Clés
- `./templates/partials/header.php` : Intégration des boutons sociaux et CV.
- `./templates/partials/footer.php` : Ajout du bouton 'Back to Top' et script d'animation.
- `./templates/home.php` : Inversion des icônes hero et affichage du compteur dynamique de projets.
- `./templates/mentions-legales.php` : Refonte complète de la vue mentions légales.
- `./templates/contact.php` : Mise en valeur des indicateurs de champs requis.
- `./src/Controller/HomeController.php` : Injection du nombre total de projets depuis le repository.
