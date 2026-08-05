<?php
declare(strict_types=1);

/**
 * Récupère tous les projets.
 */
function get_all_projects(PDO $pdo): array {
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY is_featured DESC, created_at DESC");
    return $stmt->fetchAll();
}

/**
 * Récupère le projet mis en avant (KLG-Caisse).
 */
function get_featured_project(PDO $pdo): ?array {
    $stmt = $pdo->query("SELECT * FROM projects WHERE is_featured = 1 ORDER BY created_at DESC LIMIT 1");
    $result = $stmt->fetch();
    return $result ?: null;
}

/**
 * Récupère un projet par son ID.
 */
function get_project_by_id(PDO $pdo, int $id): ?array {
    $stmt = $pdo->prepare("SELECT * FROM projects WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetch();
    return $result ?: null;
}
