<?php
declare(strict_types=1);

// 1. Initialisation
require_once dirname(__DIR__) . '/config/env_loader.php';
load_env(dirname(__DIR__) . '/.env');
require_once dirname(__DIR__) . '/config/constants.php';

try {
    // Connexion brute initiale pour s'assurer de pouvoir créer la base si elle n'existe pas.
    $host = $_ENV['DB_HOST'] ?? '127.0.0.1';
    $port = $_ENV['DB_PORT'] ?? '3306';
    $user = $_ENV['DB_USER'] ?? 'root';
    $pass = $_ENV['DB_PASS'] ?? '';
    $dbName = $_ENV['DB_NAME'] ?? 'portfolio_v1';
    
    $pdoInit = new PDO("mysql:host=$host;port=$port;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    
    // Création de la base de données
    $pdoInit->exec("CREATE DATABASE IF NOT EXISTS `$dbName` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    $pdoInit->exec("USE `$dbName`");

    // 2. Création des tables
    $pdoInit->exec("
        CREATE TABLE IF NOT EXISTS admin (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            password_hash VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;
    ");

    $pdoInit->exec("
        CREATE TABLE IF NOT EXISTS projects (
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(100) NOT NULL,
            description TEXT NOT NULL,
            tech_stack VARCHAR(255) NOT NULL,
            github_url VARCHAR(255) NULL,
            live_demo_url VARCHAR(255) NULL,
            image_path VARCHAR(255) NULL,
            is_featured TINYINT(1) DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;
    ");

    $pdoInit->exec("
        CREATE TABLE IF NOT EXISTS messages (
            id INT AUTO_INCREMENT PRIMARY KEY,
            sender_name VARCHAR(100) NOT NULL,
            sender_email VARCHAR(150) NOT NULL,
            subject VARCHAR(150) NOT NULL,
            content TEXT NOT NULL,
            status ENUM('unread', 'read') DEFAULT 'unread',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;
    ");

    echo "<div style='font-family:sans-serif; padding:2rem;'>";
    echo "<h2 style='color:green;'>Initialisation de la base de données terminée avec succès.</h2>";

    // 3. Insertion de l'Admin par défaut (s'il n'existe pas)
    $stmt = $pdoInit->prepare("SELECT COUNT(*) FROM admin WHERE username = 'admin'");
    $stmt->execute();
    if ($stmt->fetchColumn() == 0) {
        $password = 'admin123'; // À changer en production !
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $insertAdmin = $pdoInit->prepare("INSERT INTO admin (username, password_hash) VALUES ('admin', ?)");
        $insertAdmin->execute([$hash]);
        echo "<p style='color:green;'>Compte administrateur créé : <strong>admin</strong> / <strong>$password</strong></p>";
    }

    // 4. Insertion des projets de démo (s'ils n'existent pas)
    $stmt = $pdoInit->query("SELECT COUNT(*) FROM projects");
    if ($stmt->fetchColumn() == 0) {
        $insertProject = $pdoInit->prepare("
            INSERT INTO projects (title, description, tech_stack, github_url, live_demo_url, is_featured) 
            VALUES (?, ?, ?, ?, ?, ?)
        ");
        
        // Projet KLG-Caisse (Featured)
        $insertProject->execute([
            'KLG-Caisse',
            'Migration d\'un logiciel de caisse vers une architecture moderne. Gestion des encaissements, facturation et statistiques.',
            'PHP 8.x, Tailwind CSS, MySQL',
            'https://github.com/patricksewade/klg-caisse',
            '#',
            1 // is_featured = true
        ]);
        
        // Autre projet
        $insertProject->execute([
            'Portfolio V1',
            'Conception d\'un portfolio MVC procédural, ultra-rapide et sécurisé sans aucun framework.',
            'PHP 8.3, MVC Procédural, Tailwind CSS',
            '#',
            '#',
            0
        ]);
        echo "<p style='color:green;'>Projets de démonstration insérés (dont KLG-Caisse).</p>";
    }

    echo "<p style='color:red;'><strong>IMPORTANT :</strong> Veuillez supprimer ce fichier (scripts/setup.php) une fois l'installation confirmée !</p>";
    echo "<a href='../public/index.php'>Aller à l'accueil du Portfolio</a>";
    echo "</div>";

} catch (\PDOException $e) {
    die("Erreur PDO lors de l'installation : " . $e->getMessage());
}
