<?php
declare(strict_types=1);
require_once BASE_PATH . '/templates/layout/header.php';
require_once BASE_PATH . '/templates/components/ui_components.php';
?>

<!-- Banner d'Accroche -->
<div class="w-full -mt-2 pb-4 flex flex-col items-center justify-center animate-fade-in">
    <div class="max-w-4xl mx-auto text-center px-4 mb-8">
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-800 leading-tight">
            Vous recherchez un <br class="hidden sm:block">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">développeur web ?</span>
        </h2>
    </div>
    
    <!-- Séparateur Premium (Lien cliquable vers la suite) -->
    <a href="#profil" class="flex flex-col items-center mt-2 opacity-80 hover:opacity-100 transition-opacity cursor-pointer group">
        <!-- Point d'ancrage lumineux -->
        <div class="w-2 h-2 rounded-full bg-blue-500 shadow-[0_0_10px_rgba(59,130,246,0.8)] group-hover:scale-125 transition-transform"></div>
        <!-- Ligne verticale en dégradé -->
        <div class="w-px h-16 bg-gradient-to-b from-blue-500 to-transparent"></div>
        <!-- Flèche minimaliste animée -->
        <svg class="w-5 h-5 text-blue-400 animate-bounce mt-1 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
    </a>
</div>

<!-- Hero Section -->
<section id="profil" class="mb-24 mt-8 md:mt-16 animate-fade-in scroll-mt-24">
    <div class="flex flex-col md:flex-row items-center justify-between gap-12">
        <div class="w-full md:w-2/3">
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 mb-4 leading-tight">
                Ernest Patrick <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">SEWADE</span>
            </h1>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-600 mb-6">Développeur Web PHP / Symfony</h2>
            
            <p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-2xl">
                <?= e($profile_summary) ?>
            </p>
            
            <div class="flex flex-wrap items-center gap-4 mb-6">
                <a href="<?= BASE_URL ?>/contact" class="px-8 py-4 bg-slate-900 text-white font-bold rounded-xl hover:bg-slate-800 transition-colors shadow-lg hover:shadow-xl hover:-translate-y-0.5 transform duration-200">
                    Me Contacter
                </a>
                <a href="#experiences" class="px-8 py-4 bg-white text-slate-700 font-bold rounded-xl border border-slate-200 hover:border-slate-300 hover:bg-slate-50 transition-colors shadow-sm">
                    Voir mon parcours
                </a>
                <div class="flex items-center text-sm font-bold text-emerald-700 bg-emerald-50 px-5 py-3 rounded-xl border border-emerald-100 shadow-sm lg:ml-2">
                    <span class="relative flex h-3 w-3 mr-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                    </span>
                    Disponible immédiatement
                </div>
            </div>
            
            <!-- Lien Téléchargement CV (Sober & Premium) -->
            <div class="mb-10 sm:pl-2">
                <a href="<?= BASE_URL ?>/assets/docs/CV_Ernest_Patrick_SEWADE.pdf" target="_blank" class="inline-flex items-center text-sm font-semibold text-slate-500 hover:text-blue-600 transition-colors group">
                    <span class="bg-slate-100 p-2 rounded-lg mr-3 group-hover:bg-blue-100 group-hover:-translate-y-0.5 transition-all duration-300 shadow-sm">
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </span>
                    Télécharger la version PDF de mon CV
                </a>
            </div>
            

        </div>
        
        <div class="w-full md:w-1/3 flex justify-center md:justify-end">
            <!-- Emplacement Photo de Profil -->
            <div class="relative w-64 h-64 md:w-80 md:h-80 group">
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-200 to-indigo-200 rounded-full transform rotate-6 scale-105 group-hover:rotate-12 transition-transform duration-500"></div>
                <div class="absolute inset-0 bg-white rounded-full p-2 shadow-xl">
                    <div class="w-full h-full bg-slate-100 rounded-full overflow-hidden flex items-center justify-center shadow-inner">
                        <img src="<?= BASE_URL ?>/assets/images/profile.png" alt="Ernest Patrick SEWADE" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Compétences -->
<section id="competences" class="mb-24 scroll-mt-24">
    <div class="mb-10">
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-blue-600 mr-4 rounded-full"></span> 
            Compétences Techniques
        </h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($skills as $category => $skill_list): ?>
            <div class="bg-slate-50/50 rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <h3 class="text-lg font-extrabold text-slate-800 mb-4"><?= e($category) ?></h3>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($skill_list as $skill): ?>
                        <?php render_skill_badge($skill); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Section Expériences -->
<section id="experiences" class="mb-24 scroll-mt-24">
    <div class="mb-10">
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-indigo-600 mr-4 rounded-full"></span> 
            Expériences Professionnelles
        </h2>
    </div>
    
    <div class="max-w-4xl">
        <?php foreach ($experiences as $exp): ?>
            <?php render_experience_timeline($exp); ?>
        <?php endforeach; ?>
    </div>
</section>

<!-- Section Formations -->
<section id="formations" class="mb-24 scroll-mt-24">
    <div class="mb-10">
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-teal-500 mr-4 rounded-full"></span> 
            Formations & Diplômes
        </h2>
    </div>
    
    <div class="max-w-4xl">
        <?php foreach ($educations as $edu): ?>
            <?php render_education_timeline($edu); ?>
        <?php endforeach; ?>
    </div>
</section>

<!-- Section Projets (Conservée) -->
<section id="projets" class="mb-24 scroll-mt-24">
    <div class="flex items-center justify-between mb-10">
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-slate-800 mr-4 rounded-full"></span> 
            Projets Récents
        </h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($projects as $project): ?>
            <?php render_project_card($project); ?>
        <?php endforeach; ?>
    </div>
</section>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 0.8s ease-out forwards;
    }
</style>

<?php require_once BASE_PATH . '/templates/layout/footer.php'; ?>
