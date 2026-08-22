<?php
declare(strict_types=1);
require_once BASE_PATH . '/templates/layout/header.php';
require_once BASE_PATH . '/templates/components/ui_components.php';
?>

<!-- Banner d'Accroche -->
<div class="w-full -mt-2 pb-4 flex flex-col items-center justify-center animate-fade-in">
    <div class="max-w-4xl mx-auto text-center px-4 mb-8">
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-700 leading-tight">
            Vous recherchez un <br class="hidden sm:block">
            <span class="text-accent">développeur web ?</span>
        </h2>
    </div>
    
    <!-- Séparateur Premium (Lien cliquable vers la suite) -->
    <a href="#profil" class="flex flex-col items-center mt-2 opacity-80 hover:opacity-100 transition-opacity cursor-pointer group">
        <!-- Point d'ancrage lumineux -->
        <div class="w-2 h-2 rounded-full bg-accent shadow-[0_0_10px_rgba(245,157,33,0.8)] group-hover:scale-125 transition-transform"></div>
        <!-- Ligne verticale en dégradé -->
        <div class="w-px h-16 bg-gradient-to-b from-accent to-transparent"></div>
        <!-- Flèche minimaliste animée -->
        <svg class="w-5 h-5 text-accent/70 animate-bounce mt-1 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
    </a>
</div>

