<?php
declare(strict_types=1);
require_once BASE_PATH . '/templates/layout/header.php';
require_once BASE_PATH . '/templates/components/ui_components.php';
?>

<div class="max-w-md mx-auto mt-20">
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-extrabold text-slate-900">Espace Sécurisé</h1>
            <p class="text-slate-500 text-sm mt-2">Accès strictement réservé à l'administration.</p>
        </div>

        <form action="<?= BASE_URL ?>/login" method="POST" class="space-y-6">
            <input type="hidden" name="csrf_token" value="<?= e(generate_csrf_token()) ?>">
            
            <div>
                <label for="username" class="block text-sm font-semibold text-slate-700 mb-2">Identifiant</label>
                <input type="text" id="username" name="username" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 outline-none transition-all bg-slate-50">
            </div>
            
            <div>
                <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 outline-none transition-all bg-slate-50">
            </div>
            
            <div class="pt-2">
                <?php render_button('Se connecter', 'submit', 'w-full bg-indigo-600 hover:bg-indigo-700'); ?>
            </div>
        </form>
    </div>
</div>

<?php require_once BASE_PATH . '/templates/layout/footer.php'; ?>
