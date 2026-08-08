<?php
declare(strict_types=1);

/**
 * Affiche une carte de projet avec un rendu conditionnel pour le projet Phare.
 */
function render_project_card(array $project): void {
    $featuredClass = !empty($project['is_featured']) ? 'ring-2 ring-brand bg-brand/5' : 'border border-slate-200 hover:border-slate-300';
    $badge = !empty($project['is_featured']) ? '<span class="absolute top-4 right-4 px-3 py-1 text-xs font-extrabold bg-accent text-white rounded-full shadow-md z-10">⭐ PROJET PHARE</span>' : '';
    
    $imageUrl = $project['image_url'] ?? null;
    
    ?>
    <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all p-5 flex flex-col h-full relative group <?= $featuredClass ?>">
        <?= $badge ?>
        
        <!-- Espace Image / Logo -->
        <div class="w-full h-48 mb-5 rounded-xl bg-slate-50 flex items-center justify-center border border-slate-100 overflow-hidden group-hover:border-brand/30 transition-colors relative">
            <?php if ($imageUrl): ?>
                <img src="<?= e($imageUrl) ?>" alt="<?= e($project['title']) ?>" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-110">
            <?php else: ?>
                <!-- Placeholder générique premium -->
                <div class="text-slate-300 flex flex-col items-center">
                    <svg class="w-12 h-12 mb-2 opacity-40 group-hover:scale-110 transition-transform duration-300 group-hover:text-brand/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Logo à venir</span>
                </div>
            <?php endif; ?>
        </div>
        
        <h3 class="text-xl font-bold mb-2 text-slate-900 group-hover:text-brand transition-colors line-clamp-2"><?= e($project['title']) ?></h3>
        <p class="text-slate-600 mb-5 flex-grow text-sm leading-relaxed line-clamp-3"><?= nl2br(e($project['description'] ?? '')) ?></p>
        
        <div class="text-xs font-bold text-brand mb-5 bg-brand/10 w-max px-3 py-1.5 rounded-lg border border-brand/20">
            ⚙️ <?= e($project['tech_stack'] ?? 'À définir') ?>
        </div>
        
        <div class="flex flex-wrap gap-2 mt-auto pt-4 border-t border-slate-50">
            <?php if (!empty($project['github_url']) && $project['github_url'] !== '#'): ?>
                <a href="<?= e($project['github_url']) ?>" target="_blank" class="flex-1 px-4 py-2 bg-slate-900 text-white text-sm font-semibold rounded-lg hover:bg-slate-800 transition-colors text-center">Code source</a>
            <?php endif; ?>
            <?php if (!empty($project['live_demo_url']) && $project['live_demo_url'] !== '#'): ?>
                <a href="<?= e($project['live_demo_url']) ?>" target="_blank" class="flex-1 px-4 py-2 bg-brand text-white text-sm font-semibold rounded-lg hover:bg-brand/90 transition-colors shadow-sm text-center">Visiter</a>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

/**
 * Affiche un bouton stylisé (formulaire).
 */
function render_button(string $label, string $type = 'submit', string $extra_classes = '', string $icon_svg = ''): void {
    ?>
    <button type="<?= e($type) ?>" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-brand text-white font-semibold rounded-lg hover:bg-brand/90 transition-colors shadow-sm <?= e($extra_classes) ?>">
        <?php if ($icon_svg): ?>
            <?= $icon_svg ?>
        <?php endif; ?>
        <?= e($label) ?>
    </button>
    <?php
}

/**
 * Affiche une compétence (badge).
 */
function render_skill_badge(string $skill_name): void {
    ?>
    <span class="inline-flex items-center px-4 py-2 bg-white border border-slate-200 text-slate-700 text-sm font-semibold rounded-full shadow-sm hover:shadow-md hover:border-brand/40 hover:text-brand transition-all cursor-default group">
        <svg class="w-3.5 h-3.5 mr-2 text-brand/70 group-hover:text-brand transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
        <?= e($skill_name) ?>
    </span>
    <?php
}

/**
 * Affiche une expérience (Timeline).
 */
function render_experience_timeline(array $exp): void {
    ?>
    <div class="relative pl-8 sm:pl-48 py-6 group">
        <!-- Ligne verticale et puce -->
        <div class="flex flex-col items-center absolute left-2 sm:left-[11rem] h-full top-0">
            <div class="h-6 w-px bg-slate-200 group-hover:bg-accent/40 transition-colors"></div>
            <div class="w-4 h-4 rounded-full bg-white border-4 border-accent z-10 group-hover:scale-125 transition-transform shadow-sm"></div>
            <div class="h-full w-px bg-slate-200 group-hover:bg-accent/40 transition-colors"></div>
        </div>

        <!-- Contenu -->
        <div class="flex flex-col sm:flex-row items-start group-last:before:hidden">
            <div class="sm:absolute sm:left-0 sm:w-40 sm:text-right text-sm font-bold text-slate-500 pt-1 mb-2 sm:mb-0">
                <?= e($exp['period']) ?>
            </div>
            
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm group-hover:shadow-md transition-all w-full">
                <h3 class="text-xl font-bold text-slate-900"><?= e($exp['title']) ?></h3>
                <?php if ($exp['company']): ?>
                    <div class="text-brand font-semibold mt-1 mb-3">
                        <?= e($exp['company']) ?> 
                        <?php if ($exp['location']): ?>
                            <span class="text-slate-400 font-normal text-sm ml-1">• <?= e($exp['location']) ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
                <p class="text-slate-600 mt-2 text-sm leading-relaxed"><?= nl2br(e($exp['description'])) ?></p>
                
                <?php if ($exp['stack']): ?>
                    <div class="mt-5 pt-4 border-t border-slate-50 flex flex-wrap gap-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider mr-2 self-center">Stack :</span>
                        <?php foreach(explode(',', $exp['stack']) as $tech): ?>
                            <span class="px-2 py-1 bg-slate-50 text-slate-600 text-xs rounded-md border border-slate-200 font-medium"><?= e(trim($tech)) ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Affiche une formation (Timeline).
 */
function render_education_timeline(array $edu): void {
    ?>
    <div class="relative pl-8 sm:pl-48 py-6 group">
        <!-- Ligne verticale et icône académique -->
        <div class="flex flex-col items-center absolute left-2 sm:left-[11rem] h-full top-0">
            <div class="h-6 w-px bg-slate-200 group-hover:bg-brand/40 transition-colors"></div>
            <div class="w-8 h-8 -ml-1 sm:ml-0 rounded-full bg-brand/10 border-2 border-brand flex items-center justify-center z-10 group-hover:scale-110 group-hover:bg-brand transition-all shadow-sm text-brand group-hover:text-white">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                </svg>
            </div>
            <div class="h-full w-px bg-slate-200 group-hover:bg-brand/40 transition-colors"></div>
        </div>

        <!-- Contenu de la formation -->
        <div class="flex flex-col sm:flex-row items-start group-last:before:hidden">
            <div class="sm:absolute sm:left-0 sm:w-40 sm:text-right text-sm font-bold text-slate-500 pt-2 mb-2 sm:mb-0">
                <?= e($edu['period']) ?>
            </div>
            
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm group-hover:shadow-md transition-all w-full relative overflow-hidden">
                <!-- Élément décoratif en filigrane -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-brand/5 to-accent/5 rounded-bl-[100px] -mr-8 -mt-8 opacity-60 transition-transform group-hover:scale-110"></div>
                
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-slate-900"><?= e($edu['degree']) ?></h3>
                    <div class="text-brand font-bold mt-1 mb-4 text-base">
                        <?= e($edu['specialty']) ?>
                    </div>
                    
                    <div class="text-sm text-slate-500 font-medium flex items-center pt-4 border-t border-slate-50">
                        <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        <?= e($edu['school']) ?> • <?= e($edu['location']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
