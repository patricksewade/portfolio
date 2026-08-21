<?php

declare(strict_types=1);

namespace App\Model;

/**
 * Représente un compte administrateur.
 * Note : Le hash du mot de passe ne doit JAMAIS être exposé en dehors de la couche d'authentification.
 */
final class Admin
{
    public function __construct(
        private readonly int $id,
        private readonly string $username,
        private readonly string $passwordHash,
    ) {}

    /**
     * @param array<string, mixed> $row
     */
    public static function fromArray(array $row): self
    {
        return new self(
            id: (int) $row['id'],
            username: (string) $row['username'],
            passwordHash: (string) $row['password_hash'],
        );
    }

    public function getId(): int { return $this->id; }
    public function getUsername(): string { return $this->username; }

    /**
     * Vérifie si le mot de passe soumis correspond au hash.
     * Seule méthode autorisée à utiliser le hash (encapsulation totale).
     */
    public function verifyPassword(string $plainPassword): bool
    {
        return password_verify($plainPassword, $this->passwordHash);
    }

    /**
     * Le hash ne doit jamais être sérialisé ni transmis à une vue.
     * @return array<string, mixed>
     */
    public function __serialize(): array
    {
        return ['id' => $this->id, 'username' => $this->username];
    }

    /** @param array<string, mixed> $data */
    public function __unserialize(array $data): void
    {
        // Non implémenté : l'Admin n'est pas désérialisé depuis la session, il est rechargé depuis la BDD.
    }
}