<!-- Hero Section -->
<section id="profil" class="mb-24 mt-8 md:mt-16 animate-fade-in scroll-mt-24">
    <div class="flex flex-col md:flex-row items-start justify-between gap-12">
        <div class="w-full md:w-2/3">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-slate-700 mb-4 leading-tight">
                Ernest Patrick SEWADE
            </h1>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-600 mb-6 flex items-center flex-wrap gap-x-2 gap-y-3">
                Développeur Web <span class="text-brand">PHP</span>
                <div class="relative group flex items-center mx-1">
                    <img src="https://cdn.simpleicons.org/php/475569" alt="PHP" class="h-8 md:h-10 w-auto group-hover:scale-110 group-hover:opacity-100 opacity-90 transition-all duration-300">
                    <div class="absolute inset-0 bg-slate-400 rounded-full blur-md opacity-0 group-hover:opacity-20 transition-opacity"></div>
                </div>
                / <span class="text-accent">Symfony</span>
                <div class="relative group flex items-center ml-1">
                    <img src="https://cdn.simpleicons.org/symfony/475569" alt="Symfony" class="h-6 md:h-8 w-auto group-hover:scale-110 group-hover:opacity-100 opacity-90 transition-all duration-300">
                    <div class="absolute inset-0 bg-slate-400 rounded-full blur-md opacity-0 group-hover:opacity-20 transition-opacity"></div>
                </div>
            </h2>
            
            <p class="text-lg text-slate-600 mb-8 leading-relaxed max-w-2xl">
                <?= e($profile_summary) ?>
            </p>
            
            <div class="flex justify-center w-full mb-10">
                <div class="flex justify-center items-center gap-5 md:gap-8 bg-white/50 backdrop-blur-sm p-4 md:p-5 rounded-2xl border border-slate-100 shadow-sm w-fit">
                    <div class="flex flex-col items-center text-center">
                        <span class="text-3xl md:text-4xl font-display font-extrabold text-brand">+9</span>
                        <span class="text-[10px] md:text-xs text-slate-500 font-semibold mt-1 uppercase tracking-wider">Années<br>de PHP</span>
                    </div>
                    
                    <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                    
                    <div class="flex flex-col items-center text-center">
                        <span class="text-3xl md:text-4xl font-display font-extrabold text-accent">+4</span>
                        <span class="text-[10px] md:text-xs text-slate-500 font-semibold mt-1 uppercase tracking-wider">Années<br>Freelance</span>
                    </div>
                    
                    <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                    
                    <div class="flex flex-col items-center text-center">
                        <span class="text-3xl md:text-4xl font-display font-extrabold text-slate-800">+<?= e((string)$projectCount) ?></span>
                        <span class="text-[10px] md:text-xs text-slate-500 font-semibold mt-1 uppercase tracking-wider">Projets<br>réalisés</span>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-wrap items-center gap-3 mb-6">
                <a href="<?= BASE_URL ?>/#contact" class="flex items-center gap-2 px-6 py-3.5 bg-brand text-white font-display font-bold tracking-wide rounded-xl hover:bg-brand/90 transition-colors shadow-lg hover:shadow-xl hover:-translate-y-0.5 transform duration-200 text-sm sm:text-base whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Me contacter
                </a>
                <a href="<?= BASE_URL ?>/#experiences" class="flex items-center gap-2 px-6 py-3.5 bg-white text-slate-700 font-display font-bold tracking-wide rounded-xl border border-slate-200 hover:border-brand hover:text-brand transition-colors shadow-sm text-sm sm:text-base whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Voir mon parcours
                </a>
                <div class="flex items-center text-xs sm:text-sm font-bold text-emerald-700 bg-emerald-50 px-4 py-3.5 rounded-xl border border-emerald-100 shadow-sm whitespace-nowrap">
                    <span class="relative flex h-3 w-3 mr-2 sm:mr-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                    </span>
                    Disponible immédiatement
                </div>
            </div>
            
            <!-- Liens Secondaires : CV & Social -->
            <div class="flex items-center gap-6 mb-10 sm:pl-2">
                <a href="<?= BASE_URL ?>/assets/docs/CV_Ernest_Patrick_SEWADE.pdf" target="_blank" class="inline-flex items-center text-sm font-semibold text-slate-500 hover:text-brand transition-colors group">
                    <span class="bg-slate-100 p-2 rounded-lg mr-3 group-hover:bg-brand/10 group-hover:-translate-y-0.5 transition-all duration-300 shadow-sm">
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-brand transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </span>
                    Télécharger mon CV (PDF)
                </a>
                
                <div class="flex items-center gap-4 border-l border-slate-200 pl-6">
                    <a href="https://www.linkedin.com/in/ernest-patrick-sewade/" target="_blank" class="text-slate-400 hover:text-blue-600 hover:-translate-y-1 transition-all duration-300" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" fill="currentColor" stroke="none" class="w-5 h-5"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="https://github.com/patricksewade" target="_blank" class="text-slate-400 hover:text-slate-900 hover:-translate-y-1 transition-all duration-300" aria-label="GitHub">
                        <svg viewBox="0 0 24 24" fill="currentColor" stroke="none" class="w-5 h-5"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                </div>
            </div>
            

        </div>
        
        <div class="w-full md:w-1/3 flex justify-center md:justify-end">
            <!-- Emplacement Photo de Profil (L'Ombre Colorée Subtile) -->
            <div class="relative w-64 h-64 md:w-80 md:h-80 group">
                <!-- Ombre lumineuse colorée (Glow) -->
                <div class="absolute inset-0 bg-gradient-to-tr from-brand to-accent rounded-full blur-2xl opacity-40 group-hover:opacity-60 group-hover:scale-110 transition-all duration-700 mt-4 scale-95"></div>
                
                <!-- Conteneur Image -->
                <div class="relative w-full h-full bg-white rounded-full p-1 z-10">
                    <div class="w-full h-full bg-slate-100 rounded-full overflow-hidden flex items-center justify-center">
                        <img src="<?= BASE_URL ?>/assets/images/profile.png" alt="Ernest Patrick SEWADE" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

<!-- Section Compétences -->
<section id="competences" class="mb-24 scroll-mt-24">
    <div class="mb-10">
        <div class="flex items-center gap-3 mb-3 pl-2">
            <span class="w-8 h-px bg-brand"></span>
            <span class="text-brand font-bold text-sm tracking-widest uppercase">Les outils que je maîtrise</span>
        </div>
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-brand mr-4 rounded-full"></span> 
            <svg class="w-8 h-8 mr-3 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            Expertises Techniques
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
        <div class="flex items-center gap-3 mb-3 pl-2">
            <span class="w-8 h-px bg-accent"></span>
            <span class="text-accent font-bold text-sm tracking-widest uppercase">Mon parcours et mon évolution</span>
        </div>
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-accent mr-4 rounded-full"></span> 
            <svg class="w-8 h-8 mr-3 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
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
        <div class="flex items-center gap-3 mb-3 pl-2">
            <span class="w-8 h-px bg-brand opacity-80"></span>
            <span class="text-brand font-bold text-sm tracking-widest uppercase opacity-80">Mon bagage académique</span>
        </div>
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-brand mr-4 rounded-full opacity-80"></span> 
            <svg class="w-8 h-8 mr-3 text-brand opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
            Formations & Diplômes
        </h2>
    </div>
    
    <div class="max-w-4xl">
        <?php foreach ($educations as $edu): ?>
            <?php render_education_timeline($edu); ?>
        <?php endforeach; ?>
    </div>
</section>

<!-- Section Certifications -->
<section id="certifications" class="mb-24 scroll-mt-24">
    <div class="mb-10">
        <div class="flex items-center gap-3 mb-3 pl-2">
            <span class="w-8 h-px bg-brand opacity-80"></span>
            <span class="text-brand font-bold text-sm tracking-widest uppercase opacity-80">Mes validations d'acquis</span>
        </div>
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-brand mr-4 rounded-full opacity-80"></span> 
            <svg class="w-8 h-8 mr-3 text-brand opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
            Certifications
        </h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($certifications as $cert): ?>
            <?php render_certification_card($cert); ?>
        <?php endforeach; ?>
    </div>
</section>

<!-- Section Projets (Conservée) -->
<section id="projets" class="mb-24 scroll-mt-24">
    <div class="flex flex-col mb-10">
        <div class="flex items-center gap-3 mb-3 pl-2">
            <span class="w-8 h-px bg-accent opacity-80"></span>
            <span class="text-accent font-bold text-sm tracking-widest uppercase opacity-80">Ce que j'ai construit</span>
        </div>
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-accent mr-4 rounded-full opacity-80"></span> 
            <svg class="w-8 h-8 mr-3 text-accent opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            Mes Réalisations
        </h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($projects as $project): ?>
            <?php render_project_card($project); ?>
        <?php endforeach; ?>
    </div>
</section>

<!-- Section Contact -->
<section id="contact" class="mb-24 scroll-mt-24">
    <div class="mb-10">
        <div class="flex items-center gap-3 mb-3 pl-2">
            <span class="w-8 h-px bg-brand"></span>
            <span class="text-brand font-bold text-sm tracking-widest uppercase">Prêt à collaborer ?</span>
        </div>
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-brand mr-4 rounded-full"></span> 
            <svg class="w-8 h-8 mr-3 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            Me contacter
        </h2>
        <p class="text-lg text-slate-600 mt-4 max-w-2xl pl-2">Vous avez un projet ou une opportunité d'emploi ? Je suis disponible pour relever de nouveaux défis.</p>
    </div>
    
    <div class="max-w-3xl">
        <?php if (!empty($_SESSION['flash_success'])): ?>
            <div class="mb-6 p-5 bg-emerald-50 text-emerald-800 rounded-2xl border border-emerald-200 shadow-sm flex items-center gap-3 animate-fade-in">
                <svg class="w-6 h-6 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="font-medium"><?= e($_SESSION['flash_success']) ?></span>
            </div>
            <?php unset($_SESSION['flash_success']); ?>
        <?php endif; ?>
        
        <?php if (!empty($_SESSION['flash_error'])): ?>
            <div class="mb-6 p-5 bg-rose-50 text-rose-800 rounded-2xl border border-rose-200 shadow-sm flex items-center gap-3 animate-fade-in">
                <svg class="w-6 h-6 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="font-medium"><?= e($_SESSION['flash_error']) ?></span>
            </div>
            <?php unset($_SESSION['flash_error']); ?>
        <?php endif; ?>

        <div class="bg-white p-8 md:p-12 rounded-3xl shadow-sm border border-slate-200">
            <!-- En-tête informatif discret -->
            <div class="flex items-center justify-between text-xs text-slate-500 mb-8 pb-4 border-b border-slate-100">
                <span class="flex items-center gap-1.5 font-semibold">
                    <span class="text-accent font-extrabold text-sm leading-none">*</span>
                    Tous les champs sont obligatoires
                </span>
                <span class="text-slate-400 font-medium hidden sm:inline-flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Réponse sous 24h
                </span>
            </div>

            <form action="<?= BASE_URL ?>/contact" method="POST" class="space-y-6">
                <input type="hidden" name="csrf_token" value="<?= e(generate_csrf_token()) ?>">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="flex items-center justify-between text-sm font-bold text-slate-700 mb-2">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 text-brand mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                Nom et prénom
                                <span class="text-accent ml-1 font-extrabold text-sm" title="Champ requis">*</span>
                            </span>
                            <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider bg-slate-100/80 px-2 py-0.5 rounded-md border border-slate-200/50">Requis</span>
                        </label>
                        <input type="text" id="name" name="name" required placeholder="Ex : Jean Dupont" class="w-full px-5 py-3.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all bg-slate-50 hover:bg-white focus:bg-white text-slate-800 placeholder:text-slate-400 text-sm">
                    </div>
                    <div>
                        <label for="email" class="flex items-center justify-between text-sm font-bold text-slate-700 mb-2">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 text-brand mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                Adresse email
                                <span class="text-accent ml-1 font-extrabold text-sm" title="Champ requis">*</span>
                            </span>
                            <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider bg-slate-100/80 px-2 py-0.5 rounded-md border border-slate-200/50">Requis</span>
                        </label>
                        <input type="email" id="email" name="email" required placeholder="jean.dupont@exemple.com" class="w-full px-5 py-3.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all bg-slate-50 hover:bg-white focus:bg-white text-slate-800 placeholder:text-slate-400 text-sm">
                    </div>
                </div>
                
                <div>
                    <label for="subject" class="flex items-center justify-between text-sm font-bold text-slate-700 mb-2">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 text-brand mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h10M7 11h10M7 15h8M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"></path></svg>
                            Objet
                            <span class="text-accent ml-1 font-extrabold text-sm" title="Champ requis">*</span>
                        </span>
                        <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider bg-slate-100/80 px-2 py-0.5 rounded-md border border-slate-200/50">Requis</span>
                    </label>
                    <input type="text" id="subject" name="subject" required placeholder="Ex : Projet de refonte web / Opportunité CDI" class="w-full px-5 py-3.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all bg-slate-50 hover:bg-white focus:bg-white text-slate-800 placeholder:text-slate-400 text-sm">
                </div>
                
                <div>
                    <label for="content" class="flex items-center justify-between text-sm font-bold text-slate-700 mb-2">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 text-brand mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                            Message
                            <span class="text-accent ml-1 font-extrabold text-sm" title="Champ requis">*</span>
                        </span>
                        <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider bg-slate-100/80 px-2 py-0.5 rounded-md border border-slate-200/50">Requis</span>
                    </label>
                    <textarea id="content" name="content" rows="6" required placeholder="Présentez brièvement vos besoins, votre contexte ou vos questions..." class="w-full px-5 py-3.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all resize-y bg-slate-50 hover:bg-white focus:bg-white text-slate-800 placeholder:text-slate-400 text-sm"></textarea>
                </div>
                
                <div class="pt-2 text-center md:text-right">
                    <?php 
                    $send_icon = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"></path></svg>';
                    render_button('Envoyer le message', 'submit', 'w-full sm:w-auto px-10 py-4 text-base shadow-lg hover:shadow-xl hover:-translate-y-0.5 transform duration-200', $send_icon); 
                    ?>
                </div>
            </form>
        </div>
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
