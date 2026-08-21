<?php

declare(strict_types=1);

namespace App\Model;

/**
 * Représente un message de contact.
 * Les propriétés reflètent les colonnes de la table `messages`.
 */
final class Message
{
    public function __construct(
        private readonly int $id,
        private readonly string $senderName,
        private readonly string $senderEmail,
        private readonly string $subject,
        private readonly string $content,
        private readonly string $status,
        private readonly \DateTimeImmutable $createdAt,
    ) {}

    /**
     * @param array<string, mixed> $row
     */
    public static function fromArray(array $row): self
    {
        return new self(
            id: (int) $row['id'],
            senderName: (string) $row['sender_name'],
            senderEmail: (string) $row['sender_email'],
            subject: (string) $row['subject'],
            content: (string) $row['content'],
            status: (string) ($row['status'] ?? 'unread'),
            createdAt: new \DateTimeImmutable((string) ($row['created_at'] ?? 'now')),
        );
    }

    public function getId(): int { return $this->id; }
    public function getSenderName(): string { return $this->senderName; }
    public function getSenderEmail(): string { return $this->senderEmail; }
    public function getSubject(): string { return $this->subject; }
    public function getContent(): string { return $this->content; }
    public function getStatus(): string { return $this->status; }
    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function isRead(): bool { return $this->status === 'read'; }

    /**
     * Retourne le message sous forme de tableau associatif.
     * Utile pour la compatibilité avec les templates existants.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'id'           => $this->id,
            'sender_name'  => $this->senderName,
            'sender_email' => $this->senderEmail,
            'subject'      => $this->subject,
            'content'      => $this->content,
            'status'       => $this->status,
            'created_at'   => $this->createdAt->format('Y-m-d H:i:s'),
        ];
    }
}
