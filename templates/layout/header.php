<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Ernest Patrick SEWADE, Développeur Web.">
    <title><?= e($page_title ?? 'Portfolio') ?></title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>/favicon.png">
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Polices Google (Inter) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 flex flex-col min-h-screen">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="<?= BASE_URL ?>/" class="group flex items-center text-2xl font-extrabold tracking-tight select-none">
                <span class="text-blue-500 font-mono text-3xl font-light mr-2 group-hover:-translate-x-1.5 transition-transform duration-300">{</span>
                <img src="<?= BASE_URL ?>/assets/images/header-avatar.png" alt="Avatar E. P. SEWADE" class="w-10 h-10 rounded-full shadow-sm ring-2 ring-white group-hover:shadow-md group-hover:scale-105 transition-all duration-300">
                <span class="text-indigo-500 font-mono text-3xl font-light ml-2 group-hover:translate-x-1.5 transition-transform duration-300">}</span>
            </a>
            <nav class="space-x-4 md:space-x-6 font-semibold hidden md:flex">
                <a href="<?= BASE_URL ?>/#profil" class="text-slate-600 hover:text-blue-600 transition-colors">Profil</a>
                <a href="<?= BASE_URL ?>/#competences" class="text-slate-600 hover:text-blue-600 transition-colors">Compétences</a>
                <a href="<?= BASE_URL ?>/#experiences" class="text-slate-600 hover:text-blue-600 transition-colors">Expériences</a>
                <a href="<?= BASE_URL ?>/#formations" class="text-slate-600 hover:text-blue-600 transition-colors">Formations</a>
                <a href="<?= BASE_URL ?>/#projets" class="text-slate-600 hover:text-blue-600 transition-colors">Projets</a>
                <a href="<?= BASE_URL ?>/contact" class="text-slate-600 hover:text-blue-600 transition-colors">Contact</a>
                <?php if (!empty($_SESSION['is_admin'])): ?>
                    <a href="<?= BASE_URL ?>/admin/dashboard" class="text-indigo-600 hover:text-indigo-800">Dashboard</a>
                    <a href="<?= BASE_URL ?>/logout" class="text-red-600 hover:text-red-800">Déconnexion</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    
    <main class="flex-grow max-w-6xl mx-auto w-full px-4 py-12">
        <?php if (!empty($_SESSION['flash_success'])): ?>
            <div class="mb-8 p-4 bg-green-100 text-green-800 rounded-lg border border-green-200">
                <?= e($_SESSION['flash_success']) ?>
            </div>
            <?php unset($_SESSION['flash_success']); ?>
        <?php endif; ?>
        
        <?php if (!empty($_SESSION['flash_error'])): ?>
            <div class="mb-8 p-4 bg-red-100 text-red-800 rounded-lg border border-red-200">
                <?= e($_SESSION['flash_error']) ?>
            </div>
            <?php unset($_SESSION['flash_error']); ?>
        <?php endif; ?>
