<?php
declare(strict_types=1);

/**
 * Affiche une carte de projet avec un rendu conditionnel pour le projet Phare.
 */
function render_project_card(array $project): void {
    $featuredClass = $project['is_featured'] ? 'ring-2 ring-blue-500 bg-blue-50/30' : 'border border-slate-200';
    $badge = $project['is_featured'] ? '<span class="inline-block px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded-full mb-4">⭐ Projet Phare</span>' : '';
    
    ?>
    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow p-8 flex flex-col h-full <?= $featuredClass ?>">
        <?= $badge ?>
        <h3 class="text-2xl font-bold mb-3"><?= e($project['title']) ?></h3>
        <p class="text-slate-600 mb-6 flex-grow leading-relaxed"><?= nl2br(e($project['description'])) ?></p>
        <div class="text-sm font-semibold text-slate-500 mb-6">⚙️ Stack : <?= e($project['tech_stack']) ?></div>
        
        <div class="flex space-x-4 mt-auto">
            <?php if (!empty($project['github_url']) && $project['github_url'] !== '#'): ?>
                <a href="<?= e($project['github_url']) ?>" target="_blank" class="px-5 py-2.5 bg-slate-900 text-white font-medium rounded-lg hover:bg-slate-800 transition-colors">Code source</a>
            <?php endif; ?>
            <?php if (!empty($project['live_demo_url']) && $project['live_demo_url'] !== '#'): ?>
                <a href="<?= e($project['live_demo_url']) ?>" target="_blank" class="px-5 py-2.5 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors shadow-sm">Demo Live</a>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

/**
 * Affiche un bouton stylisé (formulaire).
 */
function render_button(string $label, string $type = 'submit', string $extra_classes = ''): void {
    ?>
    <button type="<?= e($type) ?>" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors shadow-sm <?= e($extra_classes) ?>">
        <?= e($label) ?>
    </button>
    <?php
}
