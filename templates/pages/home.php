<?php
declare(strict_types=1);
require_once BASE_PATH . '/templates/layout/header.php';
require_once BASE_PATH . '/templates/components/ui_components.php';
?>

<section class="text-center mb-24 mt-12 animate-fade-in">
    <div class="inline-block px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-semibold mb-6">
        Disponible pour un CDI immédiatement
    </div>
    <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 mb-6">
        Architecte Digital & Développeur Web
    </h1>
    <p class="text-xl text-slate-600 max-w-2xl mx-auto mb-10 leading-relaxed">
        Titulaire d'un Master 2. Expert en développement Backend et Full-Stack.
        Je conçois des applications robustes, sécurisées et performantes en respectant les standards de l'industrie.
    </p>
    <a href="<?= BASE_URL ?>/contact" class="inline-block px-8 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-colors shadow-lg hover:shadow-xl hover:-translate-y-0.5 transform duration-200">
        Me Contacter
    </a>
</section>

<section id="projets" class="mt-20">
    <div class="flex items-center justify-between mb-10">
        <h2 class="text-3xl font-bold text-slate-800 flex items-center">
            <span class="w-8 h-1 bg-blue-600 mr-4 rounded-full"></span> 
            Mes Projets
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
