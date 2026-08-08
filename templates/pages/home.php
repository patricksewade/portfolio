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
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-700 mb-4 leading-tight">
                Ernest Patrick <span class="text-brand">SEWADE</span>
            </h1>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-600 mb-6 flex items-center flex-wrap gap-3">
                Développeur Web PHP / Symfony
                <div class="relative group flex items-center">
                    <img src="https://cdn.simpleicons.org/symfony/475569" alt="Symfony" class="w-7 h-7 md:w-8 md:h-8 group-hover:scale-110 group-hover:opacity-100 opacity-90 transition-all duration-300">
                    <div class="absolute inset-0 bg-slate-400 rounded-full blur-md opacity-0 group-hover:opacity-20 transition-opacity"></div>
                </div>
            </h2>
            
            <p class="text-lg text-slate-600 mb-8 leading-relaxed max-w-2xl">
                <?= e($profile_summary) ?>
            </p>
            
            <div class="flex justify-center items-center gap-8 md:gap-12 mb-10">
                <div class="flex flex-col items-center text-center">
                    <span class="text-2xl md:text-3xl font-extrabold text-slate-800">9+</span>
                    <span class="text-xs md:text-sm text-slate-500 font-medium mt-1">Années<br>de PHP</span>
                </div>
                
                <div class="flex flex-col items-center text-center">
                    <span class="text-2xl md:text-3xl font-extrabold text-slate-800">4+</span>
                    <span class="text-xs md:text-sm text-slate-500 font-medium mt-1">Années<br>en Freelance</span>
                </div>
                
                <div class="flex flex-col items-center text-center">
                    <span class="text-2xl md:text-3xl font-extrabold text-slate-800">15+</span>
                    <span class="text-xs md:text-sm text-slate-500 font-medium mt-1">Projets<br>réalisés</span>
                </div>
            </div>
            
            <div class="flex flex-wrap items-center gap-3 mb-6">
                <a href="<?= BASE_URL ?>/contact" class="flex items-center gap-2 px-6 py-3.5 bg-brand text-white font-bold rounded-xl hover:bg-brand/90 transition-colors shadow-lg hover:shadow-xl hover:-translate-y-0.5 transform duration-200 text-sm sm:text-base whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Me contacter
                </a>
                <a href="#projets" class="flex items-center gap-2 px-6 py-3.5 bg-white text-slate-700 font-bold rounded-xl border border-slate-200 hover:border-brand hover:text-brand transition-colors shadow-sm text-sm sm:text-base whitespace-nowrap">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Voir mes réalisations
                </a>
                <div class="flex items-center text-xs sm:text-sm font-bold text-emerald-700 bg-emerald-50 px-4 py-3.5 rounded-xl border border-emerald-100 shadow-sm whitespace-nowrap">
                    <span class="relative flex h-3 w-3 mr-2 sm:mr-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                    </span>
                    Disponible immédiatement
                </div>
            </div>
            
            <!-- Lien Téléchargement CV (Sober & Premium) -->
            <div class="mb-10 sm:pl-2">
                <a href="<?= BASE_URL ?>/assets/docs/CV_Ernest_Patrick_SEWADE.pdf" target="_blank" class="inline-flex items-center text-sm font-semibold text-slate-500 hover:text-brand transition-colors group">
                    <span class="bg-slate-100 p-2 rounded-lg mr-3 group-hover:bg-brand/10 group-hover:-translate-y-0.5 transition-all duration-300 shadow-sm">
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-brand transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </span>
                    Télécharger la version PDF de mon CV
                </a>
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
</section>

<!-- Section Compétences -->
<section id="competences" class="mb-24 scroll-mt-24">
    <div class="mb-10">
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

<!-- Section Projets (Conservée) -->
<section id="projets" class="mb-24 scroll-mt-24">
    <div class="flex items-center justify-between mb-10">
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
        <h2 class="text-3xl font-extrabold text-slate-900 flex items-center">
            <span class="w-2 h-8 bg-brand mr-4 rounded-full"></span> 
            <svg class="w-8 h-8 mr-3 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            Me contacter
        </h2>
        <p class="text-lg text-slate-600 mt-4 max-w-2xl">Vous avez un projet en tête ou une opportunité de CDI ? Discutons-en. Je suis disponible pour relever de nouveaux défis.</p>
    </div>
    
    <div class="max-w-3xl">
        <div class="bg-white p-8 md:p-12 rounded-3xl shadow-sm border border-slate-200">
            <form action="<?= BASE_URL ?>/contact" method="POST" class="space-y-8">
                <input type="hidden" name="csrf_token" value="<?= e(generate_csrf_token()) ?>">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nom complet</label>
                        <input type="text" id="name" name="name" required class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all bg-slate-50 hover:bg-white focus:bg-white">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-bold text-slate-700 mb-2">Adresse Email</label>
                        <input type="email" id="email" name="email" required class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all bg-slate-50 hover:bg-white focus:bg-white">
                    </div>
                </div>
                
                <div>
                    <label for="subject" class="block text-sm font-bold text-slate-700 mb-2">Sujet du message</label>
                    <input type="text" id="subject" name="subject" required class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all bg-slate-50 hover:bg-white focus:bg-white">
                </div>
                
                <div>
                    <label for="content" class="block text-sm font-bold text-slate-700 mb-2">Votre Message</label>
                    <textarea id="content" name="content" rows="6" required class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all resize-y bg-slate-50 hover:bg-white focus:bg-white" placeholder="Décrivez votre projet ou votre proposition..."></textarea>
                </div>
                
                <div class="pt-2 text-center md:text-right">
                    <?php 
                    $send_icon = '<svg class="w-5 h-5 -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>';
                    render_button('Envoyer le message', 'submit', 'w-full sm:w-auto px-10 py-4 text-lg shadow-lg hover:shadow-xl hover:-translate-y-0.5 transform duration-200', $send_icon); 
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
