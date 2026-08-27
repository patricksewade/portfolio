<?php
declare(strict_types=1);
$page_title = $page_title ?? "Mentions Légales | Ernest Patrick SEWADE";
require_once BASE_PATH . '/templates/layout/header.php';
?>

<div class="max-w-4xl mx-auto px-4 py-8 md:py-12 animate-fade-in">
    
    <!-- Fil d'ariane & En-tête -->
    <div class="mb-10">
        <nav class="flex items-center gap-2 text-xs font-semibold text-slate-400 uppercase tracking-wider mb-4">
            <a href="<?= BASE_URL ?>/" class="hover:text-brand transition-colors flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                Accueil
            </a>
            <span>/</span>
            <span class="text-slate-600">Mentions Légales</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-6 border-b border-slate-200">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold font-display text-slate-900 tracking-tight">Mentions Légales</h1>
                <p class="text-slate-500 text-sm md:text-base mt-2">Transparence, conformité réglementaire et protection de votre vie privée.</p>
            </div>
            <div class="flex items-center gap-2 self-start md:self-auto text-xs font-bold text-slate-500 bg-white px-3 py-1.5 rounded-full border border-slate-200 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                Conforme RGPD
            </div>
        </div>
    </div>

    <!-- Sections des Mentions Légales -->
    <div class="space-y-6">
        
        <!-- 1. Éditeur du site -->
        <section class="bg-white rounded-2xl border border-slate-200/80 p-6 md:p-8 shadow-sm hover:shadow-md transition-all duration-300">
            <div class="flex items-center gap-3.5 mb-6">
                <div class="w-10 h-10 rounded-xl bg-brand/10 text-brand flex items-center justify-center flex-shrink-0 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold font-display text-slate-900">1. Éditeur du Site</h2>
                    <p class="text-xs text-slate-400">Responsable de la publication et de la conception</p>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-4 text-sm bg-slate-50/60 p-5 rounded-xl border border-slate-100">
                <div>
                    <span class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1">Identité</span>
                    <strong class="text-slate-800 font-semibold text-base">Ernest Patrick SEWADE</strong>
                    <span class="block text-slate-500 text-xs mt-0.5">Développeur Web Backend PHP & Symfony</span>
                </div>
                <div>
                    <span class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1">Directeur de la publication</span>
                    <span class="text-slate-800 font-medium">Ernest Patrick SEWADE</span>
                </div>
                <div>
                    <span class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1">Contact</span>
                    <a href="<?= BASE_URL ?>/#contact" class="text-brand hover:text-brand/80 font-medium hover:underline inline-flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        Formulaire de contact du site
                    </a>
                </div>
                <div>
                    <span class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1">Activité</span>
                    <span class="text-slate-700">Prestation de services informatiques & développement web</span>
                </div>
            </div>
        </section>

        <!-- 2. Hébergement -->
        <section class="bg-white rounded-2xl border border-slate-200/80 p-6 md:p-8 shadow-sm hover:shadow-md transition-all duration-300">
            <div class="flex items-center gap-3.5 mb-6">
                <div class="w-10 h-10 rounded-xl bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold font-display text-slate-900">2. Hébergement</h2>
                    <p class="text-xs text-slate-400">Infrastructures et serveurs de déploiement</p>
                </div>
            </div>

            <div class="text-sm text-slate-600 space-y-3 leading-relaxed">
                <p>Le site est hébergé sur les infrastructures de :</p>
                <div class="bg-slate-50/60 p-5 rounded-xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <strong class="text-slate-800 text-base font-semibold block">ByetHost / iFastNet Ltd</strong>
                        <span class="text-slate-500 text-xs">Suite 48, 88-90 Hatton Garden, London, EC1N 8PN, Royaume-Uni</span>
                    </div>
                    <a href="https://byet.host/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-4 py-2 bg-white text-slate-700 hover:text-brand hover:border-brand/40 text-xs font-bold rounded-lg border border-slate-200 shadow-sm transition-all self-start sm:self-auto">
                        <span>Visiter l'hébergeur</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- 3. Propriété intellectuelle -->
        <section class="bg-white rounded-2xl border border-slate-200/80 p-6 md:p-8 shadow-sm hover:shadow-md transition-all duration-300">
            <div class="flex items-center gap-3.5 mb-6">
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center flex-shrink-0 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold font-display text-slate-900">3. Propriété Intellectuelle</h2>
                    <p class="text-xs text-slate-400">Droits d'auteur, code source et contenus graphiques</p>
                </div>
            </div>

            <div class="text-sm text-slate-600 space-y-3 leading-relaxed">
                <p>
                    L'ensemble des éléments constituant ce site (textes, graphismes, logiciels, photographies, images, vidéos, sons, plans, noms, logos, marques, créations et œuvres protégeables diverses, bases de données, etc.) ainsi que le site lui-même, relèvent des législations locales et internationales sur le droit d'auteur et la propriété intellectuelle.
                </p>
                <p>
                    Ces éléments sont la propriété exclusive d'<strong>Ernest Patrick SEWADE</strong>, à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs identifiés.
                </p>
                <div class="p-4 bg-amber-50/70 border border-amber-200/60 rounded-xl text-amber-900 text-xs font-medium flex items-start gap-3">
                    <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    <span>Toute reproduction, représentation, modification, publication ou adaptation totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est formellement interdite sans autorisation écrite préalable.</span>
                </div>
            </div>
        </section>

        <!-- 4. Protection des données & RGPD -->
        <section class="bg-white rounded-2xl border border-slate-200/80 p-6 md:p-8 shadow-sm hover:shadow-md transition-all duration-300">
            <div class="flex items-center gap-3.5 mb-6">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold font-display text-slate-900">4. Protection des Données Personnelles (RGPD)</h2>
                    <p class="text-xs text-slate-400">Respect de la vie privée et exercice de vos droits</p>
                </div>
            </div>

            <div class="text-sm text-slate-600 space-y-4 leading-relaxed">
                <p>
                    Conformément au Règlement Général sur la Protection des Données (RGPD - Règlement UE 2016/679) et à la loi « Informatique et Libertés » du 6 janvier 1978 modifiée, les informations collectées sur ce portfolio respectent les principes suivants :
                </p>
                
                <div class="grid sm:grid-cols-2 gap-3 pt-1">
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                        <strong class="text-slate-800 text-xs uppercase tracking-wider block font-bold mb-1">Finalité du traitement</strong>
                        <p class="text-xs text-slate-600">Les données saisies dans le formulaire de contact (nom, adresse email, message) sont uniquement destinées à répondre à vos demandes professionnelles.</p>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                        <strong class="text-slate-800 text-xs uppercase tracking-wider block font-bold mb-1">Non-divulgation</strong>
                        <p class="text-xs text-slate-600">Aucune donnée personnelle n'est vendue, louée ou cédée à des tiers, ni utilisée à des fins de prospection commerciale non sollicitée.</p>
                    </div>
                </div>

                <div class="bg-emerald-50/50 p-5 rounded-xl border border-emerald-100 text-xs text-slate-700 space-y-2">
                    <strong class="text-emerald-900 font-bold block text-sm">Exercice de vos droits</strong>
                    <p>Vous disposez d'un droit d'accès, de rectification, de portabilité, de limitation et d'effacement de vos données personnelles.</p>
                    <p>Pour faire valoir ces droits, contactez simplement l'éditeur via le <a href="<?= BASE_URL ?>/#contact" class="text-brand font-bold underline">formulaire de contact</a> du site.</p>
                </div>
            </div>
        </section>

        <!-- 5. Cookies -->
        <section class="bg-white rounded-2xl border border-slate-200/80 p-6 md:p-8 shadow-sm hover:shadow-md transition-all duration-300">
            <div class="flex items-center gap-3.5 mb-6">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-brand flex items-center justify-center flex-shrink-0 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold font-display text-slate-900">5. Politique relative aux Cookies</h2>
                    <p class="text-xs text-slate-400">Navigation sereine et respectueuse</p>
                </div>
            </div>

            <div class="text-sm text-slate-600 space-y-3 leading-relaxed">
                <p>
                    Ce site est conçu pour être respectueux de la confidentialité de ses visiteurs :
                </p>
                <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 flex flex-col sm:flex-row items-start sm:items-center gap-3 text-xs text-slate-700">
                    <span class="px-2.5 py-1 rounded-lg bg-emerald-100 text-emerald-800 font-bold whitespace-nowrap">0 Traceur tiers</span>
                    <span>Aucun cookie publicitaire, d'analyse comportementale ou de réseau social n'est déposé sur votre terminal lors de votre visite. Seuls des cookies techniques strictement nécessaires au fonctionnement peuvent être employés.</span>
                </div>
            </div>
        </section>

    </div>

    <!-- Retour Accueil & Contact -->
    <div class="mt-12 pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
        <a href="<?= BASE_URL ?>/" class="inline-flex items-center gap-2 px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-semibold rounded-xl transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Retour à l'accueil
        </a>
        <a href="<?= BASE_URL ?>/#contact" class="inline-flex items-center gap-2 px-5 py-2.5 bg-brand text-white hover:bg-brand/90 text-sm font-semibold rounded-xl shadow-sm hover:shadow transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            Me contacter
        </a>
    </div>

</div>

<?php require_once BASE_PATH . '/templates/layout/footer.php'; ?>
