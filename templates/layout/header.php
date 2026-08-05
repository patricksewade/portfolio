<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Ernest Patrick SEWADE, Développeur Web.">
    <title><?= e($page_title ?? 'Portfolio') ?></title>
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
            <a href="<?= BASE_URL ?>/" class="text-2xl font-extrabold tracking-tight text-blue-600">E. P. SEWADE</a>
            <nav class="space-x-6 font-medium">
                <a href="<?= BASE_URL ?>/" class="hover:text-blue-600 transition-colors">Projets</a>
                <a href="<?= BASE_URL ?>/contact" class="hover:text-blue-600 transition-colors">Contact</a>
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
