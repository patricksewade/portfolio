<?php
declare(strict_types=1);
require_once BASE_PATH . '/templates/layout/header.php';
?>

<div class="mb-10 flex flex-col md:flex-row md:justify-between md:items-center gap-4">
    <h1 class="text-3xl font-extrabold text-slate-900">Dashboard</h1>
    <span class="px-4 py-2 bg-indigo-100 text-indigo-800 rounded-lg text-sm font-semibold border border-indigo-200">
        🔐 Connecté en tant que <?= e($_SESSION['admin_username']) ?>
    </span>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
    <!-- Section Messages -->
    <section>
        <h2 class="text-xl font-bold mb-6 text-slate-800 flex items-center">
            <span class="w-2 h-6 bg-indigo-600 mr-3 rounded-full"></span>
            Messages Reçus
        </h2>
        
        <?php if (empty($messages)): ?>
            <div class="bg-white p-8 rounded-2xl border border-dashed border-slate-300 text-center">
                <p class="text-slate-500 italic">Aucun message pour le moment.</p>
            </div>
        <?php else: ?>
            <div class="space-y-4">
                <?php foreach ($messages as $msg): ?>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 hover:border-indigo-300 transition-colors">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="font-bold text-lg text-slate-900"><?= e($msg['subject']) ?></h3>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded font-medium">
                                <?= date('d/m/Y H:i', strtotime($msg['created_at'])) ?>
                            </span>
                        </div>
                        <div class="text-sm font-semibold text-indigo-600 mb-4">
                            De : <?= e($msg['sender_name']) ?> <span class="text-slate-400 font-normal">&lt;<?= e($msg['sender_email']) ?>&gt;</span>
                        </div>
                        <p class="text-slate-700 bg-slate-50 p-4 rounded-xl text-sm whitespace-pre-wrap border border-slate-100"><?= e($msg['content']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>

    <!-- Section Projets (Aperçu) -->
    <section>
        <h2 class="text-xl font-bold mb-6 text-slate-800 flex items-center">
            <span class="w-2 h-6 bg-blue-600 mr-3 rounded-full"></span>
            Projets en Base
        </h2>
        
        <?php if (empty($projects)): ?>
            <div class="bg-white p-8 rounded-2xl border border-dashed border-slate-300 text-center">
                <p class="text-slate-500 italic">Aucun projet configuré.</p>
            </div>
        <?php else: ?>
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <table class="w-full text-left text-sm">
                    <thead class="bg-slate-50 text-slate-600 border-b border-slate-200">
                        <tr>
                            <th class="px-6 py-4 font-semibold">Titre du projet</th>
                            <th class="px-6 py-4 font-semibold text-center">Mise en avant</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php foreach ($projects as $project): ?>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900"><?= e($project['title']) ?></td>
                                <td class="px-6 py-4 text-center">
                                    <?php if ($project['is_featured']): ?>
                                        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-md text-xs font-bold">Oui</span>
                                    <?php else: ?>
                                        <span class="text-slate-300">-</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </section>
</div>

<?php require_once BASE_PATH . '/templates/layout/footer.php'; ?>
