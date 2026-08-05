<?php
declare(strict_types=1);

/**
 * Insère un nouveau message de contact.
 */
function insert_message(PDO $pdo, array $data): bool {
    try {
        $stmt = $pdo->prepare("
            INSERT INTO messages (sender_name, sender_email, subject, content) 
            VALUES (:name, :email, :subject, :content)
        ");
        
        return $stmt->execute([
            'name'    => $data['name'],
            'email'   => $data['email'],
            'subject' => $data['subject'],
            'content' => $data['content']
        ]);
    } catch (\PDOException $e) {
        error_log("Erreur lors de l'insertion d'un message : " . $e->getMessage());
        return false;
    }
}

/**
 * Récupère tous les messages pour le dashboard admin.
 */
function get_all_messages(PDO $pdo): array {
    $stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
    return $stmt->fetchAll();
}

/**
 * Marque un message comme lu.
 */
function mark_message_as_read(PDO $pdo, int $id): bool {
    $stmt = $pdo->prepare("UPDATE messages SET status = 'read' WHERE id = :id");
    return $stmt->execute(['id' => $id]);
}
