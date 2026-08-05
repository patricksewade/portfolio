<?php
declare(strict_types=1);
require_once BASE_PATH . '/templates/layout/header.php';
?>
<div class="text-center py-24">
    <div class="inline-block px-4 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-bold mb-6">
        Erreur 404
    </div>
    <h1 class="text-6xl md:text-8xl font-extrabold tracking-tight text-slate-900 mb-6">Oups !</h1>
    <h2 class="text-2xl font-bold text-slate-700 mb-4">Cette page n'existe pas.</h2>
    <p class="text-slate-500 mb-10 max-w-md mx-auto">La page que vous recherchez a peut-être été déplacée ou supprimée, ou l'URL est incorrecte.</p>
    <a href="<?= BASE_URL ?>/" class="px-8 py-3 bg-slate-900 text-white rounded-lg hover:bg-slate-800 transition-colors font-medium">Retour à l'accueil</a>
</div>
<?php require_once BASE_PATH . '/templates/layout/footer.php'; ?>
