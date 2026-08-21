<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Project;

/**
 * Accès aux données de la table `projects`.
 * Remplace les fonctions procédurales de projects_dal.php.
 */
final class ProjectRepository
{
    public function __construct(
        private readonly \PDO $pdo,
    ) {}

    /**
     * Récupère tous les projets, classés par featured puis par date.
     *
     * @return Project[]
     */
    public function findAll(): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM projects ORDER BY is_featured DESC, created_at DESC'
        );
        $stmt->execute();

        return array_map(
            fn(array $row) => Project::fromArray($row),
            $stmt->fetchAll(),
        );
    }

    /**
     * Récupère un projet par son identifiant.
     */
    public function findById(int $id): ?Project
    {
        $stmt = $this->pdo->prepare('SELECT * FROM projects WHERE id = :id');
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row !== false ? Project::fromArray($row) : null;
    }
}
