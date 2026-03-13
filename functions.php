<?php
require_once 'config.php';

// Fonction pour vérifier si le mode maintenance est activé
function isMaintenanceMode() {
    try {
        $pdo = getDBConnection();
        $stmt = $pdo->prepare("SELECT setting_value FROM settings WHERE setting_key = 'maintenance_mode'");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result && $result['setting_value'] == '1';
    } catch (PDOException $e) {
        // En cas d'erreur de base de données, retourner false pour éviter de bloquer le site
        return false;
    }
}

// Fonction pour activer/désactiver le mode maintenance
function setMaintenanceMode($active) {
    try {
        $pdo = getDBConnection();
        $value = $active ? '1' : '0';
        $stmt = $pdo->prepare("UPDATE settings SET setting_value = ? WHERE setting_key = 'maintenance_mode'");
        $stmt->execute([$value]);
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
?>