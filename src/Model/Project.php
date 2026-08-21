<?php

declare(strict_types=1);

namespace App\Model;

/**
 * Représente un projet du portfolio.
 * Les propriétés reflètent les colonnes de la table `projects`.
 */
final class Project
{
    public function __construct(
        private readonly int $id,
        private readonly string $title,
        private readonly string $description,
        private readonly string $techStack,
        private readonly bool $isFeatured,
        private readonly string $githubUrl,
        private readonly string $liveDemoUrl,
        private readonly string $imageUrl,
        private readonly \DateTimeImmutable $createdAt,
    ) {}

    /**
     * Crée une instance depuis un tableau associatif (issu de PDO::FETCH_ASSOC).
     *
     * @param array<string, mixed> $row
     */
    public static function fromArray(array $row): self
    {
        return new self(
            id: (int) $row['id'],
            title: (string) $row['title'],
            description: (string) ($row['description'] ?? ''),
            techStack: (string) ($row['tech_stack'] ?? ''),
            isFeatured: (bool) $row['is_featured'],
            githubUrl: (string) ($row['github_url'] ?? ''),
            liveDemoUrl: (string) ($row['live_demo_url'] ?? ''),
            imageUrl: (string) ($row['image_url'] ?? ''),
            createdAt: new \DateTimeImmutable((string) ($row['created_at'] ?? 'now')),
        );
    }

    public function getId(): int { return $this->id; }
    public function getTitle(): string { return $this->title; }
    public function getDescription(): string { return $this->description; }
    public function getTechStack(): string { return $this->techStack; }
    public function isFeatured(): bool { return $this->isFeatured; }
    public function getGithubUrl(): string { return $this->githubUrl; }
    public function getLiveDemoUrl(): string { return $this->liveDemoUrl; }
    public function getImageUrl(): string { return $this->imageUrl; }
    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }

    /**
     * Retourne le projet sous forme de tableau associatif.
     * Utile pour la compatibilité avec les templates existants.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'id'            => $this->id,
            'title'         => $this->title,
            'description'   => $this->description,
            'tech_stack    ' => $this->techStack,
            'is_featured'   => $this->isFeatured,
            'github_url'    => $this->githubUrl,
            'live_demo_url' => $this->liveDemoUrl,
            'image_url'     => $this->imageUrl,
            'created_at'    => $this->createdAt->format('Y-m-d H:i:s'),
        ];
    }
}
