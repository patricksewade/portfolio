<?php
declare(strict_types=1);
require_once BASE_PATH . '/templates/layout/header.php';
?>

<div class="mb-8 flex flex-col md:flex-row md:justify-between md:items-center gap-4">
    <div>
        <h1 class="text-3xl font-extrabold text-slate-900">Tableau de bord</h1>
        <p class="text-slate-500 mt-1">Gérez votre portfolio et vos messages d'un seul coup d'œil.</p>
    </div>
    <span class="px-4 py-2 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-semibold border border-indigo-100 flex items-center shadow-sm">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
        Connecté : <?= e($admin_username) ?>
    </span>
</div>

<!-- KPI Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    <!-- Total Projets -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 flex items-center hover:shadow-md transition-shadow">
        <div class="w-12 h-12 rounded-full bg-blue-50 text-brand flex items-center justify-center mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-slate-500">Projets totaux</p>
            <p class="text-2xl font-bold text-slate-900"><?= $stats['total_projects'] ?? 0 ?></p>
        </div>
    </div>
    
    <!-- Projets Phares -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 flex items-center hover:shadow-md transition-shadow">
        <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-500 flex items-center justify-center mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-slate-500">Projets phares</p>
            <p class="text-2xl font-bold text-slate-900"><?= $stats['featured_projects'] ?? 0 ?></p>
        </div>
    </div>

    <!-- Total Messages -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 flex items-center hover:shadow-md transition-shadow">
        <div class="w-12 h-12 rounded-full bg-green-50 text-green-600 flex items-center justify-center mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-slate-500">Messages reçus</p>
            <p class="text-2xl font-bold text-slate-900"><?= $stats['total_messages'] ?? 0 ?></p>
        </div>
    </div>

    <!-- Messages non lus -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 flex items-center hover:shadow-md transition-shadow">
        <div class="w-12 h-12 rounded-full <?= ($stats['unread_messages'] ?? 0) > 0 ? 'bg-red-50 text-red-500' : 'bg-slate-50 text-slate-400' ?> flex items-center justify-center mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-slate-500">Messages non lus</p>
            <p class="text-2xl font-bold <?= ($stats['unread_messages'] ?? 0) > 0 ? 'text-red-600' : 'text-slate-900' ?>"><?= $stats['unread_messages'] ?? 0 ?></p>
        </div>
    </div>
</div>

<!-- Section Projets -->
<section class="mb-12">
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-6 border-b border-slate-200 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
            <h2 class="text-xl font-bold text-slate-900 flex items-center">
                <span class="w-2 h-6 bg-brand mr-3 rounded-full"></span>
                Projets & Réalisations
            </h2>
            <a href="<?= e(BASE_URL) ?>/admin/projects/create" class="px-5 py-2.5 bg-brand text-white text-sm font-semibold rounded-lg hover:bg-brand/90 transition-all shadow-sm flex items-center hover:shadow">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Ajouter un projet
            </a>
        </div>
        
        <?php if (empty($projects)): ?>
            <div class="p-10 text-center text-slate-500 italic bg-slate-50/50">
                Aucun projet n'a encore été ajouté à votre portfolio.
            </div>
        <?php else: ?>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm whitespace-nowrap">
                    <thead class="bg-slate-50 text-slate-600 border-b border-slate-200">
                        <tr>
                            <th class="px-6 py-4 font-semibold w-16 text-center">Visuel</th>
                            <th class="px-6 py-4 font-semibold">Titre & Technologies</th>
                            <th class="px-6 py-4 font-semibold w-1/3">Description</th>
                            <th class="px-6 py-4 font-semibold text-center w-24">Statut</th>
                            <th class="px-6 py-4 font-semibold text-right w-32">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php foreach ($projects as $project): ?>
                            <tr class="hover:bg-slate-50/80 transition-colors group">
                                <td class="px-6 py-3 text-center">
                                    <?php if (!empty($project['image_url'])): ?>
                                        <div class="w-12 h-12 rounded-lg bg-slate-100 border border-slate-200 overflow-hidden mx-auto">
                                            <img src="<?= BASE_URL . e($project['image_url']) ?>" alt="Logo" class="w-full h-full object-cover">
                                        </div>
                                    <?php else: ?>
                                        <div class="w-12 h-12 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400 mx-auto">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="font-bold text-slate-900 text-base mb-0.5"><?= e($project['title']) ?></div>
                                    <div class="text-xs text-slate-500 font-mono"><?= e($project['tech_stack'] ?: 'Non spécifié') ?></div>
                                </td>
                                <td class="px-6 py-3 text-slate-600 truncate max-w-[300px]" title="<?= e($project['description']) ?>">
                                    <?= e($project['description']) ?>
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <?php if ($project['is_featured']): ?>
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800 border border-amber-200">
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            Phare
                                        </span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200">Standard</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-3 text-right">
                                    <div class="flex items-center justify-end space-x-3 opacity-80 group-hover:opacity-100 transition-opacity">
                                        <a href="<?= e(BASE_URL) ?>/admin/projects/edit?id=<?= e((string)$project['id']) ?>" class="text-brand hover:text-brand/80 transition-colors p-1" title="Modifier">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        </a>
                                        
                                        <form action="<?= e(BASE_URL) ?>/admin/projects/delete" method="POST" class="inline-block m-0" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ? Cette action est irréversible.');">
                                            <input type="hidden" name="csrf_token" value="<?= e($csrf_token ?? '') ?>">
                                            <input type="hidden" name="id" value="<?= e((string)$project['id']) ?>">
                                            <button type="submit" class="text-red-500 hover:text-red-700 transition-colors p-1" title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Section Messages -->
