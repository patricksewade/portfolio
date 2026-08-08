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
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: '#297fb8', // Bleu premium
              accent: '#f59d21', // Orange d'accentuation
            }
          }
        }
      }
    </script>
    <!-- Polices Google (Inter) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#ffffff] text-slate-800 flex flex-col min-h-screen">
    <header class="bg-white shadow-sm sticky top-0 z-50 border-b border-slate-100">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="<?= BASE_URL ?>/" class="group flex items-center text-2xl font-extrabold tracking-tight select-none">
                <span class="text-brand font-mono text-3xl font-light mr-2 group-hover:-translate-x-1.5 transition-transform duration-300">{</span>
                <img src="<?= BASE_URL ?>/assets/images/header-avatar.png" alt="Avatar E. P. SEWADE" class="w-10 h-10 rounded-full shadow-sm ring-2 ring-white group-hover:shadow-md group-hover:scale-105 transition-all duration-300">
                <span class="text-accent font-mono text-3xl font-light ml-2 group-hover:translate-x-1.5 transition-transform duration-300">}</span>
            </a>
            <nav class="space-x-4 md:space-x-6 font-semibold hidden md:flex" id="main-nav">
                <a href="<?= BASE_URL ?>/#profil" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    À propos
                </a>
                <a href="<?= BASE_URL ?>/#competences" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    Expertises
                </a>
                <a href="<?= BASE_URL ?>/#experiences" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Expériences
                </a>
                <a href="<?= BASE_URL ?>/#formations" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                    Formations
                </a>
                <a href="<?= BASE_URL ?>/#projets" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Réalisations
                </a>
                <a href="<?= BASE_URL ?>/#contact" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Contact
                </a>
                
                <?php if (!empty($_SESSION['is_admin'])): ?>
                    <a href="<?= BASE_URL ?>/admin/dashboard" class="text-accent hover:text-accent/80 py-1 border-b-2 border-transparent">Dashboard</a>
                    <a href="<?= BASE_URL ?>/logout" class="text-red-600 hover:text-red-800 py-1 border-b-2 border-transparent">Déconnexion</a>
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
