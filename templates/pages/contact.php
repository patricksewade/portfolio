<?php
declare(strict_types=1);
require_once BASE_PATH . '/templates/layout/header.php';
require_once BASE_PATH . '/templates/components/ui_components.php';
?>

<div class="max-w-2xl mx-auto mt-10">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-extrabold text-slate-900 mb-4">Me Contacter</h1>
        <p class="text-slate-600">Vous avez un projet en tête ou une opportunité de CDI ? Discutons-en.</p>
    </div>

    <div class="bg-white p-8 md:p-10 rounded-3xl shadow-sm border border-slate-200">
        <form action="<?= BASE_URL ?>/contact" method="POST" class="space-y-6">
            <input type="hidden" name="csrf_token" value="<?= e(generate_csrf_token()) ?>">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Nom complet</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Adresse Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                </div>
            </div>
            
            <div>
                <label for="subject" class="block text-sm font-semibold text-slate-700 mb-2">Sujet</label>
                <input type="text" id="subject" name="subject" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
            </div>
            
            <div>
                <label for="content" class="block text-sm font-semibold text-slate-700 mb-2">Message</label>
                <textarea id="content" name="content" rows="6" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all resize-y"></textarea>
            </div>
            
            <div class="pt-4 text-center">
                <?php render_button('Envoyer le message', 'submit', 'w-full md:w-auto px-10 py-4 text-lg'); ?>
            </div>
        </form>
    </div>
</div>

<?php require_once BASE_PATH . '/templates/layout/footer.php'; ?>
