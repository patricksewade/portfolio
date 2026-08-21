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

    /**
     * Ajoute un nouveau projet.
     */
    public function insert(Project $project): void
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO projects (title, description, tech_stack, is_featured, github_url, live_demo_url, image_url, created_at) 
             VALUES (:title, :description, :tech_stack, :is_featured, :github_url, :live_demo_url, :image_url, :created_at)'
        );
        
        $stmt->bindValue(':title', $project->getTitle());
        $stmt->bindValue(':description', $project->getDescription());
        $stmt->bindValue(':tech_stack', $project->getTechStack());
        $stmt->bindValue(':is_featured', $project->isFeatured(), \PDO::PARAM_BOOL);
        $stmt->bindValue(':github_url', $project->getGithubUrl());
        $stmt->bindValue(':live_demo_url', $project->getLiveDemoUrl());
        $stmt->bindValue(':image_url', $project->getImageUrl());
        $stmt->bindValue(':created_at', $project->getCreatedAt()->format('Y-m-d H:i:s'));
        
        $stmt->execute();
    }

    /**
     * Met à jour un projet existant.
     */
    public function update(Project $project): void
    {
        $stmt = $this->pdo->prepare(
            'UPDATE projects 
             SET title = :title, 
                 description = :description, 
                 tech_stack = :tech_stack, 
                 is_featured = :is_featured, 
                 github_url = :github_url, 
                 live_demo_url = :live_demo_url, 
                 image_url = :image_url
             WHERE id = :id'
        );
        
        $stmt->bindValue(':id', $project->getId(), \PDO::PARAM_INT);
        $stmt->bindValue(':title', $project->getTitle());
        $stmt->bindValue(':description', $project->getDescription());
        $stmt->bindValue(':tech_stack', $project->getTechStack());
        $stmt->bindValue(':is_featured', $project->isFeatured(), \PDO::PARAM_BOOL);
        $stmt->bindValue(':github_url', $project->getGithubUrl());
        $stmt->bindValue(':live_demo_url', $project->getLiveDemoUrl());
        $stmt->bindValue(':image_url', $project->getImageUrl());
        
        $stmt->execute();
    }

    /**
     * Supprime un projet par son identifiant.
     */
    public function delete(int $id): void
    {
        $stmt = $this->pdo->prepare('DELETE FROM projects WHERE id = :id');
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
    }
}