<section>
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-6 border-b border-slate-200 flex justify-between items-center bg-slate-50/50">
            <h2 class="text-xl font-bold text-slate-900 flex items-center">
                <span class="w-2 h-6 bg-green-500 mr-3 rounded-full"></span>
                Boîte de réception
            </h2>
        </div>
        
        <?php if (empty($messages)): ?>
            <div class="p-10 text-center text-slate-500 italic">
                Votre boîte de réception est vide.
            </div>
        <?php else: ?>
            <div class="divide-y divide-slate-100">
                <?php foreach ($messages as $msg): ?>
                    <?php $isUnread = ($msg['status'] === 'unread'); ?>
                    <div class="p-6 hover:bg-slate-50/80 transition-colors <?= $isUnread ? 'bg-indigo-50/30' : '' ?>">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4">
                            <div class="flex-grow">
                                <div class="flex items-center gap-3 mb-1">
                                    <h3 class="font-bold text-lg <?= $isUnread ? 'text-slate-900' : 'text-slate-700' ?>"><?= e($msg['subject']) ?></h3>
                                    <?php if ($isUnread): ?>
                                        <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-brand text-white uppercase tracking-wider">Nouveau</span>
                                    <?php endif; ?>
                                </div>
                                <div class="text-sm font-medium <?= $isUnread ? 'text-brand' : 'text-slate-500' ?> mb-3 flex items-center gap-2">
                                    <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    <?= e($msg['sender_name']) ?> 
                                    <span class="text-slate-400 font-normal">&lt;<?= e($msg['sender_email']) ?>&gt;</span>
                                </div>
                                <div class="text-slate-600 bg-white p-4 rounded-xl text-sm whitespace-pre-wrap border border-slate-200/60 shadow-sm"><?= e($msg['content']) ?></div>
                            </div>
                            
                            <div class="flex flex-row md:flex-col items-center md:items-end justify-between md:justify-start gap-3 min-w-[140px]">
                                <span class="text-xs text-slate-500 font-medium bg-white px-2.5 py-1 rounded border border-slate-200">
                                    <?= date('d/m/Y à H:i', strtotime($msg['created_at'])) ?>
                                </span>
                                
                                <?php if ($isUnread): ?>
                                    <form action="<?= e(BASE_URL) ?>/admin/message/read" method="POST">
                                        <input type="hidden" name="csrf_token" value="<?= e($csrf_token ?? '') ?>">
                                        <input type="hidden" name="message_id" value="<?= e((string)$msg['id']) ?>">
                                        <button type="submit" class="text-xs font-semibold text-brand hover:text-brand/80 flex items-center bg-brand/5 hover:bg-brand/10 px-3 py-1.5 rounded transition-colors">
                                            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Marquer lu
                                        </button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once BASE_PATH . '/templates/layout/footer.php'; ?>
