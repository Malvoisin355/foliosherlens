<?php
require_once 'config.php';

try {
    // Connexion sans base de données pour créer la DB
    $pdo = new PDO("mysql:host=" . DB_HOST . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Créer la base de données si elle n'existe pas
    $pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
    echo "Base de données créée ou déjà existante.<br>";

    // Se connecter à la base de données
    $pdo->exec("USE " . DB_NAME);

    // Créer la table des paramètres si elle n'existe pas
    $sql = "CREATE TABLE IF NOT EXISTS settings (
        id INT AUTO_INCREMENT PRIMARY KEY,
        setting_key VARCHAR(255) UNIQUE NOT NULL,
        setting_value TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
    echo "Table settings créée ou déjà existante.<br>";

    // Insérer le paramètre de maintenance si pas présent
    $stmt = $pdo->prepare("INSERT IGNORE INTO settings (setting_key, setting_value) VALUES ('maintenance_mode', '0')");
    $stmt->execute();
    echo "Paramètre maintenance_mode inséré ou déjà présent.<br>";

    echo "Configuration terminée avec succès !";

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>