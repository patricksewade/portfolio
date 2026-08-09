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
              accent: '#d97706', // Orange d'accentuation (optimisé lisibilité)
            }
          }
        }
      }
    </script>
    <!-- Polices Google (Plus Jakarta Sans & Outfit) -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-display { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen relative selection:bg-brand selection:text-white">
    <!-- Fond texturé premium (Blobs & Noise) -->
    <div class="fixed inset-0 z-[0] pointer-events-none overflow-hidden">
        <!-- Taches de couleurs floues organiques -->
        <div class="absolute -top-[20%] -right-[10%] w-[70vw] h-[70vw] max-w-[800px] max-h-[800px] bg-brand/20 rounded-full blur-[100px] mix-blend-multiply"></div>
        <div class="absolute -bottom-[20%] -left-[10%] w-[60vw] h-[60vw] max-w-[600px] max-h-[600px] bg-accent/20 rounded-full blur-[100px] mix-blend-multiply"></div>
        
        <!-- Texture Grain de Papier (Très subtil) -->
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.8%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>
    </div>
    
    <!-- Header passe au-dessus du fond -->
    <header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-slate-200/50 relative">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="<?= BASE_URL ?>/" title="Accueil" class="group flex items-center text-2xl font-extrabold tracking-tight select-none">
                <span class="text-brand font-mono text-3xl font-light mr-2 group-hover:-translate-x-1.5 transition-transform duration-300">{</span>
                <img src="<?= BASE_URL ?>/assets/images/header-avatar.png" alt="Avatar E. P. SEWADE" class="w-10 h-10 rounded-full shadow-sm ring-2 ring-white group-hover:shadow-md group-hover:scale-105 transition-all duration-300">
                <span class="text-accent font-mono text-3xl font-light ml-2 group-hover:translate-x-1.5 transition-transform duration-300">}</span>
            </a>
            <nav class="space-x-4 md:space-x-6 font-semibold hidden md:flex" id="main-nav">
                <a href="<?= BASE_URL ?>/#profil" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Profil
                </a>
                <a href="<?= BASE_URL ?>/#competences" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    Expertises
                </a>
                <a href="<?= BASE_URL ?>/#experiences" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Parcours
                </a>
                <a href="<?= BASE_URL ?>/#projets" class="nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Portfolio
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
