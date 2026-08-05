<?php
declare(strict_types=1);
$page_title = "Mentions Légales - E.P. SEWADE";
require_once BASE_PATH . '/templates/layout/header.php';
?>

<div class="max-w-4xl mx-auto px-4 py-16 animate-fade-in">
    <div class="mb-12 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-4">Mentions Légales</h1>
        <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full"></div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 md:p-12 prose prose-slate max-w-none prose-headings:text-slate-900 prose-a:text-blue-600 hover:prose-a:text-blue-800">
        <h2>1. Éditeur du site</h2>
        <p>Le présent site est édité par :<br>
        <strong>Ernest Patrick SEWADE</strong><br>
        Statut : Développeur Web<br>
        Email : <a href="mailto:contact@patricksewade.com">contact@patricksewade.com</a></p>

        <h2>2. Hébergement</h2>
        <p>Le site est hébergé par :<br>
        <strong>ByetHost</strong><br>
        Adresse de l'hébergeur : <em>...</em><br>
        Site web : <a href="https://byethost.com" target="_blank" rel="noopener">byethost.com</a></p>

        <h2>3. Propriété intellectuelle</h2>
        <p>L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.</p>
        <p>La reproduction de tout ou partie de ce site sur un support électronique quel qu'il soit est formellement interdite sauf autorisation expresse du directeur de la publication.</p>

        <h2>4. Protection des données personnelles (RGPD)</h2>
        <p>Les informations recueillies via le formulaire de contact sont enregistrées dans un fichier informatisé par <strong>Ernest Patrick SEWADE</strong> pour faciliter les échanges professionnels.</p>
        <p>Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d'accès aux données vous concernant et les faire rectifier en contactant l'éditeur du site via l'adresse email mentionnée ci-dessus.</p>

        <h2>5. Cookies</h2>
        <p>Le site <em>patricksewade.com</em> n'utilise que des cookies techniques strictement nécessaires à son bon fonctionnement (ex: gestion de session). Aucun cookie de traçage ou publicitaire n'est utilisé.</p>
    </div>
</div>

<?php require_once BASE_PATH . '/templates/layout/footer.php'; ?>
