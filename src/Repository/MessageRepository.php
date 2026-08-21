<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Message;

/**
 * Accès aux données de la table `messages`.
 * Remplace les fonctions procédurales de messages_dal.php.
 */
final class MessageRepository
{
    public function __construct(
        private readonly \PDO $pdo,
    ) {}

    /**
     * Insère un nouveau message de contact en base de données.
     */
    public function insert(string $name, string $email, string $subject, string $content): bool
    {
        try {
            $stmt = $this->pdo->prepare(
                'INSERT INTO messages (sender_name, sender_email, subject, content)
                 VALUES (:name, :email, :subject, :content)'
            );

            return $stmt->execute([
                'name'    => $name,
                'email'   => $email,
                'subject' => $subject,
                'content' => $content,
            ]);
        } catch (\PDOException $e) {
            error_log("Erreur lors de l'insertion d'un message : " . $e->getMessage());
            return false;
        }
    }

    /**
     * Récupère tous les messages, du plus récent au plus ancien.
     *
     * @return Message[]
     */
    public function findAll(): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM messages ORDER BY created_at DESC'
        );
        $stmt->execute();

        return array_map(
            fn(array $row) => Message::fromArray($row),
            $stmt->fetchAll(),
        );
    }

    /**
     * Marque un message comme lu.
     */
    public function markAsRead(int $id): bool
    {
        $stmt = $this->pdo->prepare(
            "UPDATE messages SET status = 'read' WHERE id = :id"
        );
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
